<?php

namespace App\Livewire\Frontend\Component;

use Livewire\Component;
use App\Livewire\Actions\Logout as LogoutAction;

class Logout extends Component
{
    public function logout(LogoutAction $logout): void
    {
        $logout();
        //dd($logout);

        $this->redirect(route('home'));
    }
    public function render()
    {
        return view('livewire.frontend.component.logout');
    }
}
