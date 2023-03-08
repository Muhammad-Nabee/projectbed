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
  <!-- ---for slider  -->
<link rel="icon" type="image/x-icon" href="{{ asset('public/assets/images/favicon.ico') }}">
<link rel="stylesheet" href="{{ asset('public/assets/css/lightslider.css') }}">
<link rel="stylesheet" href="{{ asset('../public/assets/plugins/toastr/toastr.min.css')}}">



<!-- ---for slider  -->
  <title>BedStore</title>
 
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
          <i class="fas fa-cart-plus" style="cursor:pointer;"></i>
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
                    <a class="nav-link " href="{{ route('product',$c->id) }}" > {{$c->name}} </a>
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
  <div id="sidebar">
     
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
        <h3><?php $product_name=\App\Models\product::where(['id' => $cart->p_id])->pluck('name')->first(); ?>
                
                 {{ Str::limit($product_name, 10) }}
       
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
    <span> <h5>£{{$total}}</h5></span>
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
<section class="HomeSlider">

<div class="Slider">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item item active">
        <img src="{{asset('public/assets/images/slide.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item item">
        <img src="{{asset('public/assets/images/s1.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item item">
        <img src="{{asset('public/assets/images/s2.jpg') }}" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
</div>
<div class="sliderContent">
  <h1>
    Best Bedstore In Your Town
  </h1>
  <p>
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit, sit?
  </p>
  <a href="{{route('contactus')}}" class="StylishBtn1 StylishBtnWhite">CONTACT</a>
</div>

</section>

 <section class="saleSection">
      <div class="heading">
      <h1>
      Featured Products
      </h1> 
    </div>
       <div class="slider">
    <ul id="autoWidth" class="cs-hidden">
   @foreach($product as $products)
    @if($products->is_featured=='yes')
    <li class="item-a">
    <div class="box">
    <div class="slide-img">
    <img alt="image" src="{{('upload/img/'.json_decode($products->image)[0])}}">
    <div class="overlay">
    <a href="{{url('productpage',$products->id)}}" class="buy-btn" >Select Options</a>	
    </div>
    </div>
    <div class="detail-box">
    <div class="type">
    <a href="#" data-toggle="tooltip" data-placement="top" title=" {{ $products->name}}">  {{ Str::limit($products->name, 10) }}</a>
        <span>{{\App\Models\Category::where(['id' => $products->categories_id])->pluck('name')->first();}}</span>
    </div>
    <a href="#" class="price">£ {{$products->price}} </a>
    </div>
    </div>		
     </li>
      @endif
    @endforeach
     
 
     
     
     
    
    
  </ul>
    </div>
     </section>


<section class="homeShortCategory">
  <div class="heading">
    <h1>
      Find the right Bedstore's bed for you
    </h1> 
  </div>
  
    <div class="categoryBlocks">
   
     
    @foreach($category as $item)
 
      <div class="ctBlock item" onclick="myFunction({{$item->id}})" id="categoryblock">
          
      <img  src=" {{asset('upload/img/'.$item->image)}}" alt="">
      <div class="ctBlockCaption">
        <h6>
     {{$item->name}}
        </h6>
        <p>
        {{$item->description}}
        </p>
        <button class="shopBtn">
          <span class="circle" aria-hidden="true">
          <span class="icon arrow"></span>
          </span>
          <a class="shopBtnText" href="{{route('product',$item->id)}}">Shop Now</a>
        </button>
      </div>
      </div> 
      @endforeach 
    </div>
 
</section>
@if(isset($monthsale))
<section class="discountSection salehide">
<div class="discountSectionDiv">
  <div class="discountContent">
 <h1>
  {{$monthsale->sale_name}}
 </h1>
 <input type="text" class="sale_month" value="{{$monthsale->sale_month}}" hidden>
 <p>
  {!!$monthsale->sale_description!!}
 </p>
 <div class="discountTimer saletimer">
 

 </div>
  <div class="discountprice">
     <h1>
           <?php 
         $orignal_product=\App\Models\Product::where(['id' => $monthsale->product_id])->first();
         $total_per=100;
         $discount_per=$monthsale->discount;
         $descountvalue=$discount_per/$total_per*$orignal_product->price;
         $final=$orignal_product->price-$descountvalue;
         ?>
       £ {{$orignal_product->price}}
         </h1>
         
         <span>
             £ {{$final}}
             </span>
     </div>
  </div>
  <div class="discountImage">
 <img src="{{asset('upload/img/'.json_decode($orignal_product->image)[0])}}" alt="">
 <a class="getsale" href="{{route('saleproduct')}}"> Get Now </a>
  </div>
</div>

</section>
@endif
 

 
<!-- <section class="featuredSection">-->
<!--<div class="featuredsaleDiv">-->
<!--  <div class="featuredSaleText">-->
<!--  <h1>-->
<!--   Sale-->
<!--  </h1>-->
<!--  <p>-->
<!--    Get your desired product on sale.-->
<!--  </p>-->

  <!--<a href="" class="seeBtn">-->
  <!--  <span>  See All Sale</span>-->
  <!--  <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">-->
  <!--    <circle cx="37" cy="37" r="35.5" stroke="white" stroke-width="3"></circle>-->
  <!--    <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="black"></path>-->
  <!--  </svg>-->
  <!--</a>-->
