@extends('dashboard.app')

@section('title')
Manage About
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
                   <a class="breadcrumb-item" href="{{ url('/') }}"><i class="icon ion-ios-home-outline"></i> Home</a>
        <!--               <a class="breadcrumb-item" href="#">Dashboard</a>-->
                   <span class="breadcrumb-item active">About</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">Manage product now</h4>
        </div>














        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            <form action="{{ route('saveMission') }}" method="post" enctype="multipart/form-data">
@csrf
                            <!--add product name-->

                            <label for="product_title">Details</label>
                            <textarea name="details" id="summernoteEng" cols="30" rows="10"></textarea>

                            <!-- product_details    -->

                            <!-- video  -->
                                  <br>
                                  <label>1st Mission</label>
                                  <input placeholder="Write your mission" type="text" id="videoUrl" name="one" class="form-control">
                                  <span class="custom-file-control">Video Url</span>
                                  <br>
                                  <label>2nd Mission</label>
                                  <input placeholder="Write your mission" type="text" id="videoUrl" name="two" class="form-control">
                                  <span class="custom-file-control">Video Url</span>
                                  <br>
                                  <label>3rd Mission</label>
                                  <input placeholder="Write your mission" type="text" id="videoUrl" name="three" class="form-control">
                                  <span class="custom-file-control">Video Url</span>
                                  <br>
                                  <label>4th Mission</label>
                                  <input placeholder="Write your mission" type="text" id="videoUrl" name="four" class="form-control">
                                  <span class="custom-file-control">Video Url</span>
                                  <br>
                                  <label>5th Mission</label>
                                  <input placeholder="Write your mission" type="text" id="videoUrl" name="five" class="form-control">
                                  <span class="custom-file-control">Video Url</span>
                                  <br>
                                  <label>6th Mission</label>
                                  <input placeholder="Write your mission" type="text" id="videoUrl" name="six" class="form-control">
                                  <span class="custom-file-control">Video Url</span>
                                  <br>
                                  <label>7th Mission</label>
                                  <input placeholder="Write your mission" type="text" id="videoUrl" name="seven" class="form-control">
                                  <span class="custom-file-control">Video Url</span>
                                  <br>
                                  <label>8th Mission</label>
                                  <input placeholder="Write your mission" type="text" id="videoUrl" name="eight" class="form-control">
                                  <span class="custom-file-control">Video Url</span>
                                  <br>
                                  <label>9th Mission</label>
                                  <input placeholder="Write your mission" type="text" id="videoUrl" name="nine" class="form-control">
                                  <span class="custom-file-control">Video Url</span>
                                  <br>
                                  <label>10th Mission</label>
                                  <input placeholder="Write your mission" type="text" id="videoUrl" name="ten" class="form-control">
                                  <span class="custom-file-control">Video Url</span>
                            {{-- </div> --}}

                            <!-- video  end -->

                          <button type="submit" class="btn btn-primary" >Save</button>




            				</form>
            <form action="{{ route('saveVision') }}" method="post" enctype="multipart/form-data">
@csrf
                            <!--add product name-->

                            <label for="product_title">Details</label>
                            <textarea name="details" id="summernoteBan" cols="30" rows="10"></textarea>

                            <!-- product_details    -->

                            <!-- video  -->
                                  <br>
                                  <label>1st Mission</label>
                                  <input placeholder="Write your mission" type="text" id="videoUrl" name="one" class="form-control">
                                  <span class="custom-file-control">Video Url</span>
                                  <br>
                                  <label>2nd Mission</label>
                                  <input placeholder="Write your mission" type="text" id="videoUrl" name="two" class="form-control">
                                  <span class="custom-file-control">Video Url</span>
                                  <br>
                                  <label>3rd Mission</label>
                                  <input placeholder="Write your mission" type="text" id="videoUrl" name="three" class="form-control">
                                  <span class="custom-file-control">Video Url</span>
                                  <br>
                                  <label>4th Mission</label>
                                  <input placeholder="Write your mission" type="text" id="videoUrl" name="four" class="form-control">
                                  <span class="custom-file-control">Video Url</span>
                                  <br>
                                  <label>5th Mission</label>
                                  <input placeholder="Write your mission" type="text" id="videoUrl" name="five" class="form-control">
                                  <span class="custom-file-control">Video Url</span>
                                  <br>
                                  <label>6th Mission</label>
                                  <input placeholder="Write your mission" type="text" id="videoUrl" name="six" class="form-control">
                                  <span class="custom-file-control">Video Url</span>
                                  <br>
                                  <label>7th Mission</label>
                                  <input placeholder="Write your mission" type="text" id="videoUrl" name="seven" class="form-control">
                                  <span class="custom-file-control">Video Url</span>
                                  <br>
                                  <label>8th Mission</label>
                                  <input placeholder="Write your mission" type="text" id="videoUrl" name="eight" class="form-control">
                                  <span class="custom-file-control">Video Url</span>
                                  <br>
                                  <label>9th Mission</label>
                                  <input placeholder="Write your mission" type="text" id="videoUrl" name="nine" class="form-control">
                                  <span class="custom-file-control">Video Url</span>
                                  <br>
                                  <label>10th Mission</label>
                                  <input placeholder="Write your mission" type="text" id="videoUrl" name="ten" class="form-control">
                                  <span class="custom-file-control">Video Url</span>
                            {{-- </div> --}}

                            <!-- video  end -->

                          <button type="submit" class="btn btn-primary" >Save</button>




            				</form>



                    <form action="{{ route('saveHistory') }}" method="post" enctype="multipart/form-data">
                          @csrf

                          <label for="product_title">1st Details</label>
                          <textarea name="one" id="hisone" cols="30" rows="10"></textarea>

                          <label for="product_title">2nd Details</label>
                          <textarea name="two" id="histwo" cols="30" rows="10"></textarea>

                        <button type="submit" class="btn btn-primary" >Save</button>

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
  			  $('#summernoteEng').summernote({
  			    height: 300,
                  placeholder:'Details',
  			    tooltip: false
  			  })
  			  $('#summernoteBan').summernote({
  			    height: 300,
                  placeholder:'Details',
  			    tooltip: false
  			  })
  			  $('#hisone').summernote({
  			    height: 300,
                  placeholder:'History details 1',
  			    tooltip: false
  			  })
  			  $('#histwo').summernote({
  			    height: 300,
                  placeholder:'History details 2',
  			    tooltip: false
  			  })
  			});
  		</script>

@endsection
