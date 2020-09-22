@extends('frontend.homepage.app')

@section('css_cdn')

@endsection

@section('css')

  #topbar{
    background: #2d3436;
    z-index: 1;
    padding: 1px 0;
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
                          <h4 class="page_title">SMS</h4>
                      </div>
                  </div>
              </div><!-- ends: .row -->
          </div>
      </section>





<div class="container" style="background: url(https://res.cloudinary.com/onexa/image/upload/v1581408048/shape1_rwwqcx.png) no-repeat; background-size: cover;">
  <div class="row">
    <div class="col-md-12" style="text-align: center;">
      <img src="https://www.fareastislamilife.com/images/common/mobile_sms.png" style="width:75%;margin: 30px auto 0;" class="img-fluid" alt="">
    </div>
  </div>
</div>





@endsection

@section('js')

@endsection
