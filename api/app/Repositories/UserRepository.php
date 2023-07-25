<?php

namespace App\Repositories;

use App\Contracts\WeatherApi;
use App\Interfaces\UserRepositoryInterface;
use App\Models\User;
use App\Services\ForecastCache;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class UserRepository implements UserRepositoryInterface
{
    public function __construct(protected WeatherApi $weatherApi)
    {
    }

    public function users(?string $query): Collection
    {
        if (ForecastCache::isStale()) {
            $this->updateUserWeatherData();
        }
        return $this->baseQuery($query)->get();
    }

    public function paginate(?string $query): LengthAwarePaginator
    {
        if (ForecastCache::isStale()) {
            $this->updateUserWeatherData();
        }
        return $this->baseQuery($query)->paginate(10);
    }

    private function baseQuery(?string $term): Builder
    {
        return User::filterBy($term);
    }

    private function updateUserWeatherData(): void
    {
        ForecastCache::forget();
        $timestamp = now()->subMinutes(10)->timestamp;

        User::lazyById()->each(function ($user) {
            $weatherForecast = $this->weatherApi->forecast($user->forecastData());
            User::where('id', $user->id)
                ->update(['weather' => $weatherForecast]);
        });

        ForecastCache::update($timestamp);
    }
}
