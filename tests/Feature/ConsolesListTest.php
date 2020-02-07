<?php

namespace Tests\Feature;

use App\Console;
use Tests\TestCase;

class ConsolesListTest extends TestCase
{
    /** @test */
    function it_shows_at_least_the_first_console()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeText(Console::first()->name);
    }
}
