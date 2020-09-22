@extends('dashboard.app')

@section('title')
TOP HEADER
@endsection

@section('css_cdn')



@endsection

@section('content')






    <div class="br-mainpanel">


      <div class="br-pageheader pd-y-30 pd-l-20">
              <nav class="breadcrumb pd-0 mg-0 tx-13">
                 <a class="breadcrumb-item" href="{{ route('dashboard') }}"><i class="icon ion-ios-home-outline"></i> Home</a>
      <!--               <a class="breadcrumb-item" href="#">Dashboard</a>-->
                 <span class="breadcrumb-item active">TOP HEADER</span>
              </nav>
           </div>






      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">TOP HEADER</h4>
      </div>

      <!-- br-pageheader -->
      <div class="br-pagebody">
        <div class="br-section-wrapper">

          {{-- inner_content --}}
          <!-- form-layout -->

          					<div class="form-layout form-layout-7">
          					<form action="{{ route('top_header_update') }}" method="post">
                      @csrf

                      <input type="hidden" name="top_header_id" value="{{ $single_top_header->id }}">

                              <!--Add Phone-->
          						<div class="row no-gutters">
          							<div class="col-5 col-sm-4">
          								Add Phone:
          							</div>
          							<!-- col-4 -->
          							<div class="col-7 col-sm-8">
          								<input class="form-control" type="text" name="phone_number" placeholder="Add Phone" value="{{ $single_top_header->phone_number }}">
          							</div>
          							<!-- col-8 -->
          						</div>


                             <!-- Add Mail-->
          						<div class="row no-gutters">
          							<div class="col-5 col-sm-4">
          								Add Mail:
          							</div>
          							<!-- col-4 -->
          							<div class="col-7 col-sm-8">
          								<input class="form-control" type="email" name="email" placeholder="Add Mail" value="{{ $single_top_header->email }}">
          							</div>
          							<!-- col-8 -->
          						</div>


                                  <!-- Add App Link-->
          						<div class="row no-gutters">
          							<div class="col-5 col-sm-4">
          								Add Google Play App Link:
          							</div>

          							<!-- col-4 -->
          							<div class="col-7 col-sm-8">
          								<input class="form-control" type="text" name="gplay" placeholder="Add Google Play App Link" value="{{ $single_top_header->gplay }}">
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
          					<!-- form-layout -->
          {{-- inner_content END --}}

        </div>
      </div>



@endsection

@section('js_cdn')



@endsection
