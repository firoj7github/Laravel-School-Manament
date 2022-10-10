@extends('layouts.inc.admin')
@section('content')
<div class="card ">
    <div class="card-header">
        Add Fees
    </div>
    <div class="card-body">
       <form action="{{route('insertfee')}}" method="POST"
       enctype="multipart/form-data"
       >
        @csrf
        <div class="row">
            <div class="col-md-6  mb-3 h-10">
                <label for="">Month</label>
                <input type="text" class="form-control border" name="month">
            </div>
            <div class="col-md-6 mb-3 ">
                <label for="">Reciept Number</label>
                <input type="text" class="form-control border" name="reciept">
            </div>
            <div class="col-md-6 mb-3 ">
                <label for="">Date</label>
                <input type="text" class="form-control border" name="date">
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