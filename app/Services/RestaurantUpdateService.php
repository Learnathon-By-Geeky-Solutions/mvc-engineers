<?php

namespace App\Services;

use App\Models\Restaurant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;

class RestaurantUpdateService
{
    /**
     * Update restaurant information
     *
     * @param Restaurant $restaurant
     * @param array $data
     * @param mixed $logo
     * @param Collection|null $photos
     * @return Restaurant
     */
    public function updateRestaurant(Restaurant $restaurant, array $data, $logo = null, Collection $photos = null)
    {
        return DB::transaction(function () use ($restaurant, $data, $logo, $photos) {
            // Handle logo
            if ($logo) {
                // Delete old logo if exists
                if ($restaurant->logo) {
                    Storage::disk('public')->delete($restaurant->logo);
                }
                $data['logo'] = $logo->store('restaurant_logos', 'public');
            }

            // Handle photos
            if ($photos && $photos->count()) {
                // Delete old photos if exists
                if ($restaurant->photos) {
                    foreach (json_decode($restaurant->photos) as $oldPhoto) {
                        Storage::disk('public')->delete($oldPhoto);
                    }
                }
                $data['photos'] = json_encode($photos->map(function ($photo) {
                    return $photo->store('restaurant_photos', 'public');
                })->toArray());
            }

            // Update Restaurant
            $restaurant->update($data);

            return $restaurant;
        });
    }
} 