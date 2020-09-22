@extends('dashboard.app')

@section('title')
EVENT
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
                   <span class="breadcrumb-item active">ADD EVENT</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">ADD EVENT</h4>
        </div>














        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}


                    <table class="table">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col">Career</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Phone</th>
                          <th scope="col">Address</th>
                          <th scope="col">City</th>
                          <th scope="col">CountryId</th>
                          <th scope="col">State</th>
                          <th scope="col">CompanyName</th>
                          <th scope="col">Professional Title</th>
                          <th scope="col">Skills</th>
                          <th scope="col">University</th>
                          <th scope="col">Resume</th>
                          <th scope="col">Photo</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($CareerApplication as $item)
                        <tr>
                          <td>{{ App\Career::findOrFail($item->careerId)->position }}</td>
                          <td>{{ $item->fName }} {{ $item->lName  }}</td>
                          <td>{{ $item->email }}</td>
                          <td>{{ $item->phone }}</td>
                          <td>{{ $item->address }}</td>
                          <td>{{ $item->city }}</td>
                          <td>{{ App\Country::findOrFail($item->countryId)->name }}</td>
                          <td>{{ App\State::findOrFail($item->stateId)->name }}</td>
                          <td>{{ $item->companyName }}</td>
                          <td>{{ $item->pTitle }}</td>
                          <td>{{ $item->skills }}</td>
                          <td>{{ $item->university }}</td>
                          <td>{{ $item->resume }}</td>
                          <td><img src="{{ asset("frontend/career_img") }}/{{ $item->photo }}" width="50"></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>



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
                  placeholder:'Add Event',
  			    tooltip: false
  			  })
  			});
  		</script>

@endsection
