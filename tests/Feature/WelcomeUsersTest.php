<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    function it_welcomes_users_with_nickname()
    {
        $this->get('saludo/duilio/silence')
            ->assertStatus(200)
            ->assertSee('Bienvenido Duilio, tu apodo es silence');
    }
}
