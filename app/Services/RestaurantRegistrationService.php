<?php
namespace App\Services;

use App\Models\User;
use App\Models\Restaurant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;

class RestaurantRegistrationService
{
    /**
     * Register a new restaurant and user
     *
     * @param array $userData
     * @param array $restaurantData
     * @param mixed $logo
     * @param Collection|null $photos
     * @return User
     */
    public function register(array $userData, array $restaurantData, $logo = null, Collection $photos = null)
    {
        return DB::transaction(function () use ($userData, $restaurantData, $logo, $photos) {
            // Create User
            $user = User::create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'phone' => $userData['phone'],
                'password' => Hash::make($userData['password']),
            ]);

            $user->assignRole('restaurant_owner');

            // Handle logo
            $logoPath = null;
            if ($logo) {
                $logoPath = $logo->store('restaurant_logos', 'public');
            }

            // Handle photos
            $photosPaths = [];
            if ($photos && $photos->count()) {
                foreach ($photos as $photo) {
                    $photosPaths[] = $photo->store('restaurant_photos', 'public');
                }
            }

            // Create Restaurant
            $restaurant = Restaurant::create([
                'user_id' => $user->id,
                'name' => $restaurantData['restaurant_name'],
                'type' => $restaurantData['restaurant_type'],
                'description' => $restaurantData['restaurant_description'],
                'cuisine' => json_encode($restaurantData['cuisine']),
                'address' => $restaurantData['address'],
                'city' => $restaurantData['city'],
                'postal_code' => $restaurantData['postal_code'],
                'website' => $restaurantData['website'],
                'opening_time' => $restaurantData['opening_time'],
                'closing_time' => $restaurantData['closing_time'],
                'days_open' => json_encode($restaurantData['days_open']),
                'logo' => $logoPath,
                'photos' => json_encode($photosPaths),
                'status' => 'pending',
            ]);

            return $user;
        });
    }

    public function updateRestaurant($restaurant, array $data, $logo = null, Collection $photos = null)
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

    public function deleteRestaurant($restaurant)
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
            $restaurant->delete();
        });
    }

    public function getRestaurantTypes()
    {
        return [
            'fast_food' => 'Fast Food',
            'fine_dining' => 'Fine Dining',
            'cafe' => 'Cafe',
            'buffet' => 'Buffet',
            'food_truck' => 'Food Truck',
            'casual_dining' => 'Casual Dining',
            // Add more types as needed
        ];
    }

    public function getCuisineTypes()
    {
        return [
            'italian' => 'Italian',
            'chinese' => 'Chinese',
            'indian' => 'Indian',
            'mexican' => 'Mexican',
            'japanese' => 'Japanese',
            // Add more cuisines as needed
        ];
    }

    public function getDaysOfWeek()
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

    public function getRestaurantById($id)
    {
        return Restaurant::findOrFail($id);
    }

    public function getAllRestaurants()
    {
        return Restaurant::all();
    }

    public function getRestaurantByUserId($userId)
    {
        return Restaurant::where('user_id', $userId)->first();
    }

    public function getRestaurantByEmail($email)
    {
        return Restaurant::whereHas('user', function ($query) use ($email) {
            $query->where('email', $email);
        })->first();
    }

    public function getRestaurantByPhone($phone)
    {
        return Restaurant::whereHas('user', function ($query) use ($phone) {
            $query->where('phone', $phone);
        })->first();
    }

    public function getRestaurantByName($name)
    {
        return Restaurant::where('name', 'like', '%' . $name . '%')->get();
    }

    public function getRestaurantByType($type)
    {
        return Restaurant::where('type', $type)->get();
    }

    public function getRestaurantByStatus($status)
    {
        return Restaurant::where('status', $status)->get();
    }

    public function getRestaurantByCuisine($cuisine)
    {
        return Restaurant::where('cuisine', 'like', '%' . $cuisine . '%')->get();
    }

    public function getRestaurantByCity($city)
    {
        return Restaurant::where('city', $city)->get();
    }


    public function getRestaurantByPostalCode($postalCode)
    {
        return Restaurant::where('postal_code', $postalCode)->get();
    }

    public function getRestaurantByWebsite($website)
    {
        return Restaurant::where('website', $website)->get();
    }

    public function getRestaurantByOpeningTime($openingTime)
    {
        return Restaurant::where('opening_time', $openingTime)->get();
    }

    public function getRestaurantByClosingTime($closingTime)
    {
        return Restaurant::where('closing_time', $closingTime)->get();
    }

    public function getRestaurantByDaysOpen($daysOpen)
    {
        return Restaurant::where('days_open', 'like', '%' . $daysOpen . '%')->get();
    }


}
