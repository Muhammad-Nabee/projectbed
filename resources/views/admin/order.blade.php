@extends('admin.layouts.master')


@section('content')
<br>

 <section class="content">
   <div class="container-fluid">
        <div class="row">
          <div class="col-12">
       
            <!-- /.card -->
           <div>
                  <div class="btn-group w-100 mb-2">
                    <a class="btn btn-info active allorders" href="javascript:void(0)" data-filter="all"> All Orders </a>
                    <a class="btn btn-info paid" href="javascript:void(0)" data-filter="1"> Paid </a>
                    <a class="btn btn-info unpaid" href="javascript:void(0)" data-filter="2"> Unpaid </a>
                  </div>
                  
                </div>
            <div class="card allordersdata">
              <div class="card-header">
                <h3 class="card-title">Order</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <table class="table table-bordered table-striped" id="example1">
  <thead>
    <tr>
        <th scope="col">No</th>
      <th scope="col">Order No</th>
      <th scope="col">User id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      
     
      <th scope="col">Status</th>
      <th scope="col">Contact</th>
      
      <th scope="col">Amount</th>
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php $i=1; ?>
      @foreach($order as $orders)
      
    <tr>
        <td>{{$i++}}</td>
    <td>or#{{$orders->id}}</td>
    <td><a href="{{route('transationdata',$orders->id)}}">See Transaction</a></td>
      <td>{{$orders->name}}</td>
      <td>{{$orders->email}}</td>
    
      <td> @if($orders->status=='0')
                            <form action="">
                                <div class="form-group">

                                    <input type="text" id="id" class="id" name="myid" value="{{$orders->id}}" hidden>
                                    <select style="background-color: red; color: white;"  class="form-control mySelect " name="status" id="{{$orders->id}}">
                                        <option  value="0">pending</option>
                                        <option  value="1">paid</option>
                                    </select>

                                </div>
                            </form>
                            @else
                            <form action="">
                                <div class="form-group">

                                    <input type="text" id="id" class="id" name="myid" value="{{$orders->id}}" hidden>
                                    <select style=" background-color: green; color: white;" class="form-control mySelect " name="status" id="{{$orders->id}}">

                                        <option  value="1">paid</option>
                                        <option  value="0">pending</option>
                                    </select>

                                </div>
                            </form>
                            @endif</td>
      <td>{{$orders->contact}}</td>
      
     <td>{{$orders->amount}}</td>
      <td>
          <a href="{{route('deleteorder',$orders->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
          <a href="{{route('vieworder',$orders->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
          <a href="{{route('seeorderdetail',$orders->id)}}"><i class="fa fa-microscope"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
              </div>
              <!-- /.card-body -->
            </div>
            
            <div class="card paidordersdata">
              <div class="card-header">
                <h3 class="card-title">Order</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <table class="table table-bordered table-striped" id="paidordersdata">
  <thead>
    <tr>
        <th scope="col">No</th>
      <th scope="col">Order No</th>
      <th scope="col">User id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      
      <th scope="col">City</th>
      <th scope="col">Status</th>
      <th scope="col">Contact</th>
      
      <th scope="col">Amount</th>
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php $i=1; ?>
      @foreach($order as $orders)
      @if($orders->status=='1')
    <tr>
        <td>{{$i++}}</td>
    <td>or#{{$orders->id}}</td>
    <td><a href="{{route('transationdata',$orders->id)}}">See Transaction</a></td>
      <td>{{$orders->name}}</td>
      <td>{{$orders->email}}</td>
      <td>{{$orders->city}}</td>
      <td> @if($orders->status=='0')
                            <form action="">
                                <div class="form-group">

                                    <input type="text" id="id" class="id" name="myid" value="{{$orders->id}}" hidden>
                                    <select style="background-color: red; color: white;"  class="form-control mySelect " name="status" id="{{$orders->id}}">
                                        <option  value="0">pending</option>
                                        <option  value="1">paid</option>
                                    </select>

                                </div>
                            </form>
                            @else
                            <form action="">
                                <div class="form-group">

                                    <input type="text" id="id" class="id" name="myid" value="{{$orders->id}}" hidden>
                                    <select style=" background-color: green; color: white;" class="form-control mySelect " name="status" id="{{$orders->id}}">

                                        <option  value="1">paid</option>
                                        <option  value="0">pending</option>
                                    </select>

                                </div>
                            </form>
                            @endif</td>
      <td>{{$orders->contact}}</td>
      
     <td>{{$orders->amount}}</td>
      <td>
          <a href="{{route('deleteorder',$orders->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
          <a href="{{route('vieworder',$orders->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
          <a href="{{route('seeorderdetail',$orders->id)}}"><i class="fa-solid fa-microscope"></i></a>
      </td>
    </tr>
    @endif
    @endforeach
  </tbody>
