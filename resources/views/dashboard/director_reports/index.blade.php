@extends('dashboard.app')

@section('title')
Director Report
@endsection

@section('css_cdn')

@endsection

@section('content')




  <!-- br-pageheader -->
  <div class="br-mainpanel">
    <div class="br-pageheader pd-y-30 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-13">
               <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
               <span class="breadcrumb-item active">Director Report</span>
            </nav>
         </div>









      <!-- br-pageheader -->
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">

        {{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-YEAR">ADD YEAR</button>--}}


               <!-- Large modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add Director Report</button>

                <div class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" style="width: 100% !important;" >
                    <div class="modal-content">


                    <form action="{{ route('director.create') }}" method="post" style="padding: 6.5rem;" enctype="multipart/form-data">
                      @csrf


                      <!-- Add New Menu-->
                      <div class="row no-gutters">

                        <div class="col-12">
                        <label for="">Add Title:</label>
                          <input class="form-control" type="text" name="title" placeholder="Add Title">
                        </div>

                        <div class="col-12">
                        <label for="">Add File:</label>
                        <input class="form-control" type="file" name="file">
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
                            <th class="wd-20p">Title</th>
                            <th class="wd-20p">File</th>
                            <th class="wd-10p">Action</th>
                          </tr>
                        </thead>
                        <tbody>

                          @forelse ($all_reports as $all_report)

                            <tr>
                              <td>{{ $loop->index++ + 1 }}</td>
                              <td>{{ $all_report->title }}</td>
                              <td>
                                <a href="{{URL::asset('uploads/dr/'.$all_report->file)}}" target="_parent" class="btn btn-primary">
                                  Download Pdf
                                </a>
                                </td>
                              <td>
                                  <div class="btn-group" role="group" aria-label="Basic example">
                                      <a type="button" href="{{ url("/dashboard/director/edit") }}/{{ $all_report->id }}" class="btn btn-secondary pd-x-25 active"><i class="icon ion-edit"></i></a>
                                      <a type="button" href="{{ url('/dashboard/director/delete/') }}/{{ $all_report->id }}" class="btn btn-danger pd-x-25"><i class="icon ion-trash-a"></i></a>
                                </div>
                              </td>
                            </tr>

                            @empty

                          @endforelse





                        </tbody>
                      </table>
                    </div>

          {{-- inner_content END --}}

        </div>
      </div>












@endsection

@section('js_cdn')





@endsection