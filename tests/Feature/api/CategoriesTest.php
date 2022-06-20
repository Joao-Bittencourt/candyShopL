<?php

namespace Tests\Feature\api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use App\Models\Category;
use Tests\TestCase;

class CategoriesTest extends TestCase {

    use RefreshDatabase;

    public function test_get_list_categories_is_ok() {

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/api/categories');

        $response->assertStatus(200);
    }

    public function test_get_list_categories() {

        $user = User::factory()->create();
        $this->actingAs($user);

        Category::factory()->create();
        $response = $this->get('/api/categories');

        $countResponse = count($response->getData()->data ?? 0);

        $response->assertJsonCount(1);
        $this->assertEquals(1, $countResponse);
    }

}
