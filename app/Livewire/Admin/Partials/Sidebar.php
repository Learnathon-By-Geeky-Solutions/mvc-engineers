<?php

namespace App\Livewire\Admin\Partials;
use App\Livewire\Actions\Logout;

use Livewire\Component;

class Sidebar extends Component
{


    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/login', navigate: true);
    }
    public function render()
    {
        return view('livewire.admin.partials.sidebar');
    }
}
