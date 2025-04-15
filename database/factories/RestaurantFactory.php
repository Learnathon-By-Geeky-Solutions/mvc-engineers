<?php

namespace Database\Factories;

use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class RestaurantFactory extends Factory
{
    protected $model = Restaurant::class;

    public function definition(): array
    {
        return [
            'user_id'       => User::factory(),
            'name'          => $this->faker->company() . ' Restaurant',
            'type'          => $this->faker->randomElement(['Fine Dining', 'Casual Dining', 'Fast Food', 'Cafe']),
            'description'   => $this->faker->paragraph(),
            'cuisine'       => $this->faker->randomElement(['Italian', 'Mexican', 'Chinese', 'Japanese', 'Indian']),
            'address'       => $this->faker->streetAddress(),
            'city'          => $this->faker->city(),
            'postal_code'   => $this->faker->postcode(),
            'website'       => $this->faker->url(),
            'opening_time'  => '09:00:00',
            'closing_time'  => '22:00:00',
            'days_open'     => 'Mon,Tue,Wed,Thu,Fri,Sat,Sun',
            'logo'          => $this->faker->word(),
            'photos'        => $this->faker->word(),
            'status'        => 'active',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
        ];
    }
}
