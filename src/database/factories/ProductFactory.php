<?php

namespace Database\Factories;

use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'is_active' => fake()->boolean(),
            'category_id' => ProductCategory::factory(),
            'price' => fake()->randomFloat(2, 1, 1000),
            'stock' => fake()->randomNumber(2),
            'description' => fake()->words(10, true)
        ];
    }
}
