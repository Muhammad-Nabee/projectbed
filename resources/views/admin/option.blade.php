@extends('admin.layouts.master')


@section('content')
<br>

 
 <select class="form-control data">
 <option  >-- Select Option --</option>

     <option class="bedsize" id="bedsize" >Bed Size</option>
      <option class="febric_color"  id="febric_color">Fabric Color</option>
      <option class="mattress"  id="mattress">Mattress</option>
      <option class="beading_color"  id="beading_color">Beeding Color</option>
      <option class="add"  id="add">Addon</option>
      <option class="matching"  id="matching">MatchingStorageBox</option>
      <option class="sofaoptions"  id="sofaoptions">Sofa Options</option>
      <option class="stooloptions"  id="stooloptions">Stool Options</option>
    </select>

<div>
    <br>
    
    
      <div class="card card-black">
              <div class="card-header">
                <div class="card-title">
                  Options
                </div>
              </div>
              <div class="card-body">
                <div>
                  <div class="btn-group w-100 mb-2">
                    <a class="btn btn-info active bedsize" href="javascript:void(0)" data-filter="all"> Bed Size </a>
                      <a class="btn btn-info active stooloptiondata"  id="stooloptiondata" href="javascript:void(0)" data-filter="all">Stool </a>
                     <a class="btn btn-info active fabriccolor" href="javascript:void(0)" data-filter="all"> Fabric Color </a>
                     
                     <a class="btn btn-info active beedingcolor" href="javascript:void(0)" data-filter="all"> Beeding Color </a>
                                          <a class="btn btn-info active Addon" href="javascript:void(0)" data-filter="all"> Addon</a>
                                           <a class="btn btn-info active mattressoption" href="javascript:void(0)" data-filter="all"> Mattress  </a>

                     <a class="btn btn-info active matching_storageBox" href="javascript:void(0)" data-filter="all"> MatchingStorageBox </a>
                     
                     <a class="btn btn-info active sofaoption1" href="javascript:void(0)" data-filter="all"> Sofa  </a>
                     
                  
                   
                  </div>
                  
                 
                </div>
                
                  <div class="p-0">
                      
                      
             
                      
                      
                      
                    <div class="bedsizedata">
                            <table class="table" id="bedsizedatatable">
                                
  <thead>
   
      <th scope="col">Name</th>
        <th scope="col">price</th>
      <th scope="col">Action</th>
  </thead>
  <tbody
      @foreach($bedsize as $beddata)
    <tr>
      
      
       <td>{{$beddata->name}}</td>
       <td>{{$beddata->price}}</td>
       <td>
                   
                     <a><i class="fa fa-edit bedsizedataget" data-id="{{$beddata->id}}" data-name="{{$beddata->name}}" aria-hidden="true" data-toggle="modal" data-target="#exampleModal"></i></a>

        <i class="fa fa-trash bedsizedeletedata"  data-id="{{$beddata->id}}" data-type="bed" aria-hidden="true" data-toggle="modal" data-target="#optionmodel"></i>
       </td>
    </tr>
    @endforeach
   
     
         </tbody>
        </table>
        
        </div>
                    <div class="fabriccolordata">
                        
                             <table class="table" id="fabricdatatable">
             <thead>
             
        
                  <th scope="col">Name</th>
                   <th scope="col">Price</th>
                    <th scope="col">Image</th>
                     <th scope="col">Action</th>
                    
             
            </thead>
             <tbody
      @foreach($fabricdata as $fabric)
          <tr>
      
     
       <td>{{$fabric->name}}</td>
        <td>{{$fabric->price}}</td>
      
         <td><img src="{{('upload/img/'.$fabric->image)}}"  height="40px" width="40px"  alt=""></td>
           <td>
          <a><i class="fa fa-edit fabricdataget" data-id="{{$fabric->id}}" data-name="{{$fabric->name}}" data-price="{{$fabric->price}}" aria-hidden="true" data-toggle="modal" data-target="#exampleModal"></i></a>
         <i class="fa fa-trash bedsizedeletedata"  data-id="{{$fabric->id}}" data-type="fabric" aria-hidden="true" data-toggle="modal" data-target="#optionmodel"></i>
       </td>
    </tr>
    @endforeach
   
     
                 </tbody>
                </table>
                        

                    </div>
                     <div class="beedingcolordata">
                            <table class="table" id="beedingdatatable">
             <thead>
             
          
                  <th scope="col">Name</th>
                   <th scope="col">Price</th>
                    <th scope="col">Image</th>
                        <th scope="col">Action</th>
            
            </thead>
             <tbody
      @foreach($beedingdata as $beeding)
          <tr>
      
     
       <td>{{$beeding->name}}</td>
        <td>{{$beeding->price}}</td>
         <td><img src="{{('upload/img/'.$beeding->image)}}"  height="40px" width="40px"  alt=""></td>
           <td>
          <a><i class="fa fa-edit beedingdataget" data-id="{{$beeding->id}}" data-name="{{$beeding->name}}" data-price="{{$beeding->price}}" aria-hidden="true" data-toggle="modal" data-target="#exampleModal"></i></a>
        <i class="fa fa-trash bedsizedeletedata"  data-id="{{$beeding->id}}" data-type="beeding" aria-hidden="true" data-toggle="modal" data-target="#optionmodel"></i>
       </td>
    </tr>
    @endforeach
   
     
                 </tbody>
                </table>
                     
                    </div>
                    
                 
                    
                    
                    
                      
                       <div class="addondata">
                                                     <table class="table" id="addondatatable">
             <thead>
             
        
                  <th scope="col">Name</th>
                   <th scope="col">Price</th>
                    <th scope="col">Image</th>
                     <th scope="col">Action</th>
      
             
            </thead>
             <tbody
      @foreach($addondata as $addon)
          <tr>
      
      
       <td>{{$addon->name}}</td>
        <td>{{$addon->price}}</td>
         <td><img src="{{('upload/img/'.$addon->image)}}"  height="40px" width="40px"  alt=""></td>
          <td>
        <a><i class="fa fa-edit addondataget" data-id="{{$addon->id}}" data-name="{{$addon->name}}" data-price="{{$addon->price}}" aria-hidden="true" data-toggle="modal" data-target="#exampleModal"></i></a>   
        <i class="fa fa-trash bedsizedeletedata"  data-id="{{$addon->id}}" data-type="addon" aria-hidden="true" data-toggle="modal" data-target="#optionmodel"></i>
       </td>
    </tr>
    @endforeach
   
     
                 </tbody>
                </table>
                    </div>
                    
                    
                    
                     <div class="sofaoption_data">
                        
                             <table class="table" id="sofadatatable">
             <thead>
             
        
                  <th scope="col">Name</th>
                  <th scope="col">Price</th>
                   <th scope="col">Action</th>
      
             
            </thead>
             <tbody
                     @foreach($sofa_data as $sofa)
          <tr>
      
   
       <td>{{$sofa->name}}</td>
       <td>{{$sofa->price}}</td>
        <td>
                              <a><i class="fa fa-edit sofadataget" data-id="{{$sofa->id}}" data-name="{{$sofa->name}}" aria-hidden="true" data-toggle="modal" data-target="#exampleModal"></i></a>
       <i class="fa fa-trash bedsizedeletedata"  data-id="{{$sofa->id}}" data-type="sofa" aria-hidden="true" data-toggle="modal" data-target="#optionmodel"></i>
       </td>
     
    </tr>
    @endforeach
   
     
                 </tbody>
                </table>
                        

                    </div>
                    
                    
                                
                                
                                    <div class="stooloption_data">
                        
                             <table class="table" id="stooldatatable">
           
             <thead>
             <tr>
          
                  <th scope="col">Name</th>
                  <th scope="col">Price</th>
                  <th scope="col">Action</th>
                   
      
             </tr>
            </thead>
             <tbody
                     @foreach($stool_data as $stool)
                   
          <tr>
      
    
       <td>{{$stool->name}}</td>
        <td>{{$stool->price}}</td>
       <td>
                              <a><i class="fa fa-edit stooldataget" data-id="{{$stool->id}}" data-name="{{$stool->name}}" aria-hidden="true" data-toggle="modal" data-target="#exampleModal"></i></a>
        <i class="fa fa-trash bedsizedeletedata"  data-id="{{$stool->id}}" data-type="stool" aria-hidden="true" data-toggle="modal" data-target="#optionmodel"></i>
       </td>
     
    </tr>
    @endforeach
   
     
                 </tbody>
                </table>
                        

                    </div>
                  
                  
                     
                 <div class="mattressdata">
                        
                             <table class="table" id="mattressdatatable">
             <thead>
             
            
                  <th scope="col">Name</th>
                   <th scope="col">Price</th>
                    <th scope="col">Image</th>
                     <th scope="col">Action</th>
                    
             
            </thead>
             <tbody
          
              
             
      @foreach($mattress as $mat)
     
  
    
          <tr>
     
    
     
       <td>{{$mat->name}}</td>
        <td>{{$mat->price}}</td>
        
         <td><img src="{{('upload/img/'.$mat->image)}}"  height="40px" width="40px"  alt=""></td>
           <td>
          <a><i class="fa fa-edit mattressdataget" data-id="{{$mat->id}}" data-name="{{$mat->name}}" data-price="{{$mat->price}}" aria-hidden="true" data-toggle="modal" data-target="#exampleModal"></i></a>
        <i class="fa fa-trash bedsizedeletedata"  data-id="{{$mat->id}}" data-type="mattress" aria-hidden="true" data-toggle="modal" data-target="#optionmodel"></i>
       </td>
    </tr>
    @endforeach
   

                 </tbody>
                </table>
                        

                    </div>
                     
                                
                                
                    
                    <div class="modal fade" id="optionmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div >
      <div class="modal-body">

      <form action="{{route('deleteoptions')}}" method="POST">
      @csrf
        <input type="text" name="id" class="id" value="" hidden>
        <input type="text" name="type" class="type" value="" hidden>
         If you delete this option may it remove  from all products..?
     
           
           <div class="modal-footer">
            <button>yes</button>
        <!--<button class="btn btn-primary">Save changes</button>-->
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
                   
                             
             
                      
                     
                     <div class="matchingstorageboxdata">
                           <table class="table" id="matchingstoragedatatable">
             <thead>
             
            <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Size</th>
                   <th scope="col">Price</th>
                    <th scope="col">Image</th>
                     <th scope="col">Action</th>
      
             
            </thead>
             <tbody
      @foreach($matchingdata as $matching_storagebox)
          <tr>
      
      <td>{{$matching_storagebox->id}}</td>
       <td>{{$matching_storagebox->name}}</td>
       <td>{{$matching_storagebox->size}}</td>
        <td>{{$matching_storagebox->price}}</td>
         <td><img src="{{('upload/img/'.$matching_storagebox->image)}}"  height="40px" width="40px"  alt=""></td>
           <td>
         <a><i class="fa fa-edit matching_storageboxdataget" data-id="{{$matching_storagebox->id}}" data-name="{{$matching_storagebox->name}}"  data-name="{{$matching_storagebox->size}}"  data-price="{{$matching_storagebox->price}}" aria-hidden="true" data-toggle="modal" data-target="#exampleModal"></i></a> 
        
                        <i class="fa fa-trash bedsizedeletedata"  data-id="{{$matching_storagebox->id}}" data-type="msb" aria-hidden="true" data-toggle="modal" data-target="#optionmodel"></i>
       </td>
    </tr>
    @endforeach
   
     
                 </tbody>
                </table>
                    </div>
                
                  </div>
                </div>

              </div>
            </div>
            
            
            
     <form id="stool" method="POST" action="{{route('addstooloptions')}}" style="width:400px; margin-left:200px; ">
  @csrf
  <label>Stool Options</label>
    <input type="text" class="form-control" placeholder="Stool options" name="stool" id="stool"><br>
   <input type="text" class="form-control" placeholder="Stool price" name="price" id="stoolprice">
  <button type="submit" class="btn btn-primary" style="color:white; background:#007bff; float: right;" id="sizesubmit" >submit</button>
