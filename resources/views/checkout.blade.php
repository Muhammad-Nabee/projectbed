
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('public/assets/images/favicon.ico') }}">
    <title>BedStore</title>
   
     <script type="text/javascript" src="/javascripts/jquery-3.1.1.min.js"></script>
    </head>
<style type="text/css">
        .panel-title {
        display: inline;
        font-weight: bold;
        }
        .display-table {
            display: table;
        }
        .display-tr {
            display: table-row;
        }
        .display-td {
            display: table-cell;
            vertical-align: middle;
            width: 61%;
        }
        .card{
            border:none;
        }
        .img-visa{
            position: absolute; width: 46px; right: 4%; bottom: -7%; 
            display:none;
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
        <!--</div>-->
        <!--<div class="toggle-btn" onclick="show()">-->
        <!--    <i class="fas fa-cart-plus"></i>-->
        <!--</div>-->

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



        <section class="checkout-tab">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active shoping_cart" id="pills-home-tab" data-toggle="pill" href="#pills-cart" role="tab"
                        aria-controls="pills-home" aria-selected="true">SHOPPING CART</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link checkoutclick" id="pills-profile-tab" data-toggle="pill" href="#pills-checkout" role="tab"
                        aria-controls="pills-profile" aria-selected="false" >CHECKOUT</a>
                </li>
                @if(session()->get('order_complete')!=null)
                <li class="nav-item" role="presentation">
                    <a class="nav-link order_complete" id="pills-contact-tab orderclick" data-toggle="pill" href="#pills-order" role="tab"
                        aria-controls="pills-contact" aria-selected="false">ORDER COMPLETE</a>
                </li>
                @endif
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-cart" role="tabpanel" aria-labelledby="pills-cart-tab">
                    <div class="row">
                        <div class="col-lg-8 col-xl-9">
                            <div class="shopping_cart_table">
                                <table class="table table-responsive table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">PRODUCT</th>
                                            <th scope="col">PRICE</th>
                                            <th scope="col">QUANTITY</th>
                                            <th scope="col">TOTAL</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>

                                    <?php $total=0; ?>

                                    <tbody class="table_body">

                                        @foreach($cart_data as $cart)
                                        <?php  
                                            $grand=$cart->p_price;
                                            $total+=$grand;
                                            $image= \App\Models\Product::where(['id' => $cart->p_id])->pluck('image')->first();
                                        ?>
                                        <tr>
                                            <th scope="row">
                                                <ul class="cart_list">
                                                    <li class="list-inline-item pr10"><a href="#"><i
                                                                class="fas fa-times"></i></a></li>
                                                    <li class="list-inline-item"><a class="close_img" href="#"><img
                                                                src="{{asset('upload/img/'.json_decode($image)[0])}}"
                                                                alt=""></a></li>
                                                    <li class="list-inline-item"><a class="cart_title"
                                                            href="#">{{\App\Models\Product::where(['id' => $cart->p_id])->pluck('name')->first();}}</a> @if($cart->sale=='1') <span style="padding: 1px 5px;border-radius: 4px;color: white;font-weight: 400;background: #5cb75c;">Sale </span>@endif </li>
                                                </ul>
                                            </th>

                                            <td>£ {{$cart->p_orignal_price}}</td>
                                            <td>{{$cart->qty}}</td>
                                            <!-- <td><input class="cart_count text-center" value="{{$cart->qty}}" placeholder="Quantity" type="number"></td> -->
                                            <td>£ {{$cart->p_price}}</td>
                                            <td><a href="{{route('deletecartitem',$cart->p_id)}}">
                                                    <i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>

                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-3">
                            <div class="checkout-sidebar">
                                <h1>
                                    Cart Total
                                </h1>
                                <ul>
                                    <!-- <li class="subtitle"><p>Subtotal <span class="float-end">$907.00</span></p> <hr></li> -->
                                    <li class="subtitle">
                                        <p>Shipping Charges <span class="float-end">£ 5.00</span></p>
                                    </li>

                                    <li class="subtitle">
                                        <hr>
                                    </li>
                                    <li class="subtitle">
                                        <p>Subtotal <span class="float-end totals text-thm">£ {{$total}}</span></p>
                                    </li>
                                </ul>

                                <a><button class="place-order order">Checkout</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-checkout" role="tabpanel" aria-labelledby="pills-checkout-tab">
                    <div class="row">
                        <div class="col-lg-8 col-xl-8">
                            <div class="reserve-contact">
                                <div class="contact-form contact-form-billing">
                                    <form action="{{route('placeorder')}}" method="post">
                                        @csrf
                                        <input type="text" name="total"  value="{{$total}}" id="" hidden>
                                        <div class="form-group ">
                                            <input type="text" id="name" name="txtName" class="form-control name  forminput required-inputs"  id ="forminput"  required>
                                            <label>Full Name</label>
                                        </div>
                                        <input type="text" value="{{$cart_data}}" name="cart" id="" hidden>
                                        <div class="form-group ">
                                            <select name="country"  id="select">
                                                <option value="UK" >UK</option>
                                            </select>
                                        </div>
                                        <div class="form-group ">
                                            <input type="text" id="address" name="address" class="form-control  required-inputs"  required>
                                            <label>Street Address</label>
                                        </div>
                                        <div class="form-group ">
                                            <input type="text" name="city" id="city" class="form-control  required-inputs" required>
                                            <label>Town/City</label>
                                        </div>
                                        <div class="form-group ">
                                            <input type="text" name="zip" id="zip" class="form-control  required-inputs" required>
                                            <label>Zip</label>
                                        </div>
                                        <div class="form-group ">
                                            <input type="text" name="Email" id="email" class="form-control  required-inputs" required>
                                            <label>Email</label>
                                        </div>
                                        <div class="form-group ">
                                            <input type="number" name="txtPhone" id="phone" class="form-control  required-inputs" required>
                                            <label>Phone</label>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control  required-inputs" itemid="message" name="txtMessage" rows="5"
                                                id="validationTextarea" required></textarea>
                                            <label>Order Notes</label>
                                        </div>
                                        <button hidden class="placeorder_button" >submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-4">
                            <div class="checkout-sidebar">
                                <h1>
                                    Cart Total
                                </h1>
                                <ul>
                                    <li class="subtitle">
                                        <p>Product <span class="float-end">Subtotal</span></p>
                                        <hr>
                                    </li>
                                    @foreach($cart_data as $cart)
                                    <li class="subtitle">
                                        <p>{{\App\Models\Product::where(['id' => $cart->p_id])->pluck('name')->first();}} <span class="float-end">£{{$cart->p_price}}</span></p>
                                        <hr>
                                    </li>
                                    @endforeach
                                    
                                  
                                    <li class="subtitle">
                                        <p>Shipping Charges <span class="float-end">£5.00</span></p>
                                    </li>

                                    <li class="subtitle">
                                        <hr>
                                    </li>
                                    <li class="subtitle">
                                        <p>Subtotal <span class="float-end totals text-thm">£{{$total}}</span></p>
                                    </li>
                                    <li>
                                        <label for="" style="font-weight:600; color:red;">Payment Method:</label>
                                         <select  class="form-control paymentmethod" name="" id="">
                                         <option value="">--SELECT--</option>
                                         <option value="Cash on delivery">Cash on delivery</option>
                                         @if($stripe!=null)
                                    <option value="Payment with Card">Payment with Card</option>
                                    @endif
                                </select>
                                    </li>
                                    <br><br>
                                    <li>
                                    <div class="row payment">
        <div class="col-md-12 col-md-offset-3">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >                  
                </div>
                <div class="panel-body">
  
                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif

                    <form 
                            role="form" 
                            action="{{ route('stripe.post') }}" 
                            method="post" 
                            class="require-validation"
                            data-cc-on-file="false"
                            data-stripe-publishable-key="@if($stripe!=null){{$stripe->token}}@endif"
                            id="payment-form">
                        @csrf
                        
                        <input type="text" value="" name="stripename" id="stripename" hidden>
                        <input type="text" value="" name="stripeemail" id="stripeemail" hidden>
                        <input type="text" value="" name="stripecity" id="stripecity" hidden>
                        <input type="text" value="" name="stripeaddress" id="stripeaddress" hidden>
                        <input type="text" value="" name="stripephone" id="stripephone" hidden>
                        <input type="text" value="" name="stripezip" id="stripezip" hidden>
                        <input type="text" value="" name="stripemessage" id="stripemessage" hidden>
                        <input type="text" value="{{$cart_data}}" name="striprecart" id="" hidden>
                        <input type="text" value="" name="stripecardbrand" id="stripecardbrand" hidden>
                        
                        <select name="stripecountry"  id="select" hidden>
                            <option value="UK" selected>UK</option>
                        </select>
                        <div class="form-group ">
                           
                        <div class='form-row row'>
                            <input hidden type="text" value="{{$total}}" name="total_amount">
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Name on Card</label> <input
                                    class='form-control' name="card_holder_name" size='4' type='text'>
                            </div>

                        </div>
  
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group card required' style="position:relative; overflow: hidden;">
                                <label class='control-label'>Card Number</label> <input
                                    autocomplete='off' name="account_no"  class='form-control card-number' size='20'
                                    type='text'>
                                    <img class="img-visa" id="visa" src="{{asset('public/assets/images/visa.png')}}" alt="" >
                            </div>
                        </div>
  
                        <div class='form-row row'>
                            <div class='col-xs-4 col-md-4 form-group expiration required'>
                                <label class='control-label' style="width:100%; font-size:14px;">Expiration Month</label> <input
                                    class='form-control card-expiry-month' placeholder='MM' size='2'
                                    type='text'>
                            </div>
                            <div class='col-xs-4 col-md-4 form-group expiration required'>
                                <label class='control-label' style="width:100%; font-size:14px;">Expiration Year</label> <input
                                    class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                    type='text'>
                            </div>
                            <div class='col-xs-4 col-md-4 form-group cvc required'>
                                <label class='control-label' style="width:100%; font-size:14px;">CVC</label> <input autocomplete='off'
                                    class='form-control card-cvc' placeholder='ex. 311' size='4'
                                    type='text'>
                            </div>
                            
                        </div>
  
                        <div class='form-row row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.</div>
                            </div>
                        </div>
  
                        <div class="row mb-4 mt-2">
                            <div class="col-xs-12">
                                <button class=" pay-btn" type="submit" style="    max-width: 250px;
    display: block;
    margin: auto;
    background-color: #ffa323;
    border: 2px solid #ffa323;
    color: white;
    padding: 5px 10px;">Pay Now</button>
                            </div>
                        </div>
                          
                    </form>
                </div>
            </div>        
        </div>
    </div>
                                    </li>
                                </ul>
                               
                                <div class="container">
  

  
      
</div>


                                
                                <a class="cash"><button class="place-order place">place order</button></a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                @if(session()->get('order_complete')!=null)
                <div class="tab-pane fade" id="pills-order" role="tabpanel" aria-labelledby="pills-order-tab">
                    <div class="row">
                        <div class="col-lg-3 col-xl-3">
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="order-comp">
                                <i class="fas fa-check-circle"></i>
                                <h3>
                                    YOUR ORDER IS COMPLETED!
                                </h3>
                                <p>
                                    Thank you. Your order has been received.
                                </p>
                            </div>
                            <div class="checkout-sidebar">
                                <ul>
                                    <li class="subtitle">
                                        <p>ORDER NO: <span class="float-end">{{session()->get('order_complete')->id}}</span></p>
                                        <hr>
                                    </li>
                                    <li class="subtitle">
                                        <p>DATE <span class="float-end">{{session()->get('order_complete')->order_date}}</span></p>
                                        <hr>
                                    </li>
                                   
                                    <li class="subtitle">
                                        <p>PAYMENT METHOD<span class="float-end">{{session()->get('order_complete')->payment_method}}</span></p>
                                    </li>


                                    <li class="subtitle">
                                        <hr>
                                    </li>
                                   
                                </ul>
                            </div>
                            
                            <div class="checkout-sidebar">
                                
                                <h1>
                                    ORDER DETAILS
                                </h1>
                                <ul>
                                    
                                    <li class="subtitle">
                                        <p>Product <span class="float-end">Subtotal</span></p>
                                        <hr>
                                    </li>
                                    @foreach(json_decode(session()->get('order_complete')->products) as $order)
                                    <li class="subtitle">
                                        <p>{{\App\Models\Product::where(['id' => $order->p_id])->pluck('name')->first();}} @if($order->sale=='1') <span style="padding: 1px 5px;border-radius: 4px;color: white;font-weight: 400;background: #5cb75c;">Sale </span>@endif <span class="float-end">£ {{$order->p_price}}</span></p>
                                        <hr>
                                    </li>
                                    @endforeach
                                    <li class="subtitle">
                                        <p>Shipping Charges <span class="float-end">Free Delivery</span></p>
                                    </li>

                                    <li class="subtitle">
                                        <hr>
                                    </li>
                                    <li class="subtitle">
                                        <p>Subtotal <span class="float-end totals text-thm">£ {{session()->get('order_complete')->amount}}</span></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xl-3">
                        </div>
                    </div>
                </div>
                @endif
        </section>

   @php
            Session::forget('order_complete');
        @endphp




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
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
</script>
<script src="{{ asset('public/assets/js/main.js') }}"></script>


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
    var inputs = document.querySelectorAll(".required-inputs");
    var button = document.querySelector(".paymentmethod");
    button.disabled = true;
    for (let i = 0; i < inputs.length; i++) {
        inputs[i].addEventListener("input",checkInputs);
    }
    function checkInputs(){
var inputIsEmpty = false;
        for (let j = 0; j < inputs.length; j++) {
            if (inputs[j].value=="") {
                inputIsEmpty = true;
            }
        
    }
    if (inputIsEmpty) {
       
        button.disabled = true;
    }else{
       
        button.disabled = false;
    }
    }
  
</script>

<script>
    $(document).ready(function(){
        $('.cash').hide();
        $('.payment').hide();
   
    $('.paymentmethod').change(function(){
        // alert($('.paymentmethod').val());
       
        if($('.paymentmethod').val() == 'Cash on delivery')
        {
            $('.cash').show();
            $('.payment').hide();
        }else if($('.paymentmethod').val() == 'Payment with Card')
        {
            $('.cash').hide();
            $('.payment').show();
            var name=$('#name').val();
            var email=$('#email').val();
            var phone=$('#phone').val();
            var city=$('#city').val();
            var address=$('#address').val();
            var zip=$('#zip').val();
            let country=$('#select').val();
            var message=$('#validationTextarea').val();
            $('#stripename').val(name);
            $('#stripeemail').val(email);
            $('#stripephone').val(phone);
            $('#stripecity').val(city);
            $('#stripeaddress').val(address);
            $('#stripezip').val(zip);
            $('#stripemessage').val(message);
            $('#stripecountry').val(country);
        
        }
    });
});
    </script>
<script>
    function show() {
        document.getElementById('sidebar').classList.toggle('active');
    }

</script>
<script type="text/javascript">
    let thumbnails = document.getElementsByClassName('thumbnail')

    let activeImages = document.getElementsByClassName('active')

    for (var i = 0; i < thumbnails.length; i++) {

        thumbnails[i].addEventListener('mouseover', function () {
            console.log(activeImages)

            if (activeImages.length > 0) {
                activeImages[0].classList.remove('active')
            }


            this.classList.add('active')
            document.getElementById('featured').src = this.src
        })
    }


    let buttonRight = document.getElementById('slideRight');
    let buttonLeft = document.getElementById('slideLeft');

    buttonLeft.addEventListener('click', function () {
        document.getElementById('slider').scrollLeft -= 180
    })

    buttonRight.addEventListener('click', function () {
        document.getElementById('slider').scrollLeft += 180
    })

</script>
<script>
    $(document).ready(function () {

        $('.order').click(function () {
            $('.checkoutclick').click();

        });

        $('.place').click(function () {
       
            $('.placeorder_button').click();

        });

    });

</script>

<script>
    $(document).ready(function () {
var check = document.querySelector(".card-expiry-year");
var visaimg =document.getElementById("visa");
 var button = document.querySelector(".pay-btn");
    button.disabled = true;
check.addEventListener("input",checkInputs);
function checkInputs(){
     var $form         = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
   
   
        if (!$form.data('cc-on-file')) {
          
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, abc);
        }
        function abc(status, response) {
            $('.stripecardbrand').empty();
             if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        }else{
            if(response.card.brand=='Visa')
            {
                $('.error').addClass('hide');
               
            visaimg.style.display="block";
            $('#stripecardbrand').val(response.card.brand);
            button.disabled = false;
            }else{
                button.disabled = true;
            }
        }
        }
}

      

    });

</script>

  
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  
<script type="text/javascript">
$(function() {
   
    var $form         = $(".require-validation");
   
    $('form.require-validation').bind('submit', function(e) {
        var $form         = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
        $errorMessage.addClass('hide');
  
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
   
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
  
  });
  
  function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
               
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
   
});
</script>
@if(Session::has('success'))
<script>
     $(document).ready(function () {

        $(".checkoutclick").hide();
        $(".shoping_cart").hide();
        
            $('.order_complete').click();
            

        
     });
</script>
@endif
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
