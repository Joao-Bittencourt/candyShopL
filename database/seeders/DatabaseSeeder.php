<?php

namespace Database\Seeders;

use CategorySeeder;
use Illuminate\Database\Seeder;
use ProductSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Product::factory(100)->create();
//        $this->call(CategorySeeder::class);
//        $this->call(ProductSeeder::class);

    }
}
