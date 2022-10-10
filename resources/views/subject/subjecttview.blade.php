@extends('layouts.inc.student')
@section('content')
<div class="card">
    <div class="card-header">
    <h4>Subject</h4>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th><h5 class="text-success">Serial</h5></th>
                    <th><h5 class="text-success">Name</h5></th>
                    <th><h5 class="text-success">Code</h5></th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach( $student as $item)
                <tr class="ms-3">
                    <td ><h6 class="ms-3">{{$item->serial}}</h6> </td>
                    <td ><h6 class="ms-3">{{$item->name}}</h6></td>
                    <td ><h6 class="ms-3">{{$item->code}}</h6></td>
                    
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection