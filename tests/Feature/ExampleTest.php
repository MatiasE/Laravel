<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */

    public function textBasicTest()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
