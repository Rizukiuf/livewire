<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserTable extends Component
{
    public $search = '';

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        'userCreated' => '$refresh'
    ];
    public function render()
    {
        return view('livewire.user-table',[
            // 'users' => User::latest()->paginate(5)
            'users' => User::where('name', 'like', '%'.$this->search.'%')->paginate(5)
        ]);
    }

    public function delete($id)
    {
        User::find($id)->delete();
        session()->flash('success', 'User successfully deleted.');
    }

    public function updatingSearch(){
        $this->resetPage();
    }
}
