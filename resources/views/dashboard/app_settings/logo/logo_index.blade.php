@extends('dashboard.app')

@section('title')
LOGO
@endsection

@section('css_cdn')



@endsection

@section('content')




  <div class="br-mainpanel">


     <div class="br-pageheader pd-y-30 pd-l-20">
             <nav class="breadcrumb pd-0 mg-0 tx-13">
                <a class="breadcrumb-item" href="{{ route('logo_index') }}"><i class="icon ion-ios-home-outline"></i> Home</a>
                <span class="breadcrumb-item active">LOGO</span>
             </nav>
      </div>



     <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
       <h4 class="tx-gray-800 mg-b-5">LOGO</h4>
     </div>

     <!-- br-pageheader -->
     <div class="br-pagebody">
       <div class="br-section-wrapper">

         {{-- inner_content --}}
         <!-- form-layout -->

         					<div class="form-layout form-layout-7">

         					<form action="{{ route('logo_create') }}" method="post" enctype="multipart/form-data">
                    @csrf
                             <!-- Add New Logo-->
                             <div class="row no-gutters">


         							<div class="col-5 col-sm-4">
         								Add New Logo:
         							</div>


         							<div class="col-7 col-sm-8">
         								<label class="custom-file">
                                           <input type="file" id="file" name="logo" class="custom-file-input">
                                           <span class="custom-file-control"></span>
                                         </label>

                                        <button type="submit" class="btn btn-primary bg-primary "><i class="fa fa-send mg-r-10"></i>
                                            Send data
                                        </button>

         							</div>

         						</div>

         					</form>

         					</div>
         					<!-- form-layout -->
         {{-- inner_content END --}}

       </div>
     </div>





			<div class="br-pagebody">
				<div class="br-section-wrapper">
			        <!-- All Logo -->
					<div class="container">
					    <div class="row">
                @foreach ($active_logo as $logo)


					        <div class="col-md-4">
					            <div class="card">
                                  <img class="card-img-top img-fluid" src="{{ asset('/uploads/logo') }}/{{ $logo->logo }}" alt="Image">
                                  <div class="card-body">
                                    <a href="#" class="btn btn-oblong btn-success disabled" aria-disabled="true">Current Logo</a>
                                  </div>
                                </div>
                        <!-- card -->
					        </div>

                  @endforeach


            @foreach ($logos as $logo)

              <div class="col-md-4">
                  <div class="card">
                              <img class="card-img-top img-fluid" src="{{ asset('/uploads/logo') }}/{{ $logo->logo }}" alt="Image">
                              <div class="card-body">

                                  <a href="{{ url('/appsettings/logo') }}/{{ $logo->id }}/{{ $logo->status }}" class="btn btn-oblong btn-success {{ $logo->status == 1 ? 'disabled' : '' }}" title="{{ $logo->status == 1 ? 'Already Activated' : 'Click To Activate' }}">Active</a>


                                  <a href="{{ url('/logo/delete') }}/{{ $logo->id }}" class="btn btn-oblong btn-danger">Delete</a>

                              </div>
                            </div>
                    <!-- card -->
              </div>

            @endforeach





					    </div>
					</div>




					<!-- All Logo End -->

				</div>
				<!-- br-section-wrapper -->
			</div>




@endsection

@section('js_cdn')


@endsection
