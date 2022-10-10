@extends('layouts.front')
@extends('layouts.inc.frontnavbar')
@section('content-1')
<div class="cover">
    
</div>
@endsection

@section('content-2')
<h1 class="heading">Photo Gallery</h1>
<div class="container">
    <div class="row gallery-img">
        <div class="col-md-4 mb-1 gallery-1 "> 
            <img src="{{asset('/img/p1.jpg')}}" alt="image here">
            <h5 class="ms-3">Back To School</h5>
        </div>
        <div class="col-md-4 mb-1 gallery-1"> 
            <img src="{{asset('/img/p2.jpg')}}" alt="image here">
            <h5 class="ms-3">Sports</h5>
        </div>
        <div class="col-md-4 gallery-1"> 
            <img src="{{asset('/img/p3.jpg')}}" alt="image here">
            <h5 class="ms-3">Class</h5>
        </div>
        <div class="col-md-4 gallery-1"> 
            <img src="{{asset('/img/p4.jpg')}}" alt="image here">
            <h5 class="ms-3">Art</h5>
        </div>
        <div class="col-md-4 gallery-1"> 
            <img src="{{asset('/img/p5.jpg')}}" alt="image here">
            <h5 class="ms-3">Tiffin</h5>
        </div>
        <div class="col-md-4 gallery-1"> 
            <img src="{{asset('/img/p7.jpg')}}" alt="image here">
            <h5 class="ms-3">Music</h5>
        </div>
        
        
    </div>
</div>
@endsection
@section('content-3')
<div class="kid-style">
<img src="{{asset('/img/22.png')}}" alt="image here"> 
</div>
@endsection