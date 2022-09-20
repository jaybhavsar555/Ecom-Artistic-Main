@extends('layouts.front')

@section('title')
    Welcome to Artistic Ecommerce
@endsection

@section('content')


@include('layouts.inc.slider') 
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
                    
                    <div  class="card align"id="s1" style="border:2px solid black;">
                        <h5>Customized Items</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem mollitia nulla harum? Accusantium nemo, doloribus blanditiis maiores vero illo ipsum libero. Maiores eligendi nostrum nobis! Lorem ipsum dolor sit amet.

                        </p>
                    </div>
                    <div  class="card align"id="s2" style="border:2px solid black;">
                        <h5>Firing and Drying Available</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem mollitia nulla harum? Accusantium nemo, doloribus blanditiis maiores vero illo ipsum libero. Maiores eligendi nostrum nobis! Lorem ipsum dolor sit amet.

                        </p>
                    </div>
                    <div  class="card align"id="s3"style="border:2px solid black;">
                        <h5>Super Fast Delivery</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem mollitia nulla harum? Accusantium nemo, doloribus blanditiis maiores vero illo ipsum libero. Maiores eligendi nostrum nobis! Lorem ipsum dolor sit amet.

</p>
                        </div>
                    <div  class="card align" id="s4"style="border:2px solid black;">
                    <h5>4-Days Return Policy</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem mollitia nulla harum? Accusantium nemo, doloribus blanditiis maiores vero illo ipsum libero. Maiores eligendi nostrum nobis! Lorem ipsum dolor sit amet.

</p>
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
