<?php

namespace Database\Factories;

use App\Models\PaymentMethod;
use App\Models\Table;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'table_id' => Table::factory(),
            'note' => $this->faker->sentence,
            'discount' => $this->faker->randomFloat(2, 0, 50),
            'delivery_charge' => $this->faker->randomFloat(2, 10, 50),
            'service_charge' => $this->faker->randomFloat(2, 10, 50),
            'type' => $this->faker->randomElement(['dine_in', 'takeaway', 'delivery']),
            'payment_method_id' => PaymentMethod::factory(),
            'amount' => $this->faker->randomFloat(2, 50, 1000),
            'payment_status' => $this->faker->randomElement(['paid', 'unpaid', 'pending']),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
