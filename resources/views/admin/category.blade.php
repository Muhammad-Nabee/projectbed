@extends('admin.layouts.master')

@section('content')

<br>


<div class="row" >
<div class="col-sm-2"></div>
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Add Category</h5>
        <br><br>
        <input type="hidden" name="id" id="id">
        <form action="{{route('addcategory')}}" method="post" enctype="multipart/form-data">
            @csrf
  <div class="form-group">
  <label>Category Name</label>
    <input type="text" class="form-control" name="name" placeholder=" Enter Category Name">
  </div>
  <div class="form-group">
  <label>Category description</label>
  <input type="text" name="description" id="description" class="form-control description" placeholder="Enter category description">
 </div>
 <div class="form-group">
        <label>Category Image</label>
        <input class="form-control" type="file" multiple  name="image">
     </div>
  <button class="btn btn-primary" style="color:white" >Submit</button>
</form>
<br><br>
<h5 class="card-title"> Categories</h5>
<table class="table table-bordered table-striped">
<thead>
  <tr>
    <th>Sr.No</th>
    <th>Name</th>
    <th>Description</th>
    <th>Status</th>
  </tr>
</thead>
<tbody>

</tbody>
</table>
        </div>
    </div>
  </div>
  <div class="col-sm-2"></div>
  </div>

<!-- Modal -->
<div class="modal fade" id="editmodel1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editmodel1">Edit Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="editform" class="editform">
      <div class="modal-body">
    
       <input type="hidden" name="id" id="id">
       <div class="form-group">
            <label>Category Name</label>
            <input type="text" name="name" id="name2" class="form-control" placeholder="enter category name">
    
              </div>
              <div class="form-group">
            <label>Category description</label>
            <input type="text" name="description" id="description" class="description form-control" placeholder="Enter category description">
      
              </div>
      </div>
      
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary submit" style="color:white; background:#007bff;">Update</button>
      </div>
    </div>
  </div>
</div>
 
  <script>
    //fetch category
$(document).ready(function(){
fetchcategory();
function fetchcategory(){
  $.ajax({
    url: "{{route('fetchcategory')}}", 
    type:'get',
    data: {
             "_token": "{{ csrf_token() }}",
                name:name,
            },
     success:function(response){
        // console.log(response.name);  
        
        $.each(response.name, function(key, item){
         $('tbody').append('<tr>\
         <td>'+item.id+'</td>\
         <td>'+item.name+'</td>\
         <td>'+item.description+'</td>\
         <td type="button" class="edit_cat btn btn-primary btn-sm" value="' + item.id + '" style="color:white">Edit</td>\
         <td ><button class="del_cat btn btn-danger btn-sm id" data-method="delete" data-id="'+item.id+'" style="color:white">Delete </button></td>\
       </tr>');
    });  
    }
  });
}

//edit category
$(document).on('click','.edit_cat', function(e){
  e.preventDefault();
 $('#editmodel1').modal('show');
 $tr=$(this).closest('tr');
 var data=$tr.children("td").map(function(){
 return $(this).text();
 }).get();
 console.log(data);
 $('#id').val(data[0]);
 $('#name2').val(data[1]);
 $('.description').val(data[2]);
 
});
//update category
$(document).on('click','.submit', function(e){
  e.preventDefault();
  var id=$('#id').val();
  var name=$('#name2').val();
  var description=$('.description').val();
  var url = '{{ route("categoryupdate", ":id") }}';
  url = url.replace(':id', id);
  $.ajax({
method:"POST",
url: url,
data: {
       "_token": "{{ csrf_token() }}",
       name:name,
       description:description,},
success: function(response){
  location.replace("category");
  console.log(response.name);
  $('#editmodel1').modal('hide');
  alert("Category Updated");
}
});
});
//add category
$(document).on('click','.send', function(e){
  
e.preventDefault();
var formData = new FormData();
formData.append('name',$('.name').val());
formData.append('description',$('#description').val());
formData.append('image',$('#image')[0].files[0]);
formData.append('_token','{{ csrf_token() }}');
jQuery.ajax({
    url: "{{route('addcategory')}}", 
    type: 'POST',
    data: formData,
        processData: false,
        contentType: false,
    success:function(response){
      location.replace("category");
        console.log(response);
        jQuery('#frm')['0'].reset();
        
    }
});
});

});
$(document).on('click','.del_cat', function(e){
  e.preventDefault();
  var cid =$(this).data('id');
  $.ajax({
    url:"destroy/" + cid,
    type: 'DELETE',
    data: {
             "_token": "{{ csrf_token() }}",
               
            },
success: function(){
  alert("Category Deleted");
}
});

});



  </script>
@endsection