@extends('layouts.inc.teacherdas')
@section('content')
<div class="card ">
    <div class="card-header">
    <h4>Teacher Attendence</h4>
    </div>
    <div class="card-body ">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th><h5 class="text-success">Date</h5></th>
                    <th><h5 class="text-success">Month</h5></th>
                    <th><h5 class="text-success">Day</h5></th>
                    <th><h5 class="text-success">Attendence</h5></th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach( $teacher as $item)
                <tr class="ms-3">
                    <td ><h6 class="ms-3">{{$item->date}}</h6> </td>
                    <td ><h6 class="ms-3">{{$item->month}}</h6></td>
                    <td ><h6 class="ms-3">{{$item->day}}</h6></td>
                    <td ><h6 class="text-danger bg-warning w-30 h-5  ms-3 p-2 rounded-3">{{$item->attendence}}</h6> </td>
                    
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection