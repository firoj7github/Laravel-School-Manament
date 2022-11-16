@extends('layouts.inc.teacherdas')
@section('content')
<div class="card ">
    <div class="card-header">
    <h4>Teacher Salary</h4>
    </div>
    <div class="card-body ">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th><h5 class="text-success">Teacher Name</h5></th>
                    <th><h5 class="text-success">Salary</h5></th>
                    <th><h5 class="text-success">Month</h5></th>
                    <th><h5 class="text-success">Status</h5></th>
                    
                    
                </tr>
            </thead>
            <tbody>
                @foreach( $salary as $item)
                <tr class="ms-3">
                    <td ><h6 class="ms-3 ">{{$item->teacher}}</h6> </td>
                    <td ><h6 class="ms-3">{{$item->salary}}</h6> </td>
                    <td ><h6 class="ms-3">{{$item->month}}</h6></td>
                    <td ><h6 class="ms-3 bg-warning w-50 p-2 rounded">{{$item->status}}</h6></td>
                    
                    
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection