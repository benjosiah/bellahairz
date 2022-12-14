<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Product;
use \App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Admin User',
        //     'email' => 'admin@demo.com',
        // ]);



        Category::factory()->has(
            Product::factory(10)
        )->create([
            "name" => "Wigs",
            "slug" => "wigs"
        ]);

        Category::factory()->has(
            Product::factory(10)
        )->create([
            "name" => "Hair Products",
            "slug" => "hair-products"
        ]);

        Category::factory()->has(
            Product::factory(10)
        )->create([
            "name" => "Accesories",
            "slug" => "accesories"
        ]);

        Category::factory()->has(
            Product::factory(10)
        )->create([
            "name" => "Best Sellers",
            "slug" => "best-sellers"
        ]);

        Category::factory()->has(
            Product::factory(10)
        )->create([
            "name" => "New Release",
            "slug" => "new-release"
        ]);
       
    }
}
