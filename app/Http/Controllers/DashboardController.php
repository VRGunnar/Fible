<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Discount;
use App\Models\Subscription;

class DashboardController extends Controller
{
    public function index(){
        return view('Dashboard/index');
    }

    public function download(){
        $filename = 'Contract_fible.pdf';
        $tempfile = tempname(sys_get_temp_dir(), $filename);
        copy('http://localhost/dashboard/Contract_fible.pdf', $tempfile);
        return response()->download($tempfile, $filename);
    }

    public function create(){
        // form
        return view('dashboard/create');
    }

    public function store(Request $request){
        //db insert
        if($request->input('category') == 'korting'){
            $korting = new Discount();
            $korting->title = $request->input('title');
            $korting->description = $request->input('description');
            $korting->price = $request->input('price');
            $korting->logo = $request->input('logo');
            $korting->used_count = 0;
            // $korting->name = $request->input('discount');
            // $korting->name = $request->input('category');
            // $korting->name = $request->input('location');
            // $korting->name = $request->input('duration');
            $korting->save();
        } else{
            $subscription = new Subscription();
            $subscription->title = $request->input('title');
            $subscription->description = $request->input('description');
            $subscription->price = $request->input('price');

            // if($request->file('logo')){
            //     $file= $request->file('logo');
            //     $filename= date('YmdHi').$file->getClientOriginalName();
            //     $file-> move(public_path('public/Image'), $filename);
            //     $subscription['logo']= $filename;
            // }
            //https://codesource.io/complete-laravel-8-image-upload-tutorial-with-example/

            $subscription->logo = $request->input('logo');
            
            $subscription->duration = $request->input('duration');
            $subscription->used_count = 0;
            $subscription->save();
        }

        return redirect('dashboard/');

    }
}
