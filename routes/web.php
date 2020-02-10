<?php

Route::get('/', function () {
    return view('consoles.index', [
        'providers' => \App\Provider::all(),
    ]);
});
