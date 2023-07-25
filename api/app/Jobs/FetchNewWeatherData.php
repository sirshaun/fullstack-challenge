<?php

namespace App\Jobs;

use App\Contracts\WeatherApi;
use App\Events\NewWeatherForecast;
use App\Exceptions\ApiServiceUnavailableException;
use App\Models\User;
use App\Services\ForecastCache;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class FetchNewWeatherData implements ShouldQueue, ShouldBeUnique
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * The number of times the job may be attempted.
     *
     * @var int
     */
    public $tries = 9;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
    }

    /**
     * Execute the job.
     */
    public function handle(WeatherApi $weatherApi): void
    {
        $lastUpdated = ForecastCache::get(asInteger: false);
        if ($lastUpdated->lte(now()->subRealHour())) {
            ForecastCache::forget();
            try {
                $timestamp = now()->subMinutes(10)->timestamp;

                User::lazyById()->each(function ($user) use ($weatherApi) {
                    $weatherForecast = $weatherApi->forecast($user->forecastData());
                    User::where('id', $user->id)
                        ->update(['weather' => $weatherForecast]);
                });

                ForecastCache::update($timestamp);
                // TODO: use pusher to alert frontend
                // new forecast data is available
                broadcast(new NewWeatherForecast);
            } catch (ApiServiceUnavailableException) {
                $this->release(now()->addRealMinute());
            }
        }
    }
}
