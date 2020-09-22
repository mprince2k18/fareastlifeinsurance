@extends('dashboard.app')

@section('title')
ADD POPUP
@endsection

@section('css_cdn')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">

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
                   <span class="breadcrumb-item active">ADD POPUP</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">ADD POPUP</h4>
        </div>














        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            <form action="{{ route('popup_create') }}" method="post" enctype="multipart/form-data">
              @csrf


                            <!-- product_photo   -->

                            <div class="row no-gutters">


              								<label class="custom-file">
                                  <input type="file" id="file" name="photo" class="custom-file-input">
                                  <span class="custom-file-control"></span>
                              </label>


            						    </div>
                            <div class="row no-gutters">


                              <label>From Date</label>
                              <input type="date" name="fromDate" class="form-control">

                              <label>To Date</label>
                              <input type="date" name="toDate" class="form-control">


            						    </div>


                            <label for="product_title">Popup Link</label>
                            <textarea name="link" id="product_title" class="form-control" cols="30" rows="10"></textarea>



                            <button type="submit" class="btn btn-primary" >Add Popup</button>

            				</form>

            {{-- inner_content END --}}

          </div>
        </div>




        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            <div class="container">
        <div class="row">
          @foreach ($galleries as $gallery)
        <div class="col-md-4">
          <a href="{{ asset('uploads/popup') }}/{{ $gallery->photo }}" title="My Caption" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
            <img src="{{ asset('uploads/popup') }}/{{ $gallery->photo }}" class="img-fluid rounded">
            <span class="text-center">{{ $gallery->link }}</span>
          </a>
          <div class="text-center">
            <a href="{{ url('/dashboard/popup') }}/{{ $gallery->id }}" class="btn btn-danger">Delete</a>
          </div>
        </div>


          @endforeach


        </div>
      </div>

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

      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js">

      </script>

    <script type="text/javascript">
    $(document).on("click", '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox();
    });
    </script>

@endsection
