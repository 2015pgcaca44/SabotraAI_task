<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>Task</title>
      <!-- <link rel="icon" type="image/ico" href="/images/logo-footer.png" height="50px" width="50px" /> -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <link rel="stylesheet" href="{{ asset("/AdminLTE-2.3.11/bootstrap/css/bootstrap.min.css") }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
      <link rel="stylesheet" href="{{ asset("/AdminLTE-2.3.11/dist/css/AdminLTE.min.css") }}">
      <link rel="stylesheet" href="{{ asset("/AdminLTE-2.3.11/dist/css/skins/skin-blue.min.css") }}">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="bootstrap-4-dev/dist/css/bootstrap.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
      <script src="https://code.highcharts.com/highcharts.js"></script>
      <script src="https://code.highcharts.com/modules/data.js"></script>
      <script src="https://code.highcharts.com/modules/drilldown.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/justgage/1.2.9/justgage.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.1/raphael-min.js"></script>
      <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <style>
         hr {
         margin-top: 1rem;
         margin-bottom: 1rem;
         border: 0;
         border-top: 1px solid rgba(0, 0, 0, 0.2);
         }
         .img1 {
         border-radius: 65%;
         }
         aside img {
         -webkit-filter: grayscale(100%);
         filter: grayscale(100%);
         }
         aside img:hover {
         filter: none;
         -webkit-filter: none;
         }
         header img {
         -webkit-filter: grayscale(100%);
         filter: grayscale(100%);
         }
         header img:hover {
         filter: none;
         -webkit-filter: none;
         }
         @media (max-width: 600px){
         .align_col
         {
         margin-right: 60px;
         }
         }
      </style>
   </head>
   <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper">
      <header class="main-header" style="background-color: #4F6AF0;">
         <a href="#" class="logo" style="background-color: #4F6AF0; text-decoration: none;">
            <span class="logo-mini"><b>Work</span>
            <span class="logo-lg">
               <!-- <img class="pull-left" src="{{asset('images/logo-footer.png')}}" height="40px;" width="40px;"> -->
               <b>Sabotra AI</b>
            </span>
         </a>
         <?php 
            use App\User;
            
            $count=0;
            $user_email = Auth::user()->email;
            
            ?>
         <nav class="navbar navbar-static-top" role="navigation" style="background-color: #fff; ">
            <a href="#" class="sidebar-toggle w3-hover-white" data-toggle="offcanvas" role="button" style="color: blue;">
            <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
               <ul class="nav navbar-nav">
                  <li class="dropdown messages-menu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o" style="color: black;"></i>
                        <!-- <img src="/images/email2.png" height="15px;" width="15px;"> -->
                        <span class="label label-success">4</span>
                     </a>
                     <ul class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                        <!-- <li class="header">You have 4 messages</li> -->
                        <span class="label" style="color: black; font-size: 15px;">You have 4 messages</span>
                        <hr>
                        <li>
                           <ul class="menu">
                              <a href="#">
                                 <div class="pull-left">
                                    <img src="{{ asset("/AdminLTE-2.3.11/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image">
                                 </div>
                                 <h4>
                                    Support Team
                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                 </h4>
                                 <p>Why not buy a new awesome theme?</p>
                              </a>
                              </li>
                           </ul>
                        </li>
                        <li class="footer"><a href="#">See All Messages</a></li>
                     </ul>
                  <li class="dropdown notifications-menu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     <i class="fa fa-bell-o" style="color: black;"></i>
                     <span class="label label-warning"></span>
                     </a>
                     <ul class="dropdown-menu" style="padding: 10px;">
                        <span class="label" style="color: black; font-size: 15px;">You have  notifications</span>
                        <hr>
                        <li>
                           <ul class="menu">
                              <!-- <li class="divider"></li> -->
                              <li><a href="tasks">you have got new task
                                 <span class="label pull-right label-danger"></span></a>
                              </li>
                           </ul>
                        </li>
                        <li class="footer"><a href="#">View all</a></li>
                     </ul>
                  </li>
                  <li class="dropdown user user-menu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" href="#userprofile" aria-controls="userprofile">
                     <span class="hidden-xs" style="color: blue;"><b>{{ Auth::user()->name }}</b></span>
                     <i class="fa fa-angle-down pull-right" aria-hidden="true" style="color:black;"></i></span>
                     </a>
                     <ul class="dropdown w3-mobile" id="userprofile">
                        @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        <?php 
                           $user_id = Auth::user()->id;
                           DB::table('users')->where('id', Auth::user()->id)->update(['logout_time' => date("Y-m-d H:i:s")])->first();
                           ?>
                        @else
                        <div class="dropdown w3-mobile align_col">
                           <ul class="dropdown-menu" role="menu"  style="background-color: #515E58;margin-right: -50px; width: 110%;">
                              <li class="nav-item">
                                 <a class="btn btn-sm" data-toggle="modal" data-target="#myprofile">
                                    <h5 style="color: #fff;margin-right: 50px;">View Profile </h5>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a class="btn btn-sm" data-toggle="modal" data-target="#editpass">
                                    <h5 style="color: #fff;">Change Password</h5>
                                 </a>
                              </li>
                              <li>
                                 <?php 
                                    $user_id = Auth::user()->id;
                                    
                                    ?>
                                 <a href="/logout/{{$user_id}}">
                                    <h5 style="color: #fff;">Logout</h5>
                                 </a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                 </form>
                              </li>
                           </ul>
                        </div>
                        @endif
                     </ul>
                  </li>
                  <!-- <li>
                     <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                     </li> -->
               </ul>
            </div>
         </nav>
      </header>
      <?php
         $login_email = Auth::user()->email ;
         
         ?>
      <div class="modal" id="myprofile">
         <div class="modal-dialog w3-mobile" style="width: 30%;">
            <div class="modal-content w3-mobile">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <center>
                     <!-- <img class="image" src="/images/user_profile.jpg" height="80" width="80"> -->
                     <br />
                     <font color="green">
                     <img src="/images/dot.png" height="10px;" width="10px;"> Online</font>
                  </center>
                  <center><font class="modal-title" size="4" style="color: #4F6AF0;">{{ Auth::user()->name }}</font></center>
               </div>
               <div class="modal-body w3-mobile">
                  <div class="panel-body w3-mobile">
                     <form class="form-horizontal" method="post" action="{{url('insert_client')}}">
                        {{ csrf_field() }}
                        <div class="container col-sm-12" style="width: 100%;">
                           <div class="form-group">
                              Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="2" style="margin-left: 50px;">{{ Auth::user()->email }}</font>
                           </div>
                           <div class="form-group">
                              Role&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="2" style="margin-left: 50px;">{{ Auth::user()->role }}</font>
                           </div>
                           <div class="modal-footer">
                              <button type="button" class="btn" data-dismiss="modal" style="background-color: #4F6AF0; color: #fff;">Close</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="modal" id="editpass">
         <div class="modal-dialog w3-mobile">
            <div class="modal-content w3-mobile">
               <div class="modal-header">
                  <font class="modal-title" size="5" style="color: #4F6AF0;">Change Password</font>
                  <button type="button" class="close" onclick="document.getElementById('editModal').style.display = 'none';" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body w3-mobile">
                  <div class="panel-body w3-mobile">
                     <form class="form-horizontal" method="POST" id="edituser" action="{{url('insert_users')}}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                           <label for="email" class="col-md-4 control-label">Old Password</label>
                           <div class="col-md-6">
                              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                              @if ($errors->has('email'))
                              <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                              </span>
                              @endif
                           </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                           <label for="password" class="col-md-4 control-label">New Password</label>
                           <div class="col-md-6">
                              <input id="password" type="password" class="form-control" name="password" required>
                              @if ($errors->has('password'))
                              <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                              </span>
                              @endif
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                           <div class="col-md-6">
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Update</button>
                              <button type="button" class="btn btn-primary" onclick="document.getElementById('editModal').style.display = 'none';" data-dismiss="modal" >Close</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <aside class="main-sidebar" style="background-color: #4F6AF0;">
         <section class="sidebar" style="background-color: #4F6AF0;">
            <div class="user-panel">
               <div class="pull-left image">
                  <!-- <img class="pull-left img1" src="{{ asset("/images/admin.png") }}" height="70px;" width="70px;" class="user-image" alt="User Image"> -->
                  <span class="hidden-xs">
               </div>
               <ul class="sidebar-menu">
                  <hr / style="border-color: #6094BC;">
                  <li>
                     <a href="/home">
                     <i class="fa fa-list text-white"></i>
                     <span style="color: #fff;">Task List</span>
                     </a>
                  </li>
                  <li>
                     <a href="/add_task">
                     <i class="fa fa-circle-o text-white"></i>
                     Add Task
                     </a>
                  </li>
               </ul>
         </section>
      </aside>
      <div class="content-wrapper">
      <section class="content-header">
      @yield('content')
      </section>
      <section class="content">
      </section>
      </div>
      </div>
      <script src="{{ asset('/AdminLTE-2.3.11/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
      <script src="{{ asset('/AdminLTE-2.3.11/bootstrap/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('/AdminLTE-2.3.11/dist/js/app.min.js') }}"></script>
   </body>
</html>