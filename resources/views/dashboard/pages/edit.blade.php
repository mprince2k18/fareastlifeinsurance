@extends('dashboard.app')

@section('title')
EDIT PAGE
@endsection

@section('css_cdn')


  <link href="{{ asset('dashboard/lib/highlightjs/github.css') }}" rel="stylesheet">

  <link href="{{ asset('dashboard/lib/medium-editor/medium-editor.css') }}" rel="stylesheet">
  		<link href="{{ asset('dashboard/lib/medium-editor/default.css') }}" rel="stylesheet">
  		<link href="{{ asset('dashboard/lib/summernote/summernote-bs4.css') }}" rel="stylesheet">


@endsection

@section('content')




      <div class="br-mainpanel">


        <div class="br-pageheader pd-y-30 pd-l-20">
                <nav class="breadcrumb pd-0 mg-0 tx-13">
                   <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
        <!--               <a class="breadcrumb-item" href="#">Dashboard</a>-->
                   <span class="breadcrumb-item active">EDIT PAGE</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">EDIT PAGE</h4>
        </div>














        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            <form action="{{ route('update') }}" method="post" enctype="multipart/form-data">
@csrf

<input type="hidden" name="page_id" value="{{ $single_page->id }}">

                            <!--add Page Title-->

                            <label for="page_title">Page Title</label>
                            <input type="text" class="form-control"  name="page_title" placeholder="Page Title" value="{{ $single_page->page_title }}">
                            
                            <label for="page_title">Page URL</label>
                            <input type="text" class="form-control"  name="slug" placeholder="Page URL" value="{{ $single_page->slug }}">

                            <input type="hidden" class="form-control" name="old_photo" value="{{ $single_page->photo }}">
                            <img src="{{ asset('uploads/pages') }}/{{ $single_page->photo }}" alt="" height="280" width="400">
                            <input type="file" class="form-control" name="photo">

                            <!-- page_details    -->

            			  {{--}}  <textarea name="page_details" id="summernote" cols="30" rows="10">{{ $single_page->page_details }}</textarea>--}}

                            <!-- product_photo   -->






                            <button type="submit" class="btn btn-primary" >PUBLISH</button>




            				</form>

            {{-- inner_content END --}}

          </div>
        </div>












@endsection

@section('js_cdn')


  		<script src="{{ asset('dashboard/lib/highlightjs/highlight.pack.js') }}"></script>
      <script src="{{ asset('dashboard/lib/summernote/summernote-bs4.min.js') }}"></script>
  		<script src="{{ asset('dashboard/lib/medium-editor/medium-editor.js') }}"></script>


  <script>
  			$(function(){
  			  'use strict';

  			  // Inline editor
  			  var editor = new MediumEditor('.editable');

  			  // Summernote editor
  			  $('#summernote').summernote({
  			    height: 600,
                  placeholder:'Page Details',
  			    tooltip: true
  			  })
  			});
  		</script>

@endsection
