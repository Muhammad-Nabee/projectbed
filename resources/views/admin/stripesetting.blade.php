

@extends('admin.layouts.master')


@section('content')

<br><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" style="margin-left:940px">
  add  payment 
</button>
<br>
</br>
   
                        
                                
   <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('settingpay')}}" method ="POST">
            @csrf
  <div class="form-group">
   
    <input type="text" class="form-control" name= "token" placeholder=" token">
 
  </div>
    <div class="form-group">
   
    <input type="text" class="form-control" name= "secrete_key" placeholder=" secrite_key">
 
  </div>

    <button>submit</button>
</form>
    

      </div>
      <div class="modal-footer">
            
        
      </div>
    </div>
  </div>
</div>                             
          
            
         
            
        
             <div class="modal fade" id="token" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body appenddata">
         
      </div>

 
    </div>
  </div>
</div>                             
                         
            
            
                                  
                    
     
     
      <div class="card paymentsetting">
              <div class="card-header">
                <h3 class="card-title">Payment Setting</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <table  class="table" id="payment">
  <thead>
    
      
      <th scope="col">token</th></th>
      <th scope="col">secrite key</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
   
   
  </thead>
  <tbody>
      @foreach($payment as $payment)
      <tr>
          
    
   
  
        <td style="cursor:pointer;"> <a><i  class="token_get" aria-hidden="true" data-toggle="modal" data-token="{{$payment->token}}" data-target="#token">see token</i></a></td>
       
    
      <td style="cursor:pointer;"> <a><i class="secrete_key" aria-hidden="true" data-secrete_key="{{$payment->secrete_key}}" data-toggle="modal" data-target="#token">see secrete key</i></a></td>
      @if($payment->status==1)
       <td style="cursor:pointer;">Active</td>
       @else
       <td style="cursor:pointer;">Deactive</td>
       @endif
       <td><a href="{{route('changestatus',$payment->id)}}" ><i class="fa fa-check" ></i></a>
       <a href="{{route('deletestatus',$payment->id)}}" ><i class="fa fa-cross" ></i></a>
       </td>
      </tr>
      @endforeach
      </tbody>
      </table>
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
    $("#payment").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
  
  
  
  
</script>
 
 <script>
          $(document).on('click','.token_get', function(){
           
        
            var token=$(this).data("token");
              $('.appenddata').empty();
          
            $('.appenddata').append(`<textarea rows="15" cols="40">`+token+`</textarea>`);
            
        });
        
          $(document).on('click','.secrete_key', function(){
           
        
            var secrete=$(this).data("secrete_key");
              $('.appenddata').empty();
          
            $('.appenddata').append(`<textarea rows="15" cols="40">`+secrete+`</textarea>`);
            
        });

    </script>
@endsection
