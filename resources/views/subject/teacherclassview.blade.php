@extends('layouts.inc.teacherdas')
@section('content')
<div class="card ">
    <div class="card-header">
    <h4>Teacher Class</h4>
    </div>
    <div class="card-body ">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th><h5 class="text-success">Teacher Name</h5></th>
                    <th><h5 class="text-success">subject</h5></th>
                    <th><h5 class="text-success">Code</h5></th>
                    
                    
                </tr>
            </thead>
            <tbody>
                @foreach( $student as $item)
                <tr class="ms-3">
                    <td ><h6 class="ms-3">{{$item->teacher}}</h6> </td>
                    <td ><h6 class="ms-3">{{$item->subject}}</h6> </td>
                    <td ><h6 class="ms-3">{{$item->code}}</h6></td>
                    
                    
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection