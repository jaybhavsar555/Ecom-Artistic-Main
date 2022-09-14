@extends('layouts.front')

@section('title')
   My Cart
  
@endsection

@section('content')
<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">
                <a href="{{url('/')}}">
                Home  
                </a>/
                <a href="{{ url('cart') }}">
                Cart
                </a>
                
            </h6>
        </div>
</div>

<div class="container my-5">
    <div class="card shadow">
        <div class="card-body">
            <?php $total=0; ?>
            @foreach ($cartItems as $item)
                <div class="row product_data">
                    <div class="col-md-2 my-auto">
                        <img src="{{asset('assets/uploads/products/'.$item->products->image)}}" alt="Images here" height="200px" width="200px">
                    </div>
                    <div class="col-md-3 my-auto">
                        <h3>{{$item->products->name}}</h3>
                    </div>

                    <div class="col-md-2 my-auto">
                        <h3>Rs.{{$item->products->selling_price}}</h3>
                    </div>
                    <div class="col-md-3 my-auto">
                    <input type="hidden" class="prod_id" value="{{$item->prod_id}}">
                                <label for="Quantity">Quantity</label>
                                <div class="input-group text-center mb-3" style="width:130px;">
                                        <button class="input-group-text changeQuantity decrement-btn" > - </button>
                                        <input type="text"  name="quantity"  class="form-control qty-input text-center" value="{{$item->prod_qty}}">
                                        <button class="input-group-text  changeQuantity increment-btn"> + </button>
                                </div>
                    </div>
                    <div class="col-md-2 my-auto">
                        <button type="button" class="btn btn-danger deleteCartItem "> <i class="fa fa-trash"></i> Remove</button>
                    </div> 
            </div>
            <br>
            <?php $total +=$item->products->selling_price*$item->prod_qty; ?>
            @endforeach
        </div>
        <div class="card-footer">
            <h6>Total Price :Rs{{$total}}

            <a  href="{{url('checkout')}}"class="btn btn-outline-success float-end">Procced to Checkout</a>
            </h6>
        </div>
    </div>
</div>

@endsection
