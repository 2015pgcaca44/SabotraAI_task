<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Assignment</title>
        <!-- <link rel="icon" type="image/ico" href="{{asset('images/logo-footer.png')}}" height="50px" width="50px" /> -->
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
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
                font-size: 60px;
                font-weight: bold;
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


            @media (max-width: 600px){
                 .width_mob{
                 font-size: 50px;
                 font-style: italic;
                 font-weight: 5px;
                 }

            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height w3-responsive">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Dashboard</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        
                        <a href="{{ url('/register') }}">Register</a>
                        
                    @endif
                </div>
            @endif
            <div class="content">
                <font size="6" color="gray">Welcome to</font>
                <div class="title m-b-md width_mob font-weight-bold text-uppercase">
                    SABOTRA AI
                </div>
            </div>
        </div>
    </body>
</html>
