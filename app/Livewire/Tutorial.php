<?php

namespace App\Livewire;

use Livewire\Component;

class Tutorial extends Component
{
    public $hobi = 'play game';
    public $warna_favorit = 'white';

    public $proses = [];

    public function mount()
    {
        $this->proses[] = 'sedang di mount';
    }

    public function hydrate()
    {
        $this->proses[] = 'sedang di hydrate';
    }

    public function updating($name, $value)
    {
        $this->proses[] = "sedang di updating => $name, $value";
    }
    
    public function updated($name, $value)
    {
        $this->proses[] = "sedang di updated => $name, $value";
    }
    
    public function updatingHobi($name, $value)
    {
        $this->proses[] = "sedang di updatingHobi => $name, $value";
    }

    public function updatedHobi($name, $value)
    {
        $this->proses[] = "sedang di updatedHobi => $name, $value";
    }
    public function updatingWarnaFavorit($name, $value)
    {
        $this->proses[] = "sedang di updatingWarnaFavorit => $name, $value";
    }

    public function updatedWarnaFavorit($name, $value)
    {
        $this->proses[] = "sedang di updatedWarnaFavorit => $name, $value";
    }

    public function render()
    {
        $this->proses[] = 'sedang di render';
        $this->proses[] = '---';
        return view('livewire.tutorial');
    }
}
