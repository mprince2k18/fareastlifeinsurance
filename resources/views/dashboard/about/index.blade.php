@extends('dashboard.app')

@section('title')
Manage About
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
                   <a class="breadcrumb-item" href="{{ url('/') }}"><i class="icon ion-ios-home-outline"></i> Home</a>
        <!--               <a class="breadcrumb-item" href="#">Dashboard</a>-->
                   <span class="breadcrumb-item active">About</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">Manage product now</h4>
        </div>














        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            <form action="{{ route('saveabout') }}" method="post" enctype="multipart/form-data">
@csrf
                            <!--add product name-->

                            <label for="product_title">About Title</label>
                            <textarea name="title" id="title" class="editable tx-16 bd pd-30 tx-inverse" cols="30" rows="10"></textarea>
                            <textarea name="details" id="summernoteEng" cols="30" rows="10"></textarea>

                            <!-- product_details    -->
                            <!-- product_photo   -->
                            <br>
                            <div class="row no-gutters">
                              <label>About photo</label>
                               <label class="custom-file">
                                  <input type="file" id="file" name="photo" class="custom-file-input">
                                  <span class="custom-file-control">Photo</span>
                               </label>
                            </div>

                            <!-- product_photo  end -->
                            <!-- video  -->
                                  <br>
                                  <label>Video Url</label>
                                  <input placeholder="Enter Video Url" type="text" id="videoUrl" name="videoUrl" class="form-control">
                            </div>

                            <!-- video  end -->

                          <button type="submit" class="btn btn-primary" >Save</button>




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
  			  $('#summernoteEng').summernote({
  			    height: 300,
                  placeholder:'Product Details In English',
  			    tooltip: false
  			  })
  			  $('#summernoteBan').summernote({
  			    height: 300,
                  placeholder:'Product Details In Bangla',
  			    tooltip: false
  			  })
  			});
  		</script>

@endsection
