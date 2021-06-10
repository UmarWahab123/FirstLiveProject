 @extends('common.main')
   @section('sub_header')
<div class="kt-subheader kt-grid__item" id="kt_subheader">
   <div class="kt-container kt-container--fluid ">
      <div class="kt-subheader__main">
         <h3 style="color: blue;">Add New Blog</h3>
         <span class="kt-subheader__separator kt-hidden"></span>
      </div>
   </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if(Session::has('blog_added'))
<script>
   swal("Great Job!","{!! Session::get('blog_added') !!}","success",{
      button:"OK",
     });
</script>
@endif
@endsection
   @section('content')
<div class="kt-portlet">
   <div class="kt-portlet__head">
      <div class="kt-portlet__head-label">

         <div class="col-md-12 offset-md-4"><br>
            <!--begin::Form-->
            <form class="" action="{{url('store')}}" method="POST" enctype="multipart/form-data">
               @csrf
               <div class="form-group"><a class="btn btn-info float-right mb-4" href="{{url('fetch')}}">Go Back</a><br>
                  <label>Blog Title</label>
                  <input type="text" class="form-control" placeholder="" name="title" value="" required>
               </div>
               <div class="form-group">
                  <label for="file">Blog Image</label>
                  <input type="file" name="file" class="form-control" onchange="loadFile(event)"/>
                  <img id="output" style="max-width: 120px;margin-top:10px;"/>
               </div>
               <div class="form-group">
                  <label>Blog Short Description</label>
                  <textarea id="two" class="form-control" name="short" rows="3" cols="79" required></textarea>
               </div>
               <div class="form-group">
                  <label>Blog Details</label><br>
                  <textarea id="one" class="form-control" name="detail" rows="6" cols="79" required></textarea>
               </div>
               <div class="form-group">
                  <label>Meta Title</label>
                  <input type="text" class="form-control" placeholder="" name="titles" required>
               </div>
               <div class="form-group">
                  <label>Meta Keywords</label>
                  <input type="text" class="form-control" placeholder="" name="keyword" required>
               </div>
               <div class="form-group">
                  <label>Meta Description</label>
                  <textarea id="three" class="form-control" name="mdesc" rows="3" required></textarea>
               </div>
               <button type="submit" class="btn btn-primary">Submit</button>
               &nbsp<button type="button" class="btn btn-secondary" style="background-color: lightslategrey; color:lightyellow">Cancel</button>
            </form>
         </div>
      </class=>
   </div>
   <script>
      var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
          var output = document.getElementById('output');
          output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
      };
   </script>

</div>
 @endsection
