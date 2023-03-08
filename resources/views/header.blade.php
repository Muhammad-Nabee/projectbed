

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}">
  <title>BedStore</title>
  <link rel="icon" href="{{ asset('public/assets/images/favicon.ico') }}" type="image/x-icon">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      
      <style>
      .logoHeader{
          max-width:160px !important;
          height:auto !important;
      }
      </style>
</head>
<body>
    <div class="top-header1 ">
       <!-- <div class="topHeaderMessage">
           <p>
Limited Time Only
           </p>
           <h2> 
            TAKE AN EXTRA 25% OFF ALL SALE ITEMS
           </h2>
           <a href="">
        Shop Sale
           </a>
       </div> -->
       <div class="topHeaderMessage">
        
           <h2> 
            WEBSITE IS IN UNDER DEVELOPMENT STAGE
           </h2>
         
       </div>
      </div>
  
    <div class="top-header2 ">
        <div class="search-bar">
            <input type="search" class="inputSearch" placeholder="Search here ...">
            <i class="fa fa-search Searchicon"></i>
         </div>
         <div class="toggle-btn" onclick ="show()">
          <i class="fas fa-cart-plus"></i>
        </div>
      
      </div>



  <header class="header_area">
        <div class="main-menu">
          <nav id="navbar_top" class="navbar navbar-expand-lg shadow ">
            <div class="container-fluid navdiv px-5">
              <a class="navbar-brand" href="#">
              <img class="logoHeader" src="{{asset('public/assets/images/logo.png')}}" alt="logo">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "><i class="fas fa-ellipsis-v"> <span class="IconMenuText">MENU</span> </i> 
                </span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto">
                  <li class="nav-item active">
                    <a class="nav-link " aria-current="page" href="{{ url('index') }}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('product') }}">BEDS</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="#">BEST SELLERS</a>
                  </li> -->

                  <li class="nav-item dropdown has-megamenu">
                    <a class="nav-link dropdown-toggle " href="#" data-bs-toggle="dropdown" aria-expanded="true"> Mega menu  </a>
                    <div class="dropdown-menu megamenu " role="menu" data-bs-popper="none">
                      <div class="row g-3">
                        <div class="col-lg-3 col-6">
                          <h6 class="title">Title Menu One</h6>
                          <ul class="list-unstyled megaUl">
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                          </ul>
                        </div><!-- end col-3 -->
                        <div class="col-lg-3 col-6">
                          <h6 class="title">Title Menu Two</h6>
                          <ul class="list-unstyled megaUl">
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                          </ul>
                        </div><!-- end col-3 -->
                        <div class="col-lg-3 col-6">
                          <h6 class="title">Title Menu Three</h6>
                          <ul class="list-unstyled megaUl">
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                          </ul>
                        </div>    
                        <div class="col-lg-3 col-6">
                          <h6 class="title">Title Menu Four</h6>
                          <ul class="list-unstyled megaUl">
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                          </ul>
                        </div><!-- end col-3 -->
                      </div><!-- end row --> 
                    </div> <!-- dropdown-mega-menu.// -->
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">NEW ARRIVALS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="">MATTRESSES</a>
                  </li>
                  <li>
                             @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                      <li> <x-app-layout>
   
   </x-app-layout> </li>
                    @else
                       <li> <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                        &nbsp&nbsp
                            </li>
                        @if (Route::has('register'))
                          <li>  <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif
                  </li>
                </ul>
                <ul class="navbar-nav">
                 <a href="{{route('contactus')}}" class="StylishBtn1">CONTACT</a>
                </ul>
              </div>
            </div>
          </nav>
        </div>

      </header>


<main>
  <div id="sidebar"  >
     
    <div class="cart-top">
<h3 class="text-center ">
  Your Shopping Cart
</h3>
<p class="text-center text-dark">
3 items in your cart.
</p>
<div class="toggle-btn2" onclick ="show()">
  <i class="fas fa-window-close"></i>
</div>
<hr>
<div class="product-headings">
 <span> <h5>IMAGE </h5></span>
 <span> <h5>PRODUCT </h5></span>
 <span> <h5>PRICE </h5></span>

 
</div>
<hr>
    </div>
    <div class="cart-body">
      @foreach($cart_data as $cart)
     
  <div class="cart-body-content">
     <div class="cart-body-img" >
 
     <img  alt="">
     </div>
     <div class="cart-body-text">
        <h3>
                {{\App\Models\product::where(['id' => $cart->p_id])->pluck('name')->first();}}
       
        </h3>
          <p>
          Quantity : {{$cart->qty}}
          </p>
     </div>
     <div class="cart-body-price">
        <span>${{$cart->p_price}}</span>
     </div>
     <div class="cart-body-delete">
      <i class="fas fa-trash-alt"></i>
     </div>
  
  </div>
  <hr>
@endforeach
  
    </div>
    <hr>
    <div class="cart-bottom">
<div class="cart-bottom-content">
  <div class="cart-bottom-head">
    <span> <h5>Subtotal:</h5></span>
    <span> <h5>20$</h5></span>
  </div>
  <div class="cart-bottom-btn">
    <button> <a class="book-table-btn" href="{{ url('checkout') }}">Checkout</a> </button>  
  </div>
  <div class="cart-bottom-link">
 <span> <p> <i class="fas fa-arrow-left"></i>Continue Shopping</p></span>
  </div>
</div>
    </div>
    </div>