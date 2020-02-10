<?php

use App\Console;

Route::get('/', function () {
    return view('consoles.index', [
        'providers' => \App\Provider::all(),
    ]);
});

Route::get('{console}', function (Console $console) {
    return redirect($console->url);
})->where('console', '.*');
