@extends('frontend.homepage.app')

@section('css')

.corporate_info:nth-child(even) {background: red}
.corporate_info:nth-child(odd) {background: green}




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
                          <h4 class="page_title">CORPORATE CHRONICLE</h4>
                      </div>
                  </div>
              </div><!-- ends: .row -->
          </div>
      </section>




      <section class="p-top-85 p-bottom-85" style="background:url('https://res.cloudinary.com/dhe6napl7/image/upload/v1582144123/clients/fareast/img/shape1.png');background-repeat:no-repeat; background-size: cover;">

    <div class="timeline_area timeline_area--1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="timeline1">

                      @foreach ($cronicles as $cronicle)
                          <div class="happening row">
        <div class="happening__period col-md-3">
            <div class="wrapper rounded shadow-sm">
                <p class="date">{{ $cronicle->date }} {{ $cronicle->month }}</p>
                <h4 class="year">{{ $cronicle->year }}</h4>
            </div>
        </div>
        <div class="happening__desc col-md-8 offset-md-1">
            <h5 class="happening_title">{{ $cronicle->title }}</h5>
            <p>{{ $cronicle->desc }}</p>
        </div>
      </div><!-- ends: .happening -->
                      @endforeach




                    </div>
                </div>
            </div>
        </div>
    </div><!-- ends: .timeline_area -->

    </section>
@endsection

@section('js')



@endsection
