@extends('frontend.homepage.app')

@section('css_cdn')

@endsection

@section('css')

  #topbar{
    background: #2d3436;
    z-index: 1;
    padding: 1px 0;
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
        border-bottom: 400px solid #cc3399;
        border-right: 65vw solid transparent;
        position: absolute;
        bottom: 0;
        left: 0;
    }

    .right {
        width: 0;
        height: 0;
        border-bottom: 400px solid #cc99cc;
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
          margin-top: 100px;
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


        form input,
        textarea, select{
            display: block;
            width: 100%;
            margin: 10px 0px;
            padding: 10px 0px;
            border-radius: 20px;
            border: 1px solid gray;
        }
        form input,
        textarea, select{
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
            padding: 10px 8px;
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
        }

        .left{
          position: fixed;
          top: 39%;
        }

        .right{
          position: fixed;
          top: 39%;
        }

        .pay_premium_title{
          margin-top: 5%;
          z-index:0;
        }
        .inputstyle{
            border:1px solid #000 !important;
          }
          .inputstyle:focus{
            border:1px solid #000 !important;
          }

@endsection

@section('content')


  <header class="pay_premium_title">
        <h2>Pay Premium</h2>
    </header>

    <section id="premium">
        <div class="container">
            <div class="row">
                <div class="premium-box col-sm-12">
                    <div class="img-box">
                        <img src="{{asset('frontend/pay_premium/img.jpg')}}" alt="">
                    </div>
                    <div class="form">
                        <form action="">
                            <div class="inputWithIcon">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input type="text" placeholder="Name" class="inputstyle">
                            </div>
                            <div class="inputWithIcon">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <input type="text" placeholder="Mobile Number" class="inputstyle">
                            </div>
                            <div class="inputWithIcon">
                                <i class="fa fa-file" aria-hidden="true"></i>
                                <input type="text" placeholder="Policy Number" class="inputstyle">
                            </div>
                            <div class="inputWithIcon">
                                <i class="fa fa-usd" aria-hidden="true"></i>
                                <input type="text" placeholder="Amount" class="inputstyle">
                            </div>


                            <div class="inputWithIcon">
                                <i class="fa fa-money" aria-hidden="true"></i>
                                <select name="" id="" style="border: 1px solid #000;">
                                    <option value="">Please select Payment Gateway</option>
                                    <option value="">Cash</option>
                                    <option value="">Bank</option>
                                    <option value="">Online</option>
                                    <option value="">Card</option>
                                </select>
                            </div>


                            <div class="inputWithIcon">
                                <i class="fa fa-sticky-note" aria-hidden="true"></i>
                                <textarea name="" id="" cols="30" rows="10" class="inputstyle" placeholder="Note"></textarea>
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
