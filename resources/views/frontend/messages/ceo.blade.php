@extends('frontend.homepage.app')

@section('css')

  p{
    color: #000;
  }

.ceo_message p{
  color: #000;
  text-align: justify;
  font-size: 22px;
  font-family: 'Ubuntu', sans-serif !important;
  padding: 0 !important;
}


.footer--dark{
  margin-top: 80px;
}


.sign p:nth-child(2){
  display: none;
}

{{-- .sign p:nth-child(3){
  display: none;
} --}}

{{-- .sign p:nth-child(4){
  display: none;
} --}}

.sign p:nth-child(5){
  display: none;
}

{{-- .sign p:nth-child(6){
  display: none;
} --}}

.messege_content{
  margin-top: 120px;
}
.title {
            background-color: #dfe4e7;
        }
.title h1 {
          color: #00a651;
          padding: 20px;
          font-size: 3em;
          margin-left: 50px;
      }
.img_box {
            width: 35%;
            float: left;
            text-align: center;
        }

        .img_box img {
            width: 100%;
            height: 100%;
        }
        .img_box h2{
            font-size: 2em;
            margin: 20px;
        }
        .img_box p{
            font-size: 1.0em;
            color: #000;
        }

        .text_box {
            width: 65%;
            float: left;
        }

        .text_box p {
            margin-bottom: 10px;
            font-size: 1.2em;
            padding: 2%;
            font-family: 'Lora', serif !important;
        }

        .sign,
        .qr {
            width: 50%;
            float: left;
        }
        .qr img{
            width: 200px;
        }
        /*responsive*/
        @media only screen and (max-width: 768px) {
            .messege .img_box, .text_box{
                width: 100%;
            }
        }
        @media only screen and (max-width: 600px) {
            .title h1{
                font-size: 2em;
            }
        }

        #topbar{
          background: #2d3436;
          z-index: 1;
          padding: 1px 0;
        }

/* Top left text */
.top-left {
  position: absolute;
  text-align: justify;
  font-size: 50px;
  color: #66E12C;
  font-weight: 700;
}

.centered {
  position: absolute;
  top: 50%;
  left: 25%;
  transform: translate(-50%, -50%);
}
.containerceo {
  position: relative;
  text-align: center;
  color: white;
}




@endsection

@section('content')



<div class="container-fluid">
  <div class="row">
    <div class="col-md-12" style="background: url(https://res.cloudinary.com/onexa/image/upload/v1582003352/86695775_167425011374183_7568987747247980544_n_hpmq4c.png);  background-size: contain; background-repeat: no-repeat;">


  @forelse ($single_message as $message)
  
  @if($loop->last)

<section class="ceo_div">


  <section class="ceo_header" style="margin-top: 84px;">
      <div class="containerceo">
      <img src="{{URL::to('uploads/ceo')}}/{{ $message->long_photo }}" alt="Snow" class="img-fluid" style="height: 500px; width: 1300px;">
      <div class="centered top-left" >Message From The <br> Chief Executive Office</div>
      </div>
  </section>


  <section class="ceo_message" style="margin-top: 5%;">
    <div class="container">

    {!! html_entity_decode($message->chairman_message) !!}
    
    <br>
    <div class="signature">
          <img src="{{ asset('uploads/signature') }}/{{ $message->signature }}" class="img-fluid" alt="">
        </div>
        <div class="ceo_name">
          {!! html_entity_decode($message->name) !!}
        </div>
        <div class="ceo_position">
          {!! html_entity_decode($message->position) !!}
        </div>
        <div class="qr_code">
        <img src="{{ asset('uploads/qr_code') }}/{{ $message->qr_code }}" style="width:200px; float: left;" class="img-fluid" alt="">
      </div>

    </div>
  </section>

  <section class="ceo_footer">
    <div class="row">
    <div class="col-md-5 offset-md-1">



      <!--<div class="ceo_left" style="padding: 40px; width: 35%; margin-left: 5%;">
        <div class="signature">
          <img src="{{ asset('uploads/signature') }}/{{ $message->signature }}" class="img-fluid" alt="">
        </div>
        <div class="ceo_name">
          {!! html_entity_decode($message->name) !!}
        </div>
        <div class="ceo_position">
          {!! html_entity_decode($message->position) !!}
        </div>
        <div class="message_date">
          <p>26 Dec 1996</p>
        </div>
        <div class="area">
          <p>Dhaka</p>
        </div>
      </div>-->



    </div>

   

    </div>
  </section>

</section>
@endif

@empty

@endforelse



{{-- <div class="messege_content">
      <div class="title">
              <h1>MESSEGE FROM <br>
                  THE CHAIRMAN
              </h1>
          </div>

          @forelse ($single_message as $message)


          <div class="messege">
              <div class="img_box">
                  <img src="https://res.cloudinary.com/dhe6napl7/image/upload/v1581360767/clients/fareast/img/Untitled-4.png" alt="">
                  <h2>Md. Nazrul Islam</h2>
                  <h2>Chairman</h2>
              </div>
              <div class="text_box">
                  {!! html_entity_decode($message->chairman_message) !!}
                  <div class="bottom_sec">
                      <div class="sign">
                          <img src="{{ asset('uploads/signature') }}/{{ $message->signature }}" alt="">
                          <p>
                              {!! html_entity_decode($message->name) !!}
                              {!! html_entity_decode($message->position) !!}
                          </p>
                          <p>


                          </p>
                      </div>
                      <div class="qr" style="position: absolute; left: 15%;">

                          <img src="{{ asset('uploads/qr_code') }}/{{ $message->qr_code }}" alt="">
                      </div>
                  </div>
              </div>
          </div>

        @empty

        @endforelse


    </div> --}}

  </div>

</div>



</div>



@endsection
