<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Restaurant;

class ChooseRestaurant extends Component
{
    public function render()
    {
        return view('livewire.admin.choose-restaurant')->layout('livewire.layout.oboard');
    }
}
