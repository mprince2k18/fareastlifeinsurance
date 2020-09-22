@extends('frontend.homepage.app')

@section('css')

{{-- .corporate_info .col-md-6:nth-child(even) {background: #FFF0C9}
.corporate_info .col-md-6:nth-child(odd) {background: #FFDDA3} --}}

.table-striped tbody tr:nth-of-type(odd){
  background: #FFDDA3;
}
.table-striped tbody tr:nth-of-type(even){
  background: #FFF0C9;
}
.table-bordered td, .table-bordered th{
  border: 1px solid #fff;
  font-size: 16px;
}

.card--team4 {
  background: transparent;
}

.card--team4 p {
  color: #000;
}

.table td, .table th{
vertical-align:middle !important;
}



@endsection

@section('content')


  <section class="breadcrumb_area breadcrumb2 bgimage biz_overlay" style="z-index: 1;">
          <div class="bg_image_holder" style="background-image: url(&quot;img/breadbg.jpg&quot;); opacity: 1;">
              <img src="https://picfiles.alphacoders.com/191/191008.jpg" alt="img/breadbg.jpg">
          </div>
          <div class="container content_above">
              <div class="row">
                  <div class="col-md-12">
                      <div class="breadcrumb_wrapper d-flex flex-column align-items-center">
                          <h4 class="page_title">CORPORATE INFORMATION</h4>
                      </div>
                  </div>
              </div><!-- ends: .row -->
          </div>
      </section>




      <section class="section-padding2" style="background: url(https://res.cloudinary.com/onexa/image/upload/v1582003352/86695775_167425011374183_7568987747247980544_n_hpmq4c.png);  background-size: contain; background-repeat: no-repeat;">

          <div class="card-style team--card4">
              <div class="container">

                  <div class="row corporate_info">


{{--
                    @foreach ($corpInfos as $corpInfos)

                      <div class="col-lg-12 col-md-6">

                              <div class="card card--team4 d-flex border-0">
                                  <div class="team-image" style="padding: 0 30px;">
                                    <p>{{ $corpInfos->title }}</p>
                                  </div>
                                  <div class="card-body">
                                      <p>{{ $corpInfos->desc }}</p>
                                  </div>
                              </div><!-- ends: .card -->

                      </div><!-- ends: .col-lg-12 -->

                    @endforeach --}}


                    <table class="table table-bordered table-striped">

                      <tbody>
                        @foreach($corpInfos as $corpInfos)
                        <tr>
                          <th scope="row" width="30%">{{ $corpInfos->title }}</th>
                          <td>{{ $corpInfos->desc }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>


















                  </div><!-- ends: .row -->
              </div>
          </div><!-- ends: .card-style -->

          </section>

@endsection

@section('js')



@endsection
