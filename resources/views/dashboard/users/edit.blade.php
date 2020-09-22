@extends('dashboard.app')

@section('title')
EDIT {{ $single_user->name }}
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
  					<a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
  		<!--               <a class="breadcrumb-item" href="#">Dashboard</a>-->
  					<span class="breadcrumb-item active">EDIT {{ $single_user->name }}</span>
  			 </nav>
  		</div>

  {{-- breadcrumb END--}}

  			<!-- br-pageheader -->
  			<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
  				<h4 class="tx-gray-800 mg-b-5">EDIT {{ $single_user->name }}</h4>
  			</div>
  			<div class="br-pagebody">
  				<div class="br-section-wrapper">

  					<!-- form-layout -->

  					<div class="form-layout form-layout-7">
  					<form action="{{ route('update_user') }}" method="post">
              @csrf

              <input type="hidden" name="user_id" value="{{ $single_user->id }}">

                      <!--Add NAME-->
  						<div class="row no-gutters">
  							<div class="col-5 col-sm-4">
  								USER NAME:
  							</div>
  							<!-- col-4 -->
  							<div class="col-7 col-sm-8">
  								<input class="form-control" type="text" name="name" placeholder="USER NAME" value="{{ $single_user->name }}">
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
  								<input class="form-control" type="email" name="email" placeholder="EMAIL" value="{{ $single_user->email }}">
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
  								<input class="form-control" type="password" name="password" placeholder="PASSWORD" value="{{ $single_user->password }}">
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

             <option value="{{ $single_user->role_id }}" class="bg-dark text-white">{{ $single_user->relationBetweenRole->role_name }}</option>

             @foreach ($roles as $role)
               <option value="{{ $role->id }}">{{ $role->role_name }}</option>
             @endforeach

           </select>
         </div>
       </div>


              <!-- Add ROLE-->
       <div class="row no-gutters">
         <div class="col-5 col-sm-4">
           USER ACTIVATION:
         </div>
         <!-- col-4 -->
         <div class="col-7 col-sm-8">
           <select class="form-control" name="status_id">

             <option value="{{ $single_user->status_id }}" class="bg-dark text-white">{{ $single_user->relationBetweenActivation->activation_name }}</option>

             @foreach ($activations as $activation)
               <option value="{{ $activation->id }}">{{ $activation->activation_name }}</option>
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
