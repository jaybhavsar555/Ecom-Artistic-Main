@extends('layouts.front')

@section('title')
   My Orders
@endsection

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="text-white">Order View</h4>
                    <a href="{{('orders')}}" class="btn btn-warning text-white float-end">back</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 order-details">
                                <label for="">First Name:</label>
                                <div class="border ">{{$orders->fname}}</div>
                                <label for="">Last Name:</label>
                                <div class="border">{{$orders->lname}}</div>
                                <label for="">Email</label>
                                <div class="border">{{$orders->email}}</div>
                                <label for="">Contact No:</label>
                                <div class="border">{{$orders->phone}}</div>
                                <label for="">Shipping Address: <Address></Address></label>
                                <div class="border">
                                    {{$orders->address1}},<br>
                                    {{$orders->address2}}, <br>
                                    {{$orders->city}}, <br>
                                    {{$orders->state}},  <br>
                                    {{$orders->country}}, <br>
                                </div>
                                <label for=""></label>
                                
                        </div>
                        <div class="col-md-6">
                            <h4>Order Details:</h4>
                        <table class="table table-bordered mt-2 table-striped">
                <thead>

                    <tr>
                        <th>Name</th>
                        <th>Quantity:</th>
                        <th>Price</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($orders->orderitems as $item)
                    <tr>
                        <td>{{$item->products->name}}</td>
                        <td>{{$item->qty}}</td>
                        <td>{{$item->price}}</td>
                        <td>
                            <img src="{{ asset('assets/uploads/products/'.$item->products->image)}}" width="50px" height="50px" alt="Product Image">
                           </td>
                    </tr>
                @endforeach
                </tbody>
                </table>
                    <h4>Grand total: Rs. {{$orders->total_price}}</h4>
                    <div class="mt-3 px-2">
                        <label for="">Order Status</label>
                        <form action="{{url('update-order/'.$orders->id)}}" method="POST">
                            @csrf
                            @method('PUT')

                    <select class="form-select"  name="order_status">
                        <option   value="0"  {{$orders->status == '0' ? 'selected':''}} >Pending</option>
                        <option    value="1" {{ $orders->status  == '1' ? 'selected' :''}}>Compeleted</option>
                    </select>
                    <button  type='submit'class="btn btn-primary float-end mt-3">Update</button>
                    </form>
                    </div>
                </div>
                    </div>
                
                </div>
            </div>

            
        </div>
    </div>
</div>

@endsection