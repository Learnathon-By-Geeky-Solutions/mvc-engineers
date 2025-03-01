<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class SignIn extends Component
{

    public $email;
    public $password;


    public function Authenticate()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            //dd(auth()->user());
            return redirect()->route('home');
        } else {
            session()->flash('error', 'Invalid email or password');
        }
    }

    public function render()
    {
        return view('livewire.frontend.sign-in')->layout('livewire.layout.frontend');
    }
}
