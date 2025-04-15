<?php

namespace App\Services;

use Illuminate\Support\Collection;

class RestaurantFormDataService
{
    /**
     * Prepare user data for registration
     *
     * @param array $data
     * @return array
     */
    public function prepareUserData(array $data): array
    {
        return [
            'name' => $data['name'] ?? null,
            'email' => $data['email'] ?? null,
            'phone' => $data['phone'] ?? null,
            'password' => $data['password'] ?? null,
        ];
    }
    
    /**
     * Prepare restaurant data for registration
     *
     * @param array $data
     * @return array
     */
    public function prepareRestaurantData(array $data): array
    {
        return [
            'restaurant_name' => $data['restaurant_name'] ?? null,
            'restaurant_type' => $data['restaurant_type'] ?? null,
            'restaurant_description' => $data['restaurant_description'] ?? null,
            'cuisine' => $data['cuisine'] ?? [],
            'address' => $data['address'] ?? null,
            'city' => $data['city'] ?? null,
            'postal_code' => $data['postal_code'] ?? null,
            'website' => $data['website'] ?? null,
            'opening_time' => $data['opening_time'] ?? null,
            'closing_time' => $data['closing_time'] ?? null,
            'days_open' => $data['days_open'] ?? [],
        ];
    }
    
    /**
     * Get available restaurant types
     *
     * @return array
     */
    public function getRestaurantTypes(): array
    {
        return [
            'fast_food' => 'Fast Food',
            'fine_dining' => 'Fine Dining',
            'cafe' => 'Cafe',
            'buffet' => 'Buffet',
            'food_truck' => 'Food Truck',
            'casual_dining' => 'Casual Dining',
        ];
    }
    
    /**
     * Get available cuisine types
     *
     * @return array
     */
    public function getCuisineTypes(): array
    {
        return [
            'italian' => 'Italian',
            'chinese' => 'Chinese',
            'indian' => 'Indian',
            'mexican' => 'Mexican',
            'japanese' => 'Japanese',
        ];
    }
    
    /**
     * Get days of the week
     *
     * @return array
     */
    public function getDaysOfWeek(): array
    {
        return [
            'monday' => 'Monday',
            'tuesday' => 'Tuesday',
            'wednesday' => 'Wednesday',
            'thursday' => 'Thursday',
            'friday' => 'Friday',
            'saturday' => 'Saturday',
            'sunday' => 'Sunday',
        ];
    }
} 