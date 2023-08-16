<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Properties extends Component
{
    public $names = ['jolly','manik','bingo'];



    // public function mount()
    // {
    //     $this->name = 
    // }

    public function render()
    {
        return view('livewire.properties');
    }

   
}
