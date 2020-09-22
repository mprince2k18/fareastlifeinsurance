@extends('dashboard.app')



@section('title')
  Dashboard
@endsection

@section('content')

  <!--  START: MAIN PANEL  -->
  <div class="br-mainpanel">

     <div class="br-pageheader pd-y-30 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-13">
           <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
<!--               <a class="breadcrumb-item" href="#">Dashboard</a>-->
           <span class="breadcrumb-item active">Dashboard</span>
        </nav>
     </div>

<!-- br-pageheader -->
<div class="br-pagebody pd-x-20 pd-sm-x-30">
   <!-- row -->
   <div class="row row-sm mg-t-20">
      <div class="col-sm-6 col-lg-4">
         <div class="card bg-teal shadow-base bd-0">
            <div class="card-header bg-transparent d-flex justify-content-between align-items-center">
               <h6 class="card-title tx-uppercase tx-13 mg-b-0 text-white">Unique Visits</h6>
               <span class="tx-13 tx-uppercase text-white">{{ Carbon\Carbon::now()->format('d-M-Y') }}</span>
            </div>
            <!-- card-header -->
            <div class="card-body d-xs-flex justify-content-between align-items-center">
               <h4 class="mg-b-0 tx-inverse tx-lato tx-bold text-white">{{ $visitors_count }}</h4>
               <p class="mg-b-0 tx-sm text-white"><span><i class="fa fa-arrow-up"></i> 34.32%</span> from last Day</p>
            </div>
            <!-- card-body -->
         </div>
         <!-- card -->
      </div>
      <!-- col-4 -->
      <div class="col-sm-6 col-lg-4 mg-t-20 mg-sm-t-0">
         <div class="card bg-primary shadow-base bd-0">
            <div class="card-header bg-transparent d-flex justify-content-between align-items-center">
               <h6 class="card-title tx-uppercase tx-13 mg-b-0 text-white">Total Inbox</h6>
               <span class="tx-13 tx-uppercase text-white">June 20-27, 2017</span>
            </div>
            <!-- card-header -->
            <div class="card-body d-xs-flex justify-content-between align-items-center">
               <h4 class="mg-b-0 tx-inverse tx-lato tx-bold text-white">3</h4>
               <p class="mg-b-0 tx-sm text-white"><span><i class="fa fa-arrow-down"></i> 0.92%</span> from last week</p>
            </div>
            <!-- card-body -->
         </div>
         <!-- card -->
      </div>
      <!-- col-4 -->
      <div class="col-sm-6 col-lg-4 mg-t-20 mg-lg-t-0">
         <div class="card bg-danger shadow-base bd-0">
            <div class="card-header bg-transparent d-flex justify-content-between align-items-center">
               <h6 class="card-title tx-uppercase tx-13 mg-b-0 text-white">Total Complaint</h6>
               <span class="tx-13 tx-uppercase text-white">June 20, 2017</span>
            </div>
            <!-- card-header -->
            <div class="card-body d-xs-flex justify-content-between align-items-center">
               <h4 class="mg-b-0 tx-inverse tx-lato tx-bold text-white">23</h4>
               <p class="mg-b-0 tx-sm text-white"><span><i class="fa fa-arrow-up"></i> 16.34%</span> from last week</p>
            </div>
            <!-- card-body -->
         </div>
         <!-- card -->
      </div>
      <!-- col-4 -->
   </div>
   <!-- row -->



   <!-- row -->
               <div class="row row-sm mg-t-20">
                         <div class="col-sm-6 col-lg-4">
                           <div class="bg-teal rounded shadow-base overflow-hidden">
                             <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                               <i class="ion ion-earth tx-80 lh-0 tx-primary op-5 text-white"></i>
                               <div class="mg-l-20">
                                 <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase mg-b-10 text-white">Total Products</p>
                                 <p class="tx-32 tx-inverse tx-lato tx-black mg-b-0 lh-1 text-white">10</p>
                                 <!-- <span class="tx-13 tx-poppins tx-gray-600 text-white">24% higher than yesterday</span> -->
                               </div>
                             </div>
                             <div id="ch5" class="ht-60 tr-y-1 rickshaw_graph"><svg width="417" height="60"><g><path d="M0,30Q30.116666666666667,25.75,34.75,26.25C41.699999999999996,27,62.550000000000004,37.125,69.5,37.5S97.3,31.5,104.25,30S132.05,22.5,139,22.5S166.8,27.75,173.75,30S201.55,42.75,208.5,45S236.30000000000004,52.5,243.25000000000003,52.5S271.05,46.125,278,45S305.8,42.375,312.75,41.25S340.55,33.375,347.5,33.75S375.3,45.375,382.25,45Q386.8833333333333,44.75,417,30L417,60Q386.8833333333333,60,382.25,60C375.3,60,354.45,60,347.5,60S319.7,60,312.75,60S284.95,60,278,60S250.20000000000002,60,243.25000000000003,60S215.45,60,208.5,60S180.7,60,173.75,60S145.95,60,139,60S111.2,60,104.25,60S76.45,60,69.5,60S41.699999999999996,60,34.75,60Q30.116666666666667,60,0,60Z" class="area" fill="#0866C6"></path></g></svg></div>
                           </div>
                         </div>
                         <!-- col-4 -->
                         <div class="col-sm-6 col-lg-4 mg-t-20 mg-sm-t-0">
                           <div class="bg-danger rounded shadow-base overflow-hidden">
                             <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                               <i class="ion ion-bag tx-80 lh-0 tx-purple op-5 text-white"></i>
                               <div class="mg-l-20">
                                 <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase mg-b-10 text-white">CV</p>
                                 <p class="tx-32 tx-inverse tx-lato tx-black mg-b-0 lh-1 text-white">2</p>
                                 <!-- <span class="tx-13 tx-poppins tx-gray-600 text-white">$390,212 before tax</span> -->
                               </div>
                             </div>
                             <div id="ch6" class="ht-60 tr-y-1 rickshaw_graph">
                               <svg width="417" height="60"><g><path d="M0,30Q30.116666666666667,25.75,34.75,26.25C41.699999999999996,27,62.550000000000004,37.125,69.5,37.5S97.3,31.5,104.25,30S132.05,22.5,139,22.5S166.8,27.75,173.75,30S201.55,42.75,208.5,45S236.30000000000004,52.5,243.25000000000003,52.5S271.05,46.125,278,45S305.8,42.375,312.75,41.25S340.55,33.375,347.5,33.75S375.3,45.375,382.25,45Q386.8833333333333,44.75,417,30L417,60Q386.8833333333333,60,382.25,60C375.3,60,354.45,60,347.5,60S319.7,60,312.75,60S284.95,60,278,60S250.20000000000002,60,243.25000000000003,60S215.45,60,208.5,60S180.7,60,173.75,60S145.95,60,139,60S111.2,60,104.25,60S76.45,60,69.5,60S41.699999999999996,60,34.75,60Q30.116666666666667,60,0,60Z" class="area" fill="#6F42C1"></path></g></svg>
                             </div>
                           </div>
                         </div>
                         <!-- col-4 -->
                         <div class="col-sm-6 col-lg-4 mg-t-20 mg-lg-t-0">
                           <div class="bg-primary rounded shadow-base overflow-hidden">
                             <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                               <i class="ion ion-monitor tx-80 lh-0 tx-teal op-5 text-white"></i>
                               <div class="mg-l-20">
                                 <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase mg-b-10 text-white">Total Users</p>
                                 <p class="tx-32 tx-inverse tx-lato tx-black mg-b-0 lh-1 text-white"> {{ App\User::count() }} </p>
                                 <!-- <span class="tx-13 tx-poppins tx-gray-600 text-white">23% average duration</span> -->
                               </div>
                             </div>
                             <div id="ch7" class="ht-60 tr-y-1 rickshaw_graph">
                               <svg width="417" height="60"><g><path d="M0,30Q30.116666666666667,25.75,34.75,26.25C41.699999999999996,27,62.550000000000004,37.125,69.5,37.5S97.3,31.5,104.25,30S132.05,22.5,139,22.5S166.8,27.75,173.75,30S201.55,42.75,208.5,45S236.30000000000004,52.5,243.25000000000003,52.5S271.05,46.125,278,45S305.8,42.375,312.75,41.25S340.55,33.375,347.5,33.75S375.3,45.375,382.25,45Q386.8833333333333,44.75,417,30L417,60Q386.8833333333333,60,382.25,60C375.3,60,354.45,60,347.5,60S319.7,60,312.75,60S284.95,60,278,60S250.20000000000002,60,243.25000000000003,60S215.45,60,208.5,60S180.7,60,173.75,60S145.95,60,139,60S111.2,60,104.25,60S76.45,60,69.5,60S41.699999999999996,60,34.75,60Q30.116666666666667,60,0,60Z" class="area" fill="#6F42C1"></path></g></svg>
                             </div>
                           </div>
                         </div>
                         <!-- col-4 -->
                      </div>
   <!-- row -->


   <!-- row -->

   <!-- row -->


   <!-- row -->
                             <div class="row row-sm mg-t-20">
                       <div class="col-sm-6 col-lg-4">
                         <div class="card shadow-base bd-0">
                           <div id="carousel1" class="carousel slide" data-ride="carousel">
                             <ol class="carousel-indicators">

                            @foreach ($newses as $news)
                               <li data-target="#carousel1" data-slide-to="{{ $news->id -1 }}" class="{{ $news->id -1 == 0 ? "active" : '' }}"></li>
                            @endforeach

                             </ol>
                             <div class="carousel-inner" role="listbox">

                               @foreach ($newses as $news)

                               <div class="carousel-item {{ $news->id -1 == 0 ? "active" : '' }}">
                                 <div class="bg-white ht-300 pos-relative overflow-hidden d-flex flex-column align-items-start rounded">
                                   <div class="pos-absolute t-15 r-25">
                                     <a href="#" class="tx-gray-500 hover-info mg-l-7"><i class="icon ion-more tx-20"></i></a>
                                   </div>
                                   <div class="pd-x-30 pd-t-30 mg-b-auto">
                                     <p class="tx-info tx-uppercase tx-11 tx-medium tx-mont mg-b-5">News</p>
                                     <h5 class="tx-inverse mg-b-20">{!! html_entity_decode($news->news_title) !!}</h5>
                                     <p class="tx-uppercase tx-16 tx-medium tx-mont mg-b-0">{!! html_entity_decode($news->news_details) !!}</p>
                                     <!-- <h2 class="tx-inverse tx-lato tx-bold mg-b-0">2366</h2> -->
                                     <!-- <span>53.86 purchases/month</span> -->
                                   </div>
                                   <div id="ch8" class="ht-100 tr-y-1 rickshaw_graph"><svg width="400" height="100"><g><path d="M0,19.999999999999996Q28.888888888888886,1.733333333333335,33.33333333333333,2.0000000000000018C39.99999999999999,2.400000000000002,59.99999999999999,20.200000000000003,66.66666666666666,24S93.33333333333334,38.8,100,40S126.66666666666664,38,133.33333333333331,36S160.00000000000003,17.599999999999998,166.66666666666669,19.999999999999996S193.33333333333334,54,200,60S226.66666666666669,80,233.33333333333334,80S259.99999999999994,63,266.66666666666663,60S293.3333333333333,53,300,50S326.6666666666667,29.000000000000004,333.33333333333337,30.000000000000004S359.99999999999994,60,366.66666666666663,60Q371.1111111111111,60,400,30.000000000000004L400,100Q371.1111111111111,100,366.66666666666663,100C359.99999999999994,100,340.00000000000006,100,333.33333333333337,100S306.6666666666667,100,300,100S273.3333333333333,100,266.66666666666663,100S240,100,233.33333333333334,100S206.66666666666666,100,200,100S173.33333333333334,100,166.66666666666669,100S139.99999999999997,100,133.33333333333331,100S106.66666666666666,100,100,100S73.33333333333333,100,66.66666666666666,100S39.99999999999999,100,33.33333333333333,100Q28.888888888888886,100,0,100Z" class="area" fill="#0866C6"></path></g></svg></div>
                                 </div>
                                 <!-- d-flex -->
                               </div>


                               @endforeach



                               <!-- cardousel-item -->
                             </div>
                             <!-- carousel-inner -->
                           </div>
                           <!-- carousel -->
                         </div>
                         <!-- card -->
                       </div>
                       <!-- col-4 -->
                       <div class="col-sm-6 col-lg-4 mg-t-20 mg-sm-t-0">
                         <div class="card shadow-base bd-0">
                           <div id="carousel3" class="carousel slide" data-ride="carousel">
                             <ol class="carousel-indicators">

                               @foreach ($events as $event)

                               <li data-target="#carousel3" data-slide-to="{{ $event->id - 1 }}" class="{{ $event->id -1 == 0 ? "active" : " " }}"></li>
                               @endforeach


                             </ol>
                             <div class="carousel-inner" role="listbox">

                               @foreach ($events as $event)

                               <div class="carousel-item {{ $event->id - 1 == 0 ? "active" : " " }}">
                                 <div class="bg-white ht-300 pos-relative overflow-hidden d-flex flex-column align-items-start rounded">
                                   <div class="pos-absolute t-15 r-25">
                                     <a href="#" class="tx-gray-500 hover-info mg-l-7"><i class="icon ion-more tx-20"></i></a>
                                   </div>
                                   <div class="pd-x-30 pd-t-30 mg-b-auto">
                                     <p class="tx-info tx-uppercase tx-11 tx-medium tx-mont mg-b-5">Live Events</p>
                                     <h5 class="tx-inverse mg-b-20">{!! html_entity_decode($event->event_title) !!}</h5>
                                     <p class="tx-uppercase tx-16 tx-medium tx-mont mg-b-0">{!! html_entity_decode($event->event_details) !!}</p>
                                     <!-- <h2 class="tx-inverse tx-lato tx-bold mg-b-0">5632</h2> -->
                                     <!-- <span>120.44 purchases/month</span> -->
                                   </div>
                                   <div id="ch11" class="ht-100 tr-y-1 rickshaw_graph"><svg width="400" height="100"><rect x="0" y="30.000000000000004" width="29.23076923076923" height="70" transform="matrix(1,0,0,1,0,0)" fill="#6F42C1"></rect><rect x="30.76923076923077" y="2.0000000000000018" width="29.23076923076923" height="98" transform="matrix(1,0,0,1,0,0)" fill="#6F42C1"></rect><rect x="61.53846153846154" y="24" width="29.23076923076923" height="76" transform="matrix(1,0,0,1,0,0)" fill="#6F42C1"></rect><rect x="92.3076923076923" y="40" width="29.23076923076923" height="60" transform="matrix(1,0,0,1,0,0)" fill="#6F42C1"></rect><rect x="123.07692307692308" y="36" width="29.23076923076923" height="64" transform="matrix(1,0,0,1,0,0)" fill="#6F42C1"></rect><rect x="153.84615384615387" y="19.999999999999996" width="29.23076923076923" height="80" transform="matrix(1,0,0,1,0,0)" fill="#6F42C1"></rect><rect x="184.6153846153846" y="60" width="29.23076923076923" height="40" transform="matrix(1,0,0,1,0,0)" fill="#6F42C1"></rect><rect x="215.3846153846154" y="80" width="29.23076923076923" height="20" transform="matrix(1,0,0,1,0,0)" fill="#6F42C1"></rect><rect x="246.15384615384616" y="60" width="29.23076923076923" height="40" transform="matrix(1,0,0,1,0,0)" fill="#6F42C1"></rect><rect x="276.9230769230769" y="50" width="29.23076923076923" height="50" transform="matrix(1,0,0,1,0,0)" fill="#6F42C1"></rect><rect x="307.69230769230774" y="30.000000000000004" width="29.23076923076923" height="70" transform="matrix(1,0,0,1,0,0)" fill="#6F42C1"></rect><rect x="338.46153846153845" y="60" width="29.23076923076923" height="40" transform="matrix(1,0,0,1,0,0)" fill="#6F42C1"></rect><rect x="369.2307692307692" y="19.999999999999996" width="29.23076923076923" height="80" transform="matrix(1,0,0,1,0,0)" fill="#6F42C1"></rect></svg></div>
                                 </div>
                                 <!-- d-flex -->
                               </div>

                               @endforeach




                               <!-- cardousel-item -->
                             </div>
                             <!-- carousel-inner -->
                           </div>
                           <!-- carousel -->
                         </div>
                         <!-- card -->
                       </div>
                       <!-- col-4 -->
                       <div class="col-sm-6 col-lg-4 mg-t-20 mg-lg-t-0">
                         <div class="card bd-0">
                           <div id="carousel2" class="carousel slide" data-ride="carousel">
                             <ol class="carousel-indicators">
