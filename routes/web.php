<?php

use App\Console;
use App\Provider;

Route::middleware('cache.headers:public;max_age=600;etag')->group(function () {
    Route::view('/', 'consoles.index', ['providers' => Provider::orderBy('name')->get()]);
});

Route::get('{console}', function (Console $console) {
    return redirect($console->url);
})->where('console', '.*');
