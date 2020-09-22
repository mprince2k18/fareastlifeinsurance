@extends('dashboard.app')

@section('title')
Complaince Certificate
@endsection

@section('css_cdn')

@endsection

@section('content')




      <div class="br-mainpanel">


        <div class="br-pageheader pd-y-30 pd-l-20">
                <nav class="breadcrumb pd-0 mg-0 tx-13">
                   <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
        <!--               <a class="breadcrumb-item" href="#">Dashboard</a>-->
                   <span class="breadcrumb-item active">Complaince Certificate</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">Complaince Certificate</h4>
        </div>



        <!-- br-pageheader -->
  			<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">



                 <!-- Large modal -->

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <form action="{{ route('complaince_certificate_update',$each_reports->id) }}" method="post" style="padding: 6.5rem;" enctype="multipart/form-data">
                        @csrf


  											<!-- Add New Menu-->
  											<div class="row no-gutters">

  												<div class="col-12">
  												<label for="">Edit Title:</label>
  													<input class="form-control" type="text" value="{{$each_reports->title}}" name="title" placeholder="Add Title">
  												</div>

  												<div class="col-12">
  												<label for="">Edit File:</label>
                          <h6>{{ $each_reports->file }}</h6>
                          <input class="form-control" type="file" name="file" value="{{ $each_reports->file }}">
  												</div>




  											</div>





                         <div class="row no-gutters">

                         <div class="col-md-12">
                             	<button type="submit" class="btn btn-info waves-effect waves-light">Send Data</button>
                         </div>
    </div>
  </div>
</div>




  							<!-- col-8 -->
  						</div>

  					</form>







              </div>




















@endsection

@section('js_cdn')





@endsection
