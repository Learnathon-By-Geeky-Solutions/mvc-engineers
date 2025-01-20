<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $count =0;

    public function add(){

        $this->count++;
    }

    public function sub(){
        $this->count--;
    }

    public function render()
    {
        return view('livewire.home');
    }
}
