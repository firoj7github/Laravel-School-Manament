@extends('layouts.front')
@extends('layouts.inc.frontnavbar')
@section('content-1')
<div class="cover">
    
</div>
@endsection

@section('content-2')
<h1 class="headingss"> School Tour</h1>
<div class="container">
    <div class="row gallery-img">
        <div class="col-lg-4 col-md-6 col-12 mb-1 gallery-1 "> 
            <img src="{{asset('/img/o1.jpg')}}" alt="image here">
            <h5 class="ms-3">Lalbagh(2016)</h5>
        </div>
        <div class="col-lg-4 col-md-6 col-12 mb-1 gallery-1"> 
            <img src="{{asset('/img/o2.jpg')}}" alt="image here">
            <h5 class="ms-3">Ahsan Monjil(2017)</h5>
        </div>
        <div class="col-lg-4 col-md-6 col-12 gallery-1"> 
            <img src="{{asset('/img/o3.png')}}" alt="image here">
            <h5 class="ms-3">Centmartin(2018)</h5>
        </div>
        <div class="col-lg-4 col-md-6 col-12 gallery-1"> 
            <img src="{{asset('/img/o4.png')}}" alt="image here">
            <h5 class="ms-3">Sundarban(2019)</h5>
        </div>
        <div class="col-lg-4 col-md-6 col-12 gallery-1"> 
            <img src="{{asset('/img/o5.jpg')}}" alt="image here">
            <h5 class="ms-3">Shat Gombuj Mosque(2020)</h5>
        </div>
        <div class="col-lg-4 col-md-6 col-12 gallery-1"> 
            <img src="{{asset('/img/o6.jpg')}}" alt="image here">
            <h5 class="ms-3">Nilachal Bandarban(2021)</h5>
        </div>
        
        
    </div>
</div>
@endsection
@section('content-3')
<div class="kid-style">
<img src="{{asset('/img/22.png')}}" alt="image here"> 
</div>
@endsection