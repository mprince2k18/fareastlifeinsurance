@extends('dashboard.app')

@section('title')
FAQ
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
                   <span class="breadcrumb-item active">FAQ</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">FAQ</h4>
        </div>



        <!-- br-pageheader -->
  			<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">



                 <!-- Large modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add FAQ</button>

                  <div class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" style="width: 100% !important;" >
                      <div class="modal-content">


                      <form action="{{ route('faq_create') }}" method="post" style="padding: 6.5rem;">
                        @csrf


  											<!-- Add New Menu-->
  											<div class="row no-gutters">

  												<div class="col-12">
  												<label for="">Add Question:</label>
  													<input class="form-control" type="text" name="question" placeholder="Add Question">
  												</div>

  												<div class="col-12">
  												<label for="">Question Answer:</label>
  													{{-- <textarea name="answer" id="summernote" cols="30" rows="10"></textarea> --}}
  													<textarea name="answer" cols="30" rows="10"></textarea>
  												</div>


                          <div class="col-12">
  												<label for="">Add Video:</label>
  													<input class="form-control" type="text" name="video" placeholder="Add Video">
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
                    </div>
                  </div>




              </div>










        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            <div class="table-wrapper">
            						<table id="datatable1" class="table display responsive nowrap">
            							<thead>
            								<tr>
            									<th class="wd-15p">ID</th>
            									<th class="wd-20p">Question</th>
            									{{-- <th class="wd-10p">Answer</th> --}}
            									<th class="wd-10p">Action</th>
            								</tr>
            							</thead>
            							<tbody>

                            @foreach ($faqs as $faq)

                              <tr>
              									<td>{{ $faq->id }}</td>
              									<td>{{ Str::limit($faq->question,20) }}</td>
              									{{-- <td>{!! html_entity_decode(Str::limit($faq->answer,20)) !!}</td> --}}
              									<td>
              									    <div class="btn-group" role="group" aria-label="Basic example">
                          <a type="button" href="{{ url('/dashboard/faq/edit') }}/{{ $faq->id }}" class="btn btn-secondary pd-x-25 active"><i class="icon ion-edit"></i></a>

                          <a type="button" href="{{ url('/dashboard/faq/delete') }}/{{ $faq->id }}" class="btn btn-danger pd-x-25"><i class="icon ion-trash-a"></i></a>
                                                      </div>
              									</td>
              								</tr>

                            @endforeach





            							</tbody>
            						</table>
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

@endsection
