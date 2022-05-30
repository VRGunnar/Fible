<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Models\Subscription;

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
Route::get('/', [HomeController::class, 'index']);

//Login page
Route::get('/login', function () {
    return view('login');
});

//Discount page
Route::get('/discount', [DiscountController::class, 'index']);

//Discount detail pages
Route::get('/discount/{discounts}', [DiscountController::class, 'show']);
Route::get('/discount/{subscriptions}', [DiscountController::class, 'showSubscriptions']);



//Profile page
Route::get('/profile', [ProfileController::class, 'index']);

