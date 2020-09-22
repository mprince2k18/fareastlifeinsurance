@extends('dashboard.app')

@section('title')
FAREAST STAR
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
                   <span class="breadcrumb-item active">FAREAST STAR</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">FAREAST STAR Values for <span style="color: green;">{{$star->name}}</span></h4>
        </div>














        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            <!-- form-layout -->
                            <div class="form-layout form-layout-7">
                                <form action="{{ route('fstarvalues.create') }}" method="post" enctype="multipart/form-data">
                                  @csrf
                                    <div class="row no-gutters">
                                        <div class="col-5 col-sm-4"> Add Year: </div>
                                        <div class="col-7 col-sm-8">
                                            <input class="form-control" type="text" name="year" placeholder="Input the Year"> </div>
                                    </div>
                                    <!-- Add New Logo-->
                                    <div class="row no-gutters">
                                        <div class="col-5 col-sm-4"> Add PDF/DOCX File: </div>
                                        <div class="col-7 col-sm-8">
                                            <label class="custom-file">
                                                <input type="file" id="file" name="file" class="custom-file-input"> <span class="custom-file-control"></span> </label>
                                        </div>
                                    </div>

                                    <input type="hidden" name="fareast_star_id" value="{{$star->id}}">

                                    <button type="submit" class="btn btn-primary bg-primary "><i class="fa fa-send mg-r-10"></i> Add Data </button>
                                </form>
                            </div>
                            <!-- form-layout -->

            {{-- inner_content END --}}

          </div>
        </div>




        <!-- br-pageheader -->
          <div class="br-pagebody">
            <div class="br-section-wrapper">
              <h4 class="tx-gray-800 mg-b-5">ALL {{$star->name}} Values</h4>

              {{-- inner_content --}}
              <div class="table-wrapper">
                          <table id="datatable1" class="table display responsive nowrap">
                            <thead>
                              <tr>
                                <th class="wd-15p">Serial</th>
                                <th class="wd-15p">Fareast Star Name</th>
                                <th class="wd-20p">Year</th>
                                <th class="wd-15p">File</th>
                                <th class="wd-15p">Edit</th>
                                <th class="wd-15p">Delete</th>
                               
                              </tr>
                            </thead>
                            <tbody>
                          @php $i = 0; @endphp
                        @foreach ($starvalues as $stv)
                          @php $i++ @endphp
                                <tr>
                                  <td>{{ $i}}</td>
                                  <td>{{ $stv->fareast_star->name }}</td>
                                  <td>{{ $stv->year }}</td>
                                  <td><a href="{{URL::asset('uploads/fareast_star_values/'.$stv->file)}}"><img src="{{URL::asset('dashboard/img/fsvlogo.png')}}" height="80" width="80"></a></td>
                                  <td> <a href="{{route('fstarvalues.edit',$stv->id)}}"><button class="btn btn-primary">Edit</button></a></td>
                                  <td> 
                                    <form method="GET" action="{{route('fstarvalues.delete',$stv->id)}}">
                                     <span onclick = "return confirm('Are You Sure To Delete ?')" href=""><button class="btn btn-danger">Delete</button></span>
                                    </form>
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
