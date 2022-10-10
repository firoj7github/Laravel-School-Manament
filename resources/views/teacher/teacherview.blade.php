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
                    <th><h5 class="text-success">Name</h5></th>
                    <th><h5 class="text-success">subject</h5></th>
                    <th><h5 class="text-success">Address</h5></th>
                    <th><h5 class="text-success">Phone</h5></th>
                    
                    
                </tr>
            </thead>
            <tbody>
                @foreach( $teachers as $item)
                <tr class="ms-3">
                    <td ><h6 class="ms-3">{{$item->teacher}}</h6> </td>
                    <td ><h6 class="ms-3">{{$item->subject}}</h6> </td>
                    <td ><h6 class="ms-3">{{$item->address}}</h6></td>
                    <td ><h6 class="ms-3">{{$item->phone}}</h6></td>
                    
                    
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection