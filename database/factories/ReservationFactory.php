<?php

namespace Database\Factories;

use App\Models\Reservation;
use App\Models\Table;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ReservationFactory extends Factory
{
    protected $model = Reservation::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'table_id' => Table::factory(),
            'name' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'sit_required' => $this->faker->boolean,
            'note' => $this->faker->sentence,
            'status' => $this->faker->randomElement(['pending', 'confirmed', 'canceled']),
            'date_time' => Carbon::now()->addDays($this->faker->numberBetween(1, 7))->format('Y-m-d H:i:s'),
        ];
    }
}
