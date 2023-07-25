<?php

namespace App\Services\Packages;

use App\Contracts\WeatherApi;
use App\Data\FetchForecastData;
use App\Exceptions\ApiServiceUnavailableException;
use App\Exceptions\MissingApiKeyException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class OpenWeatherApi implements WeatherApi
{
    const ENDPOINT = 'https://api.openweathermap.org/data/2.5/weather';

    public function forecast(FetchForecastData $forecastLocation): array
    {
        $uri = $this->getUri($forecastLocation->toString());

        $response = Http::get($uri);
        if ($response->successful()) {
            return $response->json();
        } elseif ($response->serverError()) {
            throw new ApiServiceUnavailableException('Weather API is currently unavailable.');
        } elseif ($response->unauthorized()) {
            Log::critical('Weather API failed because of api key.');
            throw new ApiServiceUnavailableException('Weather API is currently unavailable.');
        } elseif ($response->tooManyRequests()) {
            throw new ApiServiceUnavailableException('Quota limit reached!');
        }
    }

    private function getUri(string $location): string
    {
        $apiKey = $this->getApiKey();

        return self::ENDPOINT . '?' . $location . '&appid=' . $apiKey;
    }

    private function getApiKey(): string
    {
        $apiKey = config('app.weather_api_key');
        if (is_null($apiKey)) {
            throw new MissingApiKeyException('Weather API key is not set!');
        }

        return $apiKey;
    }
}
