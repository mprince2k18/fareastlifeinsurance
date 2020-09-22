@extends('frontend.homepage.app')

@section('css')





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
                    <h4 class="page_title">ABOUT</h4>
                </div>
            </div>
        </div><!-- ends: .row -->
    </div>
</section>






@foreach ($About as $value)
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 margin-md-60">
                <div class="m-bottom-35">

                    <div class="divider divider-simple text-left">
                        <h2 class="m-bottom-20">{{ $value->title }}</h2>

                    </div>

                </div>
                <p>{{ $value->details }}</p>
                <button type="button" class="btn btn-secondary btn-icon icon-left m-top-30"><i class="la la-file"></i> Company Brochure
                </button>
            </div><!-- ends: .col-lg-5 -->
            <div class="col-lg-6 offset-lg-1">

                <div class="video-single">
                    <figure>
                        <div class="v_img">
                            <img src="{{ asset('uploads/about') }}/{{ $value->id }}" alt="" class="rounded">
                        </div>
                        <figcaption class="d-flex justify-content-center align-items-center shape-wrapper img-shape-two">
                            <a href="{{ $value->videoUrl }}" class="video-iframe play-btn play-btn--lg play-btn--primary"><img src="img/svg/play-btn.svg" alt="" class="svg"></a>
                        </figcaption>
                    </figure>
                </div><!-- ends: .video-single -->

            </div><!-- ends: .col-lg-6 -->
        </div><!-- ends: .row -->
    </div>
</section>
  @endforeach




<section class="p-top-100 p-bottom-110">
    <div class="container">
        <div class="row">

          @foreach ($Mission as  $value)
            <div class="col-lg-6 margin-md-60">
                <div class="m-bottom-30">

                    <div class="divider divider-simple text-left">
                        <h2 class="m-bottom-20">FILIC Mission</h2>
                    </div>

                </div>
                <p>{{ $value->details }}</p>
                <div class="m-top-30">
                    <ul class="arrow--list2">

                        <li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i class="la la-angle-right"></i></span> {{ $value->one }}</li>


                        <li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i class="la la-angle-right"></i></span> {{ $value->two }}</li>


                        <li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i class="la la-angle-right"></i></span> {{ $value->three }}</li>


                        <li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i class="la la-angle-right"></i></span> {{ $value->four }}</li>


                        <li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i class="la la-angle-right"></i></span> {{ $value->five }}</li>


                        <li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i class="la la-angle-right"></i></span> {{ $value->six }}</li>


                        <li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i class="la la-angle-right"></i></span> {{ $value->seven }}</li>


                        <li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i class="la la-angle-right"></i></span> {{ $value->eight }}</li>


                        <li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i class="la la-angle-right"></i></span> {{ $value->nine }}</li>


                        <li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i class="la la-angle-right"></i></span> {{ $value->ten }}</li>

                    </ul>
                </div>
            </div><!-- ends: .col-lg-6 -->
          @endforeach

@foreach ($Vision as $value)


            <div class="col-lg-6">
                <div class="m-bottom-30">

                    <div class="divider divider-simple text-left">
                        <h2 class="m-bottom-20">FILIC Vision</h2>
                    </div>

                </div>
                <p>{{ $value->details }}</p>
                <div class="m-top-30">
                    <ul class="arrow--list2">

                      <li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i class="la la-angle-right"></i></span> {{ $value->one }}</li>


                      <li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i class="la la-angle-right"></i></span> {{ $value->two }}</li>


                      <li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i class="la la-angle-right"></i></span> {{ $value->three }}</li>


                      <li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i class="la la-angle-right"></i></span> {{ $value->four }}</li>


                      <li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i class="la la-angle-right"></i></span> {{ $value->five }}</li>


                      <li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i class="la la-angle-right"></i></span> {{ $value->six }}</li>


                      <li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i class="la la-angle-right"></i></span> {{ $value->seven }}</li>


                      <li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i class="la la-angle-right"></i></span> {{ $value->eight }}</li>


                      <li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i class="la la-angle-right"></i></span> {{ $value->nine }}</li>


                      <li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i class="la la-angle-right"></i></span> {{ $value->ten }}</li>

                    </ul>
                </div>
            </div><!-- ends: .col-lg-6 -->
            @endforeach
        </div>
    </div>
</section>


<section class="p-top-105 p-bottom-90">
        <div class="m-bottom-65">

    <div class="divider text-center">
        <h1>History Overview</h1>
        <p class="mx-auto"></p>
    </div>

        </div>
        <div class="container">
            <div class="row">
@foreach ($History as $value)



                <div class="col-lg-6">
                    <p>{{ $value->one }}</p>
                </div>
                <div class="col-lg-6">
                    <p>{{ $value->two }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>



@endsection

@section('js')



@endsection
