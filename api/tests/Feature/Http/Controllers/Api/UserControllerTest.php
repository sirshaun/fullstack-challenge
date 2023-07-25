<?php

use App\Contracts\WeatherApi;
use App\Exceptions\MissingApiKeyException;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Mockery\MockInterface;
use Tests\Stubs\HttpResponses\OpenWeatherApi;

beforeEach(fn () => User::factory(10)->createQuietly());

it('returns user collection', function () {
    Http::fake([
        'api.openweathermap.org/*' => OpenWeatherApi::current(),
    ]);

    $this->json('get', '/user')
        ->assertStatus(Response::HTTP_OK)
        ->assertJsonStructure(
            [
                'data' => [
                    '*' => [
                        'name', 'email', 'latitude',
                        'longitude', 'weather',
                    ]
                ]
            ]
        );
});

test('returns "bad gateway" response when weather api is not reachable', function () {
    Http::fake([
        'api.openweathermap.org/*' => Http::response(null, 500),
    ]);

    $this->json('get', '/user')
        ->assertStatus(Response::HTTP_BAD_GATEWAY);
});

test('returns "server error" response when weather api key is not set', function () {
    $this->mock(
        WeatherApi::class,
        function (MockInterface $mock) {
            $mock->shouldReceive('getApiKey')
                ->andThrow(MissingApiKeyException::class);
        }
    );

    $this->json('get', '/user')
        ->assertStatus(Response::HTTP_INTERNAL_SERVER_ERROR);
});

it('returns user resource', function () {
    $user = User::factory()->createOneQuietly([
        'weather' => OpenWeatherApi::current(),
    ]);
    $this->json('get', "/user/{$user->id}")
        ->assertStatus(Response::HTTP_OK)
        ->assertJsonStructure(
            [
                'data' => [
                    'name', 'email', 'latitude',
                    'longitude', 'weather',
                ]
            ]
        );
});