</form>

    <form id="sofa" method="POST" action="{{route('addsofaoptions')}}" style="width:400px; margin-left:200px; ">
  @csrf
  <label>Sofa Options</label>
    <input type="text" class="form-control" placeholder="Sofa options" name="sofa" id="sofa"><br>
     <input type="text" class="form-control" placeholder="Sofa options" name="price" id="sofaprice">
  <button type="submit" class="btn btn-primary" style="color:white; background:#007bff; float: right;" id="sizesubmit" >submit</button>
</form>

<form id="size" method="POST" action="{{url('bedsize')}}" style="width:400px; margin-left:200px; ">
  @csrf
  <label>Bed Size</label>
    <input type="text" class="form-control" placeholder="bed size" name="singlesize" id="single"><br>
     <input type="text" class="form-control" placeholder="bed price" name="price" id="price">

  
  <button type="submit" class="btn btn-primary" style="color:white; background:#007bff; float: right;" id="sizesubmit" >submit</button>
</form>
      <form id="fabric" method="POST" action="{{url('fabric_co')}}" enctype="multipart/form-data" style="width:400px;  margin-left:200px; margin-top:50px;">
      @csrf
      <div class="form-group">
    <label>Fabric color</label>
    <input type="text" class="form-control" placeholder="fabbric color" name="fabric_co" id="velvet1">
  </div>
 
  <div class="form-group">
    <label>price</label>
    <input type="text" class="form-control" placeholder="price" name="febric_price" id="febric_price">
  </div>
  <div class="form-group">
    
    <input type="file"   name="image" id="fabric_image">
  </div>
  <button type="submit" class="btn btn-primary" style="color:white; background:#007bff; float: right;" id="sizesubmit" >submit</button>
