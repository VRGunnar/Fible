<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class DiscountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $discounts = \DB::table('discounts')->get();
        $subscriptions = \DB::table('subscriptions')->get();
        $favorites = [];
        $fill = 'fill';
        $type = 'type';
        foreach($discounts as $d) {
            $d->$fill = 'fill-fGrey';
            $favorite = Favorite::where(function($query) use ($d) {
                $query->where('user_id', Auth::user()->id)->where('discount_id', $d->id);
            })->get();
            foreach($favorite as $f) {
                $d->$fill = 'fill-fRed';
                $d->$type = 'discount';
                array_push($favorites, $d);
            }
        }
        foreach($subscriptions as $s) {
            $s->$fill = 'fill-fGrey';
            $favorite = Favorite::where(function($query) use ($s) {
                $query->where('user_id', Auth::user()->id)->where('subscription_id', $s->id);
            })->get();
            foreach($favorite as $f) {
                $s->$fill = 'fill-fRed';
                $s->$type = 'subscription';
                array_push($favorites, $s);
            }
        }
        $data['discount'] = $discounts;
        $data['subscription'] = $subscriptions;
        $data['favorites'] = $favorites;
        return view('discounts/index', $data);
    }

    public function show(\App\Models\Discount $discounts){
        $fill = 'fill';
        $discounts->$fill = 'fill-fGrey';
        $favorite = Favorite::where(function($query) use ($discounts) {
            $query->where('user_id', Auth::user()->id)->where('discount_id', $discounts->id);
        })->get();
        foreach($favorite as $f) {
            $discounts->$fill = 'fill-fRed';
        }


        $currentURL = url()->current();

        $shareComponent = \Share::page(
            $currentURL, 'Check deze studentenkorting op Fible!' //URL van detailpagina + bericht hier
        )
        ->facebook()
        ->twitter()
        ->whatsapp();    
        
        $data = compact('shareComponent');
        $data['discount'] = $discounts;
      
        return view('discounts/discount/show', $data);
    }

    public function showSubscriptions(\App\Models\Subscription $subscriptions){
        $fill = 'fill';
        $subscriptions->$fill = 'fill-fGrey';
        $favorite = Favorite::where(function($query) use ($subscriptions) {
            $query->where('user_id', Auth::user()->id)->where('subscription_id', $subscriptions->id);
        })->get();
        foreach($favorite as $f) {
            $subscriptions->$fill = 'fill-fRed';
        }
        $data['subscription'] = $subscriptions;
        return view('discounts/subscription/showSubscriptions', $data);
    }
}
