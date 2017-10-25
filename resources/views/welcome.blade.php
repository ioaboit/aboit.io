<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>aboit</title>

        <link href="{{ asset('css/config.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                /*font-family: 'Raleway', sans-serif;*/
                font-family: 'Work Sans', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0px !important;
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
                /*text-align: center;*/
                /*height: 50px;*/
            }
            .title{
                padding: 10px 100px;
            }
            .title > .logo {
                font-size: 30px;
                font-weight: bold;
                font-family: 'Libre Baskerville', serif;
                color: #4d4d4d;
            }

            .logo-caption{
                color: #636b6f;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .m-b-t-md{
                margin-top: 10px;
                margin-bottom: 10px;
            }
            #logo-header{
                /*border-bottom: 1px solid var(--menu-border-color);*/
                /*background-color: #ccc;*/
                box-shadow: 0px 1px 11px #ccc;
            }
        </style>
    </head>
    <body>
        <div class="position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/story') }}">Story</a>
                    @else
                        <a href="{{ route('login') }}">signin</a>
                        <a href="{{ route('register') }}">signup</a>
                    @endauth
                </div>
            @endif

            <div class="content" id="logo-header">
                <div class="title">
                    <div class="logo">Aboit</div>
                    <!-- <span class="logo-caption">Knowledge from words</span> -->
                </div>

            </div>
            <div class="links" style="margin-top:20%;font-size:30px;">
                <a href="{{ URL::to('story') }}">story</a>
            </div>
        </div>
    </body>
</html>
