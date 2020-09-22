@extends('dashboard.app')

@section('title')
CLAIM
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
                   <span class="breadcrumb-item active">ADD CLAIM</span>
                </nav>
        </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">ADD CLAIM</h4>
        </div>














        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            <!-- form-layout -->

            					<div class="form-layout form-layout-7">

            					<form action="{{ route('claim_create') }}" method="post" enctype="multipart/form-data">
                        @csrf

                                <!-- Add New Logo-->

                                <div class="row no-gutters">


                           <div class="col-5 col-sm-4">
                             Add Icon:
                           </div>


                           <div class="col-7 col-sm-8">
                             <input class="form-control" type="text" name="icon" placeholder="ion-spin">

                           </div>

                           <div class="col-7 col-sm-8">
                             <label>Claim Date</label>
                             <input class="form-control" type="date" name="claimDate" placeholder="ion-spin">
                           </div>
                           <div class="col-7 col-sm-8">
                             <label>Upaold PDF</label>
                             <input class="form-control" type="file" name="claimPdf" placeholder="ion-spin">
                           </div>

                         </div>

                               <textarea name="claim" id="summernote" cols="30" rows="10"></textarea>


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
                  placeholder:'Claim Details',
  			    tooltip: false
  			  })
  			});
  		</script>

@endsection
