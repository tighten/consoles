<?php

use App\Console;

Route::middleware('cache.headers:public;max_age=600;etag')->group(function () {
    Route::view('/', 'consoles.index', ['providers' => \App\Provider::all()]);
});

Route::get('{console}', function (Console $console) {
    return redirect($console->url);
})->where('console', '.*');
