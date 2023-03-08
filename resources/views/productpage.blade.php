<?php
use App\Models\Bedsize;
use App\Models\Category;
?>

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
  <link rel="stylesheet" href="{{ asset('../public/assets/plugins/toastr/toastr.min.css')}}">
    <!-- ---for slider  -->

<link rel="stylesheet" href="{{ asset('public/assets/css/lightslider.css') }}">



<!-- ---for slider  -->
<link rel="icon" type="image/x-icon" href="{{ asset('public/assets/images/favicon.ico') }}">
  <title>BedStore</title>
             <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="{{ asset('public/assets/css/jquery.exzoom.css') }}">
</head>

<style>

#exzoom{
padding: 10px;
    width: 520px !important;
}


/*#exzoom{*/

/*    width: auto;*/
/*}*/
.exzoom .exzoom_img_ul_outer {
background: transparent !important;
border: none !important;
}
.exzoom .exzoom_img_box {
background: transparent !important;
}

.picbig{
	position: absolute;
	width:0px;
	-webkit-transition:width 0.3s linear 0s;
	transition:width 0.3s linear 0s;
	z-index:10;
	    left: 13%;
	    display:none;
}
.pic:hover + .picbig{
	width:70px;
	display:block;
}




/*end decoration*/

.visuallyhidden{
  position: absolute !important; clip: rect(1px 1px 1px 1px); clip: rect(1px, 1px, 1px, 1px);
}
.product-review-stars label:after{
    content: "★";
    color: inherit;
    -webkit-transform: scale(4);
    position: absolute;
    z-index: 4;
    left: 0px;
    transition: all .4s;
    opacity: 0;
    color: inherit;
    visibility: hidden;
   
}

.product-review-stars input:checked + label:after{
    visibility: visible;
    -webkit-transform: scale(1);
    opacity: 1;
}

.product-review-stars  {
  unicode-bidi: bidi-override;
  direction: rtl;
  width:  auto;
}

.product-review-stars label{
    font-family: "icomoon";
    font-size: 2em;
    position: relative;
    cursor: pointer;
    color: #DFE3E4;
}
.product-review-stars input:checked ~ label:before{
    opacity: 1;
}
.product-review-stars:hover input ~ label:before{
    opacity: 0;
}

.product-review-stars input + label:before{
    content: "\2605";
    position: absolute;
    right: 0;
    opacity: 0;
    transition: opacity .3s ease-in-out, color .3s ease-in-out;
    backface-visibility:hidden;
-webkit-backface-visibility:hidden; /* Chrome and Safari */
-moz-backface-visibility:hidden; /* Firefox */
-ms-backface-visibility:hidden; /* Internet Explorer */
}
.product-review-stars input + label:hover:before,
.product-review-stars input + label:hover ~ label:before
{
    opacity: 1;
}
.product-review-stars input + label:nth-of-type(1):after,
.product-review-stars input + label:nth-of-type(1):before,
.product-review-stars input +  label:nth-of-type(1):hover:before,
.product-review-stars input + label:nth-of-type(1):hover ~ label:before,
.product-review-stars input:nth-of-type(1):checked ~ label:before{
    color: #2ecc71;
}
.product-review-stars input + label:nth-of-type(2):after,
.product-review-stars input + label:nth-of-type(2):before,
.product-review-stars input + label:nth-of-type(2):hover:before,
.product-review-stars input + label:nth-of-type(2):hover ~ label:before,
.product-review-stars input:nth-of-type(2):checked ~ label:before{
    color: #f1c40f;
}
.product-review-stars input + label:nth-of-type(3):after,
.product-review-stars input + label:nth-of-type(3):before,
.product-review-stars input + label:nth-of-type(3):hover:before,
.product-review-stars input + label:nth-of-type(3):hover ~ label:before,
.product-review-stars input:nth-of-type(3):checked ~ label:before{
    color: #F39C12;
}
.product-review-stars input + label:nth-of-type(4):after,
.product-review-stars input + label:nth-of-type(4):before,
.product-review-stars input + label:nth-of-type(4):hover:before,
.product-review-stars input + label:nth-of-type(4):hover ~ label:before,
.product-review-stars input:nth-of-type(4):checked ~ label:before{
    color: #e74c3c;
}

.product-review-stars input + label:nth-of-type(5):after,
.product-review-stars input + label:nth-of-type(5):before,
.product-review-stars label:nth-of-type(5):hover:before,
.product-review-stars input:nth-of-type(5):checked ~ label:before{
    color: #d35400;
}

.product-review-stars label:nth-of-type(5):hover:before{
    color: #d35400 !important;
}
.modal-body {
    position: relative;
    flex: 1 1 auto;
    padding: 1rem;
    text-align: center;
}
.modal-footer {
  justify-content: center;
    text-align: center;
    border:none;
}
.modal-header {
    border:none;
}
.productadd{
    background:black;
    color:white;
    border:1px solid black;
}
.productadd:hover{
    color:black;
    background:transparent;
    border:1px solid black;
}
.qtyget{
    padding: 5px;
    font-size: 16px;
    font-weight: 700;
    border-radius: 4px;
    margin: 5px 5px 5px 0px;
}
</style>

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
         <input type="text" class="get_pro" value="{{$product1}}" hidden >
    <input type="text" class="get_category" value="{{\App\Models\Category::where(['id' => $product1->categories_id])->pluck('name')->first();}}" hidden >

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
        <!--    <input type="search" class="inputSearch" placeholder="Search here ...">-->
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
  {{$cart_data->count()}} items in your cart.
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
     <div class="cart-body-img">
      
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
            <span>£ {{$cart->p_price}}</span>
     </div>
     <div class="cart-body-delete">
     <a href="{{route('deletecartitem',$cart->p_id)}}">
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
    <button> <a class="book-table-btn" href="{{ url('checkout') }}">Checkout</a> </button>  
  </div>
  <div class="cart-bottom-link">
 <span> <p> <i class="fas fa-arrow-left"></i>Continue Shopping</p></span>
  </div>
