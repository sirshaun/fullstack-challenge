<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Facades\Cache;

class UserCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection->map(function ($user) {
                return [
                    'id'         => $user->id,
                    'name'       => $user->name,
                    'email'      => $user->email,
                    'latitude'   => $user->latitude,
                    'longitude'  => $user->longitude,
                    'weather'    => [
                        'description' => str($user->weather['weather'][0]['description'])->title(),
                        'humidity'    => $user->weather['main']['humidity'],
                        'temperature' => $user->weather['main']['temp'],
                    ]
                ];
            }),
        ];
    }
}
