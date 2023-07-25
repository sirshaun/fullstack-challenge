<?php

use App\Events\NewWeatherForecast;
use App\Jobs\FetchNewWeatherData;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Event;
use Mockery\MockInterface;
use Tests\Stubs\HttpResponses\OpenWeatherApi;

test('it will fetch new data from weather api if the forecast is stale', function () {
    $this->mock(
        WeatherApi::class,
        fn (MockInterface $mock)  => $mock->shouldReceive('forecast')
            ->andReturn(OpenWeatherApi::current())
    );

    Event::fake([NewWeatherForecast::class]);
    $user = User::factory()->createQuietly();
    Cache::add('last_update', now()->subRealHour()->timestamp);

    FetchNewWeatherData::dispatch();

    expect($user->refresh())->weather->not->toBeEmpty();
    Event::assertDispatched(NewWeatherForecast::class);
});

test('does not fetch data from weather api if the forecast is not yet "stale"', function () {
    Event::fake([NewWeatherForecast::class]);
    $this->mock(
        WeatherApi::class,
        fn (MockInterface $mock) => $mock->shouldNotReceive('forecast')
    );
    Cache::add('last_update', now()->subRealMinutes(35)->timestamp);

    FetchNewWeatherData::dispatch();
    Event::assertNotDispatched(NewWeatherForecast::class);
});