</div>
    </div>
    </div>

<main>





  <div id="content-wrapper">


 
    <div class="exzoom column" id="exzoom">
      <!-- Images -->
      <div class="exzoom_img_box">
        <ul class='exzoom_img_ul'>
          <li><img class="" src="{{asset('upload/img/'.json_decode($product1->image)[0])}}"></li>
         	@if(isset(json_decode($product1->image)[1]))
					<li><img class=""  src="{{asset('upload/img/'.json_decode($product1->image)[1])}}"></li>
                    <li><img class="" src="{{asset('upload/img/'.json_decode($product1->image)[2])}}"></li>
                    @endif
        </ul>
      </div>
      	
      <!-- <a href="https://www.jqueryscript.net/tags.php?/Thumbnail/">Thumbnail</a> Nav-->
      <div class="exzoom_nav"></div>
   
    </div>
     
		<div class="column">
		@if($monthlysale!=null)
      <?php 
         $orignal_product=$product1->price;
         $total_per=100;
         $discount_per=$monthlysale->discount;
         $descountvalue=$discount_per/$total_per*$orignal_product;
         $final=$orignal_product-$descountvalue;
         ?>
			<h1>{{$product1->name}}</h1>
			
		
			<hr>@if($monthlysale!=null)
			                   @if($product1->id==$monthlysale->product_id)
             
            
         
      
             	<h3 style="text-decoration:line-through;text-decoration-color:red">£ {{$product1->price}}</h3>
			<h1>£ {{$final}}</h1>
             @else
			<h3>£ {{$product1->price}}</h3>
            @endif
          @endif
          @else
          	<h3>£ {{$product1->price}}</h3>
          @endif
			<!--<p> {!!$product1->description!!}</p>-->
 
      <div class="selector allsize">
        <h6>{{$product1->size}}</h6>
        <h6 style="color:red;" class="empty" id="empty">   </h6>

        <div  id="selectField2">
          
          <p id="selectText2">Select Size</p>
         
          <img src="{{ asset('public/assets/images/arrow.png') }}" id="arrowIcon2">
        </div>
      
        <ul id="list2" class="hide">
           
          @if($product1->bedsize_id!="null")
         
        @foreach(json_decode($product1->bedsize_id) as $bedsize)
           <div onclick="fabric({{\App\Models\Bedsize::where(['id' => $bedsize])->first();}},'size')">
        
            
        <input class="price" id="bed_price" type="hidden" value="">
          <li class="options2">   
        
            <div class="optText">
            
           <p>
               {{\App\Models\Bedsize::where(['id' => $bedsize])->pluck('name')->first();}}
               </p>
                  <span>
                 <span class="bedprice">
         {{\App\Models\Bedsize::where(['id' => $bedsize])->pluck('price')->first();}}
          
          
                  </span>
            </div>
          </li> 
          </div>
          @endforeach 
          
          @elseif($product1->sofa_id!="null")
          @foreach(json_decode($product1->sofa_id) as $sofa)
           <div onclick="fabric({{\App\Models\SofaOptions::where(['id' => $sofa])->first();}},'size')">
        
            
        <input class="price" id="sofa_price" type="hidden" value="">
          <li class="options2">   
        
            <div class="optText">
            
           <p>
               {{\App\Models\SofaOptions::where(['id' => $sofa])->pluck('name')->first();}}
               </p>
                  <span>
               {{\App\Models\SofaOptions::where(['id' => $sofa])->pluck('price')->first();}}
                  </span>
            </div>
          </li> 
          </div>
          @endforeach
          @elseif($product1->stool_id!="null")
          @foreach(json_decode($product1->stool_id) as $s)
           <div onclick="fabric({{\App\Models\StoolOptions::where(['id' => $s])->first();}},'size')">
        
            
        <input class="price" id="stool_price" type="hidden" value="">
          <li class="options2">   
        
            <div class="optText">
            
           <p>
               {{\App\Models\StoolOptions::where(['id' => $s])->pluck('name')->first();}}
               </p>
                  <span class="stoolprice">
               {{\App\Models\StoolOptions::where(['id' => $s])->pluck('price')->first();}}
                  </span>
            </div>
          </li> 
          </div>
          @endforeach
        
          @endif
        </ul>
      
      </div>

