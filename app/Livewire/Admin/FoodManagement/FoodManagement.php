<?php

namespace App\Livewire\Admin\FoodManagement;

use Livewire\Component;

class FoodManagement extends Component
{

    public function render()
    {
        return view('livewire.admin.food-management.food-management')->layout('livewire.layout.admin');
    }
}
