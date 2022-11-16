@extends('layouts.front')
@extends('layouts.inc.frontnavbar')
@section('content-1')
<div class="cover">
    
</div>
@endsection

@section('content-2')
<h1 class="heading">Chairman Message</h1>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-6 col-12">
            <h3>Message From <br> <span class="text-danger">Chairman</span></h3>
            <div class="state">
            <div class="state-1"></div>
            <div class="state-2"></div>
            </div>
            
            <br>
            <br>
            <p>A culture with strong ethics means we are honest, we operate with integrity and we are transparent in our decisions and actions. Ethics help foster a safe and engaging workplace that positively influences our relationships with each other, our customers, suppliers, shareowners and the communities where we live and work.
                <br> <br>
            We all share responsibility for operating with ethics and integrity, embracing both the spirit and letter of the law. Our individual actions, positive or negative, determine our company culture and reputation. 
            </p>
        </div>
        <div class="col-md-4 col-lg-4 col-12 ms-5">
        <img class="message-img" src="{{asset('/img/50.jpg')}}" alt="image here">
        </div>
        
    </div>
</div>
@endsection

@section('content-3')
<div class="kid-style">
<img src="{{asset('/img/22.png')}}" alt="image here"> 
</div>
@endsection