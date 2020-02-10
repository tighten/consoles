<?php

namespace Tests\Feature;

use App\Console;
use Tests\TestCase;

class ConsoleRedirectTest extends TestCase
{
    /** @test */
    function it_throws_404_it_console_not_found()
    {
        $response = $this->get('/not-found-console');

        $response->assertStatus(404);
    }

    /** @test */
    function it_redirects_to_console_url_if_it_exists()
    {
        $console = Console::create([
            'name' => 'GitHub OAuth Apps',
            'url' => 'https://github.com/settings/developers',
            'provider' => 'GitHub',
            'route' => 'github',
        ]);

        $this->get('/github')
            ->assertStatus(302)
            ->assertRedirect($console->url);
    }
}