</form>

<form id="mattresssize" method="POST" action="{{url('mattresssize')}}"  enctype='multipart/form-data' style="width:400px;  margin-left:200px; margin-top:50px;">
      @csrf
      <div class="form-group">
    <label>mattress size</label>
    <input type="text" class="form-control" placeholder="Mattress Size color" name="mattresssize" id="mattress1">
  </div>
 
  <div class="form-group">
    <label>price</label>
    <input type="text" class="form-control" placeholder="price" name="mattress_price" id="mattress_price">
  </div>
  <div class="form-group">
    
    <input type="file"   name="image" id="mattress_image">
  </div>
  <button type="submit" class="btn btn-primary" style="color:white; background:#007bff; float: right;" id="sizesubmit" >submit</button>
</form>

            <form method="POST" id="beeding" action="{{url('beeding')}}"  enctype="multipart/form-data" style="width:400px;margin-left:200px; margin-top:50px">
        @csrf
            <div class="form-group">
    <label>No Beading</label>
    <input type="text" class="form-control" placeholder="no beading" name="beeding_name" id="no beading">
             </div>
          
            <div class="form-group">
              <label>price</label>
              <input type="text" class="form-control" placeholder="beeding price" name="beeding_price" id="beeding_price">
            </div>
             <div class="form-group">
    
                <input type="file"   name="image" id="beeding_image">
            </div>
             <button type="submit" class="btn btn-primary" style="color:white; background:#007bff; float: right;" id="sizesubmit" >submit</button>
            </form>