@foreach ($notices as $notice)

<li data-target="#carousel2" data-slide-to="{{ $notice->id - 1 }}" class="{{ $notice->id - 1 == 0 ? "acrive" : " "}}"></li>
@endforeach

                             </ol>
                             <div class="carousel-inner" role="listbox">

@foreach ($notices as $notice)
                               <div class="carousel-item {{ $notice->id - 1 == 0? "active" : " "}}">
                                 <div class="bg-primary pd-30 ht-300 pos-relative d-flex align-items-center rounded">
                                   <div class="pos-absolute t-15 r-25">
                                     <a href="#" class="tx-white-5 hover-info"><i class="icon ion-edit tx-16"></i></a>
                                     <a href="#" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-stats-bars tx-20"></i></a>
                                     <a href="#" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-gear-a tx-20"></i></a>
                                     <a href="#" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-more tx-20"></i></a>
                                   </div>
                                   <div class="tx-white">
                                     <p class="tx-uppercase tx-11 tx-medium tx-mont tx-spacing-2 tx-white-5">Recent Notices</p>
                                     <h5 class="lh-5 mg-b-20">{!! html_entity_decode($notice->notice_title) !!}</h5>
                                     <p class="tx-uppercase tx-16 tx-medium tx-mont mg-b-0">{!! html_entity_decode($notice->notice_details) !!}</p>

                                     <!-- <nav class="nav flex-row tx-13">
                                       <a href="#" class="tx-white-8 hover-white pd-l-0 pd-r-5">12K+ Views</a>
                                       <a href="#" class="tx-white-8 hover-white pd-x-5">234 Shares</a>
                                       <a href="#" class="tx-white-8 hover-white pd-x-5">43 Comments</a>
                                     </nav> -->
                                   </div>
                                 </div>
                                 <!-- d-flex -->
                               </div>
