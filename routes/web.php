<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StripeController;
use Illuminate\Http\Request;
use App\Models\Checkout;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Home page
Route::get('/', [HomeController::class, 'index'])->name('home');

//Login page
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'handleLogin']);

//Discount page
Route::get('/discounts', [DiscountController::class, 'index'])->name('discounts');

//Discount detail pages
Route::get('/discounts/discount/{discounts}', [DiscountController::class, 'show']);
Route::get('/discounts/subscription/{subscriptions}', [DiscountController::class, 'showSubscriptions']);

//Profile page
Route::get('/profile', [ProfileController::class, 'index']);
Route::post('logout', [UserController::class, 'logout'])->name('logout');

//Stripe
Route::post('/checkout/discount/{discount}', [StripeController::class, 'checkoutDiscount']);
Route::post('/checkout/subscription/{subscription}', [StripeController::class, 'checkoutSubscription']);

Route::post('webhook', function(Request $request) {
    if($request->type === 'charge.succeeded') {
        try{
            $amount = substr_replace($request->data['object']['amount'], ".", -2, 0);
            // $subscription = Subscription::where('price', substr_replace($amount, ".", -2, 0))->first();
            // $user = User::where('email', $request->data['object']['billing_details']['email'])->first();
            $checkout = new Checkout();
            $checkout->user_id = $request->data['object']['metadata']['user_id'];
            $checkout->stripe_id = $request->data['object']['id'];
            $checkout->price = floatval($amount);
            if($request->data['object']['metadata']['type'] == 'discount') {
                $checkout->discount_id = $request->data['object']['metadata']['discount_id'];
            } elseif($request->data['object']['metadata']['type'] == 'subscription'){
                 $checkout->subscription_id = $request->data['object']['metadata']['subscription_id'];
            }
            $checkout->save();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
});

//Cancelled page
Route::get('/order-cancelled', [StripeController::class, 'cancel'])->name('cancel');