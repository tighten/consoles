<?php

use App\Console;
use Faker\Generator as Faker;

$factory->define(Console::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'url' => $faker->url,
    ];
});
