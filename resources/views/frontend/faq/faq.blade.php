@extends('frontend.homepage.app')

@section('css')


a,p{
  color:#000;
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
                          <h4 class="page_title">FAQ</h4>
                      </div>
                  </div>
              </div><!-- ends: .row -->
          </div>
      </section>




      <div class="tab tab--1 section-bg">
              <div class="container">
                  <div class="row">
                      <div class="col-md-4">
                          <div class="tab_nav cardify">
                              <div class="nav flex-column" id="tab_nav1" role="tablist" aria-orientation="vertical">

                                  {{-- <a class="nav-link" id="v-pills-tab1" data-toggle="pill" href="#tab1_content" role="tab" aria-controls="tab1_content" aria-selected="false">Personal Investment Success</a>

                                  <a class="nav-link active show" id="v-pills-tab2" data-toggle="pill" href="#tab2_content" role="tab" aria-controls="tab2_content" aria-selected="true">Healthcare and Life Sciences</a> --}}
                                  @foreach ($faqs as $faq)
                                    <a class="nav-link" id="v-pills-tab{{ $faq->id }}" data-toggle="pill" href="#tab{{$faq->id}}_content" role="tab" aria-controls="tab{{$faq->id}}_content" aria-selected="false">{{ $faq->question }}</a>
                                  @endforeach

                              </div>
                          </div>
                      </div>

                      <div class="col-md-8">
                          <div class="tab-content" id="tabContent1">
                            @foreach ($faqs as $faq)
                              <div class="tab-pane animated fadeIn {{ $faq->id === 1 ? "active show" : " " }}" id="tab{{$faq->id}}_content" role="tabpane{{$faq->id}}" aria-labelledby="tab{{$faq->id}}_content">
                                  <figure>
                                    <iframe width="560" height="315" src="{{ $faq->video }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                      <figcaption>
                                          {!! html_entity_decode($faq->answer) !!}
                                      </figcaption>
                                  </figure>
                              </div>
                            @endforeach

                          </div>
                      </div>
                  </div>
              </div>
          </div>





@endsection

@section('js')



@endsection
