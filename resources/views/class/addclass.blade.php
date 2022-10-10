@extends('layouts.inc.admin')
@section('content')
<div class="card ">
    <div class="card-header">
        Add Subject
    </div>
    <div class="card-body">
       <form action="{{route('insertclass')}}" method="POST"
       enctype="multipart/form-data"
       >
        @csrf
        <div class="row">
            <div class="col-md-6  mb-3 h-10">
                <label for="">Teacher Name</label>
                <input type="text" class="form-control border" name="teacher">
            </div>
            <div class="col-md-6 mb-3 ">
                <label for="">Subject</label>
                <input type="text" class="form-control border" name="subject">
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