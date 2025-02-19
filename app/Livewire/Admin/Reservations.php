<?php

namespace App\Livewire\Admin;

use App\Models\Reservation;
use Livewire\Component;

class Reservations extends Component
{

    public function render()
    {
        return view('livewire.admin.reservations',['reservations'=>Reservation::all()])->layout('livewire.layout.admin');
    }
}
