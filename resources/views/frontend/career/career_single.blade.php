@extends('frontend.homepage.app')

@section('css')





@endsection

@section('content')


  <section class="breadcrumb_area breadcrumb3 bgimage biz_overlay">
        <div class="bg_image_holder" style="background-image: url(https://res.cloudinary.com/dhe6napl7/image/upload/v1580805316/clients/fareast/img/bg1.jpg); opacity: 1;">
            <img src="https://res.cloudinary.com/dhe6napl7/image/upload/v1580805316/clients/fareast/img/bg1.jpg" alt="img/breadbg2.jpg">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb_wrapper d-flex flex-column align-items-center">
                        <h4 class="page_title">Account Business Manager</h4>
                        <div class="action-btns m-top-35">
                            <ul class="d-flex">
                                <li><a href="{{ route('apply_career') }}" class="btn btn-success m-right-5">Apply Now</a></li>
                            </ul>
                        </div><!-- ends: .action-btns -->
                    </div><!-- ends: .breadcrumb_wrapper -->
                </div>
            </div><!-- ends: .row -->
        </div>
    </section>


    <section class="information-box p-top-140 p-bottom-60">
        <div class="information-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow-lg-2 border-0">
                            <div class="card-header">
                                <h5 class="m-bottom-0">Quick Information</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <ul>
                                            <li class="d-flex">
                                                <span><i class="la la-user"></i> Requisition ID:</span>
                                                <span>1657364</span>
                                            </li>
                                            <li class="d-flex">
                                                <span><i class="la la-calendar-check-o"></i> Posting Date:</span>
                                                <span>12/08/2019</span>
                                            </li>
                                        </ul>
                                    </div><!-- ends: .col-lg-4 -->
                                    <div class="col-lg-4">
                                        <ul>
                                            <li class="d-flex">
                                                <span><i class="la la-tag"></i> Category:</span>
                                                <span>Services</span>
                                            </li>
                                            <li class="d-flex">
                                                <span><i class="la la-map-marker"></i> Location:</span>
                                                <span>Pontiac, Michigan, United States</span>
                                            </li>
                                        </ul>
                                    </div><!-- ends: .col-lg-4 -->
                                    <div class="col-lg-4">
                                        <ul>
                                            <li class="d-flex">
                                                <span><i class="la la-clock-o"></i> Schedule:</span>
                                                <span>Full Time</span>
                                            </li>
                                            <li class="d-flex">
                                                <span><i class="la la-briefcase"></i> Employee Status:</span>
                                                <span>Day Job</span>
                                            </li>
                                        </ul>
                                    </div><!-- ends: .col-lg-4 -->
                                </div>
                            </div>
                        </div><!-- ends: .card -->
                    </div><!-- ends: .col-lg-12 -->
                </div>
            </div>
        </div>
    </section>


    <section class="job-contents p-top-20 p-bottom-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Job Description</h3>
                    <p>We can offer you a wide range of opportunities to build a varied and rewarding career.We offer attractive careers for talented and ambitious professionals from a wide range of backgrounds, with different skills, capabilities. Project managers ensure that a project is completed on time and within budget, that the project's objectives are met and that everyone is doing their job properly. Projects are usually separate to usual day-to-day business activities and require a group of people to work together to achieve a set of specific objectives. Project managers over see the project to ensure the desired result is achieved, the most efficient resources are used and the different interests involved are satisfied.</p>

                    <div class="hr-divider2"></div>

                    <h3>Key Responsibilities</h3>
                    <p>We can offer you a wide range of opportunities to build a varied and rewarding career.We offer attractive careers for talented and ambitious professionals from a wide range of backgrounds, with different skills, capabilities. </p>
                    <div class="m-top-25">

    <ul class="bullet--list2">

    <li class="bullet_list">Build next-generation web applications with a focus on the client</li>


    <li class="bullet_list">Redesign UI’s, implement new UI’s, and pick up Java as necessary.</li>


    <li class="bullet_list">Explore and design dynamic compelling consumer experiences.</li>


    <li class="bullet_list">Design and build scalable framework for web applications.</li>

    </ul><!-- ends: .bullet-list2 -->

                    </div>

                    <div class="hr-divider2"></div>

                    <h3>Qualifications / Requirements</h3>
                    <p>We can offer you a wide range of opportunities to build a varied and rewarding career.We offer attractive careers for talented and ambitious professionals from a wide range of backgrounds, with different skills, capabilities. </p>
                    <div class="m-top-25">

    <ul class="bullet--list2">

    <li class="bullet_list">Build next-generation web applications with a focus on the client</li>


    <li class="bullet_list">Redesign UI’s, implement new UI’s, and pick up Java as necessary.</li>


    <li class="bullet_list">Explore and design dynamic compelling consumer experiences.</li>


    <li class="bullet_list">Design and build scalable framework for web applications.</li>

    </ul><!-- ends: .bullet-list2 -->

                    </div>

                    <div class="hr-divider2"></div>

                    <div class="action-btns">
                        <ul class="d-flex">
                            <li><a href="{{ route('apply_career') }}" class="btn btn-primary m-right-5">Apply Now</a></li>
                        </ul>
                    </div>
                </div><!-- ends: .col-lg-12 -->
            </div>
        </div>
    </section>








@endsection

@section('js')



@endsection
