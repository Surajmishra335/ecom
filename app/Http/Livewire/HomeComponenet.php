<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomeComponenet extends Component
{
    public function render()
    {
        return view('livewire.home-componenet')->layout('layouts.base');
    }
}
