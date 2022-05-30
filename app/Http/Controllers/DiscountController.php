<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function index(){
        $discounts = \DB::table('discounts')->get();
        $subscriptions = \DB::table('subscriptions')->get();
        $data['discount'] = $discounts;
        $data['subscription'] = $subscriptions;
        return view('discount/index', $data);
    }

    public function show(\App\Models\Discount $discounts){
        $data['discount'] = $discounts;
        return view('discount/show', $data);
    }

    public function showSubscriptions(\App\Models\Subscription $subscriptions){
        $data['subscription'] = $subscriptions;
        return view('discount/show', $data);
    }
}
