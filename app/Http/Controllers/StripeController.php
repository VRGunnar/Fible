<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Stripe\Stripe;
use App\Models\Discount;
use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;

class StripeController extends Controller
{
    public function checkoutDiscount($id) {
        // We grab the Stripe key information we added in the .env file
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $discount = Discount::where('id', $id)->first();
        $pieces = explode(".", sprintf("%.2f", $discount->price));
        // Creates the Stripe session
        $session = \Stripe\Checkout\Session::create([
            'line_items' => [[
              'price_data' => [
                'currency' => 'eur',
                'product_data' => [
                  'name' => $discount->title,
                  'description' => $discount->description,
                ],
                'unit_amount' => $pieces[0] . $pieces[1],
              ],
              'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => 'https://example.com/success',
            'cancel_url' => 'https://example.com/cancel',
            'payment_intent_data' => [
                'metadata' => [
                    'discount_id' => $id,
                    'user_id' => Auth::user()->id,
                    'type' => 'discount'
                ]
            ]
          ]);

        // Return the Stripe Session id so the fetch command in our frontend redirects users to Stripe's checkout page
        return response()->json(['id' => $session->id]);
    }

    public function checkoutSubscription($id) {
        // We grab the Stripe key information we added in the .env file
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $subscription = Subscription::where('id', $id)->first();
        $pieces = explode(".", sprintf("%.2f", $subscription->price));
        // Creates the Stripe session
        $session = \Stripe\Checkout\Session::create([
            'line_items' => [[
              'price_data' => [
                'currency' => 'eur',
                'product_data' => [
                  'name' => $subscription->title,
                  'description' => $subscription->description,
                ],
                'unit_amount' => $pieces[0] . $pieces[1],
              ],
              'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => 'http://localhost/profile',
            'cancel_url' => 'https://example.com/cancel',
            'payment_intent_data' => [
                'metadata' => [
                    'subscription_id' => $id,
                    'user_id' => Auth::user()->id,
                    'type' => 'subscription'
                ]
            ]
          ]);

        // Return the Stripe Session id so the fetch command in our frontend redirects users to Stripe's checkout page
        return response()->json(['id' => $session->id]);
    }

    public function cancel() {
      return view('cancel');
    }
}
