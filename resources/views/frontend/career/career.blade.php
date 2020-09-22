@extends('frontend.homepage.app')

@section('css')





@endsection

@section('content')


  <section class="breadcrumb_area breadcrumb2 bgimage biz_overlay" style="z-index: 1;">
          <div class="bg_image_holder" style="background-image: url(&quot;img/breadbg.jpg&quot;); opacity: 1;">
              <img src="https://res.cloudinary.com/onexa/image/upload/v1580624009/images/breadbg2_m7rljd.jpg" alt="img/breadbg.jpg">
          </div>
          <div class="container content_above">
              <div class="row">
                  <div class="col-md-12">
                      <div class="breadcrumb_wrapper d-flex flex-column align-items-center">
                          <h4 class="page_title">CAREER</h4>
                      </div>
                  </div>
              </div><!-- ends: .row -->
          </div>
      </section>




      <section class="section-bg p-top-100 p-bottom-110">
              <div class="m-bottom-50">

          <div class="divider text-center">
              <h1>Open Positions</h1>
              <p class="mx-auto"></p>
          </div>

              </div>
              <div class="container">
                  <div class="row">
                      <div class="col-lg-12">

          <div class="table-responsive">
              <table class="table table-one">
                  <thead class="table-secondary table-secondary--darken" style="background-color: #06b590;">
                      <tr>
                          <th scope="col">Job Title</th>
                          <th scope="col">Location</th>
                          <th scope="col">Position</th>
                          <th scope="col">Deadline</th>
                          <th scope="col">Action</th>
                      </tr>
                  </thead><!-- ends: thead -->
                  <tbody>
                      <tr>
                          <th scope="row">Account Business Manager</th>
                          <td>Vienna, Austria</td>
                          <td>Administrative</td>
                          <td>Jan 08, 2019</td>
                          <td> <a href="{{ route('career_single') }}" class="btn btn-success"> View </a> </td>
                      </tr>
                      <tr>
                          <th scope="row">Cash Application and Collections Specialist</th>
                          <td>Detroit, Michigan</td>
                          <td>Marketing</td>
                          <td>Mar 23, 2019</td>
                          <td> <a href="{{ route('career_single') }}" class="btn btn-success"> View </a> </td>

                      </tr>
                      <tr>
                          <th scope="row">Director of Financial Systems</th>
                          <td>London, UK</td>
                          <td>Finance</td>
                          <td>Apr 09, 2019</td>
                          <td> <a href="{{ route('career_single') }}" class="btn btn-success"> View </a> </td>

                      </tr>
                      <tr>
                          <th scope="row">Account Business Manager</th>
                          <td>Paris, France</td>
                          <td>Support Manager</td>
                          <td>Jun 10, 2019</td>
                          <td> <a href="{{ route('career_single') }}" class="btn btn-success"> View </a> </td>

                      </tr>
                      <tr>
                          <th scope="row">Cash Application and Collections Specialist</th>
                          <td>Detroit, Michigan</td>
                          <td>Senior Executive</td>
                          <td>Sep 17, 2019</td>
                          <td> <a href="{{ route('career_single') }}" class="btn btn-success"> View </a> </td>

                      </tr>
                      <tr>
                          <th scope="row">Director of Financial Systems</th>
                          <td>London, UK</td>
                          <td>Accounting</td>
                          <td>Nov 01, 2019</td>
                          <td> <a href="{{ route('career_single') }}" class="btn btn-success"> View </a> </td>

                      </tr>
                  </tbody><!-- ends: tbody -->
              </table>
          </div><!-- ends: .table-responsive -->

                      </div>
                  </div>
              </div>
          </section>




@endsection

@section('js')



@endsection
