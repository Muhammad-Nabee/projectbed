<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}">
  <link rel="icon" type="image/x-icon" href="{{ asset('public/assets/images/favicon.ico') }}">
  <title>BedStore</title>

      <link rel="stylesheet" href="{{asset('public/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <style>
      .pagination {
    display: flex;
    padding-left: 0;
    list-style: none;
    justify-content: center !important;
}
.page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #212529;
    border-color: #212529;
}
.page-link {
    color: #212529;
}
.dataTables_length{
    text-align:left ;
    
}
div.dataTables_wrapper div.dataTables_paginate ul.pagination {
   
    justify-content: flex-end ;
}
div.dataTables_wrapper div.dataTables_info {
  
    text-align: left;
}
.dataTables_wrapper{
    padding:20px 30px;
}
.ribbon{
        position: absolute;
    background: #41db94;
    color: white;
    font-weight: 600;
    padding: 2px 52px;
    transform: rotate(45deg);
    right: -25%;
    top: 12%;
    font-size: 13px;
    cursor:default;
}
.menuInnerContent{
    position:relative;
}
  </style>
</head>
<body>
 <div class="whatsappWidgetBox">
        
    <div class="whatsappWidget">
        
        <div class="whatsappBox" id="whatsappDiv">
            
            <div class="whatsappBoxHead">
            <h3>Whatsapp </h3>
            <i class="fas fa-times" style="cursor:pointer" onclick="toggle()"></i>
         </div>
               <div class="whatsappBoxBody">
            <ul>
            <a href="https://api.whatsapp.com/send?phone=+447305394625" target="blank">  
            <li>
                    <div class="userImg">   <img src="{{ asset('public/assets/images/agent2.jpg') }}" alt=""> <span class="availablity"></span> </div>
               <div class="userText">
                   <p>Sale's Manager </p>
                     <h5>  Daniyal Rehman  </h5>
                     <p> Online</p>
               </div>
               </li>
               
               </a>
            <a href="https://api.whatsapp.com/send?phone=+447305733244" target="blank">  
            <li>
                    <div class="userImg">   <img src="{{ asset('public/assets/images/agent3.jpg') }}" alt=""> <span class="availablity"></span> </div>
               <div class="userText">
                   <p>Sale's Manager </p>
                     <h5>  Beds and Bolts  </h5>
                     <p> Online</p>
               </div>
               </li>
               
               </a>
         
            
            </ul>
                </div>  
            <div class="whatsappBoxfooter">
     <p> Powered By <a href="https://codify.pk"> Codify </a> </p>
            
            </div>
           
            </div>
                
         
 
                         <button class="whatsappBtn" onclick="toggle()">
                             <i class="fab fa-whatsapp"></i>
                   <span>  Message Us </span>
                   </button>
       
        </div>
        
         </div>
   <div class="top-header1 ">
       <div class="topHeaderMessage">
              <div class="footerSocialIcon">
      <a href="https://www.facebook.com/Beds-Nest-Limited-100548945740708/"><i class="fab fa-facebook"></i></a>
      <a href="https://www.instagram.com/beds_nest/"><i class="fab fa-instagram"></i></a>
    </div>
       </div>
         <div class="websiteInfo">
              <div class="address">
                  <i class="fas fa-location-arrow"></i> <p> UNIT 41, LOCK STREET, DEWSBURY, WF12 9BZ </p>
       </div>
              <div class="address">
                   <i class="fas fa-phone-alt"></i><p> 07305 394625 </p>
       </div>
       </div>
      </div>
  
    <div class="top-header2 ">
        <!--<div class="search-bar">-->
        <!--    <input type="search" id="search" class="inputSearch" placeholder="Search here ...">-->
        <!--    <i class="fa fa-search Searchicon"></i>-->
        <!-- </div>-->
         <div class="toggle-btn tb" onclick ="show()">
          <i class="fas fa-cart-plus"></i>
                    <div class="cartCounts" > {{$cart_data->count()}} </div>
        </div>
      
      </div>
      <!-- ------start of header area------------->
      <header class="header_area">
        <div class="main-menu">
          <nav id="navbar_top" class="navbar navbar-expand-lg shadow ">
            <div class="container-fluid px-5">
              <a class="navbar-brand" href="{{ url('/') }}"><img src="{{asset('public/assets/images/logo2.png')}}" style="height: 63px;"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "><i class="fas fa-ellipsis-v"> <span class="IconMenuText">MENU</span> </i> 
                </span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto">
                  <li class="nav-item active">
                    <a class="nav-link " aria-current="page" href="{{ url('/') }}">Home</a>
                  </li>
                  
               
                  
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="#">BEST SELLERS</a>
                  </li> -->
                @foreach($category as $c)
                  <li class="nav-item dropdown has-megamenu">
                      <!--data-bs-toggle="dropdown" aria-expanded="true"-->
                    <a class="nav-link " href="{{ route('product',$c->id) }}" > {{$c->name}}  </a>
                    <div class="dropdown-menu megamenu " role="menu" data-bs-popper="none">
                      <div class="row g-3">
                        <div class="col-lg-3 col-6">
                          <h6 class="title">Title Menu One</h6>
                          <ul class="list-unstyled megaUl">
                              <?php $bed_options=\App\Models\Bedsize::all(); ?>
                              @foreach($bed_options as $bed)
                            <li><a href="{{route('byoptions',['id' => $bed->id, 'type' => 'bed'])}}">{{$bed->name}}</a></li>
                            @endforeach
                          </ul>
                        </div>
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
                        </div>
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
                        </div>
                      </div>
                    </div> 
                  </li>
                  @endforeach
                  <!--<li class="nav-item">-->
                  <!--  <a class="nav-link" href="#">NEW ARRIVALS</a>-->
                  <!--</li>-->
                  <!--<li class="nav-item">-->
                  <!--  <a class="nav-link" href="">MATTRESSES</a>-->
                  <!--</li>-->
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('allproducts')}}">All Products</a>
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
{{$cart_data->count()}}  items in your cart.
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
      <?php $total=0; ?>
      @foreach($cart_data as $cart)
     
  <div class="cart-body-content">
     <div class="cart-body-img" >
 
     <?php  
        $grand=$cart->p_price;
        $total+=$grand;
        $image= \App\Models\product::where(['id' => $cart->p_id])->pluck('image')->first();
     
     ?>
     @if(isset($image))
     <img src="{{asset('upload/img/'.json_decode($image)[0])}}"  alt="">
     @endif
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
     <div class="cart-body-delete"><a href="{{route('deletecartitem',$cart->p_id)}}">
      <i class="fas fa-trash-alt"></i></a>
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
    <span> <h5>£ {{$total}}</h5></span>
  </div>
  <div class="cart-bottom-btn">
    <button> <a class="book-table-btn" href="{{ route('checkout') }}">Checkout</a> </button>  
  </div>
  <div class="cart-bottom-link">
 <span> <p> <i class="fas fa-arrow-left"></i>Continue Shopping</p></span>
  </div>
