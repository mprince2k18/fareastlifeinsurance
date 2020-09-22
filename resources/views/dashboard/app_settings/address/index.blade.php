@extends('dashboard.app')

@section('title')
ADDRESS
@endsection

@section('css_cdn')



@endsection

@section('content')




      <div class="br-mainpanel">


        <div class="br-pageheader pd-y-30 pd-l-20">
                <nav class="breadcrumb pd-0 mg-0 tx-13">
                   <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
        <!--               <a class="breadcrumb-item" href="#">Dashboard</a>-->
                   <span class="breadcrumb-item active">ADDRESS</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">ADDRESS</h4>
        </div>














        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}
            <!-- form-layout -->

            					<div class="form-layout form-layout-7">
            					<form action="{{ route('address_create') }}" method="post">
                        @csrf

                                <!--Add Address-->
            						<div class="row no-gutters">
            							<div class="col-5 col-sm-4">
            								Add Address:
            							</div>
            							<!-- col-4 -->
            							<div class="col-7 col-sm-8">
            								<textarea name="address" class="form-control" id="" cols="30" rows="10">Address Here...</textarea>
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
            								<input class="form-control" type="text" name="phone" placeholder="Add Phone">
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
            								<input class="form-control" type="email" name="mail" placeholder="Add Mail">
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
            								<input class="form-control" type="text" name="link" placeholder="App Link">
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











        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            <!-- All Address -->

            					<div class="container">
            					    <div class="row">
            					        <div class="col-md-12">


            					            <div class="bd bd-gray-300 rounded table-responsive">
            						<table class="table mg-b-0">
            							<thead>
            								<tr>
            									<th>ID</th>
            									<th>Add Address</th>
            									<th>Add Phone</th>
            									<th>Add Mail</th>
            									<th>App Link</th>
            								</tr>
            							</thead>
            							<tbody>

                              @foreach ($addresses as $address)

                                <tr>
                                  <th scope="row">{{ $address->id }}</th>
                                  <td>{{ $address->address }}</td>
                                  <td>{{ $address->phone }}</td>
                                  <td>{{ $address->mail }}</td>
                                  <td>{{ Str::limit($address->link,10) }}</td>
                                  <td>

                            <div class="btn-group" role="group" aria-label="Basic example">
                              <a type="button" href="{{ url('/appsettings/address') }}/{{ $address->id }}" class="btn btn-secondary pd-x-25 active"><i class="icon ion-edit"></i></a>
                              <a type="button" href="{{ url('/appsettings/address/delete') }}/{{ $address->id }}" class="btn btn-danger pd-x-25"><i class="icon ion-trash-a"></i></a>
                                                        </div>

                                  </td>
                                </tr>

                              @endforeach



            							</tbody>
            						</table>
            					</div>


            					        </div>
            					    </div>
            					</div>




            					<!-- All Address End -->

            {{-- inner_content END --}}

          </div>
        </div>




@endsection

@section('js_cdn')



@endsection
