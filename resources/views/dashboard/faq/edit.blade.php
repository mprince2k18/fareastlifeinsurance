@extends('dashboard.app')

@section('title')
EDIT FAQ
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
                   <span class="breadcrumb-item active">EDIT FAQ</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">EDIT FAQ</h4>
        </div>



        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            <form action="{{ route('faq_update') }}" method="post" enctype="multipart/form-data">
@csrf
                            <!--add product name-->
                            <input type="hidden" name="faq_id" value="{{ $single_faq->id }}">

                            
                            <label for="">Add Question:</label>
    												<input class="form-control" type="text" name="question" value="{{ $single_faq->question }}" placeholder="Add Question">
                            <!-- product_details    -->

            			    <textarea name="answer" id="summernote" cols="30" rows="10">{{ $single_faq->answer }}</textarea>

                            <!-- product_photo   -->
                            <label for="product_title">Video Embed Link</label>
                              <textarea name="video" id="summernote_video" cols="10" rows="10">{{ $single_faq->video }}</textarea>



                            <button type="submit" class="btn btn-primary" >Update FAQ</button>




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
                  placeholder:'Faq Answer',
  			    tooltip: false
  			  });

  			  // Summernote editor
  			  $('#summernote_video').summernote({
  			    height: 300,
                  placeholder:'Video Embed Link',
  			    tooltip: false
  			  });
  			});
  		</script>

@endsection
