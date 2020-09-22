@extends('dashboard.app')

@section('title')
Shareholding Report
@endsection

@section('css_cdn')

@endsection

@section('content')




      <div class="br-mainpanel">


        <div class="br-pageheader pd-y-30 pd-l-20">
                <nav class="breadcrumb pd-0 mg-0 tx-13">
                   <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
        <!--               <a class="breadcrumb-item" href="#">Dashboard</a>-->
                   <span class="breadcrumb-item active">Shareholding Report</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">Shareholding Report</h4>
        </div>



        <!-- br-pageheader -->
  			<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">



                 <!-- Large modal -->

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <form action="{{ route('shareholding.update',$share->id) }}" method="post" enctype="multipart/form-data">
                        @csrf


  											<!-- Add New Menu-->
  											<div class="row no-gutters">

  												<div class="col-12">
  												<label for="">Edit Category Of Shareholders:</label>
  													<input class="form-control" type="text" value="{{$share->cat_shareholders}}" name="cat_shareholders" placeholder="{{$share->cat_shareholders}}">
  												</div>

  												<div class="col-12">
  												<label for="">Edit Number of Shareholders:</label>
  													<input class="form-control" type="text" value="{{$share->number_shareholders}}" name="number_shareholders" placeholder="{{$share->number_shareholders}}">
  												</div>

  												<div class="col-12">
  												<label for="">Edit Percentage:</label>
  													<input class="form-control" type="text" value="{{$share->percentage}}" name="percentage" placeholder="{{$share->percentage}}">
  												</div>






  											</div>





                         <div class="row no-gutters">

                         <div class="col-md-12">
                             	<button type="submit" class="btn btn-info waves-effect waves-light">Send Data</button>
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
