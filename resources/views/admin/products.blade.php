@extends('admin.layouts.master')



@section('content')
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
    text-align:left !important;
    
}
div.dataTables_wrapper div.dataTables_paginate ul.pagination {
   
    justify-content: flex-end !important;
}
div.dataTables_wrapper div.dataTables_info {
  
    text-align: left;
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 26px;
    position: absolute;
    top: 50%;
    right: 1px;
    width: 20px;
    transform: translateY(-50%);
}
.select2-container .select2-selection--single {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    height: 40px;
    user-select: none;
    -webkit-user-select: none;
}
.menublock2{
    min-width:350px !important;
}
.menublock2 .menuInnerBlock {
    min-width: 300px;
}
.menublock2 .menuInnerBlock img {
    background-size: contain;
    background-position: center;
    width: 300px;
    height: 230px;
}
.menublock2    .menuOuterBlock{
       display:flex !important; 
       gap: 30px;
    }
    .menublock2 {
    min-width: fit-content !important;
}
.menublock2:hover {
    box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;
}
.menuOuterBlock .menuOuterBlockCols{
    display:flex;
    flex-direction:column;
    min-width: 230px;
    text-align: left;
}
.menuOuterBlockCols ul{
    padding:0;
    list-style:none;
    
}
.menuOuterBlockCols ul li{
    text-align:left;
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
<div class="col-12">
      <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('redirects')}}">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"></h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right" style="gap:10px">
           
          <a  href="{{route('addproductdata')}}" class="btn btn-primary">Add Product</a> 
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                  Monthly Sale
                </button>
               
          
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>


   <select class="form-control category" style="margin-bottom:20px;">
 <option  >-- Select Category --</option>
 <option  >All Product</option>
    @foreach($category as $category)
     <option value="{{$category->id}}" >{{$category->name}}</option>
    @endforeach
    </select>

     <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Monthly Sale Product</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{route('addmonthlysale')}}" method="post">
                  @csrf
                  <div class="row">
                       <div class="form-group col-xl-12">
                    <label>Sale Name</label>
                  <input type="text" name="salename" value="" class="form-control " placeholder="Sale Name" require>
                </div>
                </div>
                <div class="row">
                    <div class="form-group col-xl-12">
                    <label>Select Product</label>
                  <select class="form-control select2" name="product" style="width: 100%;">
                    
                       @foreach($products as $product)
                        <option value="{{$product->id}}" >{{$product->name}}</option>
                        @endforeach
                    
                  </select>
                </div>
               
                <label>Sale Description</label>
    <div class="">
       <textarea id="compose-textarea" rows="10" name="sale_description"  class="form-control" ></textarea>
     </div>
                </div>
                <div class="row"  style="justify-content: center ; ">
                           <div class="form-group col-lg-6">
                       <input type="number" name="discount" value="" class="form-control" placeholder=" Enter Discount" require>
                       </div>
               <?php date_default_timezone_set('Asia/Karachi'); ?>
              
              

              
              
              
              
              
              
              
              
                 <div class="form-group col-lg-6">
                     
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name="sale_date" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                
                </div>
             <div class="modal-footer justify-content-between">
              
              <button  class="btn btn-primary">Add</button>
            </div>
              </form>
            </div>
         
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
            <div class="card card-black">
              <div class="card-header">
                <div class="card-title cattitle">
                   
                </div>
              </div>
              <div class="card-body">
                <div class="tabs">
                  <div class="btn-group w-100 mb-2">
                    <a class="btn btn-info active allproducts" href="javascript:void(0)" data-filter="all"> All Products </a>
                    <a class="btn btn-info saleproducts" href="javascript:void(0)" data-filter="1"> Sale Products </a>
                    <a class="btn btn-info monthlysaleproducts" href="javascript:void(0)" data-filter="2"> Monthly Sale Product </a>
                  </div>
                  
                </div>
                <div>
                  <div class="p-0">
                      
                                     <div class="customerFavDiv catbed" style="width: 100%;">
                <div class="heading">
                  <h1>
                  
                  </h1> 
                </div>
               <table  id="catbed">
                    <thead>
                        <th></th>
                    </thead>
                    <tbody style="width: 100%; display: flex; flex-wrap: wrap; justify-content: center;">
                        
                    
                        @foreach($products as $product)
                       @if($product->categories_id==21)
                        <tr>
                            <td >
                                
                                      <div class="menuBlock">
                      
                     <div class="menuInnerBlock">
                      <div class="menuInnerContent">
                          @if($monthlysale!=null)
                            @if($product->id==$monthlysale->product_id)
              <div class="ribbon"> <span> Sale {{$monthlysale->discount}}% Off </span> </div>
              @endif
                @endif
                        <img src="{{('upload/img/'.json_decode($product->image)[0])}}"  alt="">
                        <h1 class="menuText">
                       
                                  <a href="{{route('editproduct',$product->id) }}"><i class="fas fa-edit"></i></a>
                         <a href="{{ route('deleted',$product->id) }}"  ><i class="fa fa-trash" aria-hidden="true"></i></a>
                        <a href="{{url('productpage',$product->id)}}"  ><i class="fa fa-eye" aria-hidden="true"></i></a>
                        
                      </div>
                     </div>
                     <div class="menuOuterBlock" >
                       <h3>
                        
                   
                     {{ Str::limit($product->name, 10) }}
                       </h3>
                        @if($monthlysale!=null)
                          @if($product->id==$monthlysale->product_id)
               <?php 
         $orignal_product=$product->price;
         $total_per=100;
         $discount_per=$monthlysale->discount;
         $descountvalue=$discount_per/$total_per*$orignal_product;
         $final=$orignal_product-$descountvalue;
         ?>
     
         
      
             <p><span style="text-decoration: line-through;;text-decoration-color: red;">£ {{$product->price}}</span>  <span>£ {{$final}}</span> </p>
             @else
             <p>  Starting From £ {{$product->price}}  </p>
             @endif
             @else
              <p>  Starting From £ {{$product->price}}  </p>
             @endif
             
                     </div>
                     </div>
                                </td>
                        </tr>
                        @endif
                        @endforeach
                    
                    </tbody>
                    </table>
                </div>
                  
                                     <div class="customerFavDiv catsofas" style="width: 100%;">
                <div class="heading">
                  <h1>
                  
                  </h1> 
                </div>
               <table  id="catsofas">
                    <thead>
                        <th></th>
                    </thead>
                    <tbody style="width: 100%; display: flex; flex-wrap: wrap; justify-content: center;">
                        
                    
                        @foreach($products as $product)
                       @if($product->categories_id==23)
                        <tr>
                            <td >
                                
                                      <div class="menuBlock">
                      
                     <div class="menuInnerBlock">
                      <div class="menuInnerContent">
                          @if($monthlysale!=null)
                            @if($product->id==$monthlysale->product_id)
              <div class="ribbon"> <span> Sale {{$monthlysale->discount}}% Off </span> </div>
              @endif
                @endif
                        <img src="{{('upload/img/'.json_decode($product->image)[0])}}"  alt="">
                        <h1 class="menuText">
                       
                                  <a href="{{route('editproduct',$product->id) }}"><i class="fas fa-edit"></i></a>
                         <a href="{{ route('deleted',$product->id) }}"  ><i class="fa fa-trash" aria-hidden="true"></i></a>
                        <a href="{{url('productpage',$product->id)}}"  ><i class="fa fa-eye" aria-hidden="true"></i></a>
                        
                      </div>
                     </div>
                     <div class="menuOuterBlock" >
                       <h3>
                        
                   
                     {{ Str::limit($product->name, 10) }}
                       </h3>
                        @if($monthlysale!=null)
                          @if($product->id==$monthlysale->product_id)
               <?php 
         $orignal_product=$product->price;
         $total_per=100;
         $discount_per=$monthlysale->discount;
         $descountvalue=$discount_per/$total_per*$orignal_product;
         $final=$orignal_product-$descountvalue;
         ?>
     
         
      
             <p><span style="text-decoration: line-through;;text-decoration-color: red;">£ {{$product->price}}</span>  <span>£ {{$final}}</span> </p>
             @else
             <p>  Starting From £ {{$product->price}}  </p>
             @endif
             @else
              <p>  Starting From £ {{$product->price}}  </p>
             @endif
             
                     </div>
                     </div>
                                </td>
                        </tr>
                        @endif
                        @endforeach
                    
                    </tbody>
                    </table>
                </div>
                
                
                
                                     <div class="customerFavDiv catmattress" style="width: 100%;">
                <div class="heading">
                  <h1>
                  
                  </h1> 
                </div>
               <table  id="catmattress">
                    <thead>
                        <th></th>
                    </thead>
                    <tbody style="width: 100%; display: flex; flex-wrap: wrap; justify-content: center;">
                        
                    
                        @foreach($products as $product)
                       @if($product->categories_id==25)
                        <tr>
                            <td >
                                
                                      <div class="menuBlock">
                      
                     <div class="menuInnerBlock">
                      <div class="menuInnerContent">
                          @if($monthlysale!=null)
                            @if($product->id==$monthlysale->product_id)
              <div class="ribbon"> <span> Sale {{$monthlysale->discount}}% Off </span> </div>
              @endif
                @endif
                        <img src="{{('upload/img/'.json_decode($product->image)[0])}}"  alt="">
                        <h1 class="menuText">
                       
                                  <a href="{{route('editproduct',$product->id) }}"><i class="fas fa-edit"></i></a>
                         <a href="{{ route('deleted',$product->id) }}"  ><i class="fa fa-trash" aria-hidden="true"></i></a>
                        <a href="{{url('productpage',$product->id)}}"  ><i class="fa fa-eye" aria-hidden="true"></i></a>
                        
                      </div>
                     </div>
                     <div class="menuOuterBlock" >
                       <h3>
                        
                   
                     {{ Str::limit($product->name, 10) }}
                       </h3>
                        @if($monthlysale!=null)
                          @if($product->id==$monthlysale->product_id)
               <?php 
         $orignal_product=$product->price;
         $total_per=100;
         $discount_per=$monthlysale->discount;
         $descountvalue=$discount_per/$total_per*$orignal_product;
         $final=$orignal_product-$descountvalue;
         ?>
     
         
      
             <p><span style="text-decoration: line-through;;text-decoration-color: red;">£ {{$product->price}}</span>  <span>£ {{$final}}</span> </p>
             @else
             <p>  Starting From £ {{$product->price}}  </p>
             @endif
             @else
              <p>  Starting From £ {{$product->price}}  </p>
             @endif
             
                     </div>
                     </div>
                                </td>
                        </tr>
                        @endif
                        @endforeach
                    
                    </tbody>
                    </table>
                </div>
                
                
                                     <div class="customerFavDiv catstool" style="width: 100%;">
                <div class="heading">
                  <h1>
                  
                  </h1> 
                </div>
               <table  id="catstool">
                    <thead>
                        <th></th>
                    </thead>
                    <tbody style="width: 100%; display: flex; flex-wrap: wrap; justify-content: center;">
                        
                    
                        @foreach($products as $product)
                       @if($product->categories_id==26)
                        <tr>
                            <td >
                                
                                      <div class="menuBlock">
                      
                     <div class="menuInnerBlock">
                      <div class="menuInnerContent">
                          @if($monthlysale!=null)
                            @if($product->id==$monthlysale->product_id)
              <div class="ribbon"> <span> Sale {{$monthlysale->discount}}% Off </span> </div>
              @endif
                @endif
                        <img src="{{('upload/img/'.json_decode($product->image)[0])}}"  alt="">
                        <h1 class="menuText">
                       
                                  <a href="{{route('editproduct',$product->id) }}"><i class="fas fa-edit"></i></a>
                         <a href="{{ route('deleted',$product->id) }}"  ><i class="fa fa-trash" aria-hidden="true"></i></a>
                        <a href="{{url('productpage',$product->id)}}"  ><i class="fa fa-eye" aria-hidden="true"></i></a>
                        
                      </div>
                     </div>
                     <div class="menuOuterBlock" >
                       <h3>
                        
                   
                     {{ Str::limit($product->name, 10) }}
                       </h3>
                        @if($monthlysale!=null)
                          @if($product->id==$monthlysale->product_id)
               <?php 
         $orignal_product=$product->price;
         $total_per=100;
         $discount_per=$monthlysale->discount;
         $descountvalue=$discount_per/$total_per*$orignal_product;
         $final=$orignal_product-$descountvalue;
         ?>
     
         
      
             <p><span style="text-decoration: line-through;;text-decoration-color: red;">£ {{$product->price}}</span>  <span>£ {{$final}}</span> </p>
             @else
             <p>  Starting From £ {{$product->price}}  </p>
             @endif
             @else
              <p>  Starting From £ {{$product->price}}  </p>
             @endif
             
                     </div>
                     </div>
                                </td>
                        </tr>
                        @endif
                        @endforeach
                    
                    </tbody>
                    </table>
                </div>
                
                
                
                     <div class="customerFavDiv catkid" style="width: 100%;">
                <div class="heading">
                  <h1>
                  
                  </h1> 
                </div>
               <table  id="catkid">
                    <thead>
                        <th></th>
                    </thead>
                    <tbody style="width: 100%; display: flex; flex-wrap: wrap; justify-content: center;">
                        
                    
                        @foreach($products as $product)
                       @if($product->categories_id==27)
                        <tr>
                            <td >
                                
                                      <div class="menuBlock">
                      
                     <div class="menuInnerBlock">
                      <div class="menuInnerContent">
                          @if($monthlysale!=null)
                            @if($product->id==$monthlysale->product_id)
              <div class="ribbon"> <span> Sale {{$monthlysale->discount}}% Off </span> </div>
              @endif
                @endif
                        <img src="{{('upload/img/'.json_decode($product->image)[0])}}"  alt="">
                        <h1 class="menuText">
                       
                                  <a href="{{route('editproduct',$product->id) }}"><i class="fas fa-edit"></i></a>
                         <a href="{{ route('deleted',$product->id) }}"  ><i class="fa fa-trash" aria-hidden="true"></i></a>
                        <a href="{{url('productpage',$product->id)}}"  ><i class="fa fa-eye" aria-hidden="true"></i></a>
                        
                      </div>
                     </div>
                     <div class="menuOuterBlock" >
                       <h3>
                        
                   
                     {{ Str::limit($product->name, 10) }}
                       </h3>
                        @if($monthlysale!=null)
                          @if($product->id==$monthlysale->product_id)
               <?php 
         $orignal_product=$product->price;
         $total_per=100;
         $discount_per=$monthlysale->discount;
         $descountvalue=$discount_per/$total_per*$orignal_product;
         $final=$orignal_product-$descountvalue;
         ?>
     
         
      
             <p><span style="text-decoration: line-through;;text-decoration-color: red;">£ {{$product->price}}</span>  <span>£ {{$final}}</span> </p>
             @else
             <p>  Starting From £ {{$product->price}}  </p>
             @endif
             @else
              <p>  Starting From £ {{$product->price}}  </p>
             @endif
             
                     </div>
                     </div>
                                </td>
                        </tr>
                        @endif
                        @endforeach
                    
                    </tbody>
                    </table>
                </div>
                
                
                
                     <div class="customerFavDiv catstorage" style="width: 100%;">
                <div class="heading">
                  <h1>
                  
                  </h1> 
                </div>
               <table  id="catstorage">
                    <thead>
                        <th></th>
                    </thead>
                    <tbody style="width: 100%; display: flex; flex-wrap: wrap; justify-content: center;">
                        
                    
                        @foreach($products as $product)
                       @if($product->categories_id==28)
                        <tr>
                            <td >
                                
                                      <div class="menuBlock">
                      
                     <div class="menuInnerBlock">
                      <div class="menuInnerContent">
                          @if($monthlysale!=null)
                            @if($product->id==$monthlysale->product_id)
              <div class="ribbon"> <span> Sale {{$monthlysale->discount}}% Off </span> </div>
              @endif
                @endif
                        <img src="{{('upload/img/'.json_decode($product->image)[0])}}"  alt="">
                        <h1 class="menuText">
                       
                                  <a href="{{route('editproduct',$product->id) }}"><i class="fas fa-edit"></i></a>
                         <a href="{{ route('deleted',$product->id) }}"  ><i class="fa fa-trash" aria-hidden="true"></i></a>
                        <a href="{{url('productpage',$product->id)}}"  ><i class="fa fa-eye" aria-hidden="true"></i></a>
                        
                      </div>
                     </div>
                     <div class="menuOuterBlock" >
                       <h3>
                        
                   
                     {{ Str::limit($product->name, 10) }}
                       </h3>
                        @if($monthlysale!=null)
                          @if($product->id==$monthlysale->product_id)
               <?php 
         $orignal_product=$product->price;
         $total_per=100;
         $discount_per=$monthlysale->discount;
         $descountvalue=$discount_per/$total_per*$orignal_product;
         $final=$orignal_product-$descountvalue;
         ?>
     
         
      
             <p><span style="text-decoration: line-through;;text-decoration-color: red;">£ {{$product->price}}</span>  <span>£ {{$final}}</span> </p>
             @else
             <p>  Starting From £ {{$product->price}}  </p>
             @endif
             @else
              <p>  Starting From £ {{$product->price}}  </p>
             @endif
             
                     </div>
                     </div>
                                </td>
                        </tr>
                        @endif
                        @endforeach
                    
                    </tbody>
                    </table>
                </div>
                
                
                
                
                
                
                
                
               <div class="customerFavDiv allproductsdiv " style="width: 100%;">
                <div class="heading">
                  <h1>
                  
                  </h1> 
                </div>
               <table  id="example1">
                    <thead>
                        <th></th>
                    </thead>
                    <tbody style="width: 100%; display: flex; flex-wrap: wrap; justify-content: center;">
                        
                    
                        @foreach($products as $product)
                       
                        <tr>
                            <td >
                                
                                      <div class="menuBlock">
                      
                     <div class="menuInnerBlock">
                      <div class="menuInnerContent">
                          @if($monthlysale!=null)
                            @if($product->id==$monthlysale->product_id)
              <div class="ribbon"> <span> Sale {{$monthlysale->discount}}% Off </span> </div>
              @endif
                @endif
                        <img src="{{('upload/img/'.json_decode($product->image)[0])}}"  alt="">
                        <h1 class="menuText">
                       
                                  <a href="{{route('editproduct',$product->id) }}"><i class="fas fa-edit"></i></a>
                         <a href="{{ route('deleted',$product->id) }}"  ><i class="fa fa-trash" aria-hidden="true"></i></a>
                        <a href="{{url('productpage',$product->id)}}"  ><i class="fa fa-eye" aria-hidden="true"></i></a>
                        
                      </div>
                     </div>
                     <div class="menuOuterBlock" >
                       <h3>
                        
                   
                     {{ Str::limit($product->name, 10) }}
                       </h3>
                        @if($monthlysale!=null)
                          @if($product->id==$monthlysale->product_id)
               <?php 
         $orignal_product=$product->price;
         $total_per=100;
         $discount_per=$monthlysale->discount;
         $descountvalue=$discount_per/$total_per*$orignal_product;
         $final=$orignal_product-$descountvalue;
         ?>
     
         
      
             <p><span style="text-decoration: line-through;;text-decoration-color: red;">£ {{$product->price}}</span>  <span>£ {{$final}}</span> </p>
             @else
             <p>  Starting From £ {{$product->price}}  </p>
             @endif
             @else
              <p>  Starting From £ {{$product->price}}  </p>
             @endif
             
                     </div>
                     </div>
                                </td>
                        </tr>
                        @endforeach
                    
                    </tbody>
                    </table>
                </div>
                
                
                    <div class="customerFavDiv saleproductsdiv" style="width: 100%;">
                <div class="heading">
                  <h1>
                  
                  </h1> 
                </div>
                <table  id="example2">
                    <thead>
                        <th></th>
                    </thead>
                    <tbody style="width: 100%; display: flex; flex-wrap: wrap; justify-content: center;">
                       
                         @if($monthlysale!=null)
                        @foreach($saleproducts as $product)
                        <tr>
                            <td > 
                                
                                      <div class="menuBlock">
                      
                     <div class="menuInnerBlock">
                      <div class="menuInnerContent">
                          
                          @if($monthlysale!=null)
                                 @if($product->id==$monthlysale->product_id)
              <div class="ribbon"> <span> Sale {{$monthlysale->discount}}% Off </span> </div>
              @endif
              @endif
                        <img src="{{('upload/img/'.json_decode($product->image)[0])}}"  alt="">
                        <h1 class="menuText">
                       
                        
                         <a href="{{ route('deletefromsale',$product->id) }}"  ><i class="fa fa-trash" aria-hidden="true"></i></a>
                        <a href="{{url('productpage',$product->id)}}"  ><i class="fa fa-eye" aria-hidden="true"></i></a>
                        
                      </div>
                     </div>
                     <div class="menuOuterBlock" >
                       <h3>
                        
                   
                     
                       </h3>
                    
                  
      @if($monthlysale!=null)
             @if($product->id==$monthlysale->product_id)
             <h1>
                  <?php 
         $orignal_product=$product->price;
         $total_per=100;
         $discount_per=$monthlysale->price;
         $descountvalue=$discount_per/$total_per*$orignal_product;
         $final=$orignal_product-$descountvalue;
         ?>
         
       £ {{$product->price}}
         </h1>
         
         <span>
             £ {{$final}}
             </span>
             @else
             <p>  Starting From £ {{$product->price}}  </p>
             @endif
             @else
             <p>  Starting From £ {{$product->price}}  </p>
             @endif
                       
                     </div>
                     </div>
                                </td>
                        </tr>
                        @endforeach
                       @endif
                    </tbody>
                    </table>
                   
                    
                 
              
                     
                    
                    
                </div>
                
                         <div class="customerFavDiv monthlysaleproductsdiv" style="width: 100%;">
                <div class="heading">
                  <h1>
                  
                  </h1> 
                </div>
                <table  id="">
                    <thead>
                        <th></th>
                    </thead>
                    <tbody style="width: 100%; display: flex; flex-wrap: wrap; justify-content: center;">
                        
                       @if($monthlysale!=null)
                       
                        
                        <?php $product=\App\Models\Product::where('id',$monthlysale->product_id)->first(); ?>
                        
                        <tr>
                            <td > 
                                
                                      <div class="menuBlock menublock2" style=" display:flex;">
                      
                     <div class="menuInnerBlock ">
                      <div class="menuInnerContent">
                      
                        <img src="{{('upload/img/'.json_decode($product->image)[0])}}"  alt="">
                        <!--<h1 class="menuText">-->
                       
                        
                        <!-- <a href="{{ route('deletefromsale',$product->id) }}"  ><i class="fa fa-trash" aria-hidden="true"></i></a>-->
                        <!--<a href="{{url('productpage',$product->id)}}"  ><i class="fa fa-eye" aria-hidden="true"></i></a>-->
                        <!--</h1>-->
                      </div>
                     </div>
                     <div class="menuOuterBlock" style="padding:5px 25px">
                     <!--  <h3>-->
                        
                   
                     <!--{{ Str::limit($product->name, 10) }}-->
                     <!--  </h3>-->
                      
                     <!--  <p>  Starting From Rs {{$product->price}}  </p>-->
                     <div class="menuOuterBlockCols">
                         <h3>Sale Name </h3>
                         <ul>
                             <li> {{$monthlysale->sale_name}}
                             </li>
                         </ul>
                         <h3>Product Name </h3>
                         <ul>
                             <li> {{ Str::limit($product->name, 10) }}
                             </li>
                         </ul>
                         
                          <h3>Orignal Price </h3>
                         <ul>
                             <li>£ {{$product->price }}
                             </li>
                         </ul>
                     </div>
                     <div class="menuOuterBlockCols"> 
                     <h3>Discount</h3>
                       <ul>
                           
                             <li> {{$monthlysale->discount}}%
                             </li>
                         </ul>
                         
                         	 <?php 
         $orignal_product=$product->price;
         $total_per=100;
         $discount_per=$monthlysale->discount;
         $descountvalue=$discount_per/$total_per*$orignal_product;
         $final=$orignal_product-$descountvalue;
         
         ?>
                        <h3>Discounted price</h3>
                       <ul>
                             <li>£ {{$descountvalue}}
                             </li>
                         </ul>
                         <h3>After Discount</h3>
                       <ul>
                             <li>£ {{$final}}
                             </li>
                         </ul>
                     </div>
                     <div class="menuOuterBlockCols">  
                     <h3> Expire Date</h3>
                       <ul>
                             <li>{{$monthlysale->sale_month}}
                             </li>
                         </ul>
                         <input type="text" class="sale_month" value="{{$monthlysale->sale_month}}" hidden>
                         <h3> Days Left</h3>
                       <ul>
                             <li id="demo">
                             </li>
                         </ul>
                      
                     </div>  
                     <a href="{{route('saleproduct')}}" style="margin-top: auto;margin-bottom: 5px;"><i class=" fa fa-eye" style="cursor:pointer;margin-top: auto; font-size: 25px;color: blue;"></i></a>
                     <a href="{{route('saledelete',$monthlysale->id)}}" style="margin-top: auto;margin-bottom: 5px;"><i class="nav-icon fas fa-trash" style="cursor:pointer;margin-top: auto; font-size: 25px;color: red;"></i></a>
                     </div>
                                </td>
                        </tr>
                   
                        @endif
                    </tbody>
                    </table>
                   
                    
                 
              
                     
                    
                    
                </div>
                
                  </div>
                </div>

              </div>
            </div>
          </div>
  
        
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
   $(document).ready(function(){
       
       

   
       $('#reservationdate').datetimepicker({
      format: 'MMMM DD, YYYY hh:mm:ss'
    });
   });
 </script>
 <script>
   $(function () {
       
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
  $(function () {
    $("#example2").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
   $(function () {
    $("#catbed").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
   $(function () {
    $("#catmattress").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
  $(function () {
    $("#allcategoryproduct").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
   $(function () {
    $("#catsofa").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
   $(function () {
    $("#catstool").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
   $(function () {
    $("#catkid").DataTable({
      "responsive": true,
      "autoWidth": false,
    
    });
  });
     $(function () {
    $("#catstorage").DataTable({
      "responsive": true,
      "autoWidth": false,
    
    });
  });
//     $(function () {
//     $("#allcategoryproduct").DataTable({
//       "responsive": true,
//       "autoWidth": false,
    
//     });
//   });
</script>
<script>
    $(document).on('click','.del_cat', function(e){ 
        e.preventDefault();
      var id=$(this).val();
      $.ajax({
    url:"deleted/" + id,
    type: 'DELETE',
    data: {
             "_token": "{{ csrf_token() }}",
               
            },
success: function(){
  alert("Product Deleted Successfully!");
}
});
    });
 
  

    </script>
    <script>

    </script>
    <script>
    $(document).ready(function(){
        
        $('.saleproductsdiv').hide();
        $('.monthlysaleproductsdiv').hide();
        $(document).on('click','.allproducts', function(){ 
            $('.saleproductsdiv').hide();
            $('.allproductsdiv').show();
            $('.monthlysaleproductsdiv').hide();
        });
         $(document).on('click','.saleproducts', function(){ 
            $('.saleproductsdiv').show();
            $('.allproductsdiv').hide();
            $('.monthlysaleproductsdiv').hide();
            
        });
         $(document).on('click','.monthlysaleproducts', function(){ 
              $('.monthlysaleproductsdiv').show();
             $('.saleproductsdiv').hide();
            $('.allproductsdiv').hide();
    
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

  document.getElementById("demo").innerHTML =  days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
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
    $(document).ready(function(){
         $('.cattitle').append(`<h6>All Products</h6>`);
        $('.catbed').hide();
        $('.catmattress').hide();
         $('.catstool').hide();
            $('.catstorage').hide();
          
           $('.catkid').hide();
               $('.catstorage').hide();
        $('.catsofas').hide();
       $('.category').change(function(){
           
          var cat=$('.category').val();
          if(cat==21)
          {
               $('.cattitle').empty();
              $('.cattitle').append(`<h6>Bed Products</h6>`);
              $('.catbed').show();
              $('.catmattress').hide();
                $('.catkid').hide();
                   $('.catstorage').hide();
                       $('.catstorage').hide();
               $('.catsofas').hide();
                $('.catstool').hide();
        
              $('.tabs').hide();
               $('.saleproductsdiv').hide();
            $('.allproductsdiv').hide();
            $('.monthlysaleproductsdiv').hide();
          }
          else if(cat==25){
                $('.cattitle').empty();
              $('.cattitle').append(`<h6>Mattress  Products</h6>`);
                $('.catbed').hide();
              $('.catmattress').show();
              $('.catsofas').hide();
                 $('.catstorage').hide();
                     $('.catstorage').hide();
                $('.catkid').hide();
               $('.catstool').hide();
            
              $('.tabs').hide();
               $('.saleproductsdiv').hide();
            $('.allproductsdiv').hide();
            $('.monthlysaleproductsdiv').hide();
          }
            else if(cat==23){
                  $('.cattitle').empty();
              $('.cattitle').append(`<h6>Sofas  Products</h6>`);
                $('.catbed').hide();
                $('.catsofas').show();
                  $('.catkid').hide();
                     $('.catstorage').hide();
                 $('.catstool').hide();
                     $('.catstorage').hide();
              $('.catmattress').hide();
                 $('.catstorage').hide();
            
              $('.tabs').hide();
               $('.saleproductsdiv').hide();
            $('.allproductsdiv').hide();
            $('.monthlysaleproductsdiv').hide();
          }
          else if(cat==26){
                $('.cattitle').empty();
              $('.cattitle').append(`<h6>Foots Stools & Coffee Tables</h6>`);
                $('.catbed').hide();
                $('.catsofas').hide();
              $('.catmattress').hide();
                $('.catkid').hide();
                    $('.catstorage').hide();
                   $('.catstorage').hide();
               $('.catstool').show();
              $('.tabs').hide();
            
               $('.saleproductsdiv').hide();
            $('.allproductsdiv').hide();
            $('.monthlysaleproductsdiv').hide();
          }
           else if(cat==27){
                     $('.cattitle').empty();
              $('.cattitle').append(`<h6>Kids Beds  Products</h6>`);
                $('.catbed').hide();
                $('.catsofas').hide();
              $('.catmattress').hide();
               $('.catstorage').hide();
                $('.catkid').show();
               $('.catstool').hide();
                   $('.catstorage').hide();
                   
              $('.tabs').hide();
               $('.saleproductsdiv').hide();
            $('.allproductsdiv').hide();
            $('.monthlysaleproductsdiv').hide();
          }
           else if(cat==28){
                 $('.cattitle').empty();
              $('.cattitle').append(`<h6>Storageboxs Products</h6>`);
                $('.catbed').hide();
                $('.catsofas').hide();
              $('.catmattress').hide();
                $('.catkid').hide();
                 $('.catstorage').show();
                    
               $('.catstool').hide();
              $('.tabs').hide();
               $('.saleproductsdiv').hide();
            $('.allproductsdiv').hide();
            $('.monthlysaleproductsdiv').hide();
          }
         else{
               $('.cattitle').empty();
              $('.cattitle').append(`<h6>All Products</h6>`);
               $('.catbed').hide();
                $('.catsofas').hide();
              $('.catmattress').hide();
                $('.catkid').hide();
                 $('.catstorage').hide();
                    
               $('.catstool').hide();
              $('.tabs').show();
               $('.saleproductsdiv').hide();
            $('.allproductsdiv').show();
            $('.monthlysaleproductsdiv').hide();
             
         }
      }); 
     });
</script>
@endsection