<div class="for_category_mattress">
      <div class="selector fabric_color_options">
         
      <h6>Fabric & Colour </h6>
      <h6 style="color:red;" class="empty" id="empty1">  </h6>
      <div  id="selectField">
           
        <p id="selectText">Fabric & Colour </p>
       
        <img src="{{ asset('public/assets/images/arrow.png') }}" id="arrowIcon">
      </div>
      <ul id="list" class="hide">
          @if($product1->fabric_id!="null")
        @foreach(json_decode($product1->fabric_id) as $fabric_color)
        <div onclick="fabric({{\App\Models\Fabric::where(['id'=>$fabric_color])->first();}},'fabric')">
        
            
        <input class="price" id="fabric_price" type="hidden" value="">
      <li   class="options" > 
                <img class="pic" style="height:30px;width: 30px;" src="{{asset('upload/img/'.\App\Models\Fabric::where(['id' => $fabric_color])->pluck('image')->first()) }}" id="arrowIcon">   
          
                  <img class="picbig"  src="{{asset('upload/img/'.\App\Models\Fabric::where(['id' => $fabric_color])->pluck('image')->first()) }}">
          
                 <div class="optText">
                <p >
                {{\App\Models\Fabric::where(['id' => $fabric_color])->pluck('name')->first();}}
                </p>

                  <span>
                    {{\App\Models\Fabric::where(['id' => $fabric_color])->pluck('price')->first();}}

                  </span>
                  </div>
                  </li>
                  </div>
                  @endforeach
                   @endif
                  
</ul>

    </div>

</div>



    <div class="for_category_mattress">
       
    <div class="selector mattress_size_options">
       
      <h6>Mattress Size
      </h6>
      <div  id="selectField30" >
            
        <p id="selectText30">Select Mattress</p>
        
        <img  src="{{ asset('public/assets/images/arrow.png') }}" id="arrowIcon30">
      </div>
      <ul id="list30" class="hide">
       @if($product1->mattress_id!="null")
     
       @foreach(json_decode($product1->mattress_id) as $mattress_size)
        <div onclick="fabric({{\App\Models\Mattresssize::where(['id' => $mattress_size])->first();}},'mattress')">
             <input class="price" id="mattress_price" type="hidden" value="">
        <li class="options30"> 
          <img src="{{asset('upload/img/'.\App\Models\Mattresssize::where(['id' => $mattress_size])->pluck('image')->first()) }}" alt="">
         
          <div class="optText">
              <p  >
          {{\App\Models\Mattresssize::where(['id' => $mattress_size])->pluck('name')->first();}}

          </p>
          <span class="beedingprice">
          {{\App\Models\Mattresssize::where(['id' => $mattress_size])->pluck('price')->first();}}
          
          </span>
          </div>
      
        </li> 
        </div>
     @endforeach
  
     @endif
          
      </ul>
  
    </div>
 </div>
    <div class="selector beeding_color_options">
        
        
      <h6>Beeding Colour
      </h6>
      <div  id="selectField3" >
       
        <p id="selectText3">Select Beading Colour</p>
        
        <img  src="{{ asset('public/assets/images/arrow.png') }}" id="arrowIcon4">
      </div>
      <ul id="list3" class="hide">
         
       @if($product1->beeding_id!="null")
       @foreach(json_decode($product1->beeding_id) as $beading_color)
        <div onclick="fabric({{\App\Models\Beeding::where(['id' => $beading_color])->first();}},'beeding')">
             <input class="price" id="beeding_price" type="hidden" value="">
        <li class="options3"> 
          <img src="{{asset('upload/img/'.\App\Models\Beeding::where(['id' => $beading_color])->pluck('image')->first()) }}" alt="">
         
          <div class="optText">
              <p  >
          {{\App\Models\Beeding::where(['id' => $beading_color])->pluck('name')->first();}}

          </p>
          <span class="beedingprice">
          {{\App\Models\Beeding::where(['id' => $beading_color])->pluck('price')->first();}}
          
          </span>
          </div>
      
        </li> 
        </div>
     @endforeach
     @endif
      
      </ul>
     
    </div>
    

        
       

   <div class="selector addon_options">
      <h6>Buttons or Diamonds?

      </h6>
      <div  id="selectField4">
        <p id="selectText4">Select Button or Diamond</p>
        <img src="{{asset('public/assets/images/arrow.png') }}" id="arrowIcon7">
      </div>
      <ul id="list4" class="hide">
      @if($product1->addon_id!="null")
     @foreach(json_decode($product1->addon_id) as $button)
        <div onclick="fabric({{ \App\Models\Addon::where(['id' => $button])->first(); }},'diamond')">
             <input type="hidden" class="price" id="diamond_price" value="">
                <li class="options4"> 
                <img src="{{asset('upload/img/'.\App\Models\Addon::where(['id' => $button])->pluck('image')->first()) }}" alt="">
                 
          
          <div class="optText">
                <p>
                {{\App\Models\Addon::where(['id' => $button])->pluck('name')->first();}}
                
                  </p>
                  <span>
                  {{\App\Models\Addon::where(['id' => $button])->pluck('price')->first();}}
                  
                  </span>
                  </div>
                  </li>
        </div>
                  @endforeach
             @endif
</ul>
   
    </div>
    
 
<div class="selector liftup_options">
    
      <h6>Add Lift Up Storage </h6>
      <div  id="selectField5">
        <p id="selectText5"> Select Lift Up Storage </p>
        <img src="{{ asset('public/assets/images/arrow.png') }}" id="arrowIcon5">
      </div>
      <ul id="list5" class="hide">
          <input class="price" id="liftup_price" type="hidden" value="">
          <div onclick='fabric("0","No")'>
                    <li class="options5"> 
                       
                      <div class="optText">
                        <p>No</p>
                        <span></span>
                      </div>
                  </li>
                  </div>
                   <div onclick='fabric("20","Yes")'>
                      
                      <li   class="options5"> 
                           
                           <div class="optText">
                                <p>Yes</p>
                                <span>£20</span>
                            </div>
                      </li>
                  </div>
                  
      </ul>
