<?php

namespace Tests\Feature;

use App\Console;
use Tests\TestCase;

class ConsoleRedirectTest extends TestCase
{
    /** @test */
    public function it_throws_404_if_console_not_found()
    {
        $response = $this->get('/not-found-console');

        $response->assertStatus(404);
    }

    /** @test */
    public function it_redirects_to_console_url_if_it_exists()
    {
        $console = Console::where('route', 'github')->first();

        $this->get('/github')
            ->assertStatus(302)
            ->assertRedirect($console->url);
    }
}
