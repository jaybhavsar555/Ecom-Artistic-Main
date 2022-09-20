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
                    <th>Roll</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->role_as =='0'? 'User':'Admin'}}</td>
                    <td>{{$item->name.' '.$item->lname}}</td>
                    <td>{{$item->email}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection