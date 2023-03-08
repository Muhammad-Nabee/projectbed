
@extends('admin.layouts.master')

@section('content')
<br>
      <div class="card card-black">
              <div class="card-header">
                <div class="card-title">
                 Personal Detail
                </div>
              </div>
              <div class="card-body">

  <table class="table table-tripped" id="persondetail">
                                
  <thead>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone#</th>
         <th scope="col">Message</th>
        <th scope="col">Action</th>
  </thead>
  <tbody
      @foreach($con as $con)
    <tr>
      
      <td>{{$con->id}}</td>
       <td>{{$con->name}}</td>
       <td>{{$con->email}}</td>
       <td>{{$con->phone}}</td>
     <td> <a><i class="fa fa-eye viewmessagedetail" data-message="{{$con->message}}"  aria-hidden="true" data-toggle="modal" data-target="#exampleModal"></i></a></td>

       <td> <a href="{{ route('deletepersondetail',$con->id) }}"  ><i class="fa fa-trash" aria-hidden="true"></i></a></td>
       

    </tr>
    @endforeach
   
     
         </tbody>
        </table>
       </div>
       </div>
      
       
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">See Message</h5>
       
      </div >
      <div class="modal-body">
        <form action="" method="post">
            @csrf
            <div class="formdataappend">
              
            </div>
           <div class="modal-footer">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
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
    $("#persondetail").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
<script>
    $(document).on('click', '.viewmessagedetail', function(){
      var message=$(this).data('message');
        $('.formdataappend').empty();
        $('.formdataappend').append(`<h5>`+message+`</h5>`);
    });
</script>
@endsection