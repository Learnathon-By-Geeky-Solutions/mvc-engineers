<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Restaurant;

class ManageRestaurant extends Component
{
    use WithFileUploads;
    public $restaurant_id;
    public function render()
    {
        $this->restaurant_id = request()->route('id');
        $restaurant = Restaurant::find($this->restaurant_id);
        return view('livewire.admin.manage-restaurant')->layout('livewire.layout.admin');
    }
}
