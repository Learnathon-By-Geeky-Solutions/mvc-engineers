<?php

namespace App\Livewire\Admin\FoodManagement;

use Livewire\Component;

class FoodCategoryManagement extends Component
{
    public function render()
    {
        return view('livewire.admin.food-management.food-category-management')->layout('livewire.layout.admin');
    }
}
