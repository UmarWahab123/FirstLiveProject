@extends('common.main')
@section('content')
@section('sub_header')
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
   <div class="kt-container  kt-container--fluid ">
      <div class="kt-subheader__main">
         <h3 class="kt-subheader__title" style="color: blue;">Update Blog</h3>
         <span class="kt-subheader__separator kt-hidden"></span>
      </div>
   </div>
</div>
@endsection
<section style="padding-top: 60px;">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  Edit Blog  <a class="btn btn-info float-right mb-4" href="{{url('fetch')}}">Go Back</a>
               </div>
               <div class="card-body">
                  <!--success alret -->
                  <form method="POST" action="{{url('update/'.$blogs->id)}}" enctype="multipart/form-data">
                     @csrf
                     <input type="hidden" name="id" value="{{$blogs->id}}"/>
                     <div class="form-group">
                        <label for="name">Blog Title</label>
                        <input type="text" name="title" value="{{$blogs->blog_title }}" class="form-control"/>
                     </div>
                     <!--Code for profile Image -->
                     <div class="form-group">
                        <label for="file">Blog Image</label>
                        <input type="file" name="file" class="form-control" onchange="loadFile(event)"/>
                        <img src="{{asset('assets/img/'.$blogs->blog_image)}}" id="previewImg" style="max-width: 120px;"/>
                     </div>
                     <div class="form-group">
                        <label>Blog Short Description</label>
                        <textarea id="two" class="form-control" name="short" rows="3" cols="79" required>
                        {{ $blogs->blog_short_description }}
                        </textarea>
                       </div>

                     <div class="form-group">
                        <label for="name">Blog Details</label>
                        <textarea id="one" class="form-control" name="detail" rows="6" cols="79"
                           value="" required>{{$blogs->blog_details }}</textarea>
                     </div>
                     <button type="submit" class="btn btn-primary">Update</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--this is also a function for file(image) preview -->
<script>
   var loadFile = function(event) {
     var reader = new FileReader();
     reader.onload = function(){
       var output = document.getElementById('previewImg');
       output.src = reader.result;
     };
     reader.readAsDataURL(event.target.files[0]);
   };
</script>
<!-- <script>
   $('#html_table').DataTable();
   <script> -->
<!-- end:: Content -->
@endsection
