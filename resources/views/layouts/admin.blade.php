<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>pvit.info | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/umd/popper.min.js"></script>
  

  {{-- <link rel="stylesheet" type="text/css" href="trix.css"> --}}
  {{-- <script type="text/javascript" src="trix.js"></script> --}}
  {{-- Bootstrap --}}
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.4/trix.css" integrity="sha512-qjOt5KmyILqcOoRJXb9TguLjMgTLZEgROMxPlf1KuScz0ZMovl0Vp8dnn9bD5dy3CcHW5im+z5gZCKgYek9MPA==" crossorigin="anonymous" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>


<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav col-12 d-flex justify-content-between">
    <div class="d-flex">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>

        </div>
         @guest
            <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else

            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
       
        @endguest

    </ul>


  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('frontHome')}}" class="brand-link">
      <span class="brand-text font-weight-light">pvit.info</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link {{ (request()->is('admin*')) ? 'active' : '' }}">
              <span class="align-middle material-symbols-outlined">dashboard </span>
              <p class="align-middle"> Dashboard</p>
            </a>            
          </li>

          <li class="nav-item has-treeview {{ (request()->is('products*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
              <span class="align-middle material-symbols-outlined">local_mall </span>
              <p class="align-middle">
                 Products
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('products.create')}}" class="nav-link {{ (request()->is('products/create')) ? 'active' : '' }} ml-4" style="font-size:0.8rem">
                  <span class="align-middle material-symbols-outlined">fiber_manual_record </span>
                  <p class="align-middle"> Add product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('products.index')}}" class="nav-link {{ (request()->is('products')) ? 'active' : '' }} ml-4"  style="font-size:0.8rem">
                  <span class="align-middle material-symbols-outlined">fiber_manual_record </span>
                  <p class="align-middle"> View all products</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('delivery.index')}}" class="nav-link {{ (request()->is('delivery')) ? 'active' : '' }}">
              <span class="align-middle material-symbols-outlined">local_shipping </span>
              <p class="align-middle"> Delivery</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('categories.index')}}" class="nav-link {{ (request()->is('categories')) ? 'active' : '' }}">
              <span class="align-middle material-symbols-outlined">category </span>
              <p class="align-middle"> Categories</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('discounts.index')}}" class="nav-link {{ (request()->is('discounts')) ? 'active' : '' }}">
              <span class="align-middle material-symbols-outlined">percent </span>
              <p class="align-middle"> Discounts</p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{route('orders.index')}}" class="nav-link {{ (request()->is('orders')) ? 'active' : '' }}">
              <span class="align-middle material-symbols-outlined">shopping_cart </span>
              <p class="align-middle"> Orders</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('other.index')}}" class="nav-link {{ (request()->is('other')) ? 'active' : '' }}">
              <span class="align-middle material-symbols-outlined">dynamic_feed </span>
              <p class="align-middle"> Other</p>
            </a>
          </li>
          



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="ml-3 m-0 text-dark">@yield('name')</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      @if(session()->has('success'))  
      
      <div class="alert alert-success text-center">
          {{session()->get('success')}}
      </div> 

      @endif
      @if(session()->has('danger'))  
      
      <div class="alert alert-danger text-center">
          {{session()->get('danger')}}
      </div> 

      @endif



        
          @yield('content')

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->



  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.2
    </div>
  </footer>


</div>
<!-- ./wrapper -->


@yield('trixScript')


<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/js/adminlte.js"></script>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
@yield('script')




</body>
</html>