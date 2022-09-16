@extends('layouts.admin')

@section('content')
    <div class="card border">
        <div class="card-header"> 
        <h4>Register Users</h4>
        </div>
        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
        <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                   
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name.' '.$item->lname}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>
                    
                    <td>
                        <a href="{{url('view-user/'.$item->id)}}" class='btn btn-primary'>view</a>
                        <!-- <a  href="{{url('delete-product/'.$item->id)}}"class='btn btn-danger'>Delete</a> -->

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection