<?php

Route::get('/', function () {
    return view('consoles.index', [
        'providers' => \App\Provider::all(),
    ]);
});

Route::get('{route}', function ($route) {
    if ($platform = \App\Console::where('route', $route)->first()) {
        return redirect($platform->url);
    }

    abort(404);
});
