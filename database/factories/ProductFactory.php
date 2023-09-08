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
            'name' => $this->faker->name,
            'image' => $this->faker->imageUrl,
            'description' => $this->faker->text(100),
            'quantity' => $this->faker->randomElement([1, 2, 3, 4, 5]),
            'price' => $this->faker->randomFloat(2, 100, 5000),
            'category_id' => $this->faker->randomElement([1, 2, 3, 4, 5]),

        ];
    }
}
