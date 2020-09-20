<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>task</title>
  <!-- <link rel="icon" type="image/ico" href="{{asset('images/logo-footer.png')}}" height="50px" width="50px" /> -->
    <!-- Styles -->
    <!-- <link rel="icon" href="https://kpdigiteers.com/assets/images/favicon.png" type="image/x-icon">  -->                     
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
         @media (max-width: 600px){
         .header{
         margin-top: -30px;
         }
         .mob_width{
          margin-left: 0px;
          width: 270px;
         }
         .marg_right{
          margin-left: -500px;
         }
    }
    @media (min-width: 1170px){
         .desk_width{
         /*margin-right: 100px;*/
         margin-top: -25px;
         width: 250px;
         }
         .marg_desk{
          margin-left: -100px;
         }
    }
    </style>
</head>
<body >
    <div id="app  w3-mobile">
        <nav class="navbar navbar-default navbar-static-top w3-mobile" style="background-color: #2F76BD;">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Branding Image -->
                    <a class="navbar-brand desk_width" href="{{ url('/') }}">
                        <!-- {{ config('app.name', 'KPD') }} -->
                        <div class="span4 header mob_width marg_desk">
                            <!-- <img class="pull-left" src="{{asset('images/logo-footer.png')}}" height="40px;" width="40px;" style="margin-top: -5px;"> -->
                        <h3 style="color: #fff;" nowrap="nowrap">task </h3></div>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}" style="color: #fff;">Login</a></li>
                            
                                <li><a href="{{ route('register') }}" style="color: #fff;">Register</a></li>
                           
                            @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color: #fff;">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
