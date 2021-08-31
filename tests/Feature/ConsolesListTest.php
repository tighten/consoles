<?php

namespace Tests\Feature;

use App\Console;
use Tests\TestCase;

class ConsolesListTest extends TestCase
{
    /** @test */
    public function it_shows_at_least_the_first_console()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeText(Console::first()->name);
    }

    /** @test */
    public function it_shows_the_providers_in_alphabetical_order()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeInOrder([
            'Amazon',
            'GitHub',
            'Google',
            'Twitter',
            'Vultr',
        ]);
    }
}
