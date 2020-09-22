@extends('dashboard.app')

@section('title')
PRIVACY
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
                   <span class="breadcrumb-item active">PRIVACY</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">PRIVACY</h4>
        </div>
















@if ($terms_count == 0)
  <!-- br-pageheader -->
  <div class="br-pagebody">
    <div class="br-section-wrapper">

      {{-- inner_content --}}

  <form action="{{ route('privacy_create') }}" method="post" enctype="multipart/form-data">
@csrf
                  <!--add product name-->

                  <label for="product_title">Privacy Title</label>
                  <textarea name="privacy_title" id="product_title" class="editable tx-16 bd pd-30 tx-inverse" cols="30" rows="10"></textarea>

                  <!-- product_details    -->

            <textarea name="privacy_details" id="summernote" cols="30" rows="10"></textarea>

                  <!-- product_photo   -->

                  <button type="submit" class="btn btn-primary" >Add Privacy</button>




          </form>

          {{-- inner_content END --}}

        </div>
      </div>
          @else

            <div class="br-pagebody">
              <div class="br-section-wrapper">

            <h5 class="text-uppercase text-center">You cannot add more than One data in this field</h5>
            <h6 class="text-uppercase text-center"> Edit The Existing Data</h6>

            </div>
            </div>

@endif







        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            @foreach ($terms as $term)

              <div class="text-center">
                <h4>{!! html_entity_decode($term->privacy_title) !!}</h4>
              </div>

              <div class="text-left">
                <p>{!! html_entity_decode($term->privacy_details) !!}</p>
              </div>

              <div class="text-center">
                <a href="{{ url('/dashboard/privacy') }}/{{ $term->id }}" class="btn btn-teal">CHANGE</a>
              </div>
            @endforeach

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
                  placeholder:'Privacy Details',
  			    tooltip: false
  			  })
  			});
  		</script>

@endsection
