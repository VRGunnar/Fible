<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DiscountSearch extends Component
{
    public $search;
    public $discount = [];

    public function mount(){
        $this->discount = \App\Models\Discount::all();
    }

    public function search() {
        $this->discount = \App\Models\Discount::where('title', 'LIKE', "%{$this->search}%")->get();
    }

    public function render()
    {
        return view('livewire.discount-search');
    }
}