<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/html1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www/w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Sale</title>
    <style>
.emailDisc p{
       background: red;
    color: white;
    width: max-content;
    margin: 15px auto;
    padding: 4px 10px;
    border-radius: 2px;
}


}
    </style>
</head>


<body style="display: block; text-align: center; align-items: center; max-width: 400px; font-family: 'Poppins', sans-serif; overflow-x: hidden; margin: auto;">

    <!-- An div tag-->

    <div style="display: block; width: 100%;">

        <!--<p style="color: #000; font-size: 20px; font-weight: 700; margin-bottom: 0;">Enjoy Our Top Discounts</p>-->
  
        <!--<p style="font-size: 20px; font-weight: 700;"><a style="color: #000; text-decoration: none; margin-top: 0;" href="">View Online</a></p>-->

    </div>

    <div style="display: block; " >
   <div style=" width: 100%; background-color: #000; padding: 20px 0;   align-items: center;" >
            <!--<h3 style="color: #fff; margin-bottom: 0;">{{$sale->sale_name}}</h3>-->
            <p style="color:#fff; font-size: 2rem; font-weight: 600; margin: 0;">{{$sale->sale_name}}</p> 
            
        <div class="emailDisc"> {!!$sale->sale_description!!} </div>
        <div class="discountprice" style="    display: flex;
    gap: 10px;
    text-align: center;
    justify-content: center;
    background: white;
    width: max-content;
    padding: 5px 30px;
    color: black;
    margin: 20px auto;
    border-radius: 80px;">
     <h1 style=" text-decoration: line-through;
    font-size: 20px;
    text-decoration-color: red;
    margin-top: 20px;">
           <?php 
         $saleproduct=\App\Models\Product::where(['id' => $sale->product_id])->first();
         $total_per=100;
         $discount_per=$sale->discount;
         $descountvalue=$discount_per/$total_per*$saleproduct->price;
         $final=$saleproduct->price-$descountvalue;
         ?>
       £ {{$saleproduct->price}}
         </h1>
         
         <span style="      font-size: 28px;
    font-weight: 600;">
             £ {{$final}}
             </span>
     </div>
            <a href="https://bedsandbolts.co.uk/saleproduct/{{$sale->id}}" style="padding:7px 20px; border-radius: 3px; text-decoration: none; color: black; background: white; cursor: pointer;">Shop Now</a>
        </div>
     
        <div style="width: 100%; margin-top: 4px;"  >
            <img style="width: 100%; height: 100%;" src="https://bedsandbolts.co.uk/upload/img/{{json_decode($saleproduct->image)[0]}}" alt="">
        </div>
     

    </div>

        <footer style="width: 100%; display: block; background-color: #000;">
            <div>
                <p style="color: #fff; font-size: 22px; margin:0 !important;
                padding: 2px 0;">Follow Us </p>
            </div>
            <div>
                <a href="https://www.facebook.com/Beds-Nest-Limited-100548945740708/">
               <img src="https://i.ibb.co/7G0GPf8/600px-Facebook-Logo-2019.png" style="width: auto; height: 25px; margin-left: 5px;" alt="">
                    </a>

                    
                <a href="#">
                 <img src=" https://i.ibb.co/r2VVG0L/800px-Instagram-Icon-removebg-preview.png" style="width: auto ; height: 25px; margin-left: 5px;" alt=""></a>
             
              
            </div>
            <hr style="width: 90%; background-color: #A99DDB; opacity: 0.3;">

            <div style="padding: 10px 0;">
                <p style="color: #fff; font-size: 1rem; margin-bottom: 0;">Copyright © <b><a style="text-decoration: none; color: #fff;"  href="https://bedsandbolts.co.uk"> bedstore.com </a></b>  2022 | Powered By <b><a style="text-decoration: none; color: #fff;" href="https://codify.pk"> codify.pk</a></b></p>
            </div>

    </footer>

</body>

</html>