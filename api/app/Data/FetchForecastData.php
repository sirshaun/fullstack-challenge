<?php

namespace App\Data;

final class FetchForecastData
{
    public function __construct(
        private string $latitude,
        private string $longitude,
    ) {
    }

    public function getLatitude(): string
    {
        return $this->latitude;
    }

    public function getLongitude(): string
    {
        return $this->longitude;
    }

    public function toArray(): array
    {
        return [
            'latitude' => $this->getLatitude(),
            'longitude' => $this->getLongitude(),
        ];
    }

    public function toString(): string
    {
        return "lat={$this->getLatitude()}&lon={$this->getLongitude()}";
    }
}
