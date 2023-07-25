<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name'        => $this->name,
            'email'       => $this->email,
            'latitude'    => $this->latitude,
            'longitude'   => $this->longitude,
            'coordinates' => "({$this->latitude}, {$this->longitude})",
            'weather'     => [
                'description'        => str($this->weather['weather'][0]['description'])->title(),
                'humidity'           => $this->weather['main']['humidity'],
                'temperature'        => $this->weather['main']['temp'],
                'actual_temperature' => $this->weather['main']['feels_like'],
                'min_temperature'    => $this->weather['main']['temp_min'],
                'max_temperature'    => $this->weather['main']['temp_max'],
                'pressure'           => $this->weather['main']['pressure'],
                'wind_degrees'       => $this->weather['wind']['deg'],
                'wind_speed'         => $this->weather['wind']['speed'],
                'wind_gust'          => $this->weather['wind']['gust'],
                'clouds'             => $this->weather['clouds']['all'],
                'clouds'             => $this->weather['clouds']['all'],
                'sunrise'            => Carbon::createFromTimestamp($this->weather['sys']['sunrise'])->toTimeString(),
                'sunset'             => Carbon::createFromTimestamp($this->weather['sys']['sunset'])->toTimeString(),
                'timezone'           => $this->weather['timezone'],
            ]
        ];
    }
}
