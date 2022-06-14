<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Discount;
use App\Models\Subscription;
use App\Models\Company;

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
        $size=$request->file('logo')->getSize();
        $name=$request->file('logo')->getClientOriginalName();
        $request->file('logo')->storeAs('public/images/', $name);
        
        // $company = new Company();
        // $company->name->input('naam');
        // $company->website->input('website');
        // $company->account_number->input('account_number');
        // $company->save();


        if($request->input('category') == 'korting'){
            $korting = new Discount();
            $korting->title = $request->input('title');
            $korting->description = $request->input('description');
            $korting->price = $request->input('price');
            $korting->logo = $name;
            $korting->used_count = 0;
            $korting->save();
        } else{
            $subscription = new Subscription();
            $subscription->title = $request->input('title');
            $subscription->description = $request->input('description');
            $subscription->price = $request->input('price');
            $subscription->logo = $name;
            $subscription->duration = $request->input('duration');
            $subscription->used_count = 0;
            $subscription->save();
            
        }

        return redirect('dashboard/');

    }
}
