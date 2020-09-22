@extends('dashboard.app')

@section('title')
TOP CorpCronicle
@endsection

@section('css_cdn')



@endsection

@section('content')






    <div class="br-mainpanel">


      <div class="br-pageheader pd-y-30 pd-l-20">
              <nav class="breadcrumb pd-0 mg-0 tx-13">
                 <a class="breadcrumb-item" href="{{ route('dashboard') }}"><i class="icon ion-ios-home-outline"></i> Home</a>
      <!--               <a class="breadcrumb-item" href="#">Dashboard</a>-->
                 <span class="breadcrumb-item active">TOP CorpCronicle</span>
              </nav>
           </div>



             <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
               <h4 class="tx-gray-800 mg-b-5">TOP CorpCronicle</h4>
             </div>


             <!-- br-pageheader -->
             <div class="br-pagebody">
               <div class="br-section-wrapper">

                 {{-- inner_content --}}
                 <!-- form-layout -->

                           <div class="form-layout form-layout-7">
                           <form action="{{ route('cronicle_create') }}" method="post">
                             @csrf

                                     <!--Add Phone-->
                             <div class="row no-gutters">
                               <div class="col-5 col-sm-4">
                                 Add Date:
                               </div>
                               <!-- col-4 -->
                               <div class="col-7 col-sm-8">
                                 <input class="form-control" type="text" name="date" placeholder="Add Date">
                               </div>
                               <!-- col-8 -->
                             </div>


                                    <!-- Add Mail-->
                             <div class="row no-gutters">
                               <div class="col-5 col-sm-4">
                                 Add Month:
                               </div>
                               <!-- col-4 -->
                               <div class="col-7 col-sm-8">
                                 <input class="form-control" type="text" name="month" placeholder="Add Month">
                               </div>
                               <!-- col-8 -->
                             </div>


                                         <!-- Add App Link-->
                             <div class="row no-gutters">
                               <div class="col-5 col-sm-4">
                                 Add Year:
                               </div>

                               <!-- col-4 -->
                               <div class="col-7 col-sm-8">
                                 <input class="form-control" type="text" name="year" placeholder="Add Year">
                               </div>
                               <!-- col-8 -->
                             </div>


                                         <!-- Add App Link-->
                             <div class="row no-gutters">
                               <div class="col-5 col-sm-4">
                                 Add Title:
                               </div>

                               <!-- col-4 -->
                               <div class="col-7 col-sm-8">
                                 <input class="form-control" type="text" name="title" placeholder="Add Title">
                               </div>
                               <!-- col-8 -->
                             </div>


                             <div class="row no-gutters">
                               <div class="col-5 col-sm-4">
                                 Add Desc:
                               </div>

                               <!-- col-4 -->
                               <div class="col-7 col-sm-8">
         													<textarea name="desc" class="form-control" cols="30" rows="10"></textarea>
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
      				<h4 class="tx-gray-800 mg-b-5">ALL TOP CorpCronicle</h4>

              {{-- inner_content --}}
              <div class="table-wrapper">
              						<table id="datatable1" class="table display responsive nowrap">
              							<thead>
              								<tr>
              									<th class="wd-15p">date</th>
              									<th class="wd-15p">monthe</th>
              									<th class="wd-20p">year</th>
              									<th class="wd-15p">title</th>
                                <th class="wd-15p">desc</th>
                                <th class="wd-15p">created_at</th>
              									{{-- <th class="wd-15p">Join Date</th> --}}
              									<th class="wd-10p">Action</th>
              								</tr>
              							</thead>
              							<tbody>

                              {{-- @foreach ($top_headers as $top_header)

                                <tr>
                                  <td>{{ $top_header->id }}</td>
                                  <td>{{ $top_header->phone_number }}</td>
                                  <td>{{ $top_header->email }}</td>
                                  <td>{{ $top_header->gplay }}</td>
                                  <td>
                                      <div class="btn-group" role="group" aria-label="Basic example">
                                        <a type="button" href="{{ url('/appsettings/top_header') }}/{{ $top_header->id }}" class="btn btn-teal pd-x-25"><i class="icon ion-arrow-expand"></i></a>
                                        <a type="button" href="{{ url('/appsettings/top_header/delete/') }}/{{ $top_header->id }}" class="btn btn-danger pd-x-25"><i class="icon ion-trash-a"></i></a>
                                      </div>
                                  </td>
                                </tr>

                              @endforeach --}}

                        @foreach ($ccs as $cc)

                                <tr>
                                  <td>{{ $cc->date }}</td>
                                  <td>{{ $cc->month }}</td>
                                  <td>{{ $cc->year }}</td>
                                  <td>{{ $cc->title }}</td>
                                  <td>{{ $cc->desc }}</td>
                                  <td>{{ $cc->created_at   }}</td>
                                  <td>
                                      <div class="btn-group" role="group" aria-label="Basic example">
                                        <a type="button" href="{{route('editpage.corp',$cc->id)}}" class="btn btn-teal pd-x-25"><i class="icon ion-arrow-expand"></i></a>

                                      <form method="POST" action="{{route('deletepage.corp',$cc->id)}}">
                                        {{method_field('DELETE')}}
                                        {{csrf_field()}}
                                       
                                        <button class="btn btn-danger">DELETE</button>
                                       </form>

                                      </div>
                                  </td>
                                </tr>

                              @endforeach

              							</tbody>
              						</table>
              					</div>
              {{-- inner_content END --}}

            </div>
          </div>


@endsection

@section('js_cdn')



@endsection
