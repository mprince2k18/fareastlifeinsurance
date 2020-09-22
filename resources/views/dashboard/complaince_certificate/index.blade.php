@extends('dashboard.app')

@section('title')
Complaince Certificate
@endsection

@section('css_cdn')

@endsection

@section('content')




      <div class="br-mainpanel">


        <div class="br-pageheader pd-y-30 pd-l-20">
                <nav class="breadcrumb pd-0 mg-0 tx-13">
                   <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
        <!--               <a class="breadcrumb-item" href="#">Dashboard</a>-->
                   <span class="breadcrumb-item active">Complaince Certificate</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">Complaince Certificate</h4>
        </div>



        <!-- br-pageheader -->
  			<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">



                 <!-- Large modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add Complaince Certificate</button>

                  <div class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" style="width: 100% !important;" >
                      <div class="modal-content">


                      <form action="{{ route('complaince_certificate_create') }}" method="post" style="padding: 6.5rem;" enctype="multipart/form-data">
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
                                <a href="{{URL::asset('uploads/cr/'.$all_report->file)}}" target="_parent" class="btn btn-primary">
                                  
                                    Download Pdf
                                  </a>
                                  </td>
              									<td>
              									    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a type="button" href="{{ url("/dashboard/complaince/certificate/edit") }}/{{ $all_report->id }}" class="btn btn-secondary pd-x-25 active"><i class="icon ion-edit"></i></a>
                                        <a type="button" href="{{ url('/dashboard/complaince/certificate/delete/') }}/{{ $all_report->id }}" class="btn btn-danger pd-x-25"><i class="icon ion-trash-a"></i></a>
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
