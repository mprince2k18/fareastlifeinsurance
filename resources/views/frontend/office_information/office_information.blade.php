@extends('frontend.homepage.app')

@section('css')



.card--team1 .card-body .team-designation{
  width: 100%;
  padding: 0;
  background: #E77E2E;
  border-radius: 0;
  color: #fff;
}

  #breadcrumb {
    list-style: none;
    display: inline-block;
  }
  #breadcrumb .icon {
    font-size: 14px;
  }
  #breadcrumb li {
    float: left;
  }
  #breadcrumb li a {
    color: #FFF;
    display: block;
    background: #c10505;
    text-decoration: none;
    position: relative;
    height: 40px;
    line-height: 40px;
    padding: 0 10px 0 5px;
    text-align: center;
    margin-right: 23px;
  }
  #breadcrumb li:nth-child(even) a {
    background-color: #A50404;
  }
  #breadcrumb li:nth-child(even) a:before {
    border-color: #A50404;
    border-left-color: transparent;
  }
  #breadcrumb li:nth-child(even) a:after {
    border-left-color: #A50404;
  }
  #breadcrumb li:first-child a {
    padding-left: 15px;
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
    border-radius: 0;
  }
  #breadcrumb li:first-child a:before {
    border: none;
  }
  #breadcrumb li:last-child a {
    padding-right: 15px;
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
    border-radius: 0;
  }
  #breadcrumb li:last-child a:after {
    border: none;
  }
  #breadcrumb li a:before, #breadcrumb li a:after {
    content: "";
    position: absolute;
    top: 0;
    border: 0 solid #c10505;
    border-width: 20px 10px;
    width: 0;
    height: 0;
  }
  #breadcrumb li a:before {
    left: -20px;
    border-left-color: transparent;
  }
  #breadcrumb li a:after {
    left: 100%;
    border-color: transparent;
    border-left-color: #c10505;
  }
  #breadcrumb li a:hover {
    background-color: #212121;
  }
  #breadcrumb li a:hover:before {
    border-color: #212121;
    border-left-color: transparent;
  }
  #breadcrumb li a:hover:after {
    border-left-color: #212121;
  }
  #breadcrumb li a:active {
    background-color: #666666;
  }
  #breadcrumb li a:active:before {
    border-color: #666666;
    border-left-color: transparent;
  }
  #breadcrumb li a:active:after {
    border-left-color: #666666;
  }

.office_blockquote{
  padding: 0.8rem 3.33333rem;
}

.office_blockquotes{
  margin-top: 20px;
}

#myTable{
  margin-top: 50px;
}

