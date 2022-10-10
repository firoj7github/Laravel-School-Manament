@extends('layouts.front')
@extends('layouts.inc.frontnavbar')
@section('content-1')
<div class="container">
  
  <div class="row mt-5">
    <div class="col-md-6 mission-1">
    <h3 class="font-warning animate__animated animate__fadeInLeft ">MISSION</h3>
    <div class="longs">
      <div class="long-1"></div>
      <div class="long-2"></div>
    </div>
    <br>
   
    <h6>Provide International Type Education</h6>
    <span>This Academy is a community of learners including students, parents and staff who are dedicated to creating an academically rigorous, culturally caring and inclusive learning environment. We are Reaching Excellence in Academics and Changing History!</span>
    <br>
    <br>
    <h3 class="animate__animated animate__fadeInLeft ">VISSION</h3>
    <div class="longs">
      <div class="long-1"></div>
      <div class="long-2"></div>
    </div>
    <br>
    
    <h6>Provide International Type Education</h6>
    <span>This Academy is a community of learners including students, parents and staff who are dedicated to creating an academically rigorous, culturally caring and inclusive learning environment. We are Reaching Excellence in Academics and Changing History!</span>
    </div>
    <div class="col-md-6 school-img ">
    <img src="{{asset('/img/t2.png')}}" alt="image here">
    </div>
  </div>
</div>
@endsection