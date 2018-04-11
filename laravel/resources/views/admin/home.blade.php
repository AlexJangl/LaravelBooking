<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="{{asset('css/admin/bootstrap.min.css')}}" rel="stylesheet">
    <!-- styles -->
    <link href="{{asset('css/admin/styles.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <!-- Logo -->
                {{--<div class="logo">--}}
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{asset('img/booking.png')}}" alt="" width="240" height="35">
                    </a>
                {{--</div>--}}
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{url('admin/search')}}" method="get">
                            <input type="text" name="search" placeholder="search">
                            <input type="submit" value="search">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="row">
                <div class="navbar navbar-inverse" role="banner">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu animated fadeInUp">
                                    {{--<li><a href="profile.html">Profile</a></li>--}}
                                    <li><a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<form action="{{url('logout')}}" method="post" id="logout-form">
    {{csrf_field()}}
</form>

<div class="page-content">
    <div class="row">
        <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="{{url('/')}}"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                    <li><a href="{{url('admin/users')}}"><i class="glyphicon glyphicon-calendar"></i>Users</a></li>
                    {{--<li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>--}}
                    {{--<li><a href="tables.html"><i class="glyphicon glyphicon-list"></i> Tables</a></li>--}}
                    {{--<li><a href="buttons.html"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>--}}
                    {{--<li><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>--}}
                    {{--<li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>--}}
                    {{--<li class="submenu">--}}
                        {{--<a href="#">--}}
                            {{--<i class="glyphicon glyphicon-list"></i> Pages--}}
                            {{--<span class="caret pull-right"></span>--}}
                        {{--</a>--}}
                        {{--<!-- Sub menu -->--}}
                        {{--<ul>--}}
                            {{--<li><a href="login.html">Login</a></li>--}}
                            {{--<li><a href="signup.html">Signup</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                </ul>
            </div>
        </div>
        <div class="col-md-10">
            @if(session('message')!='')
                <div class="alert alert-info">
                    {{session('message')}}
                </div>
            @endif
            @yield('content')
        </div>
    </div>
</div>

<footer>
    <div class="container">

        <div class="copy text-center">
            Copyright 2014 <a href='#'>Website</a>
        </div>

    </div>


</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('js/admin/bootstrap.min.js')}}"></script>
<script src="{{asset('js/admin/custom.js')}}"></script>
</body>
</html>