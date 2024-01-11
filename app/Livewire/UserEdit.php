<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserEdit extends Component
{
    public $id;
    public $name;
    public $email;
    public function mount($user)
    {
        $this->id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function render()
    {
        return view('livewire.user-edit');
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email,'.$this->id,
        ]);

        User::where('id', $this->id)->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        redirect()->route('users.index')->with('success', 'User successfully updated.');
        
    }
}
