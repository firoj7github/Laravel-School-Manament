@extends('layouts.inc.admin')
@section('content')
<div class="card ">
    <div class="card-header">
        Add Salary
    </div>
    <div class="card-body">
       <form action="{{route('insertsalary')}}" method="POST"
       enctype="multipart/form-data"
       >
        @csrf
        <div class="row">
            <div class="col-md-6  mb-3 h-10">
                <label for="">Name</label>
                <input type="text" class="form-control border" name="teacher">
            </div>
            <div class="col-md-6 mb-3 ">
                <label for="">Salary</label>
                <input type="text" class="form-control border" name="salary">
            </div>
            <div class="col-md-6 mb-3 ">
                <label for="">Month</label>
                <input type="text" class="form-control border" name="month">
            </div>
            <div class="col-md-6 mb-3 ">
                <label for="">Status</label>
                <input type="text" class="form-control border" name="status">
            </div>
            
            <div class="col-md-12 ">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>  
        </div>
       </form>
    </div>
</div>
@endsection