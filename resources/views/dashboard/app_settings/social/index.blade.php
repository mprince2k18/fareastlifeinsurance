@extends('dashboard.app')

@section('title')
SOCIAL
@endsection

@section('css_cdn')



@endsection

@section('content')




      <div class="br-mainpanel">


        <div class="br-pageheader pd-y-30 pd-l-20">
                <nav class="breadcrumb pd-0 mg-0 tx-13">
                   <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
        <!--               <a class="breadcrumb-item" href="#">Dashboard</a>-->
                   <span class="breadcrumb-item active">SOCIAL</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">SOCIAL</h4>
        </div>

       


        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">
             <h6 style="color: red">Please give the social address with http or https, that means full link. Like <span style="color: green">https://www.facebook.com</span></h6><br>

            {{-- inner_content --}}

            <!-- form-layout -->

            					<div class="form-layout form-layout-7">
            					<form action="{{ route('social_update',$social->id) }}" method="post">
                        @csrf
                         {{method_field('PUT')}}

                                <!--Add Address-->
            						<div class="row no-gutters">
            							<div class="col-5 col-sm-4">
            								FACEBOOK:
            							</div>
            							<!-- col-4 -->
            							<div class="col-7 col-sm-8">
            								<input class="form-control" type="text" name="facebook" value="{{$social->facebook}}">
            							</div>
            							<!-- col-8 -->
            						</div>

                                <!--Add Phone-->
            						<div class="row no-gutters">
            							<div class="col-5 col-sm-4">
            								Twitter:
            							</div>
            							<!-- col-4 -->
            							<div class="col-7 col-sm-8">
            								<input class="form-control" type="text" name="whatsapp" value="{{$social->whatsapp}}">
            							</div>
            							<!-- col-8 -->
            						</div>


                               <!-- Add Mail-->
            						<div class="row no-gutters">
            							<div class="col-5 col-sm-4">
            								YOUTUBE:
            							</div>
            							<!-- col-4 -->
            							<div class="col-7 col-sm-8">
            								<input class="form-control" type="text" name="youtube" value="{{$social->youtube}}">
            							</div>
            							<!-- col-8 -->
            						</div>


                                    <!--Add Telephone-->
            						<div class="row no-gutters">
            							<div class="col-5 col-sm-4">
            								GOOGLE+:
            							</div>
            							<!-- col-4 -->
            							<div class="col-7 col-sm-8">
            								<input class="form-control" type="text" name="google" value="{{$social->google}}">
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
      {{--  <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            <!-- All Logo -->
           			{{--}}		<div class="container">
           					    <div class="row">
           					        <div class="col-md-12">


           					            <div class="bd bd-gray-300 rounded table-responsive">
           						<table class="table mg-b-0">
           							<thead>
           								<tr>
           									<th>ID</th>
           									<th>Facebook</th>
           									<th>Whats App</th>
           									<th>Youtube</th>
           									<th>Google+</th>
           									<th>Action</th>
           								</tr>
           							</thead>
           							<tbody>

                          @foreach ($socials as $social)
           								<tr>
           									<th scope="row">{{ $social->id }}</th>
           									<td>{{ $social->facebook }}</td>
           									<td>{{ $social->whatsapp }}</td>
           									<td>{{ $social->youtube }}</td>
           									<td>{{ $social->google }}</td>
           									<td>

           									    <div class="btn-group" role="group" aria-label="Basic example">
                                                     <a type="button" class="btn btn-secondary pd-x-25 active"><i class="icon ion-edit"></i></a>
                                                     <a type="button" href="{{ url('/appsettings/social/delete') }}/{{ $social->id }}" class="btn btn-danger pd-x-25"><i class="icon ion-trash-a"></i></a>
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




           					<!-- All Logo End -->

            {{-- inner_content END --}}

         {{--}} </div>
        </div> --}}




@endsection

@section('js_cdn')



@endsection