.btn-arrow-right{
position: relative;
padding-left: 18px;
padding-right: 18px;
}
.btn-arrow-right:before,.btn-arrow-right:after{
content:"";
position: absolute;
top: 6px; 
width: 30px; 
height: 35px; 
background: inherit;
border: inherit; 
border-left-color: transparent; 
border-bottom-color: transparent;
border-radius: 0px 4px 0px 0px;
-webkit-border-radius: 0px 4px 0px 0px;
-moz-border-radius: 0px 4px 0px 0px;
transform: rotate(45deg); 
-webkit-transform: rotate(45deg);
-moz-transform: rotate(45deg);
-o-transform: rotate(45deg);
-ms-transform: rotate(45deg);
}
.btn-arrow-right:before{
left: -18px;
background-color: white;
}
.btn-arrow-right:after{
right: -15px;
z-index: 1;
width: 32px;
height: 29px;
top: 7px;
}
.nav-pills .nav-item .nav-link{
background-color:#E1DEE6;
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
                          <h4 class="page_title">OFFICE INFORMATION</h4>
                      </div>
                  </div>
              </div>
          </div>
  </section>


  <div class="container pt-3">
    <div class="row">
      <div class="col-md-3 offset-md-3">
        <a href="{{route('office_information')}}"> <div class="ekok" style="background:url(https://res.cloudinary.com/onexa/image/upload/v1581852983/unnamed_jzmugy.png); background-repeat: no-repeat; background-size: cover;padding:10%">
          <span style="font-weight: 700;color: #000;">EKOK</span>
        </div></a>
      </div>
      <div class="col-md-3">
        <a href="{{route('office_information_sb')}}"><div class="ekok" style="background:url(https://res.cloudinary.com/onexa/image/upload/v1582197632/dsadsa_et5fob.png); background-repeat: no-repeat; background-size: cover;padding:10%">
          <span style="font-weight: 700;color: #000;">SB</span>
        </div></a>
      </div>

    </div>

  </div>


  <div class="container mt-3 mb-3">
    <div class="row">
      <div class="col-md-11 ml-md-5">
          <center>
        <input type="search" id="myInput" class="form-control" name="search" placeholder="Search Here">
        </center>
      </div>
    </div>
  </div>


<div class="container mt-2">

  <div class="row">

    <div class="col-md-9 offset-md-3">

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" style="margin-right: 15px;">
              <button class="nav-link active btn-arrow-right" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Divisional</button>
            </li>
            <li class="nav-item" style="margin-right: 15px;">
              <button class="nav-link btn-arrow-right" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Service Center</button>
            </li>
            <li class="nav-item" style="margin-right: 15px;">
              <button class="nav-link btn-arrow-right" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Zonal Office</button>
            </li>
            <li class="nav-item" style="margin-right: 15px;">
              <button class="nav-link btn-arrow-right" id="pills-branch-tab" data-toggle="pill" href="#pills-branch" role="tab" aria-controls="pills-branch" aria-selected="false">Branch Office</button>
            </li>
          </ul>

    </div>



  </div>







<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    {{-- ----------------------------------------------------- --}}
    <div class="container" id="myTable">
      <div class="row">

      @foreach ($doins['office_info'] as $oin)   
        <div class="col-md-3">
          <div class="card card-shadow card--team1 hvr-grow">
            <div class="card-body text-center">
               @php
                $file = basename($oin['INCH_IMG_PATH']);
               @endphp
                <img src="{{URL::asset('http://202.164.213.67/android/IMG_APPS/'.$file)}}" alt="" class="rounded-circle" style="width: 50%;">
                <h6><a href="team-single.html">{{ $oin['IN_NAME'] }}</a></h6>
                <span class="team-designation">{{ $oin['OFF_NAME'] }}</span>
                <div class="team_information text-left">
                  <div class="team-tel">
                    <i class="fas fa-tty" style="padding: 0 5px;"></i><span style="padding: 8px 0;font-size:13px;text-align: justify;">{{ $oin['MOB'] }}</span>
                  </div>
                  <div class="team-address">
                    <i class="far fa-address-book" style="padding: 0 5px;"></i><span style="font-size: 12px;padding: 26px;margin-top: -48px;text-align: left;">{{ $oin['ADDRESS'] }}</span>
                  </div>
                </div>

            </div>
        </div>
        </div>
       @endforeach


    
        </div>
      </div>
    {{-- ----------------------------------------------------- --}}
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    {{-- ----------------------------------------------------- --}}
    <div class="container" id="myTable">
      <div class="row">
        @foreach ($soins['office_info'] as $oin)   
        <div class="col-md-3">
          <div class="card card-shadow card--team1 hvr-grow">
            <div class="card-body text-center">
               @php
                $file = basename($oin['INCH_IMG_PATH']);
               @endphp
                <img src="{{URL::asset('http://202.164.213.67/android/IMG_APPS/'.$file)}}" alt="" class="rounded-circle" style="width: 50%;">
                <h6><a href="team-single.html">{{ $oin['IN_NAME'] }}</a></h6>
                <span class="team-designation">{{ $oin['OFF_NAME'] }}</span>
                <div class="team_information text-left">
                  <div class="team-tel">
                    <i class="fas fa-tty" style="padding: 0 5px;"></i><span style="padding: 8px 0;font-size:13px;text-align: justify;">{{ $oin['MOB'] }}</span>
                  </div>
                  <div class="team-address">
                    <i class="far fa-address-book" style="padding: 0 5px;"></i><span style="font-size: 12px;padding: 26px;margin-top: -48px;text-align: left;">{{ $oin['ADDRESS'] }}</span>
                  </div>
                </div>

            </div>
        </div>
        </div>
       @endforeach


        </div>
      </div>
    {{-- ----------------------------------------------------- --}}
  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
    {{-- ----------------------------------------------------- --}}
    <div class="container" id="myTable">
      <div class="row">
      @foreach ($zoins['office_info'] as $oin)   
               <div class="col-md-3">
          <div class="card card-shadow card--team1 hvr-grow">
            <div class="card-body text-center">
               @php
                $file = basename($oin['INCH_IMG_PATH']);
               @endphp
                <img src="{{URL::asset('http://202.164.213.67/android/IMG_APPS/'.$file)}}" alt="" class="rounded-circle" style="width: 50%;">
                <h6><a href="team-single.html">{{ $oin['IN_NAME'] }}</a></h6>
                <span class="team-designation">{{ $oin['OFF_NAME'] }}</span>
                <div class="team_information text-left">
                  <div class="team-tel">
                    <i class="fas fa-tty" style="padding: 0 5px;"></i><span style="padding: 8px 0;font-size:13px;text-align: justify;">{{ $oin['MOB'] }}</span>
                  </div>
                  <div class="team-address">
                    <i class="far fa-address-book" style="padding: 0 5px;"></i><span style="font-size: 12px;padding: 26px;margin-top: -48px;text-align: left;">{{ $oin['ADDRESS'] }}</span>
                  </div>
                </div>

            </div>
        </div>
        </div>
       @endforeach

        </div>
      </div>
    {{-- ----------------------------------------------------- --}}
  </div>
  <div class="tab-pane fade" id="pills-branch" role="tabpanel" aria-labelledby="pills-branch-tab">
    {{-- ----------------------------------------------------- --}}
    <div class="container" id="myTable">
      <div class="row">
    @foreach ($boins['office_info'] as $oin)   
              <div class="col-md-3">
          <div class="card card-shadow card--team1 hvr-grow">
            <div class="card-body text-center">
               @php
                $file = basename($oin['INCH_IMG_PATH']);
               @endphp
                <img src="{{URL::asset('http://202.164.213.67/android/IMG_APPS/'.$file)}}" alt="" class="rounded-circle" style="width: 50%;">
                <h6><a href="team-single.html">{{ $oin['IN_NAME'] }}</a></h6>
                <span class="team-designation">{{ $oin['OFF_NAME'] }}</span>
                <div class="team_information text-left">
                  <div class="team-tel">
                    <i class="fas fa-tty" style="padding: 0 5px;"></i><span style="padding: 8px 0;font-size:13px;text-align: justify;">{{ $oin['MOB'] }}</span>
                  </div>
                  <div class="team-address">
                    <i class="far fa-address-book" style="padding: 0 5px;"></i><span style="font-size: 12px;padding: 26px;margin-top: -48px;text-align: left;">{{ $oin['ADDRESS'] }}</span>
                  </div>
                </div>

            </div>
        </div>
        </div>
       @endforeach
       
 
        </div>
      </div>
    {{-- ----------------------------------------------------- --}}
  </div>
</div>

</div>







</div>








@endsection

@section('js')

<script type="text/javascript">

  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable .col-md-3").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });

</script>


@endsection