@endforeach

                             </div>
                             <!-- carousel-inner -->
                           </div>
                           <!-- carousel -->
                         </div>
                         <!-- card -->
                       </div>
                       <!-- col-4 -->
                     </div>
   <!-- row -->




   <!-- row -->
   <div class="row row-sm mg-t-20">
     <div class="col-sm-6 col-lg-4">
       <div class="card shadow-base bd-0">
         <div id="carousel4" class="carousel slide" data-ride="carousel">
           <ol class="carousel-indicators">

             @foreach ($board_of_directors as $board_of_director)
              <li data-target="#carousel4" data-slide-to="{{ $board_of_director->id - 1 }}" class="{{ $board_of_director->id - 1 == 0 ? "active" : " " }}"></li>
             @endforeach
           </ol>
           <div class="carousel-inner" role="listbox">

                @foreach ($board_of_directors as $board_of_director)
                <div class="carousel-item {{ $board_of_director->id - 1 == 0 ? "active" : " " }}">

                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-text text-dark">{{ $board_of_director->relationBetweenManagementBoard->management_board }}</h5>
                      <p class="card-text">{!! html_entity_decode($board_of_director->name) !!}</p>
                    </div>
                    <img class="card-img-bottom img-fluid" src="{{ asset('uploads/management') }}/{{ $board_of_director->photo }}" class="img-fluid" alt="Image">
                  </div><!-- card -->


                  <!-- d-flex -->
                </div>
                @endforeach



             <!-- cardousel-item -->


           </div>
           <!-- carousel-inner -->
         </div>
         <!-- carousel -->
       </div>
       <!-- card -->
     </div>
     <!-- col-4 -->
     <div class="col-sm-6 col-lg-4">
       <div class="card shadow-base bd-0">
         <div id="carousel4" class="carousel slide" data-ride="carousel">
           <ol class="carousel-indicators">

             @foreach ($management_commitees as $management_commitee)
              <li data-target="#carousel4" data-slide-to="{{ $management_commitee->id - 2 }}" class="{{ $management_commitee->id - 2 == 0 ? "active" : " " }}"></li>
             @endforeach
           </ol>
           <div class="carousel-inner" role="listbox">

                @foreach ($management_commitees as $management_commitee)
                <div class="carousel-item {{ $management_commitee->id - 2 == 0 ? "active" : " " }}">

                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-text text-dark">{{ $management_commitee->relationBetweenManagementBoard->management_board }}</h5>
                      <p class="card-text">{!! html_entity_decode($management_commitee->name) !!}</p>
                    </div>
                    <img class="card-img-bottom img-fluid" src="{{ asset('uploads/management') }}/{{ $management_commitee->photo }}" class="img-fluid" alt="Image">
                  </div><!-- card -->


                  <!-- d-flex -->
                </div>
                @endforeach



             <!-- cardousel-item -->


           </div>
           <!-- carousel-inner -->
         </div>
         <!-- carousel -->
       </div>
       <!-- card -->
     </div>
     <!-- col-4 -->
     <div class="col-sm-6 col-lg-4 mg-t-20 mg-lg-t-0">
       <div class="card bd-0">
         <div id="carousel6" class="carousel slide" data-ride="carousel">
           <ol class="carousel-indicators">
             @foreach ($corporate_managements as $corporate_management)
              <li data-target="#carousel6" data-slide-to="{{ $corporate_management->id - 3 }}" class="{{ $corporate_management->id - 3 == 0 ? "active" : " " }}"></li>
             @endforeach

           </ol>
           <div class="carousel-inner" role="listbox">

              @foreach ($corporate_managements as $corporate_management)
             <div class="carousel-item {{ $corporate_management->id - 3 == 0 ? "active" : " " }}">

               <div class="card">
                 <div class="card-body">
                   <h5 class="card-text text-dark">{{ $corporate_management->relationBetweenManagementBoard->management_board }}</h5>
                   <p class="card-text">{!! html_entity_decode($corporate_management->name) !!}</p>
                 </div>
                 <img class="card-img-bottom img-fluid" src="{{ asset('uploads/management') }}/{{ $corporate_management->photo }}" class="img-fluid" alt="Image">
               </div><!-- card -->

               <!-- d-flex -->
             </div>

              @endforeach


           </div>
           <!-- carousel-inner -->
         </div>
         <!-- carousel -->
       </div>
       <!-- card -->
     </div>
     <!-- col-4 -->
   </div>
   <!-- row -->



   <!-- row -->
     <div class="row row-sm mg-t-20">
           <div class="col-sm-6 col-lg-4">
             <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">

                  @foreach ($awards as $award)
                  <div class="carousel-item {{ $award->id == 1 ? "active" : " " }}" data-interval="10000">
                    <img src="{{ asset('uploads/awards') }}/{{ $award->thumbnail }}" class="d-block w-100" alt="..." width="399" height="399">
                  </div>
                  @endforeach



               </div>


               <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="sr-only">Previous</span>
               </a>

               <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="sr-only">Next</span>
               </a>

             </div>
           </div>





           <div class="col-sm-6 col-lg-4">
             <div id="carouselExampleInterval3" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">

                  @foreach ($awards as $award)
                  <div class="carousel-item {{ $award->id == 1 ? "active" : " " }}" data-interval="10000">
                    <img src="{{ asset('uploads/fareaststar') }}/{{ $award->thumbnail }}" class="d-block w-100" alt="...">
                  </div>
                  @endforeach



               </div>
               <a class="carousel-control-prev" href="#carouselExampleInterval3" role="button" data-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carouselExampleInterval3" role="button" data-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="sr-only">Next</span>
               </a>
             </div>
           </div>




           <div class="col-sm-6 col-lg-4">
             <div id="carouselExampleInterval2" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">

                 @foreach ($corporates as $corporate)
                 <div class="carousel-item {{ $corporate->id == 1 ? "active" : " " }}" data-interval="10000">
                   <img src="{{ asset('uploads/corporate') }}/{{ $corporate->corporate }}" class="d-block w-100" alt="...">
                 </div>
                 @endforeach



               <a class="carousel-control-prev" href="#carouselExampleInterval2" role="button" data-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carouselExampleInterval2" role="button" data-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="sr-only">Next</span>
               </a>
             </div>
           </div>


     </div>
   <!-- row -->





   <!-- row -->