<!--  </div>-->

<!--  <div class="slider">-->
<!--    <ul id="autoWidth2" class="cs-hidden">-->

<!--     @foreach($product as $products)-->
     
<!--    @if($products->is_sale=='yes')-->
<!--    <li class="item-a">-->
<!--    <div class="box">-->
<!--    <div class="slide-img">-->
<!--    <img alt="image" src="{{('upload/img/'.json_decode($products->image)[0])}}">-->
<!--    <div class="overlay">-->
<!--    <a href="{{url('productpage',$products->id)}}" class="buy-btn" >Select Options</a>	-->
<!--    </div>-->
<!--    </div>-->
<!--    <div class="detail-box">-->
<!--    <div class="type">-->
<!--    <a href="#" data-toggle="tooltip" data-placement="top" title=" {{ $products->name}}">  {{ Str::limit($products->name, 10) }}</a>-->
<!--        <span>{{\App\Models\Category::where(['id' => $products->categories_id])->pluck('name')->first();}}</span>-->
<!--    </div>-->
<!--    <a href="#" class="price">£ {{$products->price}} </a>-->
<!--    </div>-->
<!--    </div>		-->
<!--     </li>-->
<!--      @endif-->
<!--    @endforeach-->
     
     
     
     
    
    
<!--  </ul>-->
<!--    </div>-->
      



<!--</div>-->
<!--</section>-->

 
<section class="newsletterSection">
<div class="newsletterDiv">
  <h1>
    SUBSCRIBE TO OUR NEWSLETTER
  </h1>
  <p>
    Get the latest deals and sales direct to your inbox!
  </p>






  <form action="{{route('subscribe')}}" method="post" class="newsletterForm">
      @csrf
    <input type="email" class="inputStyling" name="email" placeholder="EMAIL" required>
    <button class="submitBtn">
      <div class="svg-wrapper-1">
        <div class="svg-wrapper">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
            <path fill="none" d="M0 0h24v24H0z"></path>
            <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
          </svg>
        </div>
      </div>
      <span>SUBSCRIBE</span>
    </button>
  </form>
</div>
</section>
<section class="featuresSection">
  <div class="featuresDiv">
    <div class="features">
      <i class="fas fa-exclamation-circle"></i>
      <h1>Huge Range of Fabrics</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis at aspernatur hic impedit sapiente saepe, voluptas vitae? Sunt, illo facilis?</p>
    </div>
    <div class="features">
      <i class="fas fa-stamp"></i>
      <h1>Warranty</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis at aspernatur hic impedit sapiente saepe, voluptas vitae? Sunt, illo facilis?</p>
    </div>
    <div class="features">
      <i class="fas fa-lock"></i>
      <h1>Secure Checkout  </h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis at aspernatur hic impedit sapiente saepe, voluptas vitae? Sunt, illo facilis?</p>
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
 <script src="{{asset('public/assets/js/jquery-3.5.1.js')}}"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="{{asset('public/assets/js/lightslider.js')}}"></script>
     <script src="{{asset('../public/assets/plugins/toastr/toastr.min.js')}}"></script>
<script>
function myFunction(id) {
  
  var current_url =window.location.href;
  var url = current_url+`product/`+id;
  window.location.href=url;

}
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

            @if($message = Session::get('success'))
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
  @elseif($message = Session::get('productsuccess'))
 <script>
 var message='{{$message}}';
   $(document).ready(function(){
      toastr.success(message)
   });
 </script>
 @endif
  
    <script>
      function show(){
        document.getElementById('sidebar').classList.toggle('active');
      }
    </script>
  
    <script>
      $(document).ready(function() {
      $('#autoWidth').lightSlider({
          autoWidth:true,
          loop:true,
          onSliderLoad: function() {
              $('#autoWidth').removeClass('cS-hidden');
          } 
      });  
    });
    </script>
      <script>
      $(document).ready(function() {
      $('#autoWidth2').lightSlider({
          autoWidth:true,
          loop:true,
          onSliderLoad: function() {
              $('#autoWidth2').removeClass('cS-hidden');
          } 
      });  
    });
    </script>
    
    <script>
// Set the date we're counting down to
$(document).ready(function(){
    var month_sale=$('.sale_month').val();
    // console.log(month_sale);

var countDownDate = new Date(month_sale).getTime();

// Update the count down every 1 second
var x = setInterval(function() {
    
$('.saletimer').empty();
  // Get today's date and time
  var now = new Date().getTime();
//   console.log(now);
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  $('.saletimer').append(` <div style="display:flex; gap:1rem;"> <i class="fas fa-stopwatch"></i>
  
   <span>
     `+days+`
   </span>
   <p>
     Days
   </p>
   <span> 
     `+ hours +`
   </span>
   <p>
     Hours
   </p>
   
   <span> 
     `+ minutes +`
   </span>
   <p>
     Minutes
   </p>
   </div>
   <div style="display:flex; gap:1rem;">
   <span> 
     `+ seconds +`
   </span>
   <p>
     Seconds Left
   </p>
   </div>
   `);
//   document.getElementById("demo").innerHTML =  days + "d " + hours + "h "
//   + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    $('.salehide').hide();
    document.getElementById("saletimer").innerHTML = "EXPIRED";
  }
}, 1000);
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