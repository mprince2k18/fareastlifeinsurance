@extends('dashboard.app')

@section('title')
Quick Service
@endsection

@section('css_cdn')

  <link href="{{ asset('dashboard/lib/medium-editor/medium-editor.css') }}" rel="stylesheet">
      <link href="{{ asset('dashboard/lib/medium-editor/default.css') }}" rel="stylesheet">
      <link href="{{ asset('dashboard/lib/summernote/summernote-bs4.css') }}" rel="stylesheet">



@endsection

@section('content')




  <div class="br-mainpanel">


     <div class="br-pageheader pd-y-30 pd-l-20">
             <nav class="breadcrumb pd-0 mg-0 tx-13">
                <a class="breadcrumb-item" href="#"><i class="icon ion-ios-home-outline"></i>Home</a>
                <span class="breadcrumb-item active">Quick Service</span>
             </nav>
      </div>



     <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
       <h4 class="tx-gray-800 mg-b-5">Quick Service</h4>
     </div>

     <!-- br-pageheader -->
     <div class="br-pagebody">
       <div class="br-section-wrapper">

         {{-- inner_content --}}
         <!-- form-layout -->

         					<div class="form-layout form-layout-7">

         					<form action="{{ route('quick_service_create') }}" method="post" enctype="multipart/form-data">
                    @csrf
                             <!-- Add New Logo-->

                             <div class="row no-gutters">


                      <div class="col-5 col-sm-4">
                        Quick Service Photo:
                      </div>


                      <div class="col-7 col-sm-8">
                        <label class="custom-file">
                          <input type="file" id="file" name="photo" class="custom-file-input">
                          <span class="custom-file-control"></span>
                        </label>

                      </div>

                    </div>

                             <div class="row no-gutters">


                      <div class="col-5 col-sm-4">
                        Quick Service Hover Photo:
                      </div>


                      <div class="col-7 col-sm-8">
                        <label class="custom-file">
                          <input type="file" id="file" name="hover_photo" class="custom-file-input">
                          <span class="custom-file-control"></span>
                        </label>

                      </div>

                    </div>


                    <textarea name="quick_deatils" id="summernote" cols="30" rows="10"></textarea>


                    <div class="row no-gutters">
                      <div class="col-5 col-sm-4">
                          Quick Service Link:
                      </div>
                      <!-- col-4 -->
                      <div class="col-7 col-sm-8">
                        <input class="form-control" type="text" name="link" placeholder="Quick Service Link">
                      </div>
                      <!-- col-8 -->
                    </div>




                <button type="submit" class="btn btn-primary bg-primary "><i class="fa fa-send mg-r-10"></i>
                    Send data
                </button>

         					</form>

         					</div>
         					<!-- form-layout -->
         {{-- inner_content END --}}

       </div>
     </div>





			<div class="br-pagebody">
				<div class="br-section-wrapper">
			        <!-- All Logo -->
					<div class="container">
					    <div class="row">


                @foreach ($quick_services as $quick_service)


                  <div class="col-md-4">
                      <div class="card">
                                  <img class="card-img-top img-fluid" src="{{ asset('/uploads/quick_service') }}/{{ $quick_service->photo }}" alt="Image">
                                  <div class="card-body">
                                    <a href="{{ url('/appsettings/quick_service/trash') }}/{{ $quick_service->id }}" class="btn btn-oblong btn-danger" aria-disabled="true">Trash</a>
                                  </div>
                                </div>
                        <!-- card -->
                  </div>

                  @endforeach



					    </div>
					</div>




					<!-- All Logo End -->

				</div>
				<!-- br-section-wrapper -->
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