</div>


    <div class="selector matching_box_options">
        <?php
            $r=\App\Models\Category::where(['id' => $product1->categories_id])->pluck('name')->first();
        ?>
     
        @if($r=='Storageboxs')
         <h6>Matching Storage Box size

      </h6>
        @else
      <h6>Add Matching Storage Box

      </h6>
      @endif
      <div  id="selectField6">
        <p id="selectText6">Select Matching Storage Box
        </p>
        <img src="{{ asset('public/assets/images/arrow.png') }}" id="arrowIcon6">
      </div>
      <ul id="list6" class="hide">
     
        @if($product1->matching_storage_id!="null")
   @foreach(json_decode($product1->matching_storage_id) as $matching_storagebox_name)
   
       <div onclick="fabric({{ \App\Models\Matching_storage::where(['id' =>  $matching_storagebox_name])->first(); }},'storage')">
             <input type="hidden" class="price" id="storage_price" value="">
          <li class="options6"> 
        <img width="10%" class="img-circle" src="{{asset('upload/img/'.\App\Models\Matching_storage::where(['id' =>$matching_storagebox_name])->pluck('image')->first()) }}" >
          <div class="optText">
                <p>
               {{\App\Models\Matching_storage::where(['id' =>  $matching_storagebox_name])->pluck('name')->first();}}
              
          </p>
              <p>
               {{\App\Models\Matching_storage::where(['id' =>  $matching_storagebox_name])->pluck('size')->first();}}
              
          </p>
          
          <span>
          {{\App\Models\Matching_storage::where(['id' =>  $matching_storagebox_name])->pluck('price')->first();}}
          </span>
          </div>
          
        </li>
        </div>
        @endforeach
        @endif
    </ul>

</div>

 
<div class="selector">
    
      <h6>Delivery </h6>
      <div  id="selectField32">
        <p id="selectText32">Delivery  </p>
        <img src="{{ asset('public/assets/images/arrow.png') }}" id="arrowIcon32">
      </div>
      <ul id="list32" class="hide">
          <input class="price" id="delivery_price" type="hidden" value="">
          <div onclick='fabric("0","free")'>
                    <li class="options32"> 
                       
                      <div class="optText">
                        <p>free delivery to door</p>
                        <span></span>
                      </div>
                  </li>
                  </div>
                   <div onclick='fabric("20","pick up")'>
                      
                      <li   class="options32"> 
                           
                           <div class="optText">
                                <p>pick up</p>
                                <span>£20</span>
                            </div>
                      </li>
                  </div>
                   <div onclick='fabric("30","pickup and roomchoice")'>
                      <li   class="options32"> 
                        
                        <div class="optText">
                            <p>pickup and roomchoice</p>
                            <span>£30</span>
                        </div>
                      </li>
                  </div>
      </ul>
</div>
        
    <div class="totalPrices">
      <div class="cartPrices">
<h6>Starting Price</h6>
 @if($monthlysale!=null)
      @if($product1->id==$monthlysale->product_id)
             
     
<h6 id="stating_price">£ {{$final}}
</h6>
@else
<h6 id="stating_price">£ {{$product1->price}}
</h6>
@endif
@else
<h6 id="stating_price">£ {{$product1->price}}
</h6>
@endif
      </div>
      <div class="cartPrices">
        <h6>Added Extras</h6>
        <h6 id="extra">£ 0
        </h6>
      </div>
      <div class="cartPrices">
        <h6>Grand total</h6>
         @if($monthlysale!=null)
         @if($product1->id==$monthlysale->product_id)
        <h6 class="grand_total">£ {{$final}} </h6>
        @else
                <h6 class="grand_total">£ {{$product1->price}} </h6>
        @endif
        @else
          <h6 class="grand_total">£ {{$product1->price}} </h6>
       @endif
      </div>
    </div>

  
    <input value=1 type="number" class="qtyget" >
  
		<button  id="addtocart1" class="btn btn-dark form_submit addtocart1 productadd" >Add to Cart</button>
  
		</div>
	
	
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('addcart')}}">
        @csrf
      <div class="modal-body">
        <h5>Are you sure want to add item to cart?</h5>
        <input value="" type="text" name="option[]" class="bedsizeinput" hidden >
      <input value="" type="text" name="option[]" class="fabricinput" hidden  >
      <input value="" type="text" name="option[]" class="beedinginput" hidden >
      <input value="" type="text" name="option[]" class="storageinput" hidden >
      <input value="" type="text" name="option[]" class="mattressinput" hidden >
      <input value="" type="text" name="option[]" class="addoninput" hidden >
      <input value="" type="text" name="option[]" class="liftup_storage" hidden >
      <input value="" type="text" name="option[]" class="price_delivery" hidden >
       @if($monthlysale!=null)
      @if($product1->id==$monthlysale->product_id)
        <input value="1" type="text" name="sale" class="" hidden >
        @endif
        @endif
      <input value="" type="text" name="qty" class="qty" hidden >
      <input type="text" name="p_id" value="{{$product1->id}}" hidden >
      <input type="text" class="p_price" name="p_price" value="" hidden > 
       
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        <button class="btn productadd">Add</button>
      </div>
    </form>
    </div>
  </div>
</div>
	</div>


    <section class="navTabs">
