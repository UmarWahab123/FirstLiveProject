@extends('common.main')
@section('content')
<div class="kt-portlet kt-portlet--mobile">
   <div class="kt-portlet__head">
      <div class="kt-portlet__head-label">
         <h3 class="kt-portlet__head-title">
            Basic Example
         </h3>
      </div>
      <div class="kt-portlet__head-toolbar">
         <div class="kt-portlet__head-toolbar">
            <div class="dropdown dropdown-inline">
               <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="la la-sellsy"></i>
               </button>
               <div class="dropdown-menu dropdown-menu-right">
                  <ul class="kt-nav">
                     <li class="kt-nav__section kt-nav__section--first">
                        <span class="kt-nav__section-text">Quick Actions</span>
                     </li>
                     <li class="kt-nav__item">
                        <a href="#" class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-graph-1"></i>
                        <span class="kt-nav__link-text">Statistics</span>
                        </a>
                     </li>
                     <li class="kt-nav__item">
                        <a href="#" class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                        <span class="kt-nav__link-text">Events</span>
                        </a>
                     </li>
                     <li class="kt-nav__item">
                        <a href="#" class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-layers-1"></i>
                        <span class="kt-nav__link-text">Reports</span>
                        </a>
                     </li>
                     <li class="kt-nav__item">
                        <a href="#" class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-bell-1o"></i>
                        <span class="kt-nav__link-text">Notifications</span>
                        </a>
                     </li>
                     <li class="kt-nav__item">
                        <a href="#" class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-file-1"></i>
                        <span class="kt-nav__link-text">Files</span>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="kt-portlet__body">
      <!--begin: Datatable -->
      <div class="col-md-12 offset-md-4"></div>
      <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1" width="100%">
         <thead>
            <tr>
               <th>Blog ID</th>
               <th>Blog Title</th>
               <th>Blog Image</th>
               <th>Blog Short Description</th>
               <th>Action</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($blogs as $blog)
            <tr>
               <td>{{ $blog->id }}</td>
               <td>{{ $blog->blog_title }}</td>
               <td><img src="{{asset('assets/img/'.$blog->blog_image)}}" style="max-width:120px;"/></td>
               <td>{{ $blog->blog_short_description }}</td>
               <td>
                  <a href="{{url('edit/'.$blog->id)}}" class="btn btn-info">Edit</a>
                  <a href="{{url('delete/'.$blog->id)}}" class="btn btn-danger">Delete</a>
               </td>
            </tr>
            @endforeach
         </tbody>
      </table>
   </div>
   <!--end: Datatable -->
</div>
</div>
</div>
@endsection
