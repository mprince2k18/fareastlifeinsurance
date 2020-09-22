@extends('frontend.homepage.app')

@section('css_cdn')


@endsection
@section('css')
  #topbar{
    background: #2d3436;
    z-index: 1;
    padding: 1px 0;
  }

  {{-- .premium_cal{
    margin-top : 100px !important;
  }

.calculator_left_side {
  width: 100%;
  height: 100%;
}

.calculator_right_side:after{
  content: '';
  background: #747d8c;
  width: 2px;
  height: 62%;
  top: 20%;
  left: 8%;
  position: absolute;
}

.calculator_left_side img{
  margin-top: 115px;
}

.premium_calculator{
  border: 1px solid #2F3640;
  border-radius: 20px;
  box-shadow: 0px 0px 5px 8px rgba(0,0,0,0.17);
  padding: 0 0 50px 0;
}

.premium_calculator_title{
  padding-top: 100px;
  padding-bottom: 25px;
} --}}




@endsection

@section('content')

<div class="container">
  <div class="row">
      <div class="col-md-12">
          <h1 class="text-center premium_calculator_title">Premium Calculator</h1>
      </div>
  </div>
</div>


<div class="container premium_calculator">
    <div class="row">
        <div class="col-md-6">
          <div class="calculator_left_side">
              <img src="http://riskheads.org/wp-content/uploads/2015/06/Insurance-Net-Written-Premium-Calculation.jpg" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-md-6">
          <div class="calculator_right_side">

              <div class="container">
              <div class="row">
                <div class="col-md-8 offset-md-2">

                  <div class="premium_cal">

                  <!-- Default form login -->
                  <form action="#" method="get" id="form">

                    <div class="form-group">
                      <label for="dob">Date Of Birth</label>
                      <input type="date" class="form-control" id="dob" aria-describedby="emailHelp">
                    </div>











                    <div class="form-group">
                      <input type="text" disabled class="form-control" id="age" aria-describedby="emailHelp" value="" placeholder="Enter Your Age">
                    </div>

                    <div class="form-group">
                      <select class="form-control" name="" id="plan">
                        <option value="0">Select One *</option>
                      </select>
                    </div>
                    <div id="termDivSection">

                    </div>
                    <div class="form-group">
                      <select class="form-control" name="" id="term">
                        <option value="0">Terms And Policy *</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <select class="form-control" name="" id="mode">
                        <option value="0">Mode Of Payment *</option>
                      </select>
                    </div>


                            <div class="form-group">
                              <input id="sum" placeholder="Enter Sum Assured" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>


                            <div class="row">
                              <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-info">Calculate Premium</button>
                              </div>
                            </div>


                            <!-- Button trigger modal -->


                  </form>
                  <!-- Default form login -->





                  <div id="bimaRes" class="text-center">

                  </div>


                  <!-- Button trigger modal -->
                  {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Launch demo modal
                  </button> --}}

                  <!-- Modal -->





                </div>

              </div>

            </div>

            </div>
          </div>
        </div>
    </div>
</div>







@endsection

@section('js')

<!-- MDB core JavaScript -->

<script src="{{asset('js/myFareast.js')}}" charset="utf-8"></script>



@endsection
