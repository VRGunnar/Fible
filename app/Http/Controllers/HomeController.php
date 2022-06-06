<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $hot_discounts = \DB::table('discounts')->orderBy('used_count', 'DESC')->limit(2)->get();
        $hot_subscriptions = \DB::table('subscriptions')->orderBy('used_count', 'DESC')->limit(2)->get();
        $favorites = [];
        $fill = 'fill';
        
        foreach($hot_discounts as $d) {
            $d->$fill = 'fill-fGrey';
            $favorite = Favorite::where(function($query) use ($d) {
                $query->where('user_id', Auth::user()->id)->where('discount_id', $d->id);
            })->get();
            foreach($favorite as $f) {
                $d->$fill = 'fill-fRed';
                array_push($favorites, $d);
            }
        }

        $data['hot_discount'] = $hot_discounts;
        $data['hot_subscription'] = $hot_subscriptions;
        $data['favorites'] = $favorites;


        return view('/index', $data);
    }
}
