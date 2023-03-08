<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Detail</title>
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
.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
    position: relative;
    min-height: 1px;
    padding-left: 20px;
    padding-right: 20px;
}
</style>
</head>
<body>
   <button  onclick="printDiv('printOrder')">Print this page</button>
  <div class="container" id='printOrder'>
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2></h2><h3 class="pull-right">@if($seeorder->status=='0')<span style="color: red ; font-size: 12px; font-weight: 600; margin-left: 5px;">UNPAID</span>@else <span style="color: green ; font-size: 12px; font-weight: 600; margin-left: 5px;">PAID</span> @endif Order # {{$seeorder->id}}</h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				    
    				<strong>Billed To:</strong><br>
    					{{$seeorder->name}}<br>
    					{{$seeorder->city}}<br>
    					{{$seeorder->address}}<br>
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
        			<strong>Shipped To:</strong><br>
    				    {{$seeorder->name}}<br>
    					{{$seeorder->city}}<br>
    					{{$seeorder->address}}<br>
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    			    
    		
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Order Date:</strong><br>
    					{{$seeorder->order_date}}<br><br>
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
    						   
    							@foreach(json_decode($seeorder->products) as $p)

    							<tr>
    								<td>{{\App\Models\Product::where(['id' => $p->p_id])->pluck('name')->first();}} @if($p->sale=='1') <span style="padding: 1px 5px;border-radius: 4px;color: white;font-weight: 400;background: #5cb75c;">Sale </span>@endif</td>
    								<td class="text-center">£ {{$p->p_orignal_price}}</td>
    								<td class="text-center">{{$p->qty}}</td>
    								<td class="text-right">£ {{$p->p_price}}</td>
    							</tr>
                              @endforeach
    							<tr>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
    								<td class="thick-line text-right">£ {{$seeorder->amount}}</td>
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
    								<td class="no-line text-right">£ {{$seeorder->amount}}</td>
    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    @foreach(json_decode($seeorder->products) as $pro)
  
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    	
    			<div class="panel-body">
    				<div class="table-responsive">
		<table class="table table-condensed">
    						<thead>
                                
        							<th><strong>name</strong></th>
        							<th><strong>Options</strong></th>
                                
    						</thead>
    						<tbody>
    						<tr>
    						    <td>
    						        {{\App\Models\product::where(['id' => $pro->p_id])->pluck('name')->first();}} @if($pro->sale=='1') <span style="padding: 1px 5px;border-radius: 4px;color: white;font-weight: 400;background: #5cb75c;">Sale </span>@endif
    						    </td>
    						    <td>
    						            @foreach(json_decode($pro->options) as $o)
    						           @if($o!=null)
    						             <li>{{$o}}</li>
    						             @endif
    						        @endforeach
    						       
    						       
    						    
    						    </td>
    						</tr>
    						
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    @endforeach
</div>
</body>
<script>
		function printDiv(divName){
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;

		}
	</script>
</html>