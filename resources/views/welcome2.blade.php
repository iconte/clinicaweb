<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #f4f7f8;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .container {position: absolute; margin: 0; width:100%; background: #f4f5f4; min-height: 600px; }

            .white-box { width: 500px; height: 100px; margin-top: 50px; margin-left: auto; margin-right: auto;

                background: rgba(255,255,255,0.9);
                padding: 30px;
                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
                -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
                box-shadow: 0 1px 2px rgba(0,0,0,0.15);
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                -ms-border-radius: 5px;
                -o-border-radius: 5px;
                border-radius: 5px;
            }

            .featured:before {
                font-weight: 400;
                display: inline-block;
                margin-right: 5px;
                color: #4CB1FF;
            }

        </style>
    </head>
    <body>
           <div class="container">
               <div class="flex-center position-ref full-height">
                   @if (Route::has('login'))
                       <div class="top-right links">
                           @auth
                           <a href="{{ url('/home') }}">Home</a>
                           @else
                               <a href="{{ route('login') }}">Login</a>
                               <a href="{{ route('register') }}">Register</a>
                               @endauth
                       </div>
                   @endif

                   <div class="content">
                       <div class="title m-b-md">
                           Laravel
                       </div>

                       <div class="links">
                           <a href="https://laravel.com/docs">Documentation</a>
                           <a href="https://laracasts.com">Laracasts</a>
                           <a href="https://laravel-news.com">News</a>
                           <a href="https://forge.laravel.com">Forge</a>
                           <a href="https://github.com/laravel/laravel">GitHub</a>
                       </div>
                   </div>

                    <div class="white-box">
                        <div class="featured">
                            Titulo
                        </div>
                    </div>
            </div>
        </div>
    </body>
</html>
