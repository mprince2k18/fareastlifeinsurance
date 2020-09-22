@extends('dashboard.app')

@section('title')
Value Statement
@endsection

@section('css_cdn')

@endsection

@section('content')




      <div class="br-mainpanel">


        <div class="br-pageheader pd-y-30 pd-l-20">
                <nav class="breadcrumb pd-0 mg-0 tx-13">
                   <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
                   <span class="breadcrumb-item active">Value Statement</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">Value Statement</h4>
        </div>



        <!-- br-pageheader -->
  			<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">



                 <!-- Large modal -->

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <form action="{{ route('value.update',$each_reports->id) }}" method="post" style="padding: 6.5rem;" enctype="multipart/form-data">
                        @csrf


  											<!-- Add New Menu-->
  											<div class="row no-gutters">

  												<div class="col-12">
  												<label for=""><strong>>Edit Title:</strong></label>
  													<input class="form-control" type="text" value="{{$each_reports->title}}" name="title" placeholder="Add Description">
  												</div>

                         {{--}} <div class="col-12">
                          <label for="">Update Year:</label>
                            <select class="form-control" name="year1">
                              @foreach ($years as $year)
                                <option value="{{ $year->id }}" {{ $each_reports->year_id === $year->id ? 'checked' : null }}>{{ $year->year }}</option>
                              @endforeach
                            </select>
                          </div>


                          <div class="col-12">
                          <label for="">Update Year 2:</label>
                            <select class="form-control" name="year1">
                              @foreach ($year2s as $year)
                                <option value="{{ $year->id }}" {{ $each_reports->year2_id === $year->id ? 'checked' : null }}>{{ $year->year }}</option>
                              @endforeach
                            </select>
                          </div>--}}


  												<div class="col-12">
                          <label for=""><b>Edit Amount for Year1 ({{$year->year}})</b>:</label>
                            <input class="form-control" type="text" value="{{$each_reports->amount}}" name="amount" placeholder="Edit Amount">
                          </div>
                          
                          <div class="col-12">
                          <label for=""><b>Edit Amount for Year2 ({{$year->year2}})</b>:</label>
                            <input class="form-control" type="text" value="{{$each_reports->amount2}}" name="amount2" placeholder="Edit Amount">
                          </div>

                            <input type="hidden" name="year1" value="{{$year->year}}">
                            <input type="hidden" name="year2" value="{{$year->year2}}">

  											</div>





                         <div class="row no-gutters">

                         <div class="col-md-12">
                             	<button type="submit" class="btn btn-info waves-effect waves-light">Update Data</button>
                         </div>
    </div>
  </div>
</div>




  							<!-- col-8 -->
  						</div>

  					</form>







              </div>




















@endsection

@section('js_cdn')





@endsection
