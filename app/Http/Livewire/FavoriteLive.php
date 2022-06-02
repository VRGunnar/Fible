<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Discount;
use App\Models\Subscription;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;


class FavoriteLive extends Component
{

    public $type;
    public $typeId;
    public $userId;
    public $fill;

    public function mount($type, $typeId) {
        $this->type = $type;
        $this->typeId = $typeId;
        $this->userId = Auth::user()->id;
    }

    private function getColumn($type) {
        if ($type == "Discount") {
            return "discount_id";
        }
        elseif ($type == "Subscription") {
            return "subscription_id";
        }
    }

    private function isFavorited($userId, $typeId, $type) {
        $items = [];
        $column = $this->getColumn($type);
        $favorite = Favorite::where(function($query) use ($userId, $typeId, $column) {
            $query->where('user_id', $userId)->where($column, $typeId);
        })->get();
        
        foreach ($favorite as $f) {
            $items[] = $f;
        }

        if (empty($items)) {
            return false;
        } else {
            return true;
        }
    }

    private function createFavorite($userId, $typeId, $type) {
        $favorite = new Favorite();
        if ($type == "Discount") {
            $favorite->discount_id = $typeId;
        }
        elseif ($type == "Subscription") {
            $favorite->subscription_id = $typeId;
        }
        $favorite->user_id = $userId;
        $favorite->save();
    }

    private function deleteFavorite($userId, $typeId, $type) {
        $column = $this->getColumn($type);
        Favorite::where(function($query) use ($userId, $typeId, $column) {
            $query->where('user_id', $userId)->where($column, $typeId);
        })->delete();
    }

    public function clickFavorite() {
        // dd($this->isFavorited($this->userId, $this->typeId, $this->type));
        if ($this->isFavorited($this->userId, $this->typeId, $this->type) == false) {
            $this->createFavorite($this->userId, $this->typeId, $this->type);
            $this->fill = 'fill-fRed';
        } 
        else {
            $this->deleteFavorite($this->userId, $this->typeId, $this->type);
            $this->fill = 'fill-fGrey';
        }
    }

    public function render()
    {
        return view('livewire.favorite-live');
    }
}