</table>
              </div>
              <!-- /.card-body -->
            </div>
            
            <div class="card unpaidordersdata">
              <div class="card-header">
                <h3 class="card-title">Order</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <table class="table table-bordered table-striped" id="unpaidordersdata">
  <thead>
    <tr>
        <th scope="col">No</th>
      <th scope="col">Order No</th>
      <th scope="col">User id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      
      <th scope="col">City</th>
      <th scope="col">Status</th>
      <th scope="col">Contact</th>
      
      <th scope="col">Amount</th>
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php $i=1; ?>
      @foreach($order as $orders)
      @if($orders->status=='0')
    <tr>
        <td>{{$i++}}</td>
    <td>or#{{$orders->id}}</td>
    <td><a href="{{route('transationdata',$orders->id)}}">See Transaction</a></td>
      <td>{{$orders->name}}</td>
      <td>{{$orders->email}}</td>
      <td>{{$orders->city}}</td>
      <td> @if($orders->status=='0')
                            <form action="">
                                <div class="form-group">

                                    <input type="text" id="id" class="id" name="myid" value="{{$orders->id}}" hidden>
                                    <select style="background-color: red; color: white;"  class="form-control mySelect " name="status" id="{{$orders->id}}">
                                        <option  value="0">pending</option>
                                        <option  value="1">paid</option>
                                    </select>

                                </div>
                            </form>
                            @else
                            <form action="">
                                <div class="form-group">

                                    <input type="text" id="id" class="id" name="myid" value="{{$orders->id}}" hidden>
                                    <select style=" background-color: green; color: white;" class="form-control mySelect " name="status" id="{{$orders->id}}">

                                        <option  value="1">paid</option>
                                        <option  value="0">pending</option>
                                    </select>

                                </div>
                            </form>
                            @endif</td>
      <td>{{$orders->contact}}</td>
      
     <td>{{$orders->amount}}</td>
      <td>
          <a href="{{route('deleteorder',$orders->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
          <a href="{{route('vieworder',$orders->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
          <a href="{{route('seeorderdetail',$orders->id)}}"><i class="fa-solid fa-microscope"></i></a>
      </td>
    </tr>
    @endif
    @endforeach
  </tbody>
</table>
              </div>
              <!-- /.card-body -->
            </div>
            
            
            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </section>
    
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

 @endif
    
        <script>
        
    $(document).ready(function(){
        $('.paidordersdata').hide();
        $('.unpaidordersdata').hide();
         $('.saleorderdata').hide();
        $(document).on('click','.allorders', function(){ 
      $('.allordersdata').show();
            $('.paidordersdata').hide();
            $('.unpaidordersdata').hide();
            $('.saleorderdata').hide();
        });
         $(document).on('click','.paid', function(){ 
             $('.allordersdata').hide();
            $('.paidordersdata').show();
            $('.unpaidordersdata').hide();
            $('.saleorderdata').hide();
            
        });
         $(document).on('click','.unpaid', function(){ 
              $('.allordersdata').hide();
            $('.paidordersdata').hide();
            $('.saleorderdata').hide();
            $('.unpaidordersdata').show();
            
    
        });
           $(document).on('click','.saleorder', function(){ 
              $('.allordersdata').hide();
            $('.paidordersdata').hide();
            $('.unpaidordersdata').hide();
            $('.saleorderdata').show();
    
        });
    });
 
 
  

    </script>
    <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
      
    });
     $("#paidordersdata").DataTable({
      "responsive": true,
      "autoWidth": false,
      
    });
     $("#unpaidordersdata").DataTable({
      "responsive": true,
      "autoWidth": false,
      
    });
     $("#saleorderdata").DataTable({
      "responsive": true,
      "autoWidth": false,
      
    });
  });
</script>

<script>
    $('.mySelect').on('change', function() {
      
    var value = $(this).val();

    var id=$(this).attr('id');
           $.ajax({
              url: "{{route('aprovedstatus')}}",
              method: "POST",
              data: {
                   "_token": "{{ csrf_token() }}",
                   id:id,
                   value:value
              },
              success:function(response){
                  location.reload();
              }
              });
  });
  </script>
  
@endsection