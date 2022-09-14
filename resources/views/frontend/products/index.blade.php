@extends('layouts.front')

@section('title')
   {{$category->name}}
@endsection

@section('content')
<div class="py-5">
        <div class="container border-1">
            <div class="row">
                <h2>{{$category->name}}</h2>
                
                    @foreach ($products as $prod)
                    <div class="col-md-3 mb-3">
                            <div class="card">
                                
                                    <img src="{{    asset('assets/uploads/products/'.$prod->image   )}}" alt="Product Image">
                                            <div class="card-body">
                                                <a href="{{url('category/'.$category->slug.'/'.$prod->slug)}}">
                                                        <h5>{{$prod->name}}</h5>
                                                        <p>{{$prod->description}}</p>
                                                        <span class="float-start"> Price:{{$prod->original_price}}</span> 
                                                        <span class="float-end"><s> Price:{{$prod->selling_price}}</s></span>
                                                </a>
                                            </div>
                                    </div>
                            </div>   
                                        
                    @endforeach     
                

                            
            </div>
        </div>
</div>

@endsection