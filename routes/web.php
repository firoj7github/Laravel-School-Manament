<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', [App\Http\Controllers\FrontendController::class, 'front'])->name('/');
Route::get('gensyllabus', [App\Http\Controllers\PdfController::class, 'gensyllabus'])->name('gensyllabus');
Route::get('genpdf', [App\Http\Controllers\PdfController::class, 'genpdf'])->name('genpdf');
Route::get('downpdf', [App\Http\Controllers\PdfController::class, 'downpdf'])->name('downpdf');
Route::get('downsyllabus', [App\Http\Controllers\PdfController::class, 'downsyllabus'])->name('downsyllabus');
Route::get('notice', [App\Http\Controllers\FrontendController::class, 'notice'])->name('notice');
Route::get('classroutine', [App\Http\Controllers\FrontendController::class, 'classroutine'])->name('classroutine');
Route::get('syllabus', [App\Http\Controllers\FrontendController::class, 'syllabus'])->name('syllabus');
Route::get('event', [App\Http\Controllers\FrontendController::class, 'event'])->name('event');
Route::get('governing', [App\Http\Controllers\FrontendController::class, 'governing'])->name('governing');
Route::get('message', [App\Http\Controllers\FrontendController::class, 'message'])->name('message');
Route::get('teacher', [App\Http\Controllers\FrontendController::class, 'teacher'])->name('teacher');
Route::get('staf', [App\Http\Controllers\FrontendController::class, 'staf'])->name('staf');
Route::get('photogallery', [App\Http\Controllers\FrontendController::class, 'photogallery'])->name('photogallery');
Route::get('tour', [App\Http\Controllers\FrontendController::class, 'tour'])->name('tour');
Route::get('admindashboard', [App\Http\Controllers\DashboardController::class, 'admindashboard'])->name('admindashboard');
Route::get('teacherdashboard', [App\Http\Controllers\DashboardController::class, 'teacher'])->name('teacherdashboard');
Route::get('studentdashboard', [App\Http\Controllers\DashboardController::class, 'student'])->name('studentdashboard');
Route::get('about', [App\Http\Controllers\FrontendController::class, 'about'])->name('about');
Route::get('adminlogin', [App\Http\Controllers\FrontendController::class, 'adminlogin'])->name('adminlogin');
Route::get('studentlogin', [App\Http\Controllers\FrontendController::class, 'studentlogin'])->name('studentlogin');
Route::get('teacherlogin', [App\Http\Controllers\FrontendController::class, 'teacherlogin'])->name('teacherlogin');



// asdmin dashboard

Route::get('addlibrary', [App\Http\Controllers\LibraryController::class, 'library'])->name('addlibrary');
Route::get('addsubject', [App\Http\Controllers\LibraryController::class, 'addsubject'])->name('addsubject');
Route::get('addclass', [App\Http\Controllers\LibraryController::class, 'addclass'])->name('addclass');
Route::get('addsalary', [App\Http\Controllers\LibraryController::class, 'addsalary'])->name('addsalary');
Route::get('addattendence', [App\Http\Controllers\LibraryController::class, 'addattendence'])->name('addattendence');
Route::get('teacheraddattendence', [App\Http\Controllers\LibraryController::class, 'teacheraddattendence'])->name('teacheraddattendence');
Route::get('addfee', [App\Http\Controllers\LibraryController::class, 'addfee'])->name('addfee');
Route::post('insert', [App\Http\Controllers\LibraryController::class, 'insert'])->name('insert');
Route::post('insertattendence', [App\Http\Controllers\LibraryController::class, 'insertattendence'])->name('insertattendence');
Route::post('insertteacherattendence', [App\Http\Controllers\LibraryController::class, 'insertteacherattendence'])->name('insertteacherattendence');
Route::post('insertfee', [App\Http\Controllers\LibraryController::class, 'insertfee'])->name('insertfee');
Route::post('insertsubject', [App\Http\Controllers\LibraryController::class, 'insertsubject'])->name('insertsubject');
Route::post('insertclass', [App\Http\Controllers\LibraryController::class, 'insertclass'])->name('insertclass');
Route::post('insertsalary', [App\Http\Controllers\LibraryController::class, 'insertsalary'])->name('insertsalary');






Route::get('subjecttview', [App\Http\Controllers\LibraryController::class, 'subjecttview'])->name('subjecttview');
Route::get('teacherclassview', [App\Http\Controllers\LibraryController::class, 'teacherclassview'])->name('teacherclassview');
Route::get('libraryview', [App\Http\Controllers\LibraryController::class, 'libraryview'])->name('libraryview');
Route::get('attendenceview', [App\Http\Controllers\LibraryController::class, 'attendenceview'])->name('attendenceview');
Route::get('teacherattendenceview', [App\Http\Controllers\LibraryController::class, 'teacherattendenceview'])->name('teacherattendenceview');
Route::get('feeview', [App\Http\Controllers\LibraryController::class, 'feeview'])->name('feeview');
Route::get('viewsalary', [App\Http\Controllers\LibraryController::class, 'viewsalary'])->name('viewsalary');
Route::get('teacherview', [App\Http\Controllers\LibraryController::class, 'teacherview'])->name('teacherview');




