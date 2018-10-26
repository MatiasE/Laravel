<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest2 extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    function it_loads_the_new_users_page() {
        $this->withoutExceptionHandling();
    
        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Crear nuevo usuario');
    }
}
