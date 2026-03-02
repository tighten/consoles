<?php

use App\Models\Console;
use Tests\TestCase;

uses(Tests\TestCase::class);

it('shows at least the first console', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
    $response->assertSeeText(Console::first()->name);
});

it('shows the providers in alphabetical order', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
    $response->assertSeeInOrder([
        'Amazon',
        'GitHub',
        'Google',
        'Twitter',
        'Vultr',
    ]);
});
