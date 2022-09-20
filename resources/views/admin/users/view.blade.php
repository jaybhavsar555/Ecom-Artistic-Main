@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="card border">
            <div class="card-header"> 
                <h4>Users Details
                    <a href="{{url('users')}}" class="btn btn-primary float-end btn-sm">Back</a>
                </h4>
             
            </div>
            <hr style="border-width:0;color:gray;background-color:gray">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4 mt-3">
            <label for="">Role</label>
                <div class="p-2 border">{{$users->role_as =='0'? 'Admin':'ser'}}</div>
            </div>
            <div class="col-md-4 mt-3">
            <label for="">First Name</label>
                <div class="p-2 border">{{$users->fname}}</div>
            </div>
            <div class="col-md-4 mt-3">
            <label for="">Last Name</label>
                <div class="p-2 border">{{$users->lname}}</div>
            </div>
            <div class="col-md-4 mt-3">
            <label for="">Email</label>
                <div class="p-2 border">{{$users->email}}</div>
            </div>
            <div class="col-md-4 mt-3">
            <label for="">Phone</label>
                <div class="p-2 border">{{$users->phone}}</div>
            </div>
            <div class="col-md-4 mt-3">
            <label for="">Address1</label>
                <div class="p-2 border">{{$users->address1}}</div>
            </div>
            <div class="col-md-4 mt-3">
            <label for="">Address2</label>
                <div class="p-2 border">{{$users->address2}}</div>
            </div>
            <div class="col-md-4 mt-3">
            <label for="">City</label>
                <div class="p-2 border">{{$users->city}}</div>
            </div>
            <div class="col-md-4 mt-3">
            <label for="">State</label>
                <div class="p-2 border">{{$users->state}}</div>
            </div>
            <div class="col-md-4 mt-3">
            <label for="">Pincode</label>
                <div class="p-2 border">{{$users->pincode}}</div>
            </div>
            
            
        </div>
        
    </div>
        </div>
    </div>
</div>
   

</div>
@endsection