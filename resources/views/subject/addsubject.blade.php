@extends('layouts.inc.admin')
@section('content')
<div class="card ">
    <div class="card-header">
        Add Subject
    </div>
    <div class="card-body">
       <form action="{{route('insertsubject')}}" method="POST"
       enctype="multipart/form-data"
       >
        @csrf
        <div class="row">
            <div class="col-md-6  mb-3 h-10">
                <label for="">Serial</label>
                <input type="text" class="form-control border" name="serial">
            </div>
            <div class="col-md-6 mb-3 ">
                <label for="">name</label>
                <input type="text" class="form-control border" name="name">
            </div>
            <div class="col-md-6 mb-3 ">
                <label for="">Subject Code</label>
                <input type="text" class="form-control border" name="code">
            </div>
            
            <div class="col-md-12 ">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>  
        </div>
       </form>
    </div>
</div>
@endsection