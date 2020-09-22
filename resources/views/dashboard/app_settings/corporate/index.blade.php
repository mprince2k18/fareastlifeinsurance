@extends('dashboard.app')

@section('title')
CORPORATE
@endsection

@section('css_cdn')



@endsection

@section('content')




      <div class="br-mainpanel">


        <div class="br-pageheader pd-y-30 pd-l-20">
                <nav class="breadcrumb pd-0 mg-0 tx-13">
                   <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
        <!--               <a class="breadcrumb-item" href="#">Dashboard</a>-->
                   <span class="breadcrumb-item active">CORPORATE</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">CORPORATE</h4>
        </div>














        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            <!-- form-layout -->

            					<div class="form-layout form-layout-7">

            					<form action="{{ route('corporate_create') }}" method="post" enctype="multipart/form-data">
                        @csrf

                                <!-- Add New Logo-->
                                <div class="row no-gutters">


            							<div class="col-5 col-sm-4">
            								Add Corporate:
            							</div>


            							<div class="col-7 col-sm-8">
            								<label class="custom-file">
                                              <input type="file" id="file" name="corporate" class="custom-file-input">
                                              <span class="custom-file-control"></span>
                                            </label>




            							</div>

            						</div>


                               <div class="row no-gutters">


            							<div class="col-5 col-sm-4">
            								Add Corporate Link:
            							</div>


            							<div class="col-7 col-sm-8">
            								<input class="form-control" type="text" name="corporate_link" placeholder="Add Corporate Link">

            							</div>

            						</div>

                                   <button type="submit" class="btn btn-primary bg-primary "><i class="fa fa-send mg-r-10"></i>
                                               Send data
                                           </button>

            					</form>

            					</div>
            					<!-- form-layout -->

            {{-- inner_content END --}}

          </div>
        </div>











        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            <div class="container">
  					    <div class="row">


                  @foreach ($corporates as $corporate)

                    <div class="col-md-4">
                        <div class="card">
                                    <img class="card-img-top img-fluid" src="{{ asset('uploads/corporate') }}/{{ $corporate->corporate }}" alt="Corporate">
                                    <div class="card-body">
                                      <a href="{{ url('/appsettings/corporate/delete') }}/{{ $corporate->id }}" class="btn btn-oblong btn-danger">Remove</a>
                                    </div>
                        </div>
                    </div>

                  @endforeach





  					    </div>
  					</div>

            {{-- inner_content END --}}

          </div>
        </div>




@endsection

@section('js_cdn')



@endsection
