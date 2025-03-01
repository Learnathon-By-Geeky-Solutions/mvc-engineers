<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class SignIn extends Component
{
    public function render()
    {
        return view('livewire.frontend.sign-in')->layout('livewire.layout.frontend');
    }
}
