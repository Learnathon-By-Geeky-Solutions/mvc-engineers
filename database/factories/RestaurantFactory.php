<?php

namespace Database\Factories;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class RestaurantFactory extends Factory
{
    protected $model = Restaurant::class;

    public function definition(): array
    {
        return [
            'user_id'       => $this->faker->randomNumber(),
            'name'          => $this->faker->name(),
            'type'          => $this->faker->word(),
            'description'   => $this->faker->text(),
            'cuisine'       => $this->faker->word(),
            'address'       => $this->faker->address(),
            'postal_code'   => $this->faker->postcode(),
            'website'       => $this->faker->word(),
            'opening_time' => $this->faker->word(),
            'closing_time'  => $this->faker->word(),
            'days_open'     => $this->faker->word(),
            'logo'          => $this->faker->word(),
            'photos'        => $this->faker->word(),
            'status'        => $this->faker->word(),
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
        ];
    }
}