<div class="navtabDiv">

  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Description</button>
    </li>
    <?php $cat_name=\App\Models\Category::where(['id' => $product1->categories_id])->pluck('name')->first(); ?>
    <!--@if($cat_name=='Beds')-->
    <!--<li class="nav-item" role="presentation">-->
    <!--  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Dimensions</button>-->
    <!--</li>-->
    <!--@endif-->
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-review-tab" data-bs-toggle="pill" data-bs-target="#pills-review" type="button" role="tab" aria-controls="pills-review" aria-selected="false">Reviews</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-delivery-tab" data-bs-toggle="pill" data-bs-target="#pills-delivery" type="button" role="tab" aria-controls="pills-delivery" aria-selected="false">Delivery</button>
    </li>
    <!--<li class="nav-item" role="presentation">-->
    <!--  <button class="nav-link" id="pills-Question-tab" data-bs-toggle="pill" data-bs-target="#pills-Question" type="button" role="tab" aria-controls="pills-Question" aria-selected="false">Ask a Question</button>-->
    <!--</li>-->
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-pcontent-tab" data-bs-toggle="pill" data-bs-target="#pills-pcontent" type="button" role="tab" aria-controls="pills-pcontent" aria-selected="false">Product Content</button>
    </li>
  </ul>
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
      <div class="navtabDesc">
        {!!$product1->description!!}
      </div>
    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
      <div class="navtabDim">
        <h3>
          Dimensions:
        </h3>
        <img src="{{ asset('public/assets/images/dim.webp') }}" alt="">
      </div>
    </div>
    <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
    <div class="reviewpost"> 
         <h3>
         Add Review:
        </h3>
             
        <div class="reserve-contact">
        <div class="contact-form" >
          <form action="{{route('review')}}" method="POST">
          @csrf
            <div style="display: flex;align-items: center; gap:15px;">
          <h5 style="margin:0">Add Rating: </h5> 
                 <div class="product-review-stars">
                     <input class="input" type="hidden" name="product_id" value="{{$product1->id}}">
                  <input type="radio" id="star5" name="rating" value="5" class="visuallyhidden" /><label for="star5" title="Rocks!">★</label>
                  <input type="radio" id="star4" name="rating" value="4" class="visuallyhidden" /><label for="star4" title="Pretty good">★</label>
                  <input type="radio" id="star3" name="rating" value="3" class="visuallyhidden" /><label for="star3" title="Meh">★</label>
                  <input type="radio" id="star2" name="rating" value="2" class="visuallyhidden" /><label for="star2" title="Kinda bad">★</label>
                  <input type="radio" id="star1" name="rating" value="1" class="visuallyhidden" /><label for="star1" title="Sucks big time">★</label>
                </div> 
            </div>
            <div class="form-group ">
              <input type="text" name="name" class="form-control" required>
              <label>Full Name</label>
            </div>
            <div class="form-group ">
              <input type="text" name="email" class="form-control" required>
              <label>Email</label>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="message" rows="5" id="validationTextarea" required></textarea>
                <label>Type Your Message...</label>
              </div>

            <div class="text-left ">
              <button type="submit" class="btn mt-2">Send</button>
            </div>
          </form>
        </div>

    
      </div>
    </div>
      <div class="navtabReview">
        <h3>
          Reviews:
        </h3>
        <div class="commentList">
             @foreach($reviews as $review)
          <div class="commnetBox">
            <div class="commentImage">
              <img src="{{ asset('public/assets/images/ava.jpg') }}" alt="">
            </div>
            <div class="comment-text">
<h2>
  {{$review->name}}
</h2>
<span>
  
 
  {{$review->created_at->format('F d Y') }}
  
</span>
<p>
  {{$review->review}}
</p>
            </div>
            <div class="comment-rating" style="margin-left:auto;">
      <div class="ratingIcons">
          <?php for($i=1;$i<=5;$i++){ ?>
          
                                                    <i
                                                        class="{{ ($i<=$review->rating) ? 'fas fa-star' : 'fa fa-star-o empty' }}"></i>
                                                    <?php } ?>

       </div>
            </div>
          </div>
       @endforeach
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="pills-delivery" role="tabpanel" aria-labelledby="pills-delivery-tab">
      <div class="navtabDeli">
        <h3>
          Delivery Instructions:
        </h3>
        <ul>
          <li>
            Premium Shipping – £79
          </li>
          <li>
            For delivery timescales please contact our sales team. Our trained staff will bring the bed into the room of your choice, unpack and fully assemble it for you. You will be contacted prior to arranging the delivery to confirm some key details to ensure the assembly service can be carried out without any issues. Please ensure that we have your correct contact detail preferably a Valid Mobile Number. If you have specific delivery requirements or live in a building that has restricted access please call us to discuss your requirements.
          </li>
          <li>
            The above delivery charges are to cover the cost of delivery. The delivery team will assemble the bed free of charge as a goodwill gesture. Please note that delivery costs are non-refundable for any reason. Adverse weather conditions may delay your delivery however we will always keep you informed and where necessary re-book accordingly. If you miss your delivery date/time for any reason and we are forced to rearrange delivery there may be a charge of £79 to cover the cost. The delivery company charges for the delivery of items only. The Assembly service is a Free of Charge Complimentary Service. As there is no additional charge for assembly service therefore in the event where the customer decide to accept the delivery without assembly, The Luxury Bed Company cannot offer any refunds for the delivery charge.
          </li>
        </ul>
      </div>
    </div>
    <div class="tab-pane fade" id="pills-Question" role="tabpanel" aria-labelledby="pills-Question-tab">
      <div class="navtabQuest">
        <h3>
          Ask a Question:
        </h3>
        <p>
          Need to know more before you buy? Want to ask about customisations to this product? 
