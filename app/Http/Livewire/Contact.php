<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public function render()
    {
        $data = [
            'name' => 'arafat','mobile no'=>'098876543'];

        return view('livewire.contact',['data'=>$data]);
    }
}
