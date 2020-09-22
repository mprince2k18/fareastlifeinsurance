<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .role_name{
              font-size: 36px;
              letter-spacing: 25px;
              text-transform: uppercase;
              font-weight: bold;
            }

            .username{
              font-size: 80px;
              margin: 30px 0;
              font-weight: bold;
              letter-spacing: 15px;
              text-transform: uppercase;
            }

            .fareast{
              font-size: 50px;
              margin: 30px 0;
              font-weight: bold;
              letter-spacing: 15px;
              text-transform: uppercase;
            }

            .demo{
              font-size: 20px;
            }

        </style>
    </head>
    <body>

{{ error_reporting(0) }}


        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">

                  @guest
                    <p class="role_name">GUEST</p>
                    <p class="fareast">FAREAST ISLAMI LIFE INSURANCE</p>
                    <p class="demo">email : mprince2k16@gmail.com</p>
                    <p class="demo">password : 12345678</p>
                  @endguest


                  @if (Auth::user()->role_id == 1)
                    <p class="role_name">SUPER ADMIN</p>
                    <p class="username">{{ Auth::user()->name }}</p>
                    <p class="fareast">FAREAST ISLAMI LIFE INSURANCE</p>
                  @endif


                  @if (Auth::user()->role_id == 2)
                    <p class="role_name">ADMIN</p>
                    <p class="username">{{ Auth::user()->name }}</p>
                    <p class="fareast">FAREAST ISLAMI LIFE INSURANCE</p>
                  @endif



                  @if (Auth::user()->role_id == 3)
                    <p class="role_name">SUPPORT TEAM</p>
                    <p class="username">{{ Auth::user()->name }}</p>
                    <p class="fareast">FAREAST ISLAMI LIFE INSURANCE</p>
                  @endif



                </div>

                <div class="links">
                    <a href="{{ route('dashboard') }}">DASHBOARD</a>
                </div>
            </div>
        </div>
    </body>
</html>