</div>
    </div>
    </div>
    <div id="sidebar2"  >
      <div class="toggle-btn2" onclick ="show2()">
        <i class="fas fa-window-close"></i>
      </div>
      <div class="FilterSidebar2"> 
        <div class="FilterSearchBar">
       
            <label for="search">Search for stuff</label>
            <input id="search" type="search" placeholder="Search Products" />
          
    </div>
<!--<div class="FilterCategories">-->
   
<!--<div class="FilterCategories">-->
<!--    <h2>-->
<!--       Filter Product Categories-->
<!--    </h2>-->
<!--    <div class="customCheck">-->
        
<!--        <label class="Addon">Beds-->
<!--            <input type="checkbox" >-->
<!--            <span class="checkmark"></span>-->
<!--          </label>-->
<!--        <label class="Addon">Bed Cat1-->
<!--            <input type="checkbox" >-->
<!--            <span class="checkmark"></span>-->
<!--          </label>-->
<!--        <label class="Addon">Bed Cat 2-->
<!--            <input type="checkbox" >-->
<!--            <span class="checkmark"></span>-->
<!--          </label>-->
<!--        <label class="Addon">Bed Cat3-->
<!--            <input type="checkbox" >-->
<!--            <span class="checkmark"></span>-->
<!--          </label>-->
<!--    </div>-->
  
