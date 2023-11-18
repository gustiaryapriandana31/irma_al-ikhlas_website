<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_create(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

}