@extends('layouts.front')

@section('title')
    Welcome to Artistic Ecommerce
@endsection

@section('content')
    
   
    


<div class="img_here">
                <img src="{{asset('assets/images/im1.jpg')}}" alt="Images here">
            </div>  


<br>

<div class="py-5 popular_prod">
        <div class="container border-1">
            <div class="row">
                <h2>Popular Products</h2>
                <div class="owl-carousel product-carousel owl-theme">
                        @foreach ($popular_products as $prod)
                                        <div class="item">
                                                <div class="card" tyle="border-color:black;">
                                                    
                                                        <div class="row">
                                                                    <img src="{{    asset('assets/uploads/products/'.$prod->image   )}}" alt="Product Image">
                                                                    
                                                                    <div class="card-body">
                                                                        <h5>{{$prod->name}}</h5>
                                                                        <p>{{$prod->description}}</p>
                                                                        <span class="float-start"> Price:{{$prod->original_price}}</span> 
                                                                        <span class="float-end"><s> Price:{{$prod->selling_price}}</s></span>
                                                                    </div>
                                                        </div>
                                                </div>
                                        </div>
                                    @endforeach     
                </div>

                            
            </div>
        </div>
</div>
<br>

<!-- services we provide -->
<h3>Our Services:</h3>
<div class="service_container">
               
                             
                    <div  class="align"id="s1">
                        <h5>Super fast Delivery</h5>
                        <p></p>
                    </div>
                    <div  class="align"id="s2">
                        <h5>Super fast Delivery</h5>
                        <p></p>
                    </div>
                    <div  class="align"id="s3">
                        <h5>Super fast Delivery</h5>
                            <p></p>
                        </div>
                    <div  class="align" id="s4">
                    <h5>Super fast Delivery</h5>
                        <p></p>
                    </div>
            </div>

  


<div class="py-5 cate">
        <div class="container border-1">
            <div class="row">
                <h2>Popular Categories</h2>
                <div class="owl-carousel product-carousel owl-theme">
                        @foreach ($popular_category as $cate)
                        <a href="{{ url('view-category/'.$cate->slug) }}">
                                        <div class="item">
                                                <div class="card">
                                                    
                                                        <div class="row">
                                                                    <img src="{{    asset('assets/uploads/category/'.$cate->image   )}}" alt="Product Image">
                                                                    <div class="card-body">
                                                                        <h5>{{$cate->name}}</h5>
                                                                        <p>{{$cate->description}}</p>
                                                                        
                                                                    </div>
                                                        </div>
                                                </div>
                                        </div>
                                        </a>
                                    @endforeach     
                </div>

                            
            </div>
        </div>
</div>
@endsection

@section('scripts')
<script>
$('.product-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    dots:false,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:true
        }
    }
})
    </script>
@endsection
