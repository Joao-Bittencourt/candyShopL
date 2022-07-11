<?php

namespace Tests\Feature\Http\controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Tests\TestCase;

class ProductsControllerTest extends TestCase {

    use RefreshDatabase;

    public function test_get_list_products_is_ok() {

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/products');

        $response->assertStatus(200);
    }

    public function test_get_list_products() {

        $user = User::factory()->create();
        $this->actingAs($user);

        Category::factory()->create();
        Product::factory()->create();
        $response = $this->get('/products');

        $response->assertOk();
        $response->assertViewIs('products.index');
    }

    public function test_create_displays_view() {

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get(route('products.create'));

        $response->assertOk();
        $response->assertViewIs('products.create');
    }

    public function test_store_saves_and_redirects() {
        $user = User::factory()->create();
        $this->actingAs($user);

        Category::factory()->create();
        $category = Category::first();
        $name = 'products test';
        $description = 'product description';
        $category_id = $category->id;
        $price = '125';

        $response = $this
                ->post(route('products.store'), [
            'name' => $name,
            'description' => $description,
            'category_id' => $category_id,
            'price' => $price
        ]);
      
        $products = Product::query()
                ->where('name', $name)
                ->get();

        $this->assertCount(1, $products);
        $response->assertRedirect(route('products.index'));
    }

}
