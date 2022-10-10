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
    public function event(){
        return view('frontend.event');
    }
    public function governing(){
        return view('frontend.governing');
    }
    public function message(){
        return view('frontend.message');
    }
    public function teacher(){
        return view('frontend.teacher');
    }
    public function staf(){
        return view('frontend.staf');
    }
    public function photogallery(){
        return view('frontend.photogallery');
    }
    public function about(){
        return view('frontend.about');
    }
    public function classroutine(){
        return view('frontend.classroutine');
    }
    public function syllabus(){
        return view('frontend.syllabus');
    }
    public function tour(){
        return view('frontend.tour');
    }
    public function adminlogin(){
        return view('login.adminlogin');
    }
    public function studentlogin(){
        return view('login.studentlogin');
    }
    public function teacherlogin(){
        return view('login.teacherlogin');
    }
}
