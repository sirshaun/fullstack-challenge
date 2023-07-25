<?php

namespace App\Contracts;

use App\Data\FetchForecastData;

interface WeatherApi
{
    /**
     * Fetch hourly four day forecast
     * for a specified location.
     *
     * @param FetchForecastData $forecastLocation
     * @return array
     * @throws App\Exceptions\ApiServiceUnavailableException|App\Exceptions\MissingApiKeyException
     */
    public function forecast(FetchForecastData $forecastLocation): array;
}
