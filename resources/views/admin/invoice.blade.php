<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invoice</title>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
    .invoice-title h2, .invoice-title h3 {
    display: inline-block;
}

.table > tbody > tr > .no-line {
    border-top: none;
}

.table > thead > tr > .no-line {
    border-bottom: none;
}

.table > tbody > tr > .thick-line {
    border-top: 2px solid;
}
</style>
</head>
<body>
   
  <div class="container">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>Invoice</h2><h3 class="pull-right">@if($invoices->status=='0')<span style="color: red ; font-size: 12px; font-weight: 600; margin-left: 5px;">UNPAID</span>@else <span style="color: green ; font-size: 12px; font-weight: 600; margin-left: 5px;">PAID</span> @endif Order # {{$invoices->id}}</h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Billed To:</strong><br>
    					{{$invoices->name}}<br>
    					{{$invoices->city}}<br>
    					{{$invoices->address}}<br>
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
        			<strong>Shipped To:</strong><br>
    				    {{$invoices->name}}<br>
    					{{$invoices->city}}<br>
    					{{$invoices->address}}<br>
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    			    
    				<address>
    					<strong>Payment Method:</strong><br>
    					{{$invoices->payment_method}}<br>
    					<!--Visa ending **** 4242<br>-->
    					{{$invoices->email}}
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Order Date:</strong><br>
    					{{$invoices->order_date}}<br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
		<table class="table table-condensed">
    						<thead>
                                
        							<th><strong>Item</strong></th>
        							<th class="text-center"><strong>Price</strong></th>
        							<th class="text-center"><strong>Quantity</strong></th>
        							<th class="text-right"><strong>Totals</strong></th>
                                
    						</thead>
    						<tbody>
    							@foreach(json_decode($invoices->products) as $p)
    							<tr>
    								<td>{{\App\Models\Product::where(['id' => $p->p_id])->pluck('name')->first();}}  @if($p->sale=='1') <span style="padding: 1px 5px;border-radius: 4px;color: white;font-weight: 400;background: #5cb75c;">Sale </span>@endif</td>
    								<td class="text-center">£ {{$p->p_orignal_price}}</td>
    								<td class="text-center">{{$p->qty}}</td>
    								<td class="text-right">£ {{$p->p_price}}</td>
    							</tr>
                              @endforeach
    							<tr>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
    								<td class="thick-line text-right">£ {{$invoices->amount}}</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Shipping</strong></td>
    								<td class="no-line text-right">Free</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Total</strong></td>
    								<td class="no-line text-right">£ {{$invoices->amount}}</td>
    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
</body>
</html>