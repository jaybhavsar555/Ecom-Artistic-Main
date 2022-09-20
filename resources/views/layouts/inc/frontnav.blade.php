<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{asset('admin/css/material-dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">
</head>

<body>  

<nav class="navbar navbar-expand-lg navbar-light sticky-top shadow  bg-light border-radius-xl">
  <div class="container-fluid">
    <a class="navbar-brand"  href="{{url('/')}}"><img src="{{asset('assets/images/logo1.png')}}"  class="logo" alt="logo here" height="60px" width="60px"></a>
    <div class="search-bar ">
      <form action="{{url('searchproduct')}}" method="POST">
        @csrf
        <div class="input-group ms-auto">
        
        <input type="search" class="form-control"  name="search_name_product" id="search_product" placeholder="Search Product Here..." required  aria-label="Search Product Here..." >
        
        <button  type="submit" class="sbtn" > <i class="fa fa-search"></i></button>
        
      
      </div>
      </form>
    </div>
    
  
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 ms-5 mb-lg-0 me-2">
        <li class="nav-item">
          <a class="nav-link  {{Request::is('/') ? 'active':''}}" aria-current="page"  href="{{url('/')}}" style="color:#CC4814; font-weight: 500;">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link {{Request::is('category') ? 'active':''}}" href="{{ url('category') }}" style="color:#CC4814;font-weight: 500;">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('cart') ? 'active':''}}" href="{{ url('cart') }}" style="color:#CC4814;font-weight: 500;">Cart
            <span class="badge badge-pill bg-info cart-count" style="font-size:10px padding-bottom:2px;">0</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus" style="color:#CC4814; font-weight: 500;">Contact Us</a>
        </li> 
      </ul>
      
     
      @guest 
        @if(Route::has('login'))
        
        <li class="nav-item d-flex align-items-center">
            <a class="nav-link " href="{{Route('login')}}" style="color:#CC4814; font-weight: 500;">{{__('Login')}}</a>
          </li>
        @endif  
        
        @if(Route::has('register'))
        <li class="nav-item d-flex align-items-center">
            <a class="nav-link" href="{{Route('register')}}" style="color:#CC4814;font-weight: 500;">{{__('Register')}}</a>
          </li>
        @endif 
        
       
      @else
      <li class="nav-item d-flex align-items-center">
          <li class="nav-item dropdown d-flex align-items-center ">
      
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"  aria-expanded="false" style="color:#CC4814;font-weight: 500;" >
                    {{ Auth::user()->name }}
            </a>
                  <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{url('my-orders')}}" style="color:#CC4814;font-weight: 500;">
                                My Orders
                            </a>
                      </li>
                     
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();" style="color:#CC4814;font-weight: 500;">
                                                {{ __('Logout') }}
                                  </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" >
                                      @csrf
                            </form>
          </li>
        </li>
      
        @endguest
    </div>
  </div>
</nav>
      
</body>
</html>