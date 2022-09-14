<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{asset('admin/css/material-dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">
</head>
<style>

  
  

</style>
<body>  

<nav class="navbar navbar-expand-lg navbar-light bg-light border-radius-xl">
  <div class="container-fluid">
    <a class="navbar-brand"  href="{{url('/')}}">Artistic Ecommerce</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page"  href="{{url('/')}}" >Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="{{ url('category') }}">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('cart') }}">Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
       
      </ul>
      
      @guest 
        @if(Route::has('login'))
        
        <li class="nav-item d-flex align-items-center">
            <a class="nav-link " href="{{Route('login')}}">{{__('Login')}}</a>
          </li>
        @endif  
        
        @if(Route::has('register'))
        <li class="nav-item d-flex align-items-center">
            <a class="nav-link" href="{{Route('register')}}">{{__('Register')}}</a>
          </li>
        @endif 
        
       
      @else
      <li class="nav-item d-flex align-items-center">
          <li class="nav-item dropdown d-flex align-items-center ">
      
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" >
                    {{ Auth::user()->name }}
            </a>
                  <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">
                                My Profile
                            </a>
                      </li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                  </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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