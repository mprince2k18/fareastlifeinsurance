@extends('dashboard.app')

@section('title')
MANAGEMENT
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
                   <span class="breadcrumb-item active">MANAGEMENT</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">MANAGEMENT</h4>
        </div>




        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            <form action="{{ route('management_update') }}" method="post" enctype="multipart/form-data">
      @csrf
                            <!--name-->

                            <input type="hidden" name="management_id" value="{{ $single_management->id }}">

                            <label for="product_title">Name</label>
                            <textarea name="name" id="product_title" class="editable tx-16 bd pd-30 tx-inverse" cols="30" rows="10">{{ $single_management->name }}</textarea>

                           <label for="product_title">Designation</label>
                            <textarea name="designation" id="product_designation" class="editable tx-16 bd pd-30 tx-inverse" cols="30" rows="10">{{ $single_management->designation }}</textarea>

                            <!-- speaks    -->

                      <textarea name="speaks" id="summernote" cols="30" rows="10">{{ $single_management->speaks }}</textarea>

                            <!-- Menagaement Board<   -->



                            <div class="row no-gutters">

                                <div class="col-md-3">

                                  <label for="">Menagaement Board</label>

                                     <select name="menagaement_board_id" class="form-control">

                                          <option value="{{ $single_management->menagaement_board_id }}" class="bg-dark text-white">{{ $single_management->relationBetweenManagementBoard->management_board }}</option>


                                            @foreach ($management_boards as $management_board)
                                              <option value="{{ $management_board->id }}">{{ $management_board->management_board }}</option>
                                            @endforeach

                                     </select>

                                   </div>
                               </div>


                               <div class="row no-gutters">


                                 <img src="{{ asset('uploads/management') }}/{{ $single_management->photo }}" class="img-fluid" width="250px" alt="{{ $single_management->name }}">





                           </div>




                            <div class="row no-gutters">




                            <label class="custom-file">
                                              <input type="file" id="file" name="photo" class="custom-file-input">
                                              <span class="custom-file-control"></span>
                                            </label>


                        </div>





                            <button type="submit" class="btn btn-primary">Update MANAGEMENT</button>




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
                  placeholder:'Product Details',
  			    tooltip: false
  			  })
  			});
  		</script>

@endsection
