<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Livewire\Component;

class AdminHomeSliderComponent extends Component
{
    public function deleteslider($slide_id)
    {
        $slider = HomeSlider::find($slide_id);
        $slider->delete();
        session()->flash('message', 'The Slider Has Been Deleted Successfully');
    }
    public function render()
    {
        $sliders = HomeSlider::all();
        //return view('livewire.admin.admin-home-slider-component', ['sliders' => $sliders])->layout('layouts.base');
        return view('livewire.admin.admin-home-slider-component', ['sliders' => $sliders])->layout('layouts.admin');
    }
}
