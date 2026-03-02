<?php

use App\Console;
use Tests\TestCase;


it('throws 404 if console not found', function () {
    $response = $this->get('/not-found-console');

    $response->assertStatus(404);
});

it('redirects to console url if it exists', function () {
    $console = Console::where('route', 'github')->first();

    $this->get('/github')
        ->assertStatus(302)
        ->assertRedirect($console->url);
});
