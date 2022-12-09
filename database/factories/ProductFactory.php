<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductType;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'price' =>$this->faker->numberBetween(500, 50000),
            'category_id'=>$this->faker->numberBetween(1, 5),
            'stock' => $this->faker->numberBetween(10, 100),
            'image' => $this->faker->imageUrl(640, 480, 'animals', true)

        ];
    }
}
