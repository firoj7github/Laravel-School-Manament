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
            <img src="{{asset('/img/62.jpg')}}" alt="image here">
            <div class="size">
                <h6>Mst. Rumia Parvin</h6>
                <p>English Teacher</p>
            </div>
        </div>
        <div class="col-md-4 mb-5"> 
            <img src="{{asset('/img/61.jpg')}}" alt="image here">
            <div class="size">
                <h6>Md. Asik Parvez</h6>
                <p>Math Teacher</p>
            </div>
        </div>
        <div class="col-md-4"> 
            <img src="{{asset('/img/63.jpg')}}" alt="image here">
            <div class="size">
                <h6>Mst. Joti Khatun</h6>
                <p>Bangla Teacher</p>
            </div>
        </div>
        <div class="col-md-4"> 
            <img src="{{asset('/img/66.jpg')}}" alt="image here">
            <div class="size">
                <h6>Md. Bondhon Khan</h6>
                <p>Ict Teacher</p>
            </div>
        </div>
        <div class="col-md-4"> 
            <img src="{{asset('/img/53.jpg')}}" alt="image here">
            <div class="size">
                <h6>Md. Firoj Hossain</h6>
                <p>Science Teacher</p>
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