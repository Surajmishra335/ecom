<?php

namespace App\Http\Livewire;

use App\Models\HomeSlider;
use Livewire\Component;

class HomeComponenet extends Component
{
    public function render()
    {
        $sliders = HomeSlider::where('status', 1)->get();

        return view('livewire.home-componenet', ['sliders' => $sliders])->layout('layouts.base');
    }
}
