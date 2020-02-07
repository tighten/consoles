<?php

Route::get('/', function () {
    return view('consoles.index', [
        'consoles' => \App\Console::all(),
    ]);
});
