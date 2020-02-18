<?php

use App\Console;

Route::middleware('cache.headers:public;max_age=600;etag')->group(function () {
    Route::get('/', function () {
        return view('consoles.index', [
            'providers' => \App\Provider::all(),
            'consoles' => \App\Console::all(),
        ]);
    });
});

Route::get('{console}', function (Console $console) {
    return redirect($console->url);
})->where('console', '.*');
