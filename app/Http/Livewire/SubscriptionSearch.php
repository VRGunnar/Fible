<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SubscriptionSearch extends Component
{
    public $search;
    public $subscription = [];

    public function mount(){
        $this->subscription = \App\Models\Subscription::all();
    }

    public function search() {
        $this->subscription = \App\Models\Subscription::where('title', 'LIKE', "%{$this->search}%")->get();
    }

    public function render()
    {
        return view('livewire.subscription-search');
    }
}
