<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::factory(),
            'price' => $this->faker->randomFloat(2, 10, 500),
            'description' => $this->faker->sentence,
            'image_id' => $this->faker->numberBetween(1, 50),
            'active' => $this->faker->boolean,
            'online' => $this->faker->boolean
        ];
    }
}
