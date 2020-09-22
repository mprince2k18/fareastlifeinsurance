@extends('dashboard.app')

@section('title')
All USER
@endsection

@section('css_cdn')

  <!-- vendor css -->

		<link href="{{ asset('dashboard/lib/highlightjs/github.css') }}" rel="stylesheet">
		<link href="{{ asset('dashboard/lib/datatables/jquery.dataTables.css') }}" rel="stylesheet">
		<link href="{{ asset('dashboard/lib/select2/css/select2.min.css') }}" rel="stylesheet">

@endsection

@section('content')



  <div class="br-mainpanel">


{{-- breadcrumb --}}
		<div class="br-pageheader pd-y-30 pd-l-20">
			 <nav class="breadcrumb pd-0 mg-0 tx-13">
					<a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
		<!--               <a class="breadcrumb-item" href="#">Dashboard</a>-->
					<span class="breadcrumb-item active">All USER</span>
			 </nav>
		</div>

{{-- breadcrumb END--}}


    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
      <h4 class="tx-gray-800 mg-b-5">All USER</h4>
    </div>

    <!-- br-pageheader -->
    <div class="br-pagebody">
      <div class="br-section-wrapper">

        {{-- inner_content --}}
        <div class="table-wrapper">
        						<table id="datatable1" class="table display responsive nowrap">
        							<thead>
        								<tr>
        									<th class="wd-15p">ID</th>
        									<th class="wd-15p">Name</th>
        									<th class="wd-20p">Email</th>
        									<th class="wd-15p">Role</th>
        									<th class="wd-15p">Join Date</th>
        									<th class="wd-10p">Action</th>
        								</tr>
        							</thead>
        							<tbody>

                        @foreach ($users as $user)

                          <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->relationBetweenRole->role_name }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                  <a type="button" href="{{ url('/user/view') }}/{{ $user->id }}" class="btn btn-secondary pd-x-25 active"><i class="icon ion-edit"></i></a>
                                  {{-- <a type="button" class="btn btn-danger pd-x-25"><i class="icon ion-trash-a"></i></a> --}}
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
		<!-- br-pageheader END-->



		<!-- br-pageheader -->
    <div class="br-pagebody">
      <div class="br-section-wrapper">
				<h4 class="tx-gray-800 mg-b-5">PENDING USER</h4>

        {{-- inner_content --}}
        <div class="table-wrapper">
        						<table id="datatable1" class="table display responsive nowrap">
        							<thead>
        								<tr>
        									<th class="wd-15p">ID</th>
        									<th class="wd-15p">Name</th>
        									<th class="wd-20p">Email</th>
        									<th class="wd-15p">Role</th>
        									<th class="wd-15p">Join Date</th>
        									<th class="wd-10p">Action</th>
        								</tr>
        							</thead>
        							<tbody>

                        @foreach ($pending_users as $pending_user)

                          <tr>
                            <td>{{ $pending_user->id }}</td>
                            <td>{{ $pending_user->name }}</td>
                            <td>{{ $pending_user->email }}</td>
                            <td>{{ $pending_user->relationBetweenRole->role_name }}</td>
                            <td>{{ $pending_user->created_at->diffForHumans() }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                  <a type="button" href="{{ url('/user/view') }}/{{ $pending_user->id }}" class="btn btn-teal pd-x-25"><i class="icon ion-arrow-expand"></i></a>
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

  <script src="{{ asset('dashboard/lib/highlightjs/highlight.pack.js') }}"></script>
  <script src="{{ asset('dashboard/lib/datatables/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('dashboard/lib/datatables-responsive/dataTables.responsive.js') }}"></script>
  <script src="{{ asset('dashboard/lib/select2/js/select2.min.js') }}"></script>
  <script>
    $(function(){
      'use strict';

      $('#datatable1').DataTable({
        responsive: true,
        language: {
          searchPlaceholder: 'Search...',
          sSearch: '',
          lengthMenu: '_MENU_ items/page',
        }
      });



      // Select2
      $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

    });
  </script>
@endsection
