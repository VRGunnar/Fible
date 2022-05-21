<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/', function () {
    return view('index');
});

//Login page
Route::get('/login', function () {
    return view('login');
});

//Discount page
Route::get('/discount', [DiscountController::class, 'index']);


//Profile page
Route::get('/profile', [ProfileController::class, 'index']);