<div class="mg-t-20">
   <div id="carouselExampleIntervalBanner" class="carousel slide" data-ride="carousel">
     <div class="carousel-inner">

      @foreach ($sliders as $slider)
        <div class="carousel-item {{ $slider->id == 1 ? "active" : " " }}" data-interval="10000">
          <img src="{{ asset('uploads/slider') }}/{{ $slider->banner }}" class="d-block w-100" alt="...">
        </div>
      @endforeach




     </div>
     <a class="carousel-control-prev" href="#carouselExampleIntervalBanner" role="button" data-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="sr-only">Previous</span>
     </a>
     <a class="carousel-control-next" href="#carouselExampleIntervalBanner" role="button" data-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
     </a>
   </div>
 </div>

   <!-- row -->


<!-- row -->

<!-- row -->


<!-- row -->
   <div class="row row-sm mg-t-20">
      <div class="col-lg-6">
         <div class="card shadow-base bd-0">
            <div class="card-header bg-transparent pd-20">
               <h6 class="card-title tx-uppercase tx-13 mg-b-0">User History</h6>
            </div>
            <!-- card-header -->
            <table class="table table-responsive mg-b-0 tx-13">
               <thead>
                  <tr class="tx-10">
                     <th class="wd-10p pd-y-5">&nbsp;</th>
                     <th class="pd-y-5">User</th>
                     <th class="pd-y-5">Role</th>
                     <th class="pd-y-5">Since</th>
                     <th class="pd-y-5">Action</th>
                  </tr>
               </thead>
               <tbody>

        @foreach ($users as $user)
          <tr>
             <td class="pd-l-20">
                <img src="../img/img1.jpg" class="wd-36 rounded-circle" alt="Image">
             </td>
             <td>
                <a href="#" class="tx-inverse tx-13 tx-medium d-block">{{ $user->name }}</a>
                <span class="tx-11 d-block">{{ $user->email }}</span>
             </td>
             <td class="tx-13">
                <span class="square-8 bg-success mg-r-5 rounded-circle"></span> {{ $user->relationBetweenRole->role_name }}
             </td>
             <td>{{ $user->created_at->diffForHumans() }}</td>
             <td class="dropdown">
                <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info waves-effect waves-light" aria-expanded="true"><i class="icon ion-more"></i></a>
                <div class="dropdown-menu dropdown-menu-right pd-10"  style="position: absolute; transform: translate3d(51px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                   <nav class="nav nav-style-1 flex-column">
                      <a href="#" class="nav-link">Info</a>
                      <a href="#" class="nav-link">Download</a>
                      <a href="#" class="nav-link">Rename</a>
                      <a href="#" class="nav-link">Move</a>
                      <a href="#" class="nav-link">Copy</a>
                      <a href="#" class="nav-link">Delete</a>
                   </nav>
                </div>
                <!-- dropdown-menu -->
             </td>
          </tr>
        @endforeach





               </tbody>
            </table>

            <!-- card-footer -->
         </div>
         <!-- card -->
      </div>
      <!-- col-6 -->
      <div class="col-lg-6 mg-t-20 mg-lg-t-0">
         <div class="card shadow-base bd-0">
            <div class="card-header pd-20 bg-transparent">
               <h6 class="card-title tx-uppercase tx-13 mg-b-0">Product Purchases</h6>
            </div>
            <!-- card-header -->
            <table class="table table-responsive mg-b-0 tx-13">
               <thead>
                  <tr class="tx-10">
                     <th class="wd-10p pd-y-5">&nbsp;</th>
                     <th class="pd-y-5">Item Details</th>
                     <th class="pd-y-5 tx-right">Sold</th>
                     <th class="pd-y-5">Gain</th>
                     <th class="pd-y-5">Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td class="pd-l-20">
                        <img src="../img/img23.jpg" class="wd-55" alt="Image">
                     </td>
                     <td>
                        <a href="#" class="tx-inverse tx-13 tx-medium d-block">The Dothraki Shoes</a>
                        <span class="tx-11 d-block"><span class="square-8 bg-danger mg-r-5 rounded-circle"></span> 20 remaining</span>
                     </td>
                     <td class="valign-middle tx-right">3,345</td>
                     <td class="valign-middle"><span class="tx-success"><i class="icon ion-android-arrow-up mg-r-5"></i>33.34%</span> from last week</td>
                     <td class="dropdown text-center">
                        <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info waves-effect waves-light" aria-expanded="true"><i class="icon ion-more"></i></a>
                        <div class="dropdown-menu dropdown-menu-right pd-10"  style="position: absolute; transform: translate3d(51px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                           <nav class="nav nav-style-1 flex-column">
                              <a href="#" class="nav-link">Info</a>
                              <a href="#" class="nav-link">Download</a>
                              <a href="#" class="nav-link">Rename</a>
                              <a href="#" class="nav-link">Move</a>
                              <a href="#" class="nav-link">Copy</a>
                              <a href="#" class="nav-link">Delete</a>
                           </nav>
                        </div>
                        <!-- dropdown-menu -->
                     </td>
                  </tr>
                  <tr>
                     <td class="pd-l-20">
                        <img src="../img/img24.jpg" class="wd-55" alt="Image">
                     </td>
                     <td>
                        <a href="#" class="tx-inverse tx-13 tx-medium d-block">Westeros Sneaker</a>
                        <span class="tx-11 d-block"><span class="square-8 bg-success mg-r-5 rounded-circle"></span> In stock</span>
                     </td>
                     <td class="valign-middle tx-right">720</td>
                     <td class="valign-middle"><span class="tx-danger"><i class="icon ion-android-arrow-down mg-r-5"></i>21.20%</span> from last week</td>
                     <td class="dropdown text-center">
                        <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info waves-effect waves-light" aria-expanded="true"><i class="icon ion-more"></i></a>
                        <div class="dropdown-menu dropdown-menu-right pd-10"  style="position: absolute; transform: translate3d(51px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                           <nav class="nav nav-style-1 flex-column">
                              <a href="#" class="nav-link">Info</a>
                              <a href="#" class="nav-link">Download</a>
                              <a href="#" class="nav-link">Rename</a>
                              <a href="#" class="nav-link">Move</a>
                              <a href="#" class="nav-link">Copy</a>
                              <a href="#" class="nav-link">Delete</a>
                           </nav>
                        </div>
                        <!-- dropdown-menu -->
                     </td>
                  </tr>
                  <tr>
                     <td class="pd-l-20">
                        <img src="../img/img25.jpg" class="wd-55" alt="Image">
                     </td>
                     <td>
                        <a href="#" class="tx-inverse tx-13 tx-medium d-block">Selonian Hand Bag</a>
                        <span class="tx-11 d-block"><span class="square-8 bg-success mg-r-5 rounded-circle"></span> In stock</span>
                     </td>
                     <td class="valign-middle tx-right">1,445</td>
                     <td class="valign-middle"><span class="tx-success"><i class="icon ion-android-arrow-up mg-r-5"></i>23.34%</span> from last week</td>
                     <td class="dropdown text-center">
                        <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info waves-effect waves-light" aria-expanded="true"><i class="icon ion-more"></i></a>
                        <div class="dropdown-menu dropdown-menu-right pd-10"  style="position: absolute; transform: translate3d(51px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                           <nav class="nav nav-style-1 flex-column">
                              <a href="#" class="nav-link">Info</a>
                              <a href="#" class="nav-link">Download</a>
                              <a href="#" class="nav-link">Rename</a>
                              <a href="#" class="nav-link">Move</a>
                              <a href="#" class="nav-link">Copy</a>
                              <a href="#" class="nav-link">Delete</a>
                           </nav>
                        </div>
                        <!-- dropdown-menu -->
                     </td>
                  </tr>
                  <tr>
                     <td class="pd-l-20">
                        <img src="../img/img26.jpg" class="wd-55" alt="Image">
                     </td>
                     <td>
                        <a href="#" class="tx-inverse tx-13 tx-medium d-block">Kel Dor Sunglass</a>
                        <span class="tx-11 d-block"><span class="square-8 bg-warning mg-r-5 rounded-circle"></span> 45 remaining</span>
                     </td>
                     <td class="valign-middle tx-right">2,500</td>
                     <td class="valign-middle"><span class="tx-success"><i class="icon ion-android-arrow-up mg-r-5"></i>28.78%</span> from last week</td>
                     <td class="dropdown text-center">
                        <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info waves-effect waves-light" aria-expanded="true"><i class="icon ion-more"></i></a>
                        <div class="dropdown-menu dropdown-menu-right pd-10"  style="position: absolute; transform: translate3d(51px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                           <nav class="nav nav-style-1 flex-column">
                              <a href="#" class="nav-link">Info</a>
                              <a href="#" class="nav-link">Download</a>
                              <a href="#" class="nav-link">Rename</a>
                              <a href="#" class="nav-link">Move</a>
                              <a href="#" class="nav-link">Copy</a>
                              <a href="#" class="nav-link">Delete</a>
                           </nav>
                        </div>
                        <!-- dropdown-menu -->
                     </td>
                  </tr>
                  <tr>
                     <td class="pd-l-20">
                        <img src="../img/img27.jpg" class="wd-55" alt="Image">
                     </td>
                     <td>
                        <a href="#" class="tx-inverse tx-13 tx-medium d-block">Kubaz Sunglass</a>
                        <span class="tx-11 d-block"><span class="square-8 bg-success mg-r-5 rounded-circle"></span> In stock</span>
                     </td>
                     <td class="valign-middle tx-13 tx-right">223</td>
                     <td class="valign-middle"><span class="tx-danger"><i class="icon ion-android-arrow-down mg-r-5"></i>18.18%</span> from last week</td>
                     <td class="dropdown  text-center">
                        <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info waves-effect waves-light" aria-expanded="true"><i class="icon ion-more"></i></a>
                        <div class="dropdown-menu dropdown-menu-right pd-10"  style="position: absolute; transform: translate3d(51px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                           <nav class="nav nav-style-1 flex-column">
                              <a href="#" class="nav-link">Info</a>
                              <a href="#" class="nav-link">Download</a>
                              <a href="#" class="nav-link">Rename</a>
                              <a href="#" class="nav-link">Move</a>
                              <a href="#" class="nav-link">Copy</a>
                              <a href="#" class="nav-link">Delete</a>
                           </nav>
                        </div>
                        <!-- dropdown-menu -->
                     </td>
                  </tr>
               </tbody>
            </table>
            <div class="card-footer tx-13 pd-y-15 bg-transparent">
               <a href="#"><i class="fa fa-angle-down mg-r-5"></i>View All Products</a>
            </div>
            <!-- card-footer -->
         </div>
         <!-- card -->
      </div>
      <!-- col-6 -->
   </div>
<!-- row -->


          <!-- middle content -->
</div>


@endsection
