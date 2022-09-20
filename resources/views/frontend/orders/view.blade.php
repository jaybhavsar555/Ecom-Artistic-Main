@extends('layouts.front')

@section('title')
   My Orders
@endsection

@section('content')
<div class="container py-5" >
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="text-white">Order View</h4>
                    <a href="{{url('my-orders')}}" class="btn btn-warning text-white float-end">back</a>
                </div>
                <div class="card-body" id="p">
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
                <br>
                      
            
            </div>
             
                    </div>
                
                </div>
                <div class="col-md-2 my-auto">
                        <button type="button"  onclick="printOrder(this)" class="btn btn-danger"> Print Order</button>

                        <script>
                            function printOrder() {
                                var divContents = document.getElementById("p").innerHTML;
                                var a = window.open('', '', 'height=1000, width=1000');
                                a.document.write('<html>');
                                a.document.write('<body > <h1>Order Details: <br>');
                                a.document.write(divContents);
                                a.document.write('</body></html>');
                                a.document.close();
                                a.print();
                            }
                        </script>
                    </div> 
            </div>

            
        </div>
    </div>
</div>
@endsection