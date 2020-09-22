@extends('dashboard.app')

@section('title')
ALL PAGES
@endsection

@section('css_cdn')


  <!-- vendor css -->

		<link href="{{ asset('dashboard/lib/highlightjs/github.css') }}" rel="stylesheet">
		<link href="{{ asset('dashboard/lib/datatables/jquery.dataTables.css') }}" rel="stylesheet">
		<link href="{{ asset('dashboard/lib/select2/css/select2.min.css') }}" rel="stylesheet">


@endsection

@section('content')




      <div class="br-mainpanel">


        <div class="br-pageheader pd-y-30 pd-l-20">
                <nav class="breadcrumb pd-0 mg-0 tx-13">
                   <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
        <!--               <a class="breadcrumb-item" href="#">Dashboard</a>-->
                   <span class="breadcrumb-item active">ALL BIMAS</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">ALL BIMAS</h4>
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
            									<th class="wd-20p">Page Name</th>
                              <th class="wd-20p">Image</th>
            									<th class="wd-15p">Page Url</th>
            									<th class="wd-15p">Created At</th>

            									<th class="wd-10p">Action</th>
            								</tr>
            							</thead>
            							<tbody>

                            @foreach ($pages as $page)

                              <tr>
                                <td>{{ $page->id }}</td>
                                <td>{!! html_entity_decode($page->page_title) !!}</td>
                                <td><img src="{{URL::asset('uploads/pages/'.$page->photo)}}" height="100" width="100"></td>
                                <td>{{ $page->slug }}</td>

                                <td>{{ $page->created_at->diffForHumans() }}</td>

                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                      <a type="button" href="{{ url('pages/edit') }}/{{ $page->id }}/{{ $page->slug }}" class="btn btn-secondary pd-x-25 active"><i class="icon ion-edit"></i></a>
                                      <a type="button" href="{{ url('pages/delete') }}/{{ $page->id }}" class="btn btn-danger pd-x-25"><i class="icon ion-trash-a"></i></a>
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
