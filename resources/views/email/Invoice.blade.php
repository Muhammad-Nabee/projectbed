<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>email</title>
 
</head>
<body style="font-family: 'Poppins', sans-serif;">
    <header>
<div style="display: flex; width: 100%; justify-content: space-between; padding: 5px 0;">
<div>
    <!-- <img src="logo.jpg" alt="" style="width: 40px;"> -->
    <h2 style="font-size: 18px;">
        Invoice
    </h2>
</div>
<div>
    <h2 style="font-size: 18px;">
        Order # {{$order->id}}
    </h2>
</div>
</div>
<hr style="background: #eee;">
    </header>
    <main>
<div style="display: flex; justify-content: space-between;">
    <div style="width: 50%; text-align: left;">
<h1 style="font-size: 14px;">
    Billed to:
</h1>
<p style="font-size: 14px;">	{{$order->name}}</p>
<p style="font-size: 14px;">	{{$order->city}}</p>
<p style="font-size: 14px;">	{{$order->address}}</p>
<h1 style="font-size: 14px; margin-top: 5px;">
    Payment Method:
</h1>
<p style="font-size: 14px;">	{{$order->payment_method}}  @if($order->status=='0')<span style="color: red ; font-size: 12px; font-weight: 600; margin-left: 5px;">UNPAID</span>@else <span style="color: green ; font-size: 12px; font-weight: 600; margin-left: 5px;">PAID</span> @endif </p>
<p style="font-size: 14px;">	{{$order->email}}</p>
    </div>
    <div style="width: 50%; text-align: right;">
        <h1 style="font-size: 14px;">
            Shipped to:
        </h1>
        <p style="font-size: 14px;"> {{$order->name}}</p>
<p style="font-size: 14px;">	{{$order->city}}</p>
<p style="font-size: 14px;">	{{$order->address}}</p>
<h1 style="font-size: 14px; margin-top: 5px;">
    Order Date:
</h1>
<p style="font-size: 14px;">	{{$order->order_date}}
</p>

    </div>
</div>
<div style="overflow-x: auto; border-radius: 5px;box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">

    <table style="width: 100%;">
      
            <thead>
        <tr style="border-bottom: 1px solid black;">
            <th style="text-align: left;padding: 5px 10px;border-bottom: 2px solid black; background: #c1bcbc;">Item</th>
      <th style="text-align: left;padding: 5px 10px;border-bottom: 2px solid black;background: #c1bcbc;">Price </th>
      <th style="text-align: left;padding: 5px 10px;border-bottom: 2px solid black;background: #c1bcbc;">Quantity</th>
      <th style="text-align: left;padding: 5px 10px;border-bottom: 2px solid black;background: #c1bcbc;">Total</th>
    </tr>
  </thead> 
  <tbody>
      	@foreach(json_decode($order->products) as $p)
    <tr>
     <td style="text-align: left; min-width: 205px;padding: 5px 10px;background: #f1ecec;">{{\App\Models\Product::where(['id' => $p->p_id])->pluck('name')->first();}} @if($p->sale=='1') <span style="padding: 1px 5px;border-radius: 4px;color: white;font-weight: 400;background: #5cb75c;">Sale </span>@endif</td>
     <td style="text-align: left;padding: 5px 10px;background: #f1ecec;">£ {{$p->p_orignal_price}}</td>
     <td style="text-align: left;padding: 5px 10px;background: #f1ecec;">{{$p->qty}}</td>
   <td style="text-align: left;padding: 5px 10px;background: #f1ecec;">£ {{$p->p_price}}</td>
    </tr>
     @endforeach
    <tr>
        <td></td>
        <td></td>
        <td style="padding: 5px 10px;"><strong>Subtotal</strong> </td>
        <td style="padding: 5px 10px;">£ {{$order->amount}}</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td style="padding: 5px 10px;"> <strong>Shipping</strong> </td>
        <td style="padding: 5px 10px;">  Free</td>
    </tr>
    <tr style="margin: 5px 0;">
        <td></td>
        <td></td>
        <td style="padding: 5px 10px;"><strong>Total</strong> </td>
        <td style="padding: 5px 10px;">£ {{$order->amount}}</td>
    </tr>
   </tbody>
</table>
</div>
    </main>
    <footer>

    </footer>
</body>
</html>