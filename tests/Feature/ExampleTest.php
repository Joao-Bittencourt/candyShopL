<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Tests\TestCase;

class ExampleTest extends TestCase {

    use RefreshDatabase;

    public function test_example() {

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/');

        $response->assertStatus(200);
    }

}
