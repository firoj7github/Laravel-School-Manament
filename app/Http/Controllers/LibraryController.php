<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Library;
use App\Models\Attendence;
use App\Models\Teacherattendence;
use App\Models\Teacherclass;
use App\Models\Fee;
use App\Models\Subject;
use App\Models\Salary;
use App\Models\View;

class LibraryController extends Controller
{
    public function library(){
        return view('library.addlibrary');
    }
    public function addsubject(){
        return view('subject.addsubject');
    }
    public function addclass(){
        return view('class.addclass');
    }
    public function addsalary(){
        return view('salary.addsalary');
    }
    public function addattendence(){
        return view('attendence.addattendence');
    }
    public function teacheraddattendence(){
        return view('attendence.teacheraddattendence');
    }
    public function addfee(){
        return view('fee.addfee');
    }
    public function insert(Request $request){
        $library = new Library();
        $library->name=$request->input('name');
        $library->get=$request->input('get');
        $library->return=$request->input('return');
        $library->status=$request->input('status');
        $library->save();
        return redirect()->back();
    }
    public function insertattendence(Request $request){
        $attendence = new Attendence();
        $attendence ->date=$request->input('date');
        $attendence ->month=$request->input('month');
        $attendence ->day=$request->input('day');
        $attendence ->attendence=$request->input('attendence');
        $attendence ->save();
        return redirect()->back();
    }
    public function insertteacherattendence(Request $request){
        $attendence = new Teacherattendence();
        $attendence ->name=$request->input('name');
        $attendence ->date=$request->input('date');
        $attendence ->month=$request->input('month');
        $attendence ->day=$request->input('day');
        $attendence ->attendence=$request->input('attendence');
        $attendence ->save();
        return redirect()->back();
    }
    public function insertfee(Request $request){
        $fees = new Fee();
        $fees ->month=$request->input('month');
        $fees ->reciept=$request->input('reciept');
        $fees ->date=$request->input('date');
        $fees ->status=$request->input('status');
        $fees ->save();
        return redirect()->back();
    }
    public function insertsubject(Request $request){
        $subject = new Subject();
        $subject ->serial=$request->input('serial');
        $subject ->name=$request->input('name');
        $subject ->code=$request->input('code');
        $subject ->save();
        return redirect()->back();
    }
    public function insertclass(Request $request){
        $class = new Teacherclass();
        $class ->teacher=$request->input('teacher');
        $class ->subject=$request->input('subject');
        $class ->code=$request->input('code');
        $class ->save();
        return redirect()->back();
        
    }
    public function insertsalary(Request $request){
        $salary = new Salary();
        $salary ->teacher=$request->input('teacher');
        $salary ->salary=$request->input('salary');
        $salary ->month=$request->input('month');
        $salary ->status=$request->input('status');
        $salary ->save();
        return redirect()->back();
    }
    

    public function subjecttview(){
        $student=Subject::all();
        return view('subject.subjecttview', compact('student'));
    }
    public function teacherclassview(){
        $student=Teacherclass::all();
        return view('subject.teacherclassview', compact('student'));
    }
    public function libraryview(){
        $student=Library::all();
        return view('library.libraryview', compact('student'));
    }
    public function attendenceview(){
        $student=Attendence::all();
        return view('attendence.attendenceview', compact('student'));
    }
    public function teacherattendenceview(){
        $teacher=Teacherattendence::all();
        return view('attendence.teacherattendenceview', compact('teacher'));
    }
    public function feeview(){
        $student=Fee::all();
        return view('fee.feeview', compact('student'));
    }
    public function viewsalary(){
        $salary=Salary::all();
        return view('salary.viewsalary', compact('salary'));
    }
    public function teacherview(){
        $teachers=View::all();
        return view('teacher.teacherview', compact('teachers'));
    }

}
