<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ForecastCache;
use Illuminate\Http\Request;

class CheckWeatherForecastController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $code = ForecastCache::isStale() ? 205 : 200;
        return response('', $code);
    }
}
