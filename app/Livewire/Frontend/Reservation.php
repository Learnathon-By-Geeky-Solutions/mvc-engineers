<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class Reservation extends Component
{
    public function render()
    {
        return view('livewire.frontend.reservation.reservation')->layout('livewire.layout.frontend');
    }
}
