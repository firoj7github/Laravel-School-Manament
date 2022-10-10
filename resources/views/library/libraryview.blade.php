@extends('layouts.inc.student')
@section('content')
<div class="card">
    <div class="card-header">
    <h4>Library</h4>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th><h5 class="text-success"> Book Name</h5></th>
                    <th><h5 class="text-success">Get</h5></th>
                    <th><h5 class="text-success">Return</h5></th>
                    <th><h5 class="text-success">Status</h5></th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach( $student as $item)
                <tr class="ms-3">
                    <td ><h6 class="ms-3">{{$item->name}}</h6> </td>
                    <td ><h6 class="ms-3">{{$item->get}}</h6> </td>
                    <td ><h6 class="ms-3">{{$item->return}}</h6></td>

                   
                    <td ><h6 class="text-danger bg-warning w-50 h-5  ms-2 p-2 rounded-3">{{$item->status}}</h6> </td>
                    
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection