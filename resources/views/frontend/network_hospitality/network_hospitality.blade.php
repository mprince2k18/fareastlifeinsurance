@extends('frontend.homepage.app')

@section('css_cdn')

@endsection

@section('css')
  #topbar{
    background: #2d3436;
    z-index: 1;
    padding: 1px 0;
  }
  
  .accordion_one .accordion-single h6 a[aria-expanded=false]:before, .accordion_two .accordion-single h6 a[aria-expanded=false]:before{
  
  font-family:fontawesome !important;
  content:'\f063'!important;
  
  }
  
  .accordion_one .accordion-single h6 a[aria-expanded=true]:before, .accordion_two .accordion-single h6 a[aria-expanded=true]:before{
  font-family:fontawesome !important;
  content:'\f062'!important;
  }
  
  .accordion-contents{
    padding:5px 20px!important;
  }
  
  

  header h2 {
            color: #ff9933;
            text-align: center;
            font-size: 3em;
            padding: 20px;
            font-weight: bold;
        }



        .left {
            width: 0;
            height: 0;
            border-bottom: 400px solid #ff9933;
            border-right: 65vw solid transparent;
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .right {
            width: 0;
            height: 0;
            border-bottom: 400px solid #ffcc99;
            border-left: 65vw solid transparent;
            position: absolute;
            bottom: 0;
            right: 0;
        }

        .premium-box {
            background: #fff;
            box-shadow: 0px 0px 10px gray;
            border-radius: 10px;
            padding: 40px;
            overflow: hidden;
            z-index: 1;
        }

        .img-box {
            width: 50%;
            height: 100%;
            float: left;
            padding: 20px;
        }

        .img-box::after {
            content: '';
            display: block;
            border-right: 2px solid gray;
            height: 400px;
            vertical-align: middle;

        }

        .form {
            width: 50%;
            float: left;
            padding: 20px;
        }

        form input{
            display: block;
            width: 100%;
            margin: 40px 0px;
            padding: 10px 0px;
            border-radius: 20px;
            border: 1px solid gray;
        }
        form input{
            padding-left: 40px;
        }
        .inputWithIcon{
            position: relative;
        }
        .inputWithIcon i{
            position: absolute;
            top: 0px;
            left: 0px;
            font-size: 25px;
            padding: 12px 8px;
            color: #009966;
        }
        .img-box{
            position: relative;
        }
        .img-box img{
            width: 400px;
            height: 400px;
            position: absolute;
            top: 0px;
            left: 0px;
            bottom: 0px;
            margin: auto;
        }
        button{
            display: block;
            margin: auto;
            background-color: #ff9933;
            color: #fff;
            padding: 10px 20px;
            font-size: 20px;
            font-weight: bold;
            border: none;
            border-radius: 25px;
        }

        .premium-box{
          margin-top: 20%;
        }

        .policy_header{
          margin-top: 5%;
          z-index: 0;
        }

        .left{
          position: fixed;
          top: 39%;
        }

        .right{
          position: fixed;
          top: 39%;
        }

        .accordion_one a, p{
          color: #000;
        }

        .accordion-heading a{
          font-weight: 700 !important;
          padding: 20px !important;
        }
        .accordion-heading p{
          padding: 20px !important;
        }

@endsection

@section('content')
<style type="text/css">
/*    .accordion-heading p {
 
    padding-top: 0px !important;
    margin-top: -19px;
   
}
.accordion-contents ul li{
    color: #000;
}*/

.accordion-contents ul, li {
   list-style-type: disc !important;
}
.accordion-contents ol, li {
   list-style-type: disc !important;
}

</style>



  <header class="policy_header">
         <h2>Network Hospitality</h2>
     </header>

     <section id="premium">
         <div class="container">
             <div class="row">
                 <div class="premium-box col-sm-12">

                   <div class="col-lg-12 bg-success py-2">
                      <div class="divider text-center">
                          <h1 class="color-light">SELECT YOUR AREA</h1>
                      </div>
                    </div>


                    <div class="col-lg-12 py-4">

    <div class="accordion accordion_one" id="accordion_one">
         @php $i = 0 @endphp
         @foreach ($nhs as $nh)
         @php $i++; @endphp
        <div class="accordion-single">
            <div class="accordion-heading" id="heading{{$i}}" style="background: #EAFECB">
                <h6 class="mb-0">
                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse{{$i}}" @if($i==1) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="collapse{{$i}}">
                       {{ $nh->title }}
                    </a>

                </h6>
                 <p>{{ $nh->sdes }}</p>
               
            </div>

            <div id="collapse{{$i}}" class="collapse @if($i==1) show @endif" aria-labelledby="heading{{$i}}" data-parent="#accordion_one">
                <div class="accordion-contents">
                    <p>{!! $nh->desc !!}</p>
                </div>
            </div><!-- Ends: .collapseOne -->
        </div><!-- Ends: .accordion-single -->
       @endforeach
       {{--<div class="accordion-single">
            <div class="accordion-heading" id="headingTwo" style="background: #EAFECB">
                <h6 class="mb-0">
                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Digitalization and Regulation Drive Tejarat Agenda
                    </a>
                </h6>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion_one">
                <div class="accordion-contents">
                    <p>Investiga tiones demonstr averun lectores legere melius quod kequa legunt saepius. Claritas est
                        etiam pro cessus dynamicus qui sequitur mutatin onem consuetudium. Investiga tiones demonstr
                        averunt lectores legere me liusked quod kequa legunt saepius. Claritas est etiam pro cessus.
                        Sequitur mutatin onem consuetudium.</p>
                </div>
            </div>
        </div><!-- Ends: .accordion-single -->

         <div class="accordion-single">
            <div class="accordion-heading" id="headingThree" style="background: #EAFECB">
                <h6 class="mb-0">
                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Insurance IT Transformation – Enabling Digital Change
                    </a>
                </h6>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion_one">
                <div class="accordion-contents">
                    <p>Investiga tiones demonstr averun lectores legere melius quod kequa legunt saepius. Claritas est
                        etiam pro cessus dynamicus qui sequitur mutatin onem consuetudium. Investiga tiones demonstr
                        averunt lectores legere me liusked quod kequa legunt saepius. Claritas est etiam pro cessus.
                        Sequitur mutatin onem consuetudium.</p>
                </div>
            </div><!-- Ends: .collapseOne -->
        </div><!-- Ends: .accordion-single -->

        <div class="accordion-single">
            <div class="accordion-heading" id="headingFour" style="background: #EAFECB">
                <h6 class="mb-0">
                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        The Power of an Omnichannel
                    </a>
                </h6>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion_one">
                <div class="accordion-contents">
                    <p>Investiga tiones demonstr averun lectores legere melius quod kequa legunt saepius. Claritas est
                        etiam pro cessus dynamicus qui sequitur mutatin onem consuetudium. Investiga tiones demonstr
                        averunt lectores legere me liusked quod kequa legunt saepius. Claritas est etiam pro cessus.
                        Sequitur mutatin onem consuetudium.</p>
                </div>
            </div><!-- Ends: .collapseOne -->
        </div><!-- Ends: .accordion-single -->

        <div class="accordion-single">
            <div class="accordion-heading" id="headingFive" style="background: #EAFECB">
                <h6 class="mb-0">
                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Insurance IT Transformation – Enabling Digital Change
                    </a>
                </h6>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion_one">
                <div class="accordion-contents">
                    <p>Investiga tiones demonstr averun lectores legere melius quod kequa legunt saepius. Claritas est
                        etiam pro cessus dynamicus qui sequitur mutatin onem consuetudium. Investiga tiones demonstr
                        averunt lectores legere me liusked quod kequa legunt saepius. Claritas est etiam pro cessus.
                        Sequitur mutatin onem consuetudium.</p>
                </div>
            </div><!-- Ends: .collapseOne -->
        </div><!-- Ends: .accordion-single -->

        <div class="accordion-single">
            <div class="accordion-heading" id="headingSix" style="background: #EAFECB">
                <h6 class="mb-0">
                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Insurance IT Transformation – Enabling Digital Change
                    </a>
                </h6>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion_one">
                <div class="accordion-contents">
                    <p>Investiga tiones demonstr averun lectores legere melius quod kequa legunt saepius. Claritas est
                        etiam pro cessus dynamicus qui sequitur mutatin onem consuetudium. Investiga tiones demonstr
                        averunt lectores legere me liusked quod kequa legunt saepius. Claritas est etiam pro cessus.
                        Sequitur mutatin onem consuetudium.</p>
                </div>
            </div><!-- Ends: .collapseOne -->
        </div><!-- Ends: .accordion-single -->--}}

    </div><!-- Ends: #accordion_one -->

                </div>


                 </div>
             </div>
         </div>
     </section>

     <section id="divider">
         <div id="divider">
             <div class="left"></div>
             <div class="right"></div>
         </div>
     </section>



@endsection

@section('js')

@endsection
