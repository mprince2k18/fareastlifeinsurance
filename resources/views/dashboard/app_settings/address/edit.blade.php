@extends('dashboard.app')

@section('title')
EDIT ADDRESS
@endsection

@section('css_cdn')



@endsection

@section('content')




      <div class="br-mainpanel">


        <div class="br-pageheader pd-y-30 pd-l-20">
                <nav class="breadcrumb pd-0 mg-0 tx-13">
                   <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
        <!--               <a class="breadcrumb-item" href="#">Dashboard</a>-->
                   <span class="breadcrumb-item active">EDIT ADDRESS</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">EDIT ADDRESS</h4>
        </div>














        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}
            <!-- form-layout -->

            					<div class="form-layout form-layout-7">
            					<form action="{{ route('address_update') }}" method="post">
                        @csrf

                        <input type="hidden" name="address_id" value="{{ $single_address->id }}">

                                <!--Add Address-->
            						<div class="row no-gutters">
            							<div class="col-5 col-sm-4">
            								Add Address:
            							</div>
            							<!-- col-4 -->
            							<div class="col-7 col-sm-8">
            								<textarea name="address" class="form-control" id="" cols="30" rows="10">{{ $single_address->address }}</textarea>
            							</div>
            							<!-- col-8 -->
            						</div>

                                <!--Add Phone-->
            						<div class="row no-gutters">
            							<div class="col-5 col-sm-4">
            								Add Phone:
            							</div>
            							<!-- col-4 -->
            							<div class="col-7 col-sm-8">
            								<input class="form-control" type="text" name="phone" placeholder="Add Phone" value="{{ $single_address->phone }}">
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
            								<input class="form-control" type="email" name="mail" placeholder="Add Mail" value="{{ $single_address->mail }}">
            							</div>
            							<!-- col-8 -->
            						</div>


                                    <!--Add Telephone-->
            						<div class="row no-gutters">
            							<div class="col-5 col-sm-4">
            								App Link:
            							</div>
            							<!-- col-4 -->
            							<div class="col-7 col-sm-8">
            								<input class="form-control" type="text" name="link" placeholder="App Link" value="{{ $single_address->link }}">
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
