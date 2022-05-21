<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function index(){
        $discount = \DB::table('discounts')->get();
        $data['discount'] = $discount;
        return view('discount/index', $data);
    }
}
