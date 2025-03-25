<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Customer User
        $customer = User::create([
            'name' => 'John Doe',
            'email' => 'customer@example.com',
            'password' => Hash::make('password123'),
            'email_verified_at' => now()
        ]);
        $customer->assignRole('customer');

        // Create Restaurant Owner User
        $restaurantOwner = User::create([
            'name' => 'Restaurant Manager',
            'email' => 'owner@restaurant.com',
            'password' => Hash::make('password123'),
            'email_verified_at' => now()
        ]);
        $restaurantOwner->assignRole('restaurant_owner');

        // Create Super Admin User
        $superAdmin = User::create([
            'name' => 'Super Administrator',
            'email' => 'superadmin@system.com',
            'password' => Hash::make('password123'),
            'email_verified_at' => now()
        ]);
        $superAdmin->assignRole('super_admin');

        // Optional: Create additional dummy users if needed
        User::factory()->count(10)->create()->each(function ($user) {
            // Randomly assign a role to some additional users
            $roles = Role::all();
            $user->assignRole($roles->random());
        });
    }
}
