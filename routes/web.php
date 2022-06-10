<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

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
Route::get('/discounts', [DiscountController::class, 'index']);

//Discount detail pages
Route::get('/discounts/discount/{discounts}', [DiscountController::class, 'show']);
Route::get('/discounts/subscription/{subscriptions}', [DiscountController::class, 'showSubscriptions']);



//Profile page
Route::get('profile', [ProfileController::class, 'index']);
Route::post('logout', [UserController::class, 'logout'])->name('logout');
