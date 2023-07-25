<?php

use \App\Services\ForecastCache;
use \Illuminate\Support\Facades\Cache;

it('gets stored value', function () {
    $timestamp = now()->timestamp;
    Cache::add('last_update', $timestamp);
    Cache::shouldReceive('get')->once()->andReturn($timestamp);

    ForecastCache::get($timestamp);
});

it('deletes stored value', function () {
    Cache::add('last_update', now()->timestamp);
    Cache::shouldReceive('forget')->once();

    ForecastCache::forget();
});

it('stores a new value', function () {
    $timestamp = now()->timestamp;
    Cache::shouldReceive('forget')->once();
    Cache::shouldReceive('add')->once()->andSet('last_update', $timestamp);

    ForecastCache::update($timestamp);
});

it('checks if the cache is stale - not stale', function () {
    $timestamp = now()->timestamp;
    Cache::add('last_update', $timestamp);
    Cache::shouldReceive('get')->once()->andReturn($timestamp);

    expect(ForecastCache::isStale())->toBeFalse();
});

it('checks if the cache is stale - stale', function () {
    $timestamp = now()->subRealHour()->timestamp;
    Cache::add('last_update', $timestamp);
    Cache::shouldReceive('get')->once()->andReturn($timestamp);

    expect(ForecastCache::isStale())->toBeTrue();
});

it('checks if the cache is stale - stale (by default)', function () {
    Cache::shouldReceive('get')->once()->andReturn(null);

    expect(ForecastCache::isStale())->toBeTrue();
});
