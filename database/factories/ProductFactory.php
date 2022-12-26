<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
            'product_name' => fake()->name(),
            'price' => fake()->numberBetween($int1 = 1, $int2 = 999.99),
            'description' => fake()->text(),
            'image1' => 'https://place-hold.it/300x300/jdf',
            'image2' => 'https://place-hold.it/300x300/jdf1',
            'image3' => 'https://place-hold.it/300x300/jdf',
            // 'sub_category_id' => fake()->numberBetween($int1 = 1, $int2 = 7),

        ];
    }
}