<!--</div>-->

<!--</div>-->
<!--<div class="FilterCategories">-->
<!--    <h2>-->
<!--       Filter By Color-->
<!--    </h2>-->
<!--    <div class="customCheck">-->
        
<!--        <label class="Addon">Black-->
<!--            <input type="checkbox" >-->
<!--            <span class="checkmark"></span>-->
<!--          </label>-->
<!--        <label class="Addon">Red-->
<!--            <input type="checkbox" >-->
<!--            <span class="checkmark"></span>-->
<!--          </label>-->
<!--        <label class="Addon">Bue-->
<!--            <input type="checkbox" >-->
<!--            <span class="checkmark"></span>-->
<!--          </label>-->
<!--        <label class="Addon">Etc-->
<!--            <input type="checkbox" >-->
<!--            <span class="checkmark"></span>-->
<!--          </label>-->
<!--    </div>-->
  
<!--</div>-->
    </div>

      
      </div>


<section class="productAndFilter">
<div class="productAndFilterDiv">
    <div class="FilterSidebar"> 
     
         <div class="search-bar">
            <input type="search" id="search1" class="inputSearch" placeholder="Search here ...">
            <i class="fa fa-search Searchicon"></i>
            
         </div>
<!--<div class="FilterCategories">-->
   
<!--<div class="FilterCategories">-->
<!--    <h2>-->
<!--       Filter Product Categories-->
<!--    </h2>-->
<!--    <div class="customCheck">-->
        
<!--        <label class="Addon">Beds-->
<!--            <input type="checkbox" >-->
<!--            <span class="checkmark"></span>-->
<!--          </label>-->
<!--        <label class="Addon">Bed Cat1-->
<!--            <input type="checkbox" >-->
<!--            <span class="checkmark"></span>-->
<!--          </label>-->
<!--        <label class="Addon">Bed Cat 2-->
<!--            <input type="checkbox" >-->
<!--            <span class="checkmark"></span>-->
<!--          </label>-->
<!--        <label class="Addon">Bed Cat3-->
<!--            <input type="checkbox" >-->
<!--            <span class="checkmark"></span>-->
<!--          </label>-->
<!--    </div>-->
  
<!--</div>-->

<!--</div>-->
<!--<div class="FilterCategories">-->
<!--    <h2>-->
<!--       Filter By Color-->
<!--    </h2>-->
<!--    <div class="customCheck">-->
        
<!--        <label class="Addon">Black-->
<!--            <input type="checkbox" >-->
<!--            <span class="checkmark"></span>-->
<!--          </label>-->
<!--        <label class="Addon">Red-->
<!--            <input type="checkbox" >-->
<!--            <span class="checkmark"></span>-->
<!--          </label>-->
<!--        <label class="Addon">Bue-->
<!--            <input type="checkbox" >-->
<!--            <span class="checkmark"></span>-->
<!--          </label>-->
<!--        <label class="Addon">Etc-->
<!--            <input type="checkbox" >-->
<!--            <span class="checkmark"></span>-->
<!--          </label>-->
<!--    </div>-->
  
