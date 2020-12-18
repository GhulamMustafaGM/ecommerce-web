<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DetailsComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $proudct = Product::where('slug', $this->slug)->first();
        return view('livewire.details-component', ['product' =>$product])->layout('layouts.base');
    }
}
