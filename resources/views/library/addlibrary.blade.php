@extends('layouts.inc.admin')
@section('content')
<div class="card ">
    <div class="card-header">
        Add Library
    </div>
    <div class="card-body">
       <form action="{{route('insert')}}" method="POST"
       enctype="multipart/form-data"
       >
        @csrf
        <div class="row">
            <div class="col-md-6  mb-3 h-10">
                <label for="">Name</label>
                <input type="text" class="form-control border" name="name">
            </div>
            
            <div class="col-md-6 mb-3 ">
                <label for="">Get</label>
                <input type="text" class="form-control border" name="get">
            </div>
            <div class="col-md-6 mb-3 ">
                <label for="">Return</label>
                <input type="text" class="form-control border" name="return">
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