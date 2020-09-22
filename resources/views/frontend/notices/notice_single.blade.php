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
                          <h4 class="page_title">NEWS SINGLE PAGE</h4>
                      </div>
                  </div>
              </div><!-- ends: .row -->
          </div>
      </section>



      <section class="blog-single-wrapper section-padding">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-10 offset-lg-1">

                        <div  id="printDiv">
                          <div class="post-details">
                              <div class="post-head">
                                  <img src="{{ asset('uploads/news/') }}/{{ $single_notice->photo }}" alt="">
                              </div>

                              <div class="post-content">

                                  <div class="post-header">
                                      <h3>{!! html_entity_decode($single_notice->news_title) !!}</h3>
                                  </div>

                                  <div class="post-body">
                                    {!! html_entity_decode($single_notice->news_details) !!}
                                  </div>
                              </div>

                          </div><!-- ends: .post-details -->
                        </div>


                         {{--}} <div class="post-bottom d-flex justify-content-between">

                            <div class="tags">
                            <ul class="d-flex">
                                <li><a href="#" id="doPrint" class="btn btn-danger text-white">DOWNLOAD PDF</a></li>
                            </ul>
                        </div>


                          </div><!-- ends: .post-bottom -->--}}



                         {{-- <div class="post-pagination">
                              <div class="prev-post">
                                  <span>Previous Notice:</span>
                                  <a href="{{ url('notice-single/') }}/{{ $single_notice->id-1 }}" class="title">How to Run a Successful Business Meeting</a>
                                  <p><span>Aug 12, 2019</span> - In <a href="#">Industry</a></p>
                              </div>
                              <div class="next-post">
                                  <span>Next Notice:</span>
                                  <a href="{{ url('notice-single/') }}/{{ $single_notice->id+1 }}" class="title">Exciting New Technologies Business Communication</a>
                                  <p><span>Aug 12, 2019</span> - In <a href="#">Industry</a></p>
                              </div>
                          </div><!-- ends: .post-pagination -->--}}







                      </div><!-- ends: .col-lg-8 -->
                  </div>
              </div>
          </section>




@endsection

@section('js')

  <script>
    document.getElementById("doPrint").addEventListener("click", function() {
     var printContents = document.getElementById('printDiv').innerHTML;
     var originalContents = document.body.innerHTML;
     document.body.innerHTML = printContents;
     window.print();
     document.body.innerHTML = originalContents;
  });
  </script>

@endsection
