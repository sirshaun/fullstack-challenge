<?php

namespace App\Services;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;

class ForecastCache
{
    const CACHE_KEY = 'last_update';

    /**
     * Check if the forecast data
     * is old.
     *
     * @return boolean
     */
    public static function isStale(): bool
    {
        try {
            $lastUpdate = static::get(asInteger: false);
            return $lastUpdate->lte(now()->subRealHour());
        } catch (\Exception) {
            return true;
        }
    }

    /**
     * Update forecast "last updated"
     * cached value.
     *
     * @param integer $timestamp
     * @return void
     */
    public static function update(int $timestamp): void
    {
        Cache::forget(static::CACHE_KEY);
        Cache::add(static::CACHE_KEY, $timestamp);
    }

    /**
     * Forget forecast "last updated"
     * cached value.
     *
     * @return void
     */
    public static function forget(): void
    {
        Cache::forget(static::CACHE_KEY);
    }

    /**
     * Get the cached "last updated"
     * value.
     *
     * @param boolean $asInteger The value can be returned as a Carbon instance
     * @return integer|\Illuminate\Support\Carbon
     */
    public static function get(bool $asInteger = true): int|Carbon
    {
        return $asInteger
            ? Cache::get(static::CACHE_KEY)
            : Carbon::createFromTimestamp(Cache::get(static::CACHE_KEY));
    }
}
