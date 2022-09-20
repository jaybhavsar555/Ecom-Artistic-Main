<!-- sidebar -->
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-2 fixed-start ms-3 bg-gradient-white" id="sidenav-main">
    <div class="sidenav-header bg-gradient-white">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none bg-gradient-white" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0 bg-gradient-white">
        <span class="ms-1 font-weight-bold text-white">Artistic Products</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2 bg-gradient-white">
    <div class="collapse navbar-collapse  bg-gradient-white " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('dashboard') ? 'active':''}}" href="{{url('dashboard')}}">
            
              <i class="material-icons opacity-10">dashboard</i>
            
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item " >
          <a class="nav-link text-white y  {{Request::is('categories') ? 'active':''}} " href="{{url('categories')}}">
            
              <i class="material-icons opacity-10">shopping_cart</i>
            
            <span class="nav-link-text ms-1">Categories</span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white {{Request::is('add-category') ? 'active':''}} " href="{{url('add-category')}}">
            
              <i class="material-icons opacity-10">add_circle</i>
            
            <span class="nav-link-text ms-1">Add Category</span>
          </a>
        </li>
        <li class="nav-item " >
          <a class="nav-link text-white y  {{Request::is('products') ? 'active':''}} " href="{{url('products')}}">
            
              <i class="material-icons opacity-10">shopping_cart</i>
            
            <span class="nav-link-text ms-1">Products</span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white {{Request::is('add-products') ? 'active':''}} " href="{{url('add-products')}}">
            
              <i class="material-icons opacity-10">add_circle</i>
            
            <span class="nav-link-text ms-1">Add Product</span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white {{Request::is('orders') ? 'active':''}} " href="{{url('orders')}}">
            
              <i class="material-icons opacity-10">content_paste</i>
            
            <span class="nav-link-text ms-1">Orders</span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white {{Request::is('users') ? 'active':''}} " href="{{url('users')}}">
            
              <i class="material-icons opacity-10">people</i>
            
            <span class="nav-link-text ms-1">Users</span>
          </a>
        </li>
        
      </ul>
    </div>
  </aside>