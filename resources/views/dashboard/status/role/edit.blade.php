@extends('dashboard.app')

@section('content')


  <!--			content-->
  <!--			content-->
  <!--			content-->
  <!--			content-->
  <!--			content-->

<div class="br-mainpanel">

  {{-- breadcrumb --}}
  		<div class="br-pageheader pd-y-30 pd-l-20">
  			 <nav class="breadcrumb pd-0 mg-0 tx-13">
  					<a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
  		<!--               <a class="breadcrumb-item" href="#">Dashboard</a>-->
  					<span class="breadcrumb-item active">Dashboard</span>
  			 </nav>
  		</div>

  {{-- breadcrumb END--}}
  
  			<!-- br-pageheader -->
  			<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
  				<h4 class="tx-gray-800 mg-b-5">Edit -> {{ $single_role->role_name }}</h4>
  			</div>
  			<div class="br-pagebody">
  				<div class="br-section-wrapper">

  					<!-- form-layout -->

  					<div class="form-layout form-layout-7">
  					<form action="{{ route('role_update') }}" method="post">
              @csrf

              <input type="hidden" name="role_id" value="{{ $single_role->id }}">
                      <!--Add NAME-->
  						<div class="row no-gutters">
  							<div class="col-5 col-sm-4">
  								ROLE NAME:
  							</div>
  							<!-- col-4 -->
  							<div class="col-7 col-sm-8">
  								<input class="form-control" type="text" name="role_name" placeholder="ROLE NAME" value="{{ $single_role->role_name }}">
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





@endsection
