<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
}
