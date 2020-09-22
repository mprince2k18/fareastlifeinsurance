@extends('dashboard.app')

@section('title')
CORPORATE MANAGEMENT
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
                   <span class="breadcrumb-item active">CORPORATE MANAGEMENT</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">CORPORATE MANAGEMENT</h4>
        </div>
















        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            <!-- All Logo -->
 					<div class="container">
 					    <div class="row">



                @foreach ($corporate_managements as $corporate_management)

                  <div class="col-md-4">
                      <div class="card">
                                   <img class="card-img-top img-fluid" src="{{ asset('uploads/management') }}/{{ $corporate_management->photo }}" alt="{{ $corporate_management->name }}">
                                   <div class="card-body">
                                     <h5 class="card-title">{!! html_entity_decode($corporate_management->name) !!}</h5>

<a href="{{ url('/dashboard/management/edit') }}/{{ $corporate_management->id }}" class="btn btn-oblong btn-teal">Edit</a>


                                     <a href="{{ url('/dashboard/management/delete') }}/{{ $corporate_management->id }}" class="btn btn-oblong btn-danger">Remove</a>
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
