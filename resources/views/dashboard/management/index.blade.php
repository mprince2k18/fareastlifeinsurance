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

        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <!-- Large modal -->
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add Management Board</button>

                         <div class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg" style="width: 100% !important;" >
                             <div class="modal-content">


                             <form action="{{ route('management_board_create') }}" method="post" style="padding: 6.5rem;">
                               @csrf

         <!--                    Add New Menu-->
                         						<div class="row no-gutters">

                         							<!-- col-4 -->
                         							<div class="col-12">
                         							<label for="">Add Management Board:</label>
                         								<input class="form-control" type="text" name="management_board" placeholder="Add Management Board">
                         							</div>
                         							<!-- col-8 -->
                         						</div>




                                <div class="row no-gutters">

                                <div class="col-md-12">
                                    	<button type="submit" class="btn btn-info waves-effect waves-light">Send Data</button>
                                </div>


         							<!-- col-8 -->
         						</div>

         					</form>


                             </div>
                           </div>
                         </div>

                         {{-- Large modal end --}}
        </div>














        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            <form action="{{ route('management_create') }}" method="post" enctype="multipart/form-data">
      @csrf
                            <!--name-->

                            <label for="product_title">Name</label>
                            <textarea name="name" id="product_title" class="editable tx-16 bd pd-30 tx-inverse" cols="30" rows="10"></textarea>

                            <label for="product_title">Designation</label>
                            <textarea name="designation" id="product_designation" class="editable tx-16 bd pd-30 tx-inverse" cols="30" rows="10"></textarea>

                            <!-- speaks    -->

                      <textarea name="speaks" id="summernote" cols="30" rows="10"></textarea>

                            <!-- Menagaement Board<   -->



                            <div class="row no-gutters">

                                <div class="col-md-3">

                                  <label for="">Menagaement Board</label>

                                     <select name="menagaement_board_id" class="form-control">


                                            @foreach ($management_boards as $management_board)
                                              <option value="{{ $management_board->id }}">{{ $management_board->management_board }}</option>
                                            @endforeach

                                     </select>

                                   </div>
                               </div>




                            <div class="row no-gutters">


                            <label class="custom-file">
                                              <input type="file" id="file" name="photo" class="custom-file-input">
                                              <span class="custom-file-control"></span>
                                            </label>


                        </div>





                            <button type="submit" class="btn btn-primary">ADD MANAGEMENT</button>




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
