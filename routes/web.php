<?php

use App\Console;

Route::get('/', function () {
    return view('consoles.index', [
        'providers' => \App\Provider::all(),
    ]);
});

Route::any('{console}', function (Console $console) {
    return redirect($console->url);
})->where('route', '.*');