<br>
Fill out this form and we will get back to you as soon as we can. 
        </p>
        <div class="reserve-contact">
          <div class="contact-form" >
            <form action="sendemail.php" method="post">
              <div class="form-group ">
                <input type="text" name="txtName" class="form-control" required>
                <label>Full Name</label>
              </div>
              <div class="form-group ">
                <input type="text" name="Email" class="form-control" required>
                <label>Email</label>
              </div>
              <div class="form-group ">
                <input type="text" name="txtPhone" class="form-control" required>
                <label>Phone</label>
              </div>
              <div class="form-group">
                  <textarea class="form-control" name="txtMessage" rows="5" id="validationTextarea" required></textarea>
                  <label>Type Your Message...</label>
                </div>
  
              <div class="text-left">
                <button type="submit" class="btn2">Send</button>
              </div>
            </form>
          </div>
  
      
        </div>
      </div>

    </div>
    <div class="tab-pane fade" id="pills-pcontent" role="tabpanel" aria-labelledby="pills-pcontent-tab">
      <div class="navtabPcontent">
        <h3>
          Product Content:
        </h3>
        <p>
          This is what you can expect to come with your bed. Please choose one of the tabs below to see the details. 
        </p>
        <h4>
          Standard Bed:
        </h4>
        <ul>
          <li>
            Headboard
          </li>
          <li>
            Headboard
          </li>
          <li>
            Headboard
          </li>
          <li>
            Headboard
          </li>
        </ul>
        <img src="{{ asset('public/assets/images/Standard_Bed.webp') }}" alt="">
      </div>
    </div>
  </div>


