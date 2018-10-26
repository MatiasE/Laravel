<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest1 extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    function it_loads_the_users_details_page() {
        $this->get('/usuarios/5')
            ->assertStatus(200)
            ->assertSee("Mostrando detalle del usuario: 5");     
    }
}
