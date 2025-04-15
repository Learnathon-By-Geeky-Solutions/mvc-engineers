<?php

namespace App\Services;

use App\Models\Restaurant;

class RestaurantQueryService
{
    /**
     * Get restaurant by ID
     *
     * @param int $id
     * @return Restaurant
     */
    public function getRestaurantById(int $id): Restaurant
    {
        return Restaurant::findOrFail($id);
    }

    /**
     * Get all restaurants
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllRestaurants()
    {
        return Restaurant::all();
    }

    /**
     * Get restaurant by user ID
     *
     * @param int $userId
     * @return Restaurant|null
     */
    public function getRestaurantByUserId(int $userId): ?Restaurant
    {
        return Restaurant::where('user_id', $userId)->first();
    }

    /**
     * Get restaurant by user email
     *
     * @param string $email
     * @return Restaurant|null
     */
    public function getRestaurantByEmail(string $email): ?Restaurant
    {
        return Restaurant::whereHas('user', function ($query) use ($email) {
            $query->where('email', $email);
        })->first();
    }

    /**
     * Get restaurant by user phone
     *
     * @param string $phone
     * @return Restaurant|null
     */
    public function getRestaurantByPhone(string $phone): ?Restaurant
    {
        return Restaurant::whereHas('user', function ($query) use ($phone) {
            $query->where('phone', $phone);
        })->first();
    }

    /**
     * Get restaurants by name
     *
     * @param string $name
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getRestaurantByName(string $name)
    {
        return Restaurant::where('name', 'like', '%' . $name . '%')->get();
    }

    /**
     * Get restaurants by type
     *
     * @param string $type
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getRestaurantByType(string $type)
    {
        return Restaurant::where('type', $type)->get();
    }

    /**
     * Get restaurants by status
     *
     * @param string $status
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getRestaurantByStatus(string $status)
    {
        return Restaurant::where('status', $status)->get();
    }

    /**
     * Get restaurants by cuisine
     *
     * @param string $cuisine
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getRestaurantByCuisine(string $cuisine)
    {
        return Restaurant::where('cuisine', 'like', '%' . $cuisine . '%')->get();
    }

    /**
     * Get restaurants by city
     *
     * @param string $city
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getRestaurantByCity(string $city)
    {
        return Restaurant::where('city', $city)->get();
    }

    /**
     * Get restaurants by postal code
     *
     * @param string $postalCode
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getRestaurantByPostalCode(string $postalCode)
    {
        return Restaurant::where('postal_code', $postalCode)->get();
    }

    /**
     * Get restaurants by website
     *
     * @param string $website
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getRestaurantByWebsite(string $website)
    {
        return Restaurant::where('website', $website)->get();
    }

    /**
     * Get restaurants by opening time
     *
     * @param string $openingTime
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getRestaurantByOpeningTime(string $openingTime)
    {
        return Restaurant::where('opening_time', $openingTime)->get();
    }

    /**
     * Get restaurants by closing time
     *
     * @param string $closingTime
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getRestaurantByClosingTime(string $closingTime)
    {
        return Restaurant::where('closing_time', $closingTime)->get();
    }

    /**
     * Get restaurants by days open
     *
     * @param string $daysOpen
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getRestaurantByDaysOpen(string $daysOpen)
    {
        return Restaurant::where('days_open', 'like', '%' . $daysOpen . '%')->get();
    }
} 