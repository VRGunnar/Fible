<?php

namespace App\Http\Controllers;


use App\Models\Checkout;
use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $checkouts = Checkout::where('user_id', Auth::user()->id)->whereNotNull('subscription_id')->get();
        $users = \DB::table('users')->where('id', Auth::user()->id)->get();

        $activeSubscriptions = [];
        $date = 'date';
        foreach($checkouts as $c) {
            $activeSubscription = Subscription::where('id', $c->subscription_id)->first();
            $activeSubscription->$date = Carbon::parse($c->created_at->format('d-m-Y H:i:s'))
            ->addSeconds($activeSubscription->duration)
            ->format('d-m-Y H:i:s'); 
            array_push($activeSubscriptions, $activeSubscription);
        }
        $data['user'] = $users;
        $data['activeSubscriptions'] = $activeSubscriptions;
        return view('Profile/index', $data);
    }
}
