@extends('frontend.homepage.app')

@section('css_cdn')

@endsection

@section('css')
  #topbar{
    background: #2d3436;
    z-index: 1;
    padding: 1px 0;
  }
  ::-webkit-datetime-edit { text-transform: uppercase; }

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
        .inputstyle{
            border:1px solid #000 !important;
          }
          .inputstyle:focus{
            border:1px solid #000 !important;
          }

@endsection

@section('content')




  <header class="policy_header">
         <h2>Policy Statement</h2>
     </header>

     <section id="premium">
         <div class="container">
             <div class="row">
                 <div class="premium-box col-sm-12">
                     <div class="img-box">
                         <img src="{{ asset('frontend/policy_statement/img.jpg') }}" alt="">
                     </div>
                     <div class="form">
                         <form action="{{ route('policy_statement') }}" method="POST">
                             @csrf
                             <div class="inputWithIcon">
                                 <i class="fa fa-file" aria-hidden="true"></i>
                                 <input type="text" placeholder="Enter Policy Number" name="po_n" class="inputstyle" required="1">
                             </div>
                             <div class="inputWithIcon">
                                 <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                 <input type="date" class="inputstyle" name="pdate">
                             </div>
                             <div class="inputWithIcon">
                                 <i class="fa fa-phone" aria-hidden="true"></i>
                                 <input type="text" placeholder="Mobile Number" name="pphone" class="inputstyle">
                             </div>
                             <button>Confirm</button>
                         </form>
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
