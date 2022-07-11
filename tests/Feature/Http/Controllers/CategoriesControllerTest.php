<?php

namespace Tests\Feature\Http\controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use App\Models\Category;
use Tests\TestCase;

class CategoriesControllerTest extends TestCase {

    use RefreshDatabase;

    public function test_get_list_categories_is_ok() {

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/categories');

        $response->assertStatus(200);
    }

    public function test_get_list_categories() {

        $user = User::factory()->create();
        $this->actingAs($user);

        Category::factory()->create();
        $response = $this->get('/categories');

        $response->assertOk();
        $response->assertViewIs('categories.index');
    }

    public function test_create_displays_view() {

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get(route('categories.create'));

        $response->assertOk();
        $response->assertViewIs('categories.create');
    }

    public function test_store_saves_and_redirects() {
        $user = User::factory()->create();
        $this->actingAs($user);

        $name = 'category test';

        $response = $this
                ->post(route('categories.store'), [
            'name' => $name
        ]);

        $categories = Category::query()
                ->where('name', $name)
                ->get();

        $this->assertCount(1, $categories);
        $response->assertRedirect(route('categories.index'));
    }

}
