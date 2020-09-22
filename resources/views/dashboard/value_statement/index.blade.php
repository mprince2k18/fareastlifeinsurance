@extends('dashboard.app')

@section('title')
Value Statement
@endsection

@section('css_cdn')

@endsection

@section('content')




  <!-- br-pageheader -->
  <div class="br-mainpanel">
    <div class="br-pageheader pd-y-30 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-13">
               <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
               <span class="breadcrumb-item active">Value Statement</span>
            </nav>
         </div>









      <!-- br-pageheader -->
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-YEAR">Update YEAR</button>


               <!-- Large modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add Value Statement</button>

                <div class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" style="width: 100% !important;" >
                    <div class="modal-content">


                    <form action="{{ route('value.create') }}" method="post" style="padding: 6.5rem;" enctype="multipart/form-data">
                      @csrf


                      <!-- Add New Menu-->
                      <div class="row no-gutters">

                        <div class="col-12">
                        <label for="">Add Title:</label>
                          <input class="form-control" type="text" name="title" placeholder="Add Title">
                        </div>

                       {{--}} <div class="col-12">
                        <label for="">Add Year:</label>
                          <select class="form-control" name="year1">
                            <option value="">Select Year</option>
                            @foreach ($years as $year)
                              <option value="{{ $year->id }}"  >{{ $year->year }}</option>
                            @endforeach
                          </select>
                        </div>

                          <div class="col-12">
                        <label for="">Add Year 2:</label>
                          <select class="form-control" name="year2">
                            <option value="">Select Year</option>
                            @foreach ($year2s as $year)
                              <option value="{{ $year->id }}"  >{{ $year->year }}</option>
                            @endforeach
                          </select>
                        </div> --}}

                        
                        <div class="col-12">
                        <label for="">Add Amount for Year1 ({{$year->year}}):</label>
                          <input class="form-control" type="text" name="amount" placeholder="Add Amount">
                        </div>

                        <div class="col-12">
                        <label for="">Add Amount for Year2 ({{$year->year2}}):</label>
                          <input class="form-control" type="text" name="amount2" placeholder="Add Amount">
                        </div>

                       
                        <input type="hidden" name="year1" value="{{$year->year}}">
                        <input type="hidden" name="year2" value="{{$year->year2}}">


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




                <div class="modal fade bd-example-modal-YEAR"tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" style="width: 100% !important;" >
                    <div class="modal-content">

          <div class="container">
          <form action="{{ route('financial.year.update',$year->id) }}" method="post" enctype="multipart/form-data" class="m-2">
           {{method_field('PUT')}}
             {{csrf_field()}}

                      <label for="product_title">Year</label>
                      <input type="text" name="year" value="{{$year->year}}" class="form-control">

                       <label for="product_title">Year 2</label>
                      <input type="text" name="year2" value="{{$year->year2}}" class="form-control">

                    <button type="submit" class="btn btn-primary" >Update Year</button>
              </form>
          </div>



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
                            <th class="wd-20p">Year 1</th>
                            <th class="wd-20p">Amount 1</th>
                             <th class="wd-20p">Year 2</th>
                            <th class="wd-20p">Amount 2</th>
                            <th class="wd-10p">Action</th>
                          </tr>
                        </thead>
                        <tbody>

                          @forelse ($all_reports as $all_report)

                            <tr>
                              <td>{{ $loop->index++ + 1 }}</td>
                              <td>{{ $all_report->title }}</td>
                              <td>{{ $all_report->year1 }}</td>
                              <td>{{ $all_report->amount }}</td>
                              <td>{{ $all_report->year2 }}</td>
                              <td>{{ $all_report->amount2 }}</td>
                              <td>
                                  <div class="btn-group" role="group" aria-label="Basic example">
                                      <a type="button" href="{{ url("/dashboard/value/edit") }}/{{ $all_report->id }}" class="btn btn-secondary pd-x-25 active"><i class="icon ion-edit"></i></a>
                                      <a type="button" href="{{ url('/dashboard/value/delete') }}/{{ $all_report->id }}" class="btn btn-danger pd-x-25"><i class="icon ion-trash-a"></i></a>
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
