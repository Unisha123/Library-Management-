<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
        .ttl {
            background:yellow;
            border: 1px #ebe9e9 solid;
            height:100px;
            width:500px;
            color:#37568f;
        }
            html, body {
                background-color:red;
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
                color: #fff;
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

            .loginpanel{
                background:white;
                padding-bottom:10px;
            }
        </style>
    </head>
    <body>
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

            <div class="content ttl">
                <div class="m-b-md loginpanel">
                   <h1> Library  Management System </h1><br/>
                   <form action="/admin/dologin" method="post">
                            @csrf

                    Email:<input type="text" name="email"><br/>
                    Password:<input type="text" name="password"><br/>
                     
                         <input type="submit" value="Login"/>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
