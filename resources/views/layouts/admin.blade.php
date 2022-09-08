<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

   <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- Style -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    
    <link id="pagestyle" href="admin/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('admin/css/material-dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">
    

    <!-- Scripts -->
    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
    
</head>
<body>
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    @include('layouts.inc.sidebar')
  </aside>
<div class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @include('layouts.inc.adminavbar')
 
    <div class="content">
        @yield('content')
    </div>
    @include('layouts.inc.footer')
<div>

    
    
    
    <!-- Scripts -->
    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
    <!-- <script src="{{asset('frontend\js\bootstrap.bundle.min.js.css')}}" defer></script> -->
    <script src="{{asset('admin/js/popper.min.js')}}" defer></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}" defer></script>
    <script src="{{asset('admin/js/perfect-scrollbar.min.js')}}" defer></script>
    <script src="{{asset('admin/js/perfect-scrollbar.min.js')}}" defer></script>
    <script src="{{asset('admin/js/smooth-scrollbar.min.js')}}" defer></script>
    <script src="{{asset('admin/js/chartjs.min.js')}}" defer></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(session('status')){
        <script>
            swal("{{ session('status') }}");
        </script>
    }
    @endif
    @yield('scripts')
</body>
</html>