<!--</div>-->
    </div>
    <div class="FilterProducts">
    <!--    <div class="ProductSort">-->
    <!--      <button class="showFilterBtn" onclick ="show2()"> -->
    <!--        Show Filters-->
    <!--      </button>-->
    <!--<select name="" id="">-->
    <!--    <option value="">Sort By Latest</option>-->
    <!--    <option value="">Sort By Price Hight To Low</option>-->
    <!--    <option value="">Sort By Price Low To High</option>-->
    <!--</select>-->
    <!--<span>Showing 1-12 0f 100 Results</span>-->
    <!--    </div>-->

    <div class="product_data_all">
        
                       <table  id="example1">
                    <thead>
                        <th></th>
                    </thead>
                    <tbody style="width: 100%; display: flex; flex-wrap: wrap; justify-content: center;">
                        @foreach($product as $products)
                        <tr>
                            <td >
                      <div class="menuBlock" onclick="myFunction({{$products->id}})">
      
     <div class="menuInnerBlock">
      <div class="menuInnerContent">
          
          @if($monthlysale!==null)
          @if($products->id==$monthlysale->product_id)
              <div class="ribbon"> <span> Sale {{$monthlysale->discount}}% Off </span> </div>
              @endif
              @endif
      <img src="{{asset('upload/img/'.json_decode($products->image)[0])}}"  alt="">
    
        <h1 class="menuText">
       <a href="{{url('productpage',$products->id)}}">Select Options</a>  
        </h1>
      </div>
     </div>
     <div class="menuOuterBlock">
       <h3  style="cursor:pointer;" data-toggle="tooltip" data-placement="top" title=" {{ $products->name}}">
     {{ Str::limit($products->name, 10) }}
       </h3>
       <?php
       $reviews=\App\Models\Review::where('product_id',$products->id)->sum('rating');
       $count=\App\Models\Review::where('product_id',$products->id)->count();
                      $round=(int)$reviews;
                      if($round==0)
                      {
       
       }
       else
       {
           $rating_round = $round/$count;
       }
            
       ?>
      
     <div class="ratingIcons">
@if(isset($rating_round))
    @if ($rating_round <= 0.5 && $rating_round > 0) 
        <i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> {{$rating_round}} Rating
    
    @elseif ($rating_round <= 1 && $rating_round > 0.5)
        <i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> {{$rating_round}} Rating
    @elseif ($rating_round <= 1.5 && $rating_round > 1)f
       <i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> {{$rating_round}} Rating

    @elseif ($rating_round <= 2 && $rating_round > 1.5)
       <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> {{$rating_round}} Rating

    @elseif ($rating_round <= 2.5 && $rating_round > 2)
       <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> {{$rating_round}} Rating

    @elseif ($rating_round <= 3 && $rating_round > 2.5)
       <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> {{$rating_round}} Rating

    @elseif ($rating_round <= 3.5 && $rating_round > 3)
        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i> {{$rating_round}} Rating

    @elseif ($rating_round <= 4 && $rating_round > 3.5)
        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i> {{$rating_round}} Rating

    @elseif ($rating_round <= 4.5 && $rating_round > 4)
        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i> {{$rating_round}} Rating

    @elseif ($rating_round <= 5 && $rating_round > 4.5)
        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> {{$rating_round}} Rating
    @endif
   @endif
       <!--<div class="ratingIcons">-->
       <!-- <i class="fas fa-star"></i>-->
       <!-- <i class="fas fa-star"></i>-->
       <!-- <i class="fas fa-star"></i>-->
       <!-- <i class="fas fa-star"></i>-->
       <!-- <i class="fas fa-star"></i>-->
       </div>
       @if($monthlysale!==null)
                  @if($products->id==$monthlysale->product_id)
      
         <?php 
         $orignal_product=$products->price;
         $total_per=100;
         $discount_per=$monthlysale->discount;
         $descountvalue=$discount_per/$total_per*$orignal_product;
         $final=$orignal_product-$descountvalue;
         ?>
         
      
             <p><span style="text-decoration: line-through;;text-decoration-color: red;">   {{$products->price}}</span>  <span>   {{$final}}</span> </p>
             @else
             <p>  Starting From    {{$products->price}}  </p>
             @endif
           @endif
     </div>
     </div>
                                </td>
                                
                        </tr>
                       @endforeach
                    </tbody>
                    </table>
                    

     </div>
     
     <h2 class="no_data_found">No Data Found</h2>
        <div class="product_data_search">
            
            </div>
    </div>
</section>
</main>

    <footer>
  
