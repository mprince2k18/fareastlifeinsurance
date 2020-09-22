@extends('dashboard.app')

@section('title')
EDIT MESSAGE
@endsection

@section('css_cdn')


  <link href="{{ asset('dashboard/lib/highlightjs/github.css') }}" rel="stylesheet">

  <link href="{{ asset('dashboard/lib/medium-editor/medium-editor.css') }}" rel="stylesheet">
  		<link href="{{ asset('dashboard/lib/medium-editor/default.css') }}" rel="stylesheet">
  		<link href="{{ asset('dashboard/lib/summernote/summernote-bs4.css') }}" rel="stylesheet">


@endsection

@section('content')

{{ error_reporting(0) }}


      <div class="br-mainpanel">


        <div class="br-pageheader pd-y-30 pd-l-20">
                <nav class="breadcrumb pd-0 mg-0 tx-13">
                   <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
        <!--               <a class="breadcrumb-item" href="#">Dashboard</a>-->
                   <span class="breadcrumb-item active">EDIT MESSAGE</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">EDIT MESSAGE</h4>
        </div>














        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            <form action="{{ route('update_message') }}" method="post" enctype="multipart/form-data">
              @csrf

							<input type="hidden" name="message_id" value="{{ $single_message->id }}">
                            <!--title-->

                            <label for="title">Message From</label>
                            <textarea name="title" id="title" class="editable tx-16 bd pd-30 tx-inverse" cols="30" rows="10">{{ $single_message->title }}</textarea>

                            <!-- name -->

                            <label for="name">Name</label>
                            {{-- <textarea name="name" id="name" class="editable tx-16 bd pd-30 tx-inverse" cols="30" rows="10">{{ $single_message->relationBetweenManagement->name }}</textarea> --}}
                            <div class="row no-gutters">

                                 <select name="name" class="form-control">

                                   @foreach($managements as $management)
                                   <option value="{{$management->id }}">{!! html_entity_decode($management->name) !!}</option>
                                   @endforeach


                                 </select>

                               <!-- col-8 -->
                             </div>
                            <!-- designation -->

                            <label for="designation">Designation</label>
                            <textarea name="designation" id="designation" class="editable tx-16 bd pd-30 tx-inverse" cols="30" rows="10">{{ $single_message->designation }}</textarea>


                            <!-- message    -->

            			    <textarea name="message" id="summernote" cols="30" rows="10">{{ $single_message->message }}</textarea>

                            <!-- photo   -->

                            <label for="name">Officer Photo</label>
                            <div class="row no-gutters">
                              <label class="custom-file">
                                <input type="file" id="file" value="{{ $single_message->photo }}" name="photo" class="custom-file-input">
                                <span class="custom-file-control"></span>
                              </label>
            						    </div>


                            <!-- signature   -->

                            <label for="name">Officer Signature</label>

                            <div class="row no-gutters">
                              <label class="custom-file">
                                <input type="file" id="file" value="{{ $single_message->signature }}" name="signature" class="custom-file-input">
                                <span class="custom-file-control"></span>
                              </label>
                            </div>

                            <!-- qr_code   -->
                            <label for="name">QR Code</label>

                            <div class="row no-gutters">
                              <label class="custom-file">
                                <input type="file" id="file" value="{{ $single_message->qr_code }}" name="qr_code" class="custom-file-input">
                                <span class="custom-file-control"></span>
                              </label>
                            </div>


                            <button type="submit" class="btn btn-primary" >Update Message</button>




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
                  placeholder:'Officer Message',
  			    tooltip: false
  			  })
  			});
  		</script>

@endsection
