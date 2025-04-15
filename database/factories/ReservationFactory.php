<?php

namespace Database\Factories;

use App\Models\Reservation;
use App\Models\Table;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    protected $model = Reservation::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'table_id' => Table::factory(),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'sit_required' => $this->faker->numberBetween(1, 10),
            'note' => $this->faker->optional()->sentence(),
            'status' => $this->faker->randomElement(['pending', 'confirmed', 'cancelled', 'completed']),
        ];
    }
}
