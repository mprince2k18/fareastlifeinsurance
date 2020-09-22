@extends('frontend.homepage.app')

@section('css')

.text_box p{
  color: #000;
  text-align: justify;
  font-size: 16px;
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
@endsection

@section('content')



<div class="container">
  <div class="row">
    <div class="col-md-12">

<div class="messege_content">
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

                              {{-- {{ $message->created_at->format('d M Y') }} --}}

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


    </div>

  </div>

</div>



</div>



@endsection
