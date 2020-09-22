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

            <form action="{{ route('saveCareer') }}" method="post" enctype="multipart/form-data">
              @csrf


              <div class="row no-gutters">
              <label>Title</label>
                <input type="text" id="file" name="title" placeholder="Title" class="form-control">

            </div>
            <div class="row no-gutters">
  <label>Location</label>

    <input type="text" id="file" name="location" placeholder="Location" class="form-control">


</div>
<div class="row no-gutters">
  <label>Position</label>

    <input type="text" id="file" name="position" placeholder="position" class="form-control">


</div>
<div class="row no-gutters">
  <label>Dead Line</label>

    <input type="date" id="file" name="deadline" Placeholder="Dead Line" class="form-control">


</div>
<div class="row no-gutters">
  <label>Salary</label>

    <input type="text" id="file" name="salary" placeholder="Salary" class="form-control">


</div>
<div class="row no-gutters">
  <label>Schedule</label>

    <select name="schedule" class="form-control">
      <option value="Full Time">Full Time<option>
      <option value="Half Time">Half Time<option>
      <option value="Intern">Intern<option>
    </select>

</div>
<div class="row no-gutters">
  <label>Employee Status</label>
  <input type="text" id="file" name="status" placeholser="Employee Status" class="form-control">

</div>
<div class="row no-gutters">
<label for="product_title">Details</label>
<textarea name="details" id="summernote"></textarea>
</div>


<button type="submit" class="btn btn-primary" >Add Event</button>


</form>

            {{-- inner_content END --}}

          </div>
        </div>


        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">Title</th>
              <th scope="col">Location</th>
              <th scope="col">Position</th>
              <th scope="col">Deadline</th>
              <th scope="col">Salary</th>
              <th scope="col">Schedule</th>
              <th scope="col">Status</th>
              <th scope="col">Details</th>
              <th scope="col">Created_at</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($Career as $item)
            <tr>
              <th scope="row">{{ $item->title }}</th>
              <td>{{ $item->location }}</td>
              <td>{{ $item->position }}</td>
              <td>{{ $item->deadline }}</td>
              <td>{{ $item->salary }}</td>
              <td>{{ $item->schedule }}</td>
              <td>{{ $item->status }}</td>
              {{-- <td>{{ Str::limit('The quick brown fox jumps over the lazy dog', 20)$item->details }}</td> --}}
              <td>{!! Str::limit(html_entity_decode($item->details), 40) !!}</td>
              <td>{{ $item->created_at }}</td>
              <td><a href="{{ url('delete/career') }}/{{ $item->id }} " class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>









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
