<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest1 extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    function it_welcomes_users_without_nickname()
    {
        $this->get('saludo/duilio')
            ->assertStatus(200)
            ->assertSee('Bienvenido Duilio, no tienes apodo');
    }
}
