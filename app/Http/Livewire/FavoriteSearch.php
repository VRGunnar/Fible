<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FavoriteSearch extends Component
{
    public $search;
    public $favo = [];

    public function mount(){
        $this->favo = \App\Models\Favorite::all();
    }

    public function search() {
        $this->favo = \App\Models\Favorite::where('title', 'LIKE', "%{$this->search}%")->get();
    }

    public function render()
    {
        return view('livewire.favorite-search');
    }
}
