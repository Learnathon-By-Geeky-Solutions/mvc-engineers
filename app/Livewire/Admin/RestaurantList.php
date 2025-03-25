<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class RestaurantList extends Component
{
    public function render()
    {
        return view('livewire.admin.restaurant-list')->layout('livewire.layout.admin');
    }
}