<div class="footerDiv">
  <div class="footerCol">
    <img src="{{asset('public/assets/images/logo2.png')}}" style="height: 63px;">
    <div class="footerSocialIcon">
      <a href="https://www.facebook.com/Beds-Nest-Limited-100548945740708/"><i class="fab fa-facebook"></i></a>
      <a href="https://www.instagram.com/beds_nest/"><i class="fab fa-instagram"></i></a>
      
    </div>
    <span>
      <h6>
       <a href="mailto:info@bedsandbolts.co.uk">info@bedsandbolts.co.uk</a>
      </h6>
    </span>
  </div>
  <div class="footerCol">
    <h6>
Categories
    </h6>
    @foreach($category as $c)
    <a href="{{ route('product',$c->id) }}">{{$c->name}}</a>
    @endforeach
   
  </div>
  <div class="footerCol">
    <h6>
MORE
    </h6>
    <a href="{{route('allproducts')}}">All Products</a>
   
  </div>
  <div class="footerCol">
    <h6>
HELP
    </h6>
  <a href="{{route('delivery')}}">Delivery Enquiry</a>
    <a href="{{route('contactus')}}">Contact Us</a>
  </div>

</div>
<div class="footer-Copyright">
  <h3>
    Copyright &copy 2022 | Powered By <a href="https://codify.pk" target="blank">Codify.pk</a>
  </h3>
</div>

</footer>





</body>

 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
 crossorigin="anonymous"></script>




<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function () {
  
      window.addEventListener('scroll', function () {
  
        if (window.scrollY > 100) {
          document.getElementById('navbar_top').classList.add('fixed-top');
          
          navbar_height = document.querySelector('.navbar').offsetHeight;
          document.body.style.paddingTop = navbar_height + 'px';
        } else {
          document.getElementById('navbar_top').classList.remove('fixed-top');
          
          document.body.style.paddingTop = '0';
        }
      });
    });

  </script>

    <script>
      function show(){
        document.getElementById('sidebar').classList.toggle('active');
      }
    </script>
 
    <script>
      function show2(){
        document.getElementById('sidebar2').classList.toggle('active2');
      }
    </script>
    
            <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{asset('public/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('public/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
 <script>
 $(document).ready(function(){
     $('.no_data_found').hide();
 });
$('#search1').on('keyup', function(){
      
     $('.product_data_all').hide();
    search();
});
search();
function search(){
 
     var keyword = $('#search1').val();
     var cat_id='{{$id}}';
     
     
     if(keyword=="")
     {
          $('.product_data_all').show();
        
         
     }
     $.post('{{route('productsearch')}}',
      {
         _token: $('meta[name="csrf-token"]').attr('content'),
         keyword:keyword,
        cat_id:cat_id
       },
       function(data){
        table_post_row(data);
        //   console.log(data);
       });
}
// table row with ajax
function table_post_row(res){
    
   var path='{{asset('upload/img/')}}';
   var url='{{url('productpage')}}';
   
   if(res.search.length <= 0){
    
  $('.no_data_found').show();
}

$('.product_data_search').empty();
for(let i = 0; i < res.search.length; i++){
    $('.no_data_found').hide();
    $('.product_data_search').append(`
       <div class="menuBlock">
      
     <div class="menuInnerBlock">
      <div class="menuInnerContent">
      <img src="`+path+`/`+jQuery.parseJSON(res.search[0].image)[0]+`"  alt="">
    
        <h1 class="menuText">
       <a href="`+url+`/`+res.search[i].id+`">Select Options</a>  
        </h1>
      </div>
     </div>
     <div class="menuOuterBlock">
       <h3>
     `+res.search[i].name.substring(0, 15)+`
       </h3>
       <div class="ratingIcons">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
       </div>
       <p>  Starting From    `+res.search[i].price+`</p>
     </div>
     </div>
    `);
}
     
}
</script>
 <script>
   $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
  $(function () {
    $("#example3").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
<script>
function myFunction(id) {
 var base_url = window.location.origin;

  var url = base_url+`/productpage/`+id;
  window.location.href=url;

}
</script>
<script>
function toggle(){
  var x = document.getElementById("whatsappDiv");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
</html>