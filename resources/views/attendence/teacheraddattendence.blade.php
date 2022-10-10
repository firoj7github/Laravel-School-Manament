@extends('layouts.inc.admin')
@section('content')
<div class="card ">
    <div class="card-header">
        Teacher Attendence
    </div>
    <div class="card-body">
       <form action="{{route('insertteacherattendence')}}" method="POST"
       enctype="multipart/form-data"
       >
        @csrf
        <div class="row">
            <div class="col-md-6  mb-3 h-10">
                <label for="">Name</label>
                <input type="text" class="form-control border" name="name">
            </div>
            <div class="col-md-6  mb-3 h-10">
                <label for="">Date</label>
                <input type="text" class="form-control border" name="date">
            </div>
            <div class="col-md-6 mb-3 ">
                <label for="">Month</label>
                <input type="text" class="form-control border" name="month">
            </div>
            <div class="col-md-6 mb-3 ">
                <label for="">Day</label>
                <input type="text" class="form-control border" name="day">
            </div>
            <div class="col-md-6 mb-3 ">
                <label for="">Attendence</label>
                <input type="text" class="form-control border" name="attendence">
            </div>
            
                <div class="col-md-12 ">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>  
        </div>
       </form>
    </div>
</div>
@endsection