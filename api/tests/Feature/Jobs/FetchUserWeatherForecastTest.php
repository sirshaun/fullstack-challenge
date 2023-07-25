<?php

use App\Jobs\FetchUserWeatherForecast;
use App\Models\User;
use Illuminate\Support\Facades\Queue;

test('it dispatches a job to fetch a new user\'s weather forecast', function () {
    Queue::fake();
    User::factory()->createOne();

    Queue::assertPushed(FetchUserWeatherForecast::class);
});
