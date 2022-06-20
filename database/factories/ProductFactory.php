<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory {

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        $categories = \App\Models\Category::all()->pluck('id');

        return [
            'name' => $this->faker->realText($maxNbChars = 10, $indexSize = 2),
            'category_id' => $this->faker->randomElement($categories->toArray()),
            'price' => $this->faker->randomNumber(4),
            'description' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
        ];
    }

}
