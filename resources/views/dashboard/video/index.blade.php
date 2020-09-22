@extends('dashboard.app')

@section('title')
ADD VIDEO
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
                   <span class="breadcrumb-item active">ADD VIDEO</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">ADD VIDEO</h4>
        </div>














        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            <!-- form-layout -->

            					<div class="form-layout form-layout-7">

            					<form action="{{ route('video_create') }}" method="post" enctype="multipart/form-data">
                        @csrf

                                <!-- Add New Logo-->

                                <div class="row no-gutters">


                           <div class="col-5 col-sm-4">
                             Add Video Link:
                           </div>


                           <div class="col-7 col-sm-8">
                             <input class="form-control" type="text" name="video" placeholder="JUST PASTE THE EMBED SRC LINK">

                           </div>

                         </div>


                         <div class="row no-gutters">

                         <div class="col-md-12">
                             	<button type="submit" class="btn btn-info waves-effect waves-light">Send Data</button>
                         </div>


            							<!-- col-8 -->
            						</div>



            					</form>

            					</div>
            					<!-- form-layout -->

            {{-- inner_content END --}}

          </div>
        </div>





        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            <!-- All Logo -->
            					<div class="container">
            					    <div class="row">


                        @foreach ($videos as $video)

                          <div class="col-md-6">
                              <div class="card">

                                <iframe width="538" height="315" src="{{ $video->video }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


                                          <div class="card-body">
                                            <a href="{{ url('/dashboard/video/delete') }}/{{ $video->id }}" class="btn btn-oblong btn-danger">Remove</a>
                                          </div>
                                        </div>
                                <!-- card -->
                          </div>

                        @endforeach



            					    </div>
            					</div>




            					<!-- All Logo End -->

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
                  placeholder:'Product Details',
  			    tooltip: false
  			  })
  			});
  		</script>

@endsection
