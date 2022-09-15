@extends('layouts.front')

@section('title')
        {{$product->name}}
  
@endsection

@section('content')

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">
                <a href="{{url('category')}}">
                Collections   
                </a>/
                <a href="{{ url('category/'.$product->category->slug) }}">
                {{$product->category->name}}
                </a>/
                <a href="{{url('category/'.$product->category->slug.'/'.$product->slug)}}">
                    {{$product->name}}
                </a>
            </h6>
        </div>
</div>
<br>


<div class="container">
    <div class="card shadow product_data">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 border-right">
                    <img src="{{asset('assets/uploads/products/'.$product-> image)}}" class="w-100" alt="Product Image">

                </div>
                <div class="col-md-8">
                    <h2 class="mb-0">
                        {{$product->name}}
                        
                        <!-- <label style="font-size: 16px;" class="float-end badge bg-white trending_tag">Popular</label> -->
                        
                    </h2>
                    
                    <hr>
                    <label class="me-3">Original Price: <s>Rs {{$product->original_price}}</s> </label>
                   <label  class="fw-bold">Selling Price: Rs  {{$product->selling_price}}</label>
                    
                    <p class="mt-3">
                       {!! $product->small_description !!}
                    </p>
                    
                    @if($product->qty>0)
                    <label  class="badge bg-success">In Stock</label>
                    
                    @else
                    <label class="badge bg-danger">Out of Stock</label>
                    @endif
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <input type="hidden" class="prod_id" value="{{$product->id}}">
                            <label for="Quantity">Quantity</label>
                            <div class="input-group text-center mb-3  ms-2" style="width:100px;"> <br>
                                    <button class=" decrement-btn" >-</button>
                                    <input type="text"  name="quantity" value="1" class="form-control text-center qty-input">
                                    <button class="increment-btn"> + </button>
                            </div>
                        @if($product->qty>0)
                                <h7>Current Availabilty:</h7>
                                <h7>{{$product->qty}}</h7>
                         @endif
                        </div>

                    

                    <div class="col-md-9">
                        <br/>

                        @if($product->qty>0)
                        
                        <button type="button" class="btn btn-primary me-3 addToCartBtn float-start">Add to Cart <i class="fa fa-shopping-cart"></i></button>
                       
                        @endif
                        
                        <button type="button" class="btn btn-success me-3 float-start">Add to Wishlist <i class="fa fa-heart"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <hr>
            <h3>Description</h3>
            <p class="mt-3">
                {!!$product->description!!}
            </p>
        </div>
    </div>
</div>
</div>





@endsection

