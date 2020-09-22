@extends('dashboard.app')

@section('title')
SLIDER
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
                   <span class="breadcrumb-item active">ADD SLIDER</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">ADD SLIDER</h4>
        </div>














        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            <form action="{{ route('slider_update') }}" method="post" enctype="multipart/form-data">
@csrf

<input type="hidden" name="slider_id" value="{{ $single_slider->id }}">


            			    <textarea name="banner_caption" id="summernote" cols="30" rows="10">{{ $single_slider->banner_caption }}</textarea>

                            <!-- product_photo   -->

                            <div class="row no-gutters">


            								<label class="custom-file">
                                              <input type="file" id="file" name="banner" class="custom-file-input" value="{{ $single_slider->banner }}">
                                              <span class="custom-file-control"></span>
                                            </label>


            						</div>


                        <div class="row no-gutters">
                          <input class="form-control" value="{{ $single_slider->link }}" type="text" name="link" placeholder="Slider Link">
                          <!-- col-8 -->
                        </div>





                            <button type="submit" class="btn btn-primary" >Add Slider</button>




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
  			    height: 300,
                  placeholder:'Slider Caption',
  			    tooltip: false
  			  })
  			});
  		</script>

@endsection
