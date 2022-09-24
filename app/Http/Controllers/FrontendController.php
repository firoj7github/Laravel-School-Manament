<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function front(){
        return view('frontend.frontend');
    }
    public function notice(){
        return view('frontend.notice');
    }
}
