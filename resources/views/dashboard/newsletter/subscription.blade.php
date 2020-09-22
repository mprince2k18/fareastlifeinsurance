@extends('dashboard.app')

@section('title')
SUBSCRIPTION
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
                   <span class="breadcrumb-item active">SUBSCRIPTIONS</span>
                </nav>
             </div>

        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">SUBSCRIPTIONS</h4>
        </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">



                 <!-- Large modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">ADD SUBSCRIPTION</button>



                    <div id="app">
                      <example-component></example-component>
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
                              <th class="wd-10p">Answer</th>
                            </tr>
                          </thead>
                          <tbody>

                              <tr>
                                <td>12</td>
                                <td>dsadsadsa</td>
                                <td>asdsadsad</td>
                              </tr>

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
                  placeholder:'Add Newsletter',
  			    tooltip: false
  			  })
  			});
  		</script>

        <script src="{{ asset('js/app.js') }}"></script>

@endsection