<form method="POST" id="matching_sto" action="{{url('matching_storage')}}"  enctype='multipart/form-data' style="width:400px;margin-left:200px; margin-top:50px">
        @csrf
            <div class="form-group">
    <label>Matching storage box</label>
    <input type="text" class="form-control" placeholder="matching storage name" name="matching_name" id="matching">
             </div>
             <div class="form-group">
              <label>Size</label>
              <input type="text" class="form-control" placeholder="matching storage size" name="matching_size" id="matching_size">
            </div>
          
            <div class="form-group">
              <label>price</label>
              <input type="text" class="form-control" placeholder="matching storage price" name="matching_price" id="matching_price">
            </div>
             <div class="form-group">
    
                <input type="file"   name="image" id="matching_image">
            </div>
             <button type="submit" class="btn btn-primary" style="color:white; background:#007bff; float: right;" id="sizesubmit" >submit</button>
            </form>


            <form method="POST" class="addon" action="{{url('addon')}}"  enctype='multipart/form-data' style="width:400px;margin-left:200px; margin-top:50px">
           @csrf
            <div class="form-group">
    <label>addon</label>
    <input type="text" class="form-control" placeholder="addon" name="add" id="addon">
                </div>
            <div class="form-group">
              <label>price</label>
              <input type="text" class="form-control" placeholder="addon price" name="addon_price" id="addon_price">
            </div>
          
                    <div class="form-group">
    
                <input type="file"   name="image" id="addon_image">
            </div>
       
            <button type="submit" class="btn btn-primary" style="color:white; background:#007bff; float: right;" id="sizesubmit" >submit</button>
            </form>
