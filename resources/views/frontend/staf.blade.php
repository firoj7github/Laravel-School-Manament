@extends('layouts.front')
@extends('layouts.inc.frontnavbar')
@section('content-1')
<div class="cover">
    
</div>
@endsection

@section('content-2')
<h1 class="heading">Teacher List</h1>
<div class="container">
    <div class="row teacher-img">
        <div class="col-md-4 mb-5 teacher-1 "> 
            <img src="{{asset('/img/s1.jpg')}}" alt="image here">
            <div class="size">
                <h6>Md. Asif Iqbal</h6>
                <p>Graphic Designer</p>
            </div>
        </div>
        <div class="col-md-4 mb-5"> 
            <img src="{{asset('/img/s2.jpg')}}" alt="image here">
            <div class="size">
                <h6>Mst. sumona khan</h6>
                <p>Educational Assignment</p>
            </div>
        </div>
        <div class="col-md-4"> 
            <img src="{{asset('/img/s3.jpg')}}" alt="image here">
            <div class="size">
                <h6>Md. Johir Ali</h6>
                <p>Accounts</p>
            </div>
        </div>
        <div class="col-md-4"> 
            <img src="{{asset('/img/s4.jpg')}}" alt="image here">
            <div class="size">
                <h6>Md. Belal Ajom</h6>
                <p>Librarian</p>
            </div>
        </div>
        <div class="col-md-4"> 
            <img src="{{asset('/img/s5.jpg')}}" alt="image here">
            <div class="size">
                <h6>Md. Sehab Ali</h6>
                <p>Computer Operator</p>
            </div>
        </div>
        
        
    </div>
</div>
@endsection
@section('content-3')
<div class="kid-style">
<img src="{{asset('/img/22.png')}}" alt="image here"> 
</div>
@endsection