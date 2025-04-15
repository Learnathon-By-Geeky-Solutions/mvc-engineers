<?php

namespace Tests\Unit;

use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RestaurantTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_restaurant()
    {
        $user = User::factory()->create();
        
        $restaurantData = [
            'user_id' => $user->id,
            'name' => 'Test Restaurant',
            'type' => 'Fine Dining',
            'description' => 'A test restaurant description',
            'cuisine' => 'Italian',
            'address' => '123 Test Street',
            'city' => 'Test City',
            'postal_code' => '12345',
            'website' => 'https://testrestaurant.com',
            'opening_time' => '09:00:00',
            'closing_time' => '22:00:00',
            'days_open' => 'Mon,Tue,Wed,Thu,Fri,Sat,Sun',
            'status' => 'active'
        ];

        $restaurant = Restaurant::create($restaurantData);

        $this->assertInstanceOf(Restaurant::class, $restaurant);
        $this->assertEquals('Test Restaurant', $restaurant->name);
        $this->assertEquals($user->id, $restaurant->user_id);
    }

    /** @test */
    public function it_can_update_a_restaurant()
    {
        $restaurant = Restaurant::factory()->create();
        
        $restaurant->update([
            'name' => 'Updated Restaurant Name',
            'description' => 'Updated description'
        ]);

        $this->assertEquals('Updated Restaurant Name', $restaurant->fresh()->name);
        $this->assertEquals('Updated description', $restaurant->fresh()->description);
    }

    /** @test */
    public function it_can_delete_a_restaurant()
    {
        $restaurant = Restaurant::factory()->create();
        
        $restaurantId = $restaurant->id;
        $restaurant->delete();

        $this->assertSoftDeleted('restaurants', ['id' => $restaurantId]);
    }

    /** @test */
    public function it_belongs_to_a_user()
    {
        $user = User::factory()->create();
        $restaurant = Restaurant::factory()->create(['user_id' => $user->id]);

        $this->assertInstanceOf(User::class, $restaurant->user);
        $this->assertEquals($user->id, $restaurant->user->id);
    }
} 