</div>

 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div >
      <div class="modal-body">
        <form action="{{route('editoptions')}}" method="post">
            @csrf
            <div class="formdataappend">
                 
            </div>
           <div class="modal-footer">
        <button class="btn btn-primary">Save changes</button>
      </div>
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
  $(function () {
    $("#bedsizedatatable").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
                  <script>
  $(function () {
    $("#fabricdatatable").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
  <script>
  $(function () {
    $("#beedingdatatable").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>

                                      <script>
  $(function () {
    $("#addondatatable").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
                                                          <script>
  $(function () {
    $("#sofadatatable").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>


  <script>
  $(function () {
    $("#stooldatatable").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
 <script>
  $(function () {
    $("#mattressdatatable").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
  <script>
  $(function () {
    $("#matchingstoragedatatable").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>

<script>
    $(document).ready(function(){
        $('#stool').hide();
        $('#size').hide();
                $('#fabric').hide();
                $('#beeding').hide();
                $('.addon').hide();
                $('#mattresssize').hide();
                $('#matching_sto').hide();
                $('#sofa').hide();
        $('.data').change(function(){
            if($('.data').val()=='Bed Size')
            {
                $('#stool').hide();
                $('#size').show();
                $('#fabric').hide();
                $('#beeding').hide();
                $('#mattresssize').hide();
                $('.addon').hide();
                $('#matching_sto').hide();
                $('#sofa').hide();
            }
            else if($('.data').val()=='Fabric Color')
            {
                $('#stool').hide();
                $('#fabric').show();
                $('#size').hide();
                $('#beeding').hide();
                $('#mattresssize').hide();
                $('.addon').hide();
                $('#matching_sto').hide();
                $('#sofa').hide();
            }
            else if($('.data').val()=='Beeding Color')
            {
                $('#stool').hide();
                $('#fabric').hide();
                $('#size').hide();
                $('#beeding').show();
                $('#mattresssize').hide();
                $('.addon').hide();
                $('#matching_sto').hide();
                $('#sofa').hide();
            }
            else if($('.data').val()=='Addon')
            {
                $('#stool').hide();
                $('#fabric').hide();
                $('#size').hide();
                $('#beeding').hide();
                $('#mattresssize').hide();
                $('.addon').show();
                $('#matching_sto').hide();
                $('#sofa').hide();
            }
            else if($('.data').val()=='MatchingStorageBox')
            {
                $('#stool').hide();
                $('#fabric').hide();
                $('#size').hide();
                $('#beeding').hide();
                $('#mattresssize').hide();
                $('.addon').hide();
                $('#matching_sto').show();
                $('#sofa').hide();
            }
            else if($('.data').val()=='Mattress')
            {
                $('#stool').hide();
                $('#sofa').hide();
                $('#fabric').hide();
                $('#size').hide();
                $('#beeding').hide();
                $('#mattresssize').show();
                $('.addon').hide();
                $('#matching_sto').hide();
            }
             else if($('.data').val()=='Sofa Options')
            {
                $('#stool').hide();
                $('#sofa').show();
                $('#fabric').hide();
                $('#size').hide();
                $('#beeding').hide();
                $('#mattresssize').hide();
                $('.addon').hide();
                $('#matching_sto').hide();
            }
             else if($('.data').val()=='Stool Options')
            {
                $('#stool').show();
                $('#sofa').hide();
                $('#fabric').hide();
                $('#size').hide();
                $('#beeding').hide();
                $('#mattresssize').hide();
                $('.addon').hide();
                $('#matching_sto').hide();
            }
        });
    });
</script>

 <script>
    $(document).ready(function(){
        
        $('.fabriccolordata').hide();
         $('.mattressdata').hide();
        $('.addondata').hide();
        $('.stooloption_data').hide();
        $('.sofaoption_data').hide();
              $('.beedingcolordata').hide();
               $('.matchingstorageboxdata').hide();
        
        $(document).on('click','.bedsize', function(){
             $('.fabriccolordata').hide();
             $('.mattressdata').hide();
            $('.bedsizedata').show();
             $('.stooloption_data').hide();
            $('.addondata').hide();
            $('.sofaoption_data').hide();
              $('.beedingcolordata').hide();
               $('.matchingstorageboxdata').hide();
           
        });
        $(document).on('click','.fabriccolor', function(){
            $('.fabriccolordata').show();
            $('.bedsizedata').hide();
            $('.mattressdata').hide();
            $('.stooloption_data').hide();
            $('.sofaoption_data').hide();
            $('.addondata').hide();
              $('.beedingcolordata').hide();
               $('.matchingstorageboxdata').hide();
        });
           $(document).on('click','.Addon', function(){
            $('.fabriccolordata').hide();
            $('.bedsizedata').hide();
            $('.mattressdata').hide();
            $('.addondata').show();
             $('stooloption_data').hide();
              $('.beedingcolordata').hide();
              $('.sofaoption_data').hide();
               $('.matchingstorageboxdata').hide();
        });
        
         $(document).on('click','.beedingcolor', function(){
            $('.fabriccolordata').hide();
             $('sofaoption_data').hide();
             $('.mattressdata').hide();
            $('.bedsizedata').hide();
             $('.addondata').hide();
              $('.beedingcolordata').show();
              $('.stooloption_data').hide();
               $('.matchingstorageboxdata').hide();
           
        });
             $(document).on('click','.matching_storageBox', function(){
            $('.fabriccolordata').hide();
            $('.bedsizedata').hide();
            $('.mattressdata').hide();
          $('.sofaoption_data').hide();
             $('.addondata').hide();
             $('.stooloption_data').hide();
              $('.beedingcolordata').hide();
               $('.matchingstorageboxdata').show();
           
        });
           $(document).on('click','.sofaoption1', function(){
            $('.fabriccolordata').hide();
            $('.bedsizedata').hide();
             $('.sofaoption_data').show();
             $('.mattressdata').hide();
             $('.addondata').hide();
             $('.stooloption_data').hide();
              $('.beedingcolordata').hide();
               $('.matchingstorageboxdata').hide();
           
        });
        
                 $(document).on('click','.stooloptiondata', function(){
                    
            $('.fabriccolordata').hide();
            $('.bedsizedata').hide();
             $('.sofaoption_data').hide();
             $('.addondata').hide();
             $('.stooloption_data').show();
             $('.mattressdata').hide();
              $('.beedingcolordata').hide();
               $('.matchingstorageboxdata').hide();
           
        });
                 $(document).on('click','.mattressoption', function(){
                    
            $('.fabriccolordata').hide();
            $('.bedsizedata').hide();
             $('.sofaoption_data').hide();
             $('.addondata').hide();
             $('.stooloption_data').hide();
             $('.mattressdata').show();
              $('.beedingcolordata').hide();
               $('.matchingstorageboxdata').hide();
           
        });
        
        $(document).on('click','.bedsizedataget', function(){
         
            $('.formdataappend').empty();
            var id=$(this).data("id");
            var name=$(this).data("name");
            $('.formdataappend').append(`
            <input type="text" value="`+id+`" name="bedsize_id" hidden>
            <input type="text" value="bedsize" name="type" hidden>
              <div class="form-group">
              <label>name</label>
              <input type="text" class="form-control" placeholder="name" value="`+name+`" name="bedsize" id="singlesize">
            </div>
            `)
            
        });
          $(document).on('click','.sofadataget', function(){
            $('.formdataappend').empty();
            var id=$(this).data("id");
            var name=$(this).data("name");
            $('.formdataappend').append(`
            <input type="text" value="`+id+`" name="sofa_id" hidden>
            <input type="text" value="sofa" name="type" hidden>
              <div class="form-group">
              <label>name</label>
              <input type="text" class="form-control" placeholder="name" value="`+name+`" name="sofa" id="sofa">
            </div>
            `)
            
        });
          $(document).on('click','.stooldataget', function(){
            $('.formdataappend').empty();
            var id=$(this).data("id");
            var name=$(this).data("name");
            $('.formdataappend').append(`
            <input type="text" value="`+id+`" name="stool_id" hidden>
            <input type="text" value="stool" name="type" hidden>
              <div class="form-group">
              <label>name</label>
              <input type="text" class="form-control" placeholder="name" value="`+name+`" name="stool" id="stool">
            </div>
            `)
            
        });
        
          $(document).on('click','.mattressdataget', function(){
            $('.formdataappend').empty();
            var id=$(this).data("id");
            var name=$(this).data("name");
            var price=$(this).data("price");
            $('.formdataappend').append(`
            <input type="text" value="`+id+`" name="mattress_id" hidden>
            <input type="text" value="mattress" name="type" hidden>
              <div class="form-group">
              <label>name</label>
              <input type="text" class="form-control" placeholder="name" value="`+name+`" name="mattress_name" id="sofa">
               <input type="text" class="form-control" placeholder="name" value="`+price+`" name="mattress_price" id="sofa">
            </div>
            `)
            
        });
        
        
         $(document).on('click','.fabricdataget', function(){
            $('.formdataappend').empty();
            var id=$(this).data("id");
            var name=$(this).data("name");
            var price= $(this).data('price');
            $('.formdataappend').append(`
            <input type="text" value="`+id+`" name="fabric_id" hidden>
            <input type="text" value="fabric" name="type" hidden>
              <div class="form-group">
              <label>name</label>
              <input type="text" class="form-control" placeholder="name" value="`+name+`" name="fabric_co" id="fabric_co">
            </div>
            <label>price</label>
              <input type="text" class="form-control" placeholder="name" value="`+price+`" name="fabric_price" id="fabric_price">
            </div>
            `)
            
        });
         $(document).on('click','.beedingdataget', function(){
            $('.formdataappend').empty();
            var id=$(this).data("id");
            var name=$(this).data("name");
            var price= $(this).data('price');
            $('.formdataappend').append(`
            <input type="text" value="`+id+`" name="beeding_id" hidden>
            <input type="text" value="beeding" name="type" hidden>
              <div class="form-group">
              <label>name</label>
              <input type="text" class="form-control" placeholder="name" value="`+name+`" name="beeding_name" id="beeding_co">
            </div>
            <label>price</label>
              <input type="text" class="form-control" placeholder="name" value="`+price+`" name="beeding_price" id="beeding_price">
            </div>
            `)
            
        });
        
          $(document).on('click','.addondataget', function(){
            $('.formdataappend').empty();
            var id=$(this).data("id");
            var name=$(this).data("name");
            var price= $(this).data('price');
            $('.formdataappend').append(`
            <input type="text" value="`+id+`" name="addon_id" hidden>
            <input type="text" value="addon" name="type" hidden>
              <div class="form-group">
              <label>name</label>
              <input type="text" class="form-control" placeholder="name" value="`+name+`" name="addon_name" id="addon_co">
            </div>
            <label>price</label>
              <input type="text" class="form-control" placeholder="name" value="`+price+`" name="addon_price" id="addon_price">
            </div>
            `)
            
        });
            
               $(document).on('click','.matching_storageboxdataget', function(){
            
            $('.formdataappend').empty();
            var id=$(this).data("id");
            var name=$(this).data("name");
             var size=$(this).data("size");
            var price= $(this).data('price');
            $('.formdataappend').append(`
            <input type="text" value="`+id+`" name="msb_id" hidden>
            <input type="text" value="matchingstoragebox" name="type" hidden>
              <div class="form-group">
              <label>name</label>
              <input type="text" class="form-control" placeholder="name" value="`+name+`" name="msb_name" id="msb_co">
            </div>
            <div class="form-group">
            <label>price</label>
              <input type="text" class="form-control" placeholder="size" value="`+size+`" name="msb_size" id="msb_size">
            </div>
            <div class="form-group">
            <label>price</label>
              <input type="text" class="form-control" placeholder="price" value="`+price+`" name="msb_price" id="msb_price">
            </div>
            `)
            
        });
      
    });
 
 
 
 $(document).on('click','.bedsizedeletedata', function(){
              
            $('.deleteoptions').empty();
            var id=$(this).data("id");
            var type=$(this).data("type");
           $('.id').val(id);
           $('.type').val(type);

 });
 
  </script>


 
@endsection
