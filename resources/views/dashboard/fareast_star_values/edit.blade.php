@extends('dashboard.app')

@section('title')
FAREAST STAR
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
                   <span class="breadcrumb-item active">Edit FAREAST STAR</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">Edit FAREAST STAR Values</h4>
        </div>


        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            <!-- form-layout -->
                            <div class="form-layout form-layout-7">
                                <form action="{{ route('fstarvalues.update',$fsv->id) }}" method="post" enctype="multipart/form-data">
                                  {{method_field('PUT')}}
                                    {{csrf_field()}}

                                    <div class="row no-gutters">
                                        <div class="col-5 col-sm-4"> Update Year: </div>
                                        <div class="col-7 col-sm-8">
                                            <input class="form-control" type="text" name="year" value="{{$fsv->year}}"> </div>
                                    </div>
                                    <!-- Add New Logo-->
                                     <div class="row no-gutters">
                                        <div class="col-5 col-sm-4"> Update PDF/DOCX File: </div>
                                        <div class="col-7 col-sm-8">
                                            <label class="custom-file">
                                                <input type="file" id="file" name="file" class="custom-file-input"> <span class="custom-file-control"></span> </label>
                                        </div>
                                    </div>


                                    <button type="submit" class="btn btn-primary bg-primary "><i class="fa fa-send mg-r-10"></i> Update data </button>
                                </form>
                            </div>
                      


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
