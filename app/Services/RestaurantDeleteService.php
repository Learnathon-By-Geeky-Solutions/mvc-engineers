<?php

namespace App\Services;

use App\Models\Restaurant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RestaurantDeleteService
{
    /**
     * Delete a restaurant
     *
     * @param Restaurant $restaurant
     * @return bool
     */
    public function deleteRestaurant(Restaurant $restaurant): bool
    {
        return DB::transaction(function () use ($restaurant) {
            // Delete logo if exists
            if ($restaurant->logo) {
                Storage::disk('public')->delete($restaurant->logo);
            }

            // Delete photos if exists
            if ($restaurant->photos) {
                foreach (json_decode($restaurant->photos) as $photo) {
                    Storage::disk('public')->delete($photo);
                }
            }

            // Delete Restaurant
            return $restaurant->delete();
        });
    }
} 