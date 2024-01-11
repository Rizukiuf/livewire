<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

use Illuminate\Support\Facades\Hash;

class UserCreate extends Component
{
    public $name;
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.user-create');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);

        $this->name = null;
        $this->email = null;
        $this->password = null;

        session()->flash('created', 'User successfully created.');
        
        $this->dispatch('userCreated');
    }
}
