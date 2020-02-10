<?php

Route::get('/', function () {
    return view('consoles.index', [
        'providers' => \App\Provider::all(),
    ]);
});

Route::any('{route}', function ($route) {
    if ($console = \App\Console::where('route', $route)->first()) {
        return redirect($console->url);
    }

    abort(404);
})->where('route', '.*');
