<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class Menu extends Component
{
    public function render()
    {
        return view('livewire.frontend.menu.menu')->layout('livewire.layout.frontend');
    }
}
