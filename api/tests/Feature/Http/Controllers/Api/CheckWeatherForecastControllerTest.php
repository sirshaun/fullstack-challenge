<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;

it('prompts user to update their data', function () {
    Cache::add('last_update', now()->subRealHour()->timestamp);

    $this->json('get', '/weather')
        ->assertStatus(Response::HTTP_RESET_CONTENT);
});

it('does not prompt user to update their data', function () {
    Cache::add('last_update', now()->timestamp);

    $this->json('get', '/weather')
        ->assertStatus(Response::HTTP_OK);
});
