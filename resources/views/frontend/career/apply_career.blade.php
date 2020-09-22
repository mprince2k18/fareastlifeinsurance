@extends('frontend.homepage.app')

@section('css')





@endsection

@section('content')


  <section class="breadcrumb_area breadcrumb2 bgimage biz_overlay">
        <div class="bg_image_holder" style="background-image: url(https://res.cloudinary.com/dhe6napl7/image/upload/v1580805955/clients/fareast/img/breadbg.jpg); opacity: 1;">
            <img src="https://res.cloudinary.com/dhe6napl7/image/upload/v1580805955/clients/fareast/img/breadbg.jpg" alt="img/breadbg.jpg">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb_wrapper d-flex flex-column align-items-center">
                        <h4 class="page_title">Submit Resume &amp; Apply</h4>
                    </div>
                </div>
            </div><!-- ends: .row -->
        </div>
    </section>


    <section class="apply-form p-top-100 p-bottom-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="apply-form--header">
                        <h3>Apply For This Potition</h3>
                        <p>Submit your resume below to apply for the job <span>"Account Business Manager"</span>.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="border-bottom p-bottom-25 m-bottom-40">Personal Information</h4>
                    <form action="#">
                        <div class="form-group">
                            <label>First Name<span class="sup">*</span></label>
                            <input type="text" class="form-control" placeholder="First Name">
                        </div><!-- ends: .form-group -->
                        <div class="form-group">
                            <label>Last Name<span class="sup">*</span></label>
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div><!-- ends: .form-group -->
                        <div class="form-group">
                            <label>Email Address<span class="sup">*</span></label>
                            <input type="email" class="form-control" placeholder="Email">
                        </div><!-- ends: .form-group -->
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" placeholder="Phone">
                        </div><!-- ends: .form-group -->
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" placeholder="Address">
                        </div><!-- ends: .form-group -->
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" class="form-control" placeholder="City">
                        </div><!-- ends: .form-group -->
                        <div class="form-group">
                            <label>State</label>
                            <div class="select-basic">
                                <select class="form-control">
                                    <option>Select an option</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                    <option>Option 4</option>
                                </select>
                            </div>
                        </div><!-- ends: .form-group -->
                        <div class="form-group">
                            <label>Country</label>
                            <div class="select-basic">
                                <select class="form-control">
                                    <option>Select Country</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                    <option>Option 4</option>
                                </select>
                            </div>
                        </div><!-- ends: .form-group -->
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control" placeholder="Company Name">
                        </div><!-- ends: .form-group -->
                        <div class="form-group">
                            <label>Professional Title</label>
                            <input type="text" class="form-control" placeholder="e.g. Web Developer">
                        </div><!-- ends: .form-group -->
                        <div class="form-group">
                            <label>Skills <span class="optional">(Optional)</span></label>
                            <input type="text" class="form-control" placeholder="Comma separate a list of relevant skills">
                        </div><!-- ends: .form-group -->
                        <div class="form-group">
                            <label>Photo <span class="optional">(Optional)</span></label>
                            <div class="custom-photo-upload">
                                <input type="file" class="custom-upload">
                                <div class="custom-upload-box d-flex">
                                    <div class="image-box">
                                        <span class="icon"><i class="la la-image"></i></span>
                                        <span class="file-name"><i class="la la-plus"></i> Add Image</span>
                                    </div>
                                    <div class="image-info">
                                        <span>200 x 200 pixel</span>
                                        <span>Max File Size: 200kb</span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- ends: .form-group -->

                        <h4 class="border-bottom p-bottom-25 m-bottom-50 m-top-70">Academic Information</h4>
                        <div class="form-group">
                            <label>University Name</label>
                            <input type="text" class="form-control" placeholder="University / School Name">
                        </div><!-- ends: .form-group -->
                        <div class="form-group">
                            <label>Degree Level</label>
                            <div class="select-basic">
                                <select class="form-control">
                                    <option>Select an option</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                    <option>Option 4</option>
                                </select>
                            </div>
                        </div><!-- ends: .form-group -->
                        <div class="form-group">
                            <label>Grade Point Average</label>
                            <input type="text" class="form-control" placeholder="Grade Point">
                        </div><!-- ends: .form-group -->

                        <h4 class="border-bottom p-bottom-25 m-bottom-50 m-top-70">Add Resume<span class="color-primary">*</span></h4>
                        <div class="form-group">
                            <div class="custom-upload">
                                <input type="file" class="custom-upload">
                                <div class="custom-upload-box d-flex">
                                    <div class="upload-btn">
                                        <a href="#" class="btn btn-primary btn-icon icon-right">Choose Resume <i class="la la-cloud-upload"></i></a>
                                    </div>
                                    <div class="upload-info">
                                        <span>200 x 200 pixel</span>
                                        <span>Max File Size: 200kb</span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- ends: .form-group -->





                    
                        <div class="btns m-top-50">
                            <a href="#" class="btn btn-primary m-right-25">Apply Now</a>
                            <a href="#" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div><!-- end: .row -->
        </div>
    </section>






@endsection

@section('js')



@endsection
