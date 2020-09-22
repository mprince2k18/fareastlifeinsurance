@extends('dashboard.app')

@section('title')
ADD USER
@endsection

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
  					<a class="breadcrumb-item" href="{{ route('dashboard') }}"><i class="icon ion-ios-home-outline"></i> Home</a>
  		<!--               <a class="breadcrumb-item" href="#">Dashboard</a>-->
  					<span class="breadcrumb-item active"> Add User</span>
  			 </nav>
  		</div>

  {{-- breadcrumb END--}}

  			<!-- br-pageheader -->
  			<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
  				<h4 class="tx-gray-800 mg-b-5">ADD USER</h4>
  			</div>
  			<div class="br-pagebody">
  				<div class="br-section-wrapper">

  					<!-- form-layout -->

  					<div class="form-layout form-layout-7">
  					<form action="{{ route('users_create') }}" method="post">
              @csrf

                      <!--Add NAME-->
  						<div class="row no-gutters">
  							<div class="col-5 col-sm-4">
  								USER NAME:
  							</div>
  							<!-- col-4 -->
  							<div class="col-7 col-sm-8">
  								<input class="form-control" type="text" name="name" placeholder="USER NAME">
  							</div>
  							<!-- col-8 -->
  						</div>

                      <!--Add EMAIL-->
  						<div class="row no-gutters">
  							<div class="col-5 col-sm-4">
  								EMAIL:
  							</div>
  							<!-- col-4 -->
  							<div class="col-7 col-sm-8">
  								<input class="form-control" type="email" name="email" placeholder="EMAIL">
  							</div>
  							<!-- col-8 -->
  						</div>


                     <!-- Add PASSWORD-->
  						<div class="row no-gutters">
  							<div class="col-5 col-sm-4">
  								PASSWORD:
  							</div>
  							<!-- col-4 -->
  							<div class="col-7 col-sm-8">
  								<input class="form-control" type="password" name="password" placeholder="PASSWORD">
  							</div>
  							<!-- col-8 -->
  						</div>


              <!-- Add ROLE-->
       <div class="row no-gutters">
         <div class="col-5 col-sm-4">
           USER ROLE:
         </div>
         <!-- col-4 -->
         <div class="col-7 col-sm-8">
           <select class="form-control" name="role_id">

             @foreach ($roles as $role)
               <option value="{{ $role->id }}">{{ $role->role_name }}</option>
             @endforeach

           </select>
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





@endsection
