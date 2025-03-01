<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class SignUp extends Component
{

    public $name;
    public $email;
    public $password;


    public function Register()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = \App\Models\User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        auth()->login($user);

        return redirect()->route('home');
    }
    public function render()
    {
        return view('livewire.frontend.sign-up')->layout('livewire.layout.frontend');
    }
}
