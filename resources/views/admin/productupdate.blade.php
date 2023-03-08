@extends('admin.layouts.master')


@section('content')

<style>

.note-editor.note-frame .note-editing-area .note-editable, .note-editor.note-airframe .note-editing-area .note-editable{
 min-height:250px !important;   
}
}
</style>

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('products')}}">Product</a></li>
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<br>

<div class="row" >

  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
         <h5 class="card-title" style="
         font-size: 1.3rem;
         text-decoration: underline;
         font-weight: 600;
         color: #302c2c;
        
     ">Update Product:</h5> 
        <!-- <div class="cardHead" style="display: flex;
        justify-content: space-between;
        align-items: right;">  <h5 class="card-title">Add Product</h5>
        </div>     -->
        
<br>

<!---Add product model-->

<form action="{{url('update',$product->id)}}" method="POST" enctype="multipart/form-data" id="frm" style="margin: 20px;">
        <!-- {{csrf_field()}} -->
        @csrf
        <div class="modal-body control">


      <div class="row">

        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">  <label>Select Category</label>
            <select class="form-control" id="cid" name="cid">
                @foreach($category as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
              @endforeach
              </select>
      
     </div>
         <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">  
              <label>Product Name</label>
              <input type="text" name="name" value="{{$product->name}}" id="name" class="form-control" >
         </div>
       
          
   </div>



   <label>Product Description</label>
    <div class="">
       <textarea id="compose-textarea" rows="10" name="description"  value="" class="form-control" >{{$product->description}}</textarea>
       
     </div>
     
     <div class="row">
         <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <label>Product Price</label>
            <input type="text" name="price1" id="price1" class="form-control" value="{{$product->price}}">
       </div>
       <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <label>Product Image</label>
        <input class="form-control" type="file" name="image[]" multiple id="multiimage">
        
        <img src="{{('../upload/img/'.json_decode($product->image)[0])}}"  alt="" height="30px" width="30">

   
     </div>
   </div>
   
   <div class="row">

   
   <h5 class="card-title" style="
   font-size: 1.3rem;
   text-decoration: underline;
   font-weight: 600;
   color: #302c2c;
   margin: 10px 0;
">Product Options:</h5>
 </div>

   <div class="row">
   @if($product->bedsize_id!="null")
     <div class="form-group co'l-xl-6 col-lg-6 col-md-6 col-sm-12">
        <label>Bed Size</label>
        
        <select name="bedsize[]" id="bedsize" class="form-control" multiple >
        @foreach($bed as $beds)
     
       <option value="{{$beds->id}}" @foreach(json_decode($product->bedsize_id) as $b) @if($b==$beds->id) selected @endif  @endforeach>{{$beds->name}}</option>
         @endforeach 
        </select>
     </div>
     @endif

     @if($product->fabric_id!="null")
     <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
     
        <label>Febric Color</label>
        <select name="febcolor[]"  id="febcolor" class="form-control" multiple require>
        @foreach($fabrics as $fabric)
     
        <option value="{{$fabric->id}}"  @foreach(json_decode($product->fabric_id) as $f) @if($f==$fabric->id) selected @endif  @endforeach>{{$fabric->name}}{{$fabric->price}}</option>
       @endforeach 
</select>
     </div>
     @endif
   </div>
   
   <div class="product_options">
        <div class="row"> 
        @if($product->mattress_id!="null")
            <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
               <label>Mattress</label>
                <select  name="mattresssize[]" id="mattresssize" class="form-control" multiple require>
                       @foreach($mattress as $mattress1)

                    <option value="{{$mattress1->id}}"  @foreach(json_decode($product->mattress_id) as $m) @if($m==$mattress1->id) selected @endif  @endforeach>   {{$mattress1->name}}   price:{{$mattress1->price}}</option>
                      @endforeach
                </select>
            </div>
        @endif

        @if($product->beeding_id!="null")
            <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <label>Add Beeding Color</label>
                <select  name="beadingcolor[]" id="beadingcolor" class="form-control" multiple require>
                    @foreach($beedings as $beeding) 
                
         <option value="{{$beeding->id}}" @foreach(json_decode($product->beeding_id) as $bd) @if($bd==$beeding->id) selected @endif  @endforeach> {{$beeding->name}}   price:{{$beeding->price}}</option>
                   @endforeach
                </select>
            </div>
            @endif
         </div>
        
       <div class="row">
          @if($product->addon_id!="null")
         <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <label>Addon </label>
            
            <select name="addon[]" id="addon" class="form-control" multiple require>
            @foreach($addons as $addon)
                <option value="{{$addon->id}}" @foreach(json_decode($product->addon_id) as $ad) @if($ad==$addon->id)selected @endif @endforeach>{{$addon->name}}  Price: {{$addon->price}}</option>
               @endforeach
               
            
            </select>
            
         </div> 
         @endif
         @if($product->matching_storage_id!="null")
        
             <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12" id="matching">
                <label>Matching Storage Box Name </label>
                <select  name="storagebox[]" id="storagebox" class="form-control" multiple>
               @foreach($matching_storages as $storage)
               <option value="{{$storage->id}}" @foreach(json_decode($product->matching_storage_id) as $ms) @if($ms==$storage->id)selected @endif @endforeach>{{$storage->name}}  Price: {{$storage->price}}</option> 
               @endforeach
         </select>
         
             </div>
             @endif
       </div>
            <div class="row">
              
                 <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label>Lift Up Storage</label>
                    <br>
                   <select name="liftup_storage" id="liftup_storage" style="width: 100%;">
                       <option value="0" name="liftupyes">--SELECT--</option>
                        <option value="yes" name="liftupyes">Yes</option>
                        <option value="no"  name="liftupno">No</option>
                    </select>
                </div>
  
                 <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label>featured prduct</label>
                    <br>
                   <select name="featured" id="featured-product" style="width: 100%;">
                        <option value="yes" >Yes</option>
                        <option value="no" >No</option>
                    </select>
                </div>
             </div>
         </div>

             <button type="submit" class="btn btn-primary" style="color:white; background:#007bff; float: right;" id="send" >update Product</button>
              </form>
              
             
      </div>
   </div>
</div>
</div>
  
<script>

  </script>

@endsection
