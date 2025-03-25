<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Restaurant;

class ManageRestaurant extends Component
{
    use WithFileUploads;
    public $restaurantId;
    public $restaurant;

    protected $rules = [
        'restaurant.name' => 'required|string|max:255',
        'restaurant.address' => 'required|string|max:255',
        'restaurant.phone' => 'required|string|max:20',
        'restaurant.hours' => 'required|string|max:100',
        'restaurant.about' => 'required|string',
        // Add menu validation if needed
    ];

    public function mount($restaurantId = null)
    {
        if ($restaurantId) {
            $this->restaurantId = $restaurantId;
            $this->restaurant = \App\Models\Restaurant::findOrFail($restaurantId)->toArray();
        } else {
            $this->restaurant = [
                'name' => '',
                'address' => '',
                'phone' => '',
                'hours' => '',
                'about' => '',
                'menu' => [],
            ];
        }
    }

    public function updateRestaurant()
    {
        $this->validate();

        if ($this->restaurantId) {
            // Update existing restaurant
            $restaurant = \App\Models\Restaurant::findOrFail($this->restaurantId);
            $restaurant->update($this->restaurant);
        } else {
            // Create new restaurant
            $restaurant = \App\Models\Restaurant::create($this->restaurant);
            $this->restaurantId = $restaurant->id;
        }

        session()->flash('message', 'Restaurant updated successfully!');
    }

    public function render()
    {
        return view('livewire.admin.manage-restaurant')->layout('livewire.layout.admin');
    }
}
