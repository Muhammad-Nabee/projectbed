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


<main style="min-height:100vh">
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
     
     <img src="{{asset('upload/img/'.json_decode($image)[0])}}"  alt="">
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
    
    <section style="padding:50px 20px;">
<div style="text-align:center; "> 
    <h3 style="    font-size: 30px;
    font-weight: 700;">Delivery Enquiry </h3>
    </div>       
    <div style="text-align:justify;width:90%; margin:auto; ">
        <p style="font-size:18px; letter-spacing:1px; word-spacing: 6px; margin-top:20px; font-weight:500; "> Premium Shipping – £79
For delivery timescales please contact our sales team. Our trained staff will bring the bed into the room of your choice, unpack and fully assemble it for you. You will be contacted prior to arranging the delivery to confirm some key details to ensure the assembly service can be carried out without any issues. Please ensure that we have your correct contact detail preferably a Valid Mobile Number. If you have specific delivery requirements or live in a building that has restricted access please call us to discuss your requirements.
The above delivery charges are to cover the cost of delivery. The delivery team will assemble the bed free of charge as a goodwill gesture. Please note that delivery costs are non-refundable for any reason. Adverse weather conditions may delay your delivery however we will always keep you informed and where necessary re-book accordingly. If you miss your delivery date/time for any reason and we are forced to rearrange delivery there may be a charge of £79 to cover the cost. The delivery company charges for the delivery of items only. The Assembly service is a Free of Charge Complimentary Service. As there is no additional charge for assembly service therefore in the event where the customer decide to accept the delivery without assembly, The Luxury Bed Company cannot offer any refunds for the delivery charge.</p>
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
    <a href="">Delivery Enquiry</a>
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