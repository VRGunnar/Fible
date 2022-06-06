<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;
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


        $data['hot_discount'] = $hot_discounts;
        $data['hot_subscription'] = $hot_subscriptions;


        return view('/index', $data);
    }
}
