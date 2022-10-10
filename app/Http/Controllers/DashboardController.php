<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admindashboard(){
        return view('dashboard.admindashboard');
    }
    public function teacher(){
        return view('dashboard.teacherdashboard');
    }
    public function student(){
        return view('dashboard.studentdashboard');
    }


}
