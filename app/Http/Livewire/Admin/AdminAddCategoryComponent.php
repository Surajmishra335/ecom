<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;
use Symfony\Contracts\Service\Attribute\Required;

class AdminAddCategoryComponent extends Component
{
    public $name;

    public $slug;

    public function genrateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [

            'name' => 'required',

            'slug' => 'required|unique:categories',
        ]);
    }

    public function storeCategory()
    {
        $this->validate([

            'name' => 'required',

            'slug' => 'required|unique:categories',
        ]);
        $category = new Category();

        $category->name = $this->name;

        $category->slug = $this->slug;

        $category->save();

        session()->flash('message', 'Category has been created sucessfully');
    }

    public function render()
    {

        //return view('livewire.admin.admin-add-category-component')->layout('layouts.base');
        return view('livewire.admin.admin-add-category-component')->layout('layouts.admin');
    }
}