</div>

    </section>
    
    <!--<section class="relatedProducts">-->
     
    <!--  <div class="rProducts"> <h2>-->
    <!--    Related Products-->
    <!--  </h2>-->
    <!--  @foreach($related_products as $products)-->
    <!--      <div class="menuBlock">-->
      
    <!-- <div class="menuInnerBlock">-->
    <!--  <div class="menuInnerContent">-->
      
    <!--    <img src="c"  alt="">-->
    <!--    <h1 class="menuText">-->
    <!--     <a href="{{url('productpage',$products->id)}}">Select Options</a>-->
    <!--  <a href="{{url('productpage')}}">Select Options</a>   -->

    <!--</h1>-->
        
    <!--  </div>-->
    <!-- </div>-->
    <!-- <div class="menuOuterBlock">-->
    <!--   <h3>-->
        
   
    <!-- {{$products->name}}-->
    <!--   </h3>-->
    <!--   <div class="ratingIcons">-->
    <!--    <i class="fas fa-star"></i>-->
    <!--    <i class="fas fa-star"></i>-->
    <!--    <i class="fas fa-star"></i>-->
    <!--    <i class="fas fa-star"></i>-->
    <!--    <i class="fas fa-star"></i>-->
    <!--   </div>-->
    <!--   <p>  Starting From Rs {{$products->price}}  </p>-->
    <!-- </div>-->
    <!-- </div>-->
    <!--  @endforeach-->
    <!--  </div>-->
    <!--</section>-->
    
     <section class="saleSection">
      <div class="heading">
      <h1>
      Related Products
      </h1> 
    </div>
       <div class="slider">
    <ul id="autoWidth3" class="cs-hidden">
  @foreach($related_products as $products)
    <li class="item-a">
    <div class="box">
    <div class="slide-img">
    <img alt="image" src="{{('../upload/img/'.json_decode($products->image)[0])}}">
    <div class="overlay">
    <a href="{{url('productpage',$products->id)}}" class="buy-btn" >Select Options</a>	
    </div>
    </div>
    <div class="detail-box">
    <div class="type">
    <a href="#" data-toggle="tooltip" data-placement="top" title=" {{ $products->name}}">  {{ Str::limit($products->name, 10) }}</a>
        <span>beds</span>
    </div>
    <a href="#" class="price">{{$products->price}} </a>
    </div>
    </div>		
     </li>
  @endforeach
     
 
     
     
     
    
    
  </ul>
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
   <script src="{{asset('public/assets/js/jquery-3.5.1.js')}}"></script>
 <script src="{{asset('public/assets/js/lightslider.js')}}"></script>

        <script src="{{ asset('public/assets/js/jquery.exzoom.js') }}"></script>
        <script src="{{ asset('public/assets/js/main.js') }}"></script>
        <script src="{{asset('../public/assets/plugins/toastr/toastr.min.js')}}"></script>

        
        
            @if($message = Session::get('successreview'))
 <script>
   $(document).ready(function(){
   var message='{{$message}}'; 
      toastr.success(message)
   });
   
 </script>
 @elseif($message = Session::get('danger'))
 <script>
 var message='{{$message}}';
   $(document).ready(function(){
      toastr.error(message)
   });
 </script>
        @endif
        <script>
          $(function(){

$("#exzoom").exzoom({
  // options here
  "autoPlay": false,
});

});
        </script>
        
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
          @if($product1->mattress_id=="null")
          
              <script>
            $(document).ready(function(){ 
                  $('.mattress_size_options').hide();
            });
            </script>
            
            @elseif($product1->beeding_id=="null")
             <script>
            $(document).ready(function(){ 
                $('.beeding_color_options').hide();
            });
            </script>
            @elseif($product1->addon_id=="null")
               <script>
            $(document).ready(function(){ 
                  $('.addon_options').hide();
            });
            </script>
            @elseif($product1->matching_staorage_id=="null")
               <script>
            $(document).ready(function(){ 
                $('.matching_box_options').hide();
            });
            </script>
            @endif
        <script>
            $(document).ready(function(){ 
                
                if($('.get_category').val()=='Mattress')
                {
                    $('.fabric_color_options').hide();
                    $('.mattress_size_options').hide();
                    $('.beeding_color_options').hide();
                    $('.addon_options').hide();
                     $('.liftup_options').hide();
                    $('.matching_box_options').hide();
                    // $('.for_category_mattress').hide();
                }
                else if($('.get_category').val()=='Sofas')
                {
                    $('.fabric_color_options').show();
                    $('.mattress_size_options').hide();
                    $('.beeding_color_options').show();
                    $('.addon_options').hide();
                     $('.liftup_options').hide();
                    $('.matching_box_options').hide();
                    // $('.for_category_mattress').hide();
                }
                else if($('.get_category').val()=='Foots Stools & Coffee Tables')
                {
                     $('.fabric_color_options').show();
                    $('.mattress_size_options').hide();
                    $('.beeding_color_options').show();
                    $('.addon_options').hide();
                     $('.liftup_options').hide();
                    $('.matching_box_options').hide();
                    // $('.for_category_mattress').hide();
                }
                   else if($('.get_category').val()=='Storageboxs')
                {
                     $('.fabric_color_options').show();
                    $('.mattress_size_options').hide();
                    $('.beeding_color_options').hide();
                    $('.addon_options').hide();
                     $('.liftup_options').hide();
                    $('.matching_box_options').show();
                    $('.allsize').hide();
                    // $('.for_category_mattress').hide();
                }
            });
        </script>
            <script>
              function show(){
                document.getElementById('sidebar').classList.toggle('active');
              }
            </script>
            <script type="text/javascript">
              let thumbnails = document.getElementsByClassName('thumbnail')
          
              let activeImages = document.getElementsByClassName('active')
          
              for (var i=0; i < thumbnails.length; i++){
          
                thumbnails[i].addEventListener('mouseover', function(){
                  console.log(activeImages)
                  
                  if (activeImages.length > 0){
                    activeImages[0].classList.remove('active')
                  }
                  
          
                  this.classList.add('active')
                  document.getElementById('featured').src = this.src
                })
              }
          
          
              let buttonRight = document.getElementById('slideRight');
              let buttonLeft = document.getElementById('slideLeft');
          
              buttonLeft.addEventListener('click', function(){
                document.getElementById('slider').scrollLeft -= 180
              })
          
              buttonRight.addEventListener('click', function(){
                document.getElementById('slider').scrollLeft += 180
              })
          
          
            </script>
            
       <script>
        $(document).ready(function(){ 
            $('.addtocart1').click(function(){
               
              var bedsize=$('.bedsize').val();
              var fabricinput=$('.fabricinput').val();
                if($('.get_category').val()=='Sofas')
            {
                 if(bedsize!="" && fabricinput!="")
              {
                $("#exampleModal").modal("show");
              }else
              {
                if(bedsize=="" && fabricinput=="")
                  {
                    $(".empty").html("Required!");
                    window.location.href=('#empty');
                  }else if(bedsize=="" && fabricinput!="")
                  {
                    $("#empty").html("Required!");
                    $(location).attr("href","#empty");

                  }else if(fabricinput=="" && bedsize!="")
                  {
                    $("#empty1").html("Required!");
                    $(location).attr("href","#empty1");

                  }
              
              }
                
            }
            else if($('.get_category').val()=='Foots Stools & Coffee Tables')
            {
                if(bedsize!="" && fabricinput!="")
              {
                $("#exampleModal").modal("show");
              }else
              {
                if(bedsize=="" && fabricinput=="")
                  {
                    $(".empty").html("Required!");
                    window.location.href=('#empty');
                  }else if(bedsize=="" && fabricinput!="")
                  {
                    $("#empty").html("Required!");
                    $(location).attr("href","#empty");

                  }else if(fabricinput=="" && bedsize!="")
                  {
                    $("#empty1").html("Required!");
                    $(location).attr("href","#empty1");

                  }
              
              }
                
            }
            else if($('.get_category').val()=='Mattress')
            {
                if(bedsize!="")
              {
                $("#exampleModal").modal("show");
              }else
              {
                if(bedsize=="")
                  {
                    $("#empty").html("Required!");
                    window.location.href=('#empty');
                  }
              
              }
                
            }
            
            
            
                   else if($('.get_category').val()=='Storageboxs')
            {
                if(bedsize!="" && fabricinput!="")
              {
                $("#exampleModal").modal("show");
              }else
              {
                if(bedsize=="" && fabricinput=="")
                  {
                    $(".empty").html("Required!");
                    window.location.href=('#empty');
                  }else if(bedsize=="" && fabricinput!="")
                  {
                    $("#empty").html("Required!");
                    $(location).attr("href","#empty");

                  }else if(fabricinput=="" && bedsize!="")
                  {
                    $("#empty1").html("Required!");
                    $(location).attr("href","#empty1");

                  }
              
              }
                
            }
            
            
            
            
            else if($('.get_category').val()=='Beds')
            {
                
           
              if(bedsize!="" && fabricinput!="")
              {
                $("#exampleModal").modal("show");
              }else
              {
                if(bedsize=="" && fabricinput=="")
                  {
                    $(".empty").html("Required!");
                    window.location.href=('#empty');
                  }else if(bedsize=="" && fabricinput!="")
                  {
                    $("#empty").html("Required!");
                    $(location).attr("href","#empty");

                  }else if(fabricinput=="" && bedsize!="")
                  {
                    $("#empty1").html("Required!");
                    $(location).attr("href","#empty1");

                  }
              
              }
            }else if($('.get_category').val()=='Kids Beds')
            {
                
           
              if(bedsize!="" && fabricinput!="")
              {
                $("#exampleModal").modal("show");
              }else
              {
                if(bedsize=="" && fabricinput=="")
                  {
                    $(".empty").html("Required!");
                    window.location.href=('#empty');
                  }else if(bedsize=="" && fabricinput!="")
                  {
                    $("#empty").html("Required!");
                    $(location).attr("href","#empty");

                  }else if(fabricinput=="" && bedsize!="")
                  {
                    $("#empty1").html("Required!");
                    $(location).attr("href","#empty1");

                  }
              
              }
            }

            });
        });
        </script>

    <script>
        $(document).ready(function(){ 
            
            $('.form_submit').click(function(){
              var qtyget=$('.qtyget').val();
              let text = $('.grand_total').text();
              let grandtoatal = text.replace("£", "");
          
            $('.p_price').val(grandtoatal);
            $('.qty').val(qtyget);
       
            });

            
            
        });
        
        function fabric(fabricprice, type)
        {   
            
            if(type=="size"){
                $('#bed_price').val(fabricprice.price); 
                 $('.bedinput').val(`size=`+fabricprice.name+`:`+fabricprice.price);
                  $('#sofa_price').val(fabricprice.price); 
                 $('.bedinput').val(`size=`+fabricprice.name+`:`+fabricprice.price);
                  $('#stool_price').val(fabricprice.price); 
                 $('.bedinput').val(`size=`+fabricprice.name+`:`+fabricprice.price);
            }
            // alert(fabricprice);
            // console.log(fabricprice.price);
            if (type=="fabric") {
                
                $('#fabric_price').val(fabricprice.price);
                $('.fabricinput').val(`fabric=`+fabricprice.name+`:`+fabricprice.price);
                $("#empty1").html("");
            } else if (type=="beeding") {
                
                $('#beeding_price').val(fabricprice.price);
                $('.beedinginput').val(`beeding=`+fabricprice.name+`:`+fabricprice.price);
                
            } else if (type == 'diamond') {

                $('#diamond_price').val(fabricprice.price);
                $('.addoninput').val(`addon=`+fabricprice.name+`:`+fabricprice.price);
            } else if (type == 'mattress') {

                  $('#mattress_price').val(fabricprice.price);
                  $('.mattressinput').val(`mattress=`+fabricprice.name+`:`+fabricprice.price);
            }            else if (type == 'storage') {                


                $('#storage_price').val(fabricprice.price);
                $('.storageinput').val(`matching storage=`+fabricprice.name+`:`+fabricprice.price);
            }
            else if (type == 'pick up' || type=='pickup and roomchoice' || type=='free') {
                
                $('#delivery_price').val(fabricprice);
                $('.price_delivery').val(type+`:`+fabricprice);
            }
            else if (type == 'bedsize') {
                $('#bedsize').val(0);
                $('.bedsize').val(`bed size:`+fabricprice.name);
                $("#empty").html("");
            }
            
             else if (type == 'No' || type=='Yes') {
                
                $('#liftup_price').val(fabricprice);
                $('.liftup_storage').val(type+`:`+fabricprice);
            }
            // else if (type == 'liftupstorage') {
            //     if(fabricprice=='1')
            //     {
            //         var liftup='yes';
            //     }else if(fabricprice=='0')
            //     {
            //         var liftup='no';
            //     }
            //     $('#liftupstorage').val(0);
            //     $('.liftupstorage').val(`liftupstorage:`+liftup);
            // }
            
            

            var total = 0;

            $(".price").each(function()
            {
                

              total += Number($(this).val());
            });
            // console.log(total);
            let text = $('#stating_price').text();
            let result = text.replace("£", "");
            var grand_total = Number(result) + Number(total);
             $('#extra').text('£'+total);
             $('.grand_total').text('£ '+grand_total);
             
        }
        
    
   </script>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      @if(Session::has('success'))
        <script>
            swal({
        title: "Added To Cart",
        // text: "Added To Cart",
        icon: "success",
        button: "Ok",
      });
      
          </script>
       
          @elseif(Session::has('delete'))
          <script>
            swal({
        title: "Deleted From Cart",
        // text: "Added To Cart",
        icon: "warning",
        button: "Ok",
      });
      
          </script>
          @endif
    </script>
        @php
            Session::forget('success');
            Session::forget('delete');
        @endphp
     
         <script>
      $(document).ready(function() {
      $('#autoWidth3').lightSlider({
          autoWidth:true,
          loop:true,
          onSliderLoad: function() {
              $('#autoWidth2').removeClass('cS-hidden');
          } 
      });  
    });
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