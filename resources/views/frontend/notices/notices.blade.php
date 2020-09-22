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
                          <h4 class="page_title">NOTICES</h4>
                      </div>
                  </div>
              </div><!-- ends: .row -->
          </div>
      </section>




      <section class="section-padding section-bg">

          <div class="container">

            @forelse ($notices as $notice)

              <div class="col-lg-12">

                    <div class="event-single d-flex flex-wrap">
                        <div class="event-date">
                            <h1 class="display-1">{{ $notice->created_at->format('d') }}</h1>
                            <span class="month">{{ $notice->created_at->format('F') }}</span>
                            <span class="year">{{ $notice->created_at->format('Y') }}</span>
                        </div><!-- ends: .event-date -->
                        <div class="event-info">
                            <div>
                                <h4 style="color: #000;"><a  href="{{ url('show/notice/pdf') }}/{{ $notice->id }}/{{ $notice->noticePdf }}">{!! html_entity_decode($notice->notice_title) !!}</a></h4>
                              {{--  <ul class="icon-list--two">

                    <li class="list-item icon-list">
                      {!! html_entity_decode($notice->notice_details)!!}
                    </li>

                                </ul>--}}
                            </div>
                           {{-- <div class="view-btn">
                                <a href="{{ url('notice-single') }}/{{ $notice->id }}" class="btn btn-outline-primary btn-icon icon-right">Read More <span class="la la-map-marker"></span></a>
                            </div><!-- ends: .view-btn -->--}}
                        </div><!-- ends: .event-info -->

                    </div><!-- ends: .event-single -->

              </div><!-- ends: .col-lg-12 -->

              @empty

            @endforelse











              </div>
          </div><!-- ends: .container -->


              <div class="m-top-40">

          <div class="pagination-area">
              {{ $notices->links() }}
          </div><!-- ends: .pagination-wrapper -->

              </div>
          </section>




@endsection

@section('js')



@endsection
