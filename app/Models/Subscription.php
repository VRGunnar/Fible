<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function favorites() {
        return $this->hasMany(Favorite::class);
    }

    public function checkouts() {
        return $this->hasMany(Checkout::class);
    }
}
