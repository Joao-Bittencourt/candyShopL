<?php

namespace Tests\Feature\api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Tests\TestCase;

class productsTest extends TestCase {

    use RefreshDatabase;

    public function test_get_list_categories_is_ok() {

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/api/products');

        $response->assertStatus(200);
    }

    public function test_get_list_categories() {

        $user = User::factory()->create();
        $this->actingAs($user);

        Category::factory()->create();
        Product::factory()->create();
        $response = $this->get('/api/products');

        $countResponse = count($response->getData()->data ?? 0);

        $response->assertJsonCount(1);
        $this->assertEquals(1, $countResponse);
    }

}
