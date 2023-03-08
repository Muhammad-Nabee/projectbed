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
              <li class="breadcrumb-item active">Add Product</li>
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
        
     ">Add Product:</h5> 
        <!-- <div class="cardHead" style="display: flex;
        justify-content: space-between;
        align-items: right;">  <h5 class="card-title">Add Product</h5>
        </div>     -->
        
<br>
<!---Add product model-->
        <form action="{{route('addproduct')}}" method="post" enctype="multipart/form-data">
        <!-- {{csrf_field()}} -->
        @csrf
        <div class="modal-body">


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
              <input type="text" name="name" id="name" class="form-control" placeholder="Enter Product name" require>
         </div>
       
          
   </div>



   <label>Product Description</label>
    <div class="">
       <textarea id="compose-textarea" rows="10" name="description"  class="form-control" ></textarea>
     </div>
     
     <div class="row">
         <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <label>Product Price</label>
            <input type="text" name="price1" id="price1" class="form-control" placeholder="Enter Product Price" require>
       </div>
       <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <label>Product Image</label>
        <input class="form-control" type="file" name="image[]" multiple id="multiimage">
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

 <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12 stool_options">
        <label>Stool Size</label>
        
        <select name="stool[]" id="bedsize" class="form-control" multiple require>
        @foreach($stool as $s)
       <option value="{{$s->id}}">{{$s->name}} price: {{$s->price}}</option>
         @endforeach 
        </select>
     </div>
     
     <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12 bed_options">
        <label>Bed Size</label>
        
        <select name="bedsize[]" id="bedsize" class="form-control" multiple require>
        @foreach($bed as $beds)
       <option value="{{$beds->id}}">{{$beds->name}} price:{{$beds->price}}</option>
         @endforeach 
        </select>
     </div>
     
      <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12 sofaoptions">
        <label>Sofa Options</label>
        
        <select name="sofa[]" id="sofa" class="form-control" multiple require>
        @foreach($sofa as $sofaoption)
     
       <option value="{{$sofaoption->id}}">{{$sofaoption->name}} price:{{$sofaoption->price}}</option>
       
         @endforeach 
        </select>
     </div>
     
     <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12 fabric_options">
        <label>Febric Color</label>
        <select name="febcolor[]"  id="febcolor" class="form-control" multiple require>
        @foreach($fabrics as $fabric)
     
     <option value="{{$fabric->id}}">{{$fabric->name}}  Price: {{$fabric->price}}</option>
       @endforeach 
</select>
     </div>
   </div>
   
        <div class="row">
            
            <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12 mattress_options">
               <label>Mattress</label>
                <select  name="mattresssize[]" id="mattresssize" class="form-control" multiple require>
                       @foreach($mattress as $mattress1)
                       <option value="{{$mattress1->id}}">{{$mattress1->name}}  price:{{$mattress1->price}}</option>
                      @endforeach
                </select>
            </div>
            
            <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12 beeding_options">
                <label>Add Beeding Color</label>
                <select  name="beadingcolor[]" id="beadingcolor" class="form-control" multiple require>
                    @foreach($beedings as $beeding)
                    <option value="{{$beeding->id}}">{{$beeding->name}}   price:{{$beeding->price}}</option>
                   @endforeach
                </select>
            </div>
         </div>
         
       <div class="row">

         <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12 addon_options">
            <label>Addon </label>
            
            <select name="addon[]" id="addon" class="form-control" multiple require>
            @foreach($addons as $addon)
                <option value="{{$addon->id}}">{{$addon->name}}  Price: {{$addon->price}}</option>
               @endforeach
               
            
            </select>
         </div> 
             <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12 matching_options">
                <label>Matching Storage Box Name </label>
                <select  name="storagebox[]" id="storagebox" class="form-control" multiple>
               @foreach($matching_storages as $storage)
                <option value="{{$storage->id}}">{{$storage->size}}  Price: {{$storage->price}}</option>
               @endforeach
         </select>
         
             </div>
       </div>
            <!--<div class="row">-->
    
            <!--     <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12 liftup_options">-->
            <!--        <label>Lift Up Storage</label>-->
            <!--        <br>-->
            <!--       <select name="liftup_storage" class="form-control" id="liftup_storage" style="width: 100%;">-->
            <!--           <option value="0" name="liftupyes">--SELECT--</option>-->
            <!--            <option value="yes" name="liftupyes">Yes</option>-->
            <!--            <option value="no"  name="liftupno">No</option>-->
            <!--        </select>-->
            <!--    </div>-->
        
                 <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12 featured_options">
                    <label>Is Featured ?</label>
                    <br>
                   <select name="featured" class="form-control" id="featured-product" style="width: 100%;">
                       <option value="0" >--SELECT--</option>
                        <option value="yes" >Yes</option>
                        <option value="no" >No</option>
                    </select>
                </div>
             </div>
             
             <!-- <div class="row">-->
    
        
             <!--    <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12 sale_options">-->
             <!--       <label>Sale ?</label>-->
             <!--       <br>-->
             <!--      <select name="sale" class="form-control" id="featured-product" style="width: 100%;">-->
             <!--          <option value="0" >--SELECT--</option>-->
             <!--           <option value="yes" >Yes</option>-->
             <!--           <option value="no" >No</option>-->
             <!--       </select>-->
             <!--   </div>-->
             <!--</div>-->
         

             <button type="submit" class="btn btn-primary" style="color:white; background:#007bff; float: right;" id="send" >Add Product</button>
              </form>
              
             
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
       $('.sofaoptions').hide();
       $('.stool_options').hide();
  $('#cid').change(function(){
    var value = $("#cid option:selected");
    
    if(value.text()=="Mattress")
    {
        $('.stool_options').hide();
        $('.sofaoptions').hide();
        $('.liftup_options').hide();
        $('.matching_options').hide();
        $('.addon_options').hide();
        $('.beeding_options').hide();
        $('.mattress_options').hide();
        $('.bed_options').show();
        $('.fabric_options').hide();
    }
    else if(value.text()=="Beds")
    {
        $('.stool_options').hide();
        $('.bed_options').show();
        $('.sofaoptions').hide();
        $('.liftup_options').show();
        $('.matching_options').show();
        $('.addon_options').show();
        $('.beeding_options').show();
        $('.mattress_options').show();
        $('.fabric_options').show();
    }
    else if(value.text()=="Sofas")
    {
        $('.stool_options').hide();
        $('.bed_options').hide();
        $('.sofaoptions').show();
        $('.liftup_options').hide();
        $('.matching_options').hide();
        $('.addon_options').hide();
        $('.beeding_options').show();
        $('.mattress_options').hide();
        $('.fabric_options').show();
    }
     else if(value.text()=="Foots Stools & Coffee Tables")
    {
        
        $('.stool_options').show();
        $('.bed_options').hide();
        $('.sofaoptions').hide();
        $('.liftup_options').hide();
        $('.matching_options').hide();
        $('.addon_options').show();
        $('.beeding_options').hide();
        $('.mattress_options').hide();
        $('.fabric_options').show();
    }
       else if(value.text()=="Storageboxs")
    {
        
        $('.stool_options').hide();
        $('.bed_options').hide();
        $('.sofaoptions').hide();
        $('.liftup_options').hide();
        $('.matching_options').show();
        $('.addon_options').hide();
        $('.beeding_options').hide();
        $('.mattress_options').hide();
        $('.fabric_options').show();
    }
  });
});
</script>

@endsection
