<nav class="navbar navbar-light " style="background-color: #FDFEFE; color: #F5F5F5 ">
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
            {{--<a class="navbar-brand" href="{{ url('/') }}">Laravel</a>--}}
            <div class="pull-left"><img src="images/ball.jpg" style="height: 45px;"></div>
           <!--  <a class="navbar-brand" href="{{ url('/') }}">
                MSA
            </a> -->
              <!--  Buttons at navbar -->
             <ul class="nav navbar-nav">
                 <li class="active"><a href="{{url('/')}}"><h2 style="font-size:25px"><b>Home</b></h2> <span class="sr-only">(current)</span></a></li>
                 <li><a href="{{action('AboutController@index')}}"><h2 style="font-size:25px"><b>About MSA</b></h2></a></li>
            <li><a href="#"><h2 style="font-size:25px"><b>Table</b></h2></a></li>
            <li><a href="#"><h2 style="font-size:25px"><b>Stats</b></h2></a></li>
            <li><a href="{{ action('SchoolController@index') }}"><h2 style="font-size:25px"><b>Schools</b></h2></a></li>
            <li><a href="{{ action('TeamController@index') }}"><h2 style="font-size:25px"><b>Teams</b></h2></a></li>
            </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    {{--<li><a href="{{ url('/login') }}"><i class="fa fa-btn fa-lg fa-fw fa-sign-in"></i>Login</a></li>--}}
                    <li><a href="{{ url('/login') }}"><h2 style="font-size:25px"><b>Login</b></h2></a></li>
                    <li><a href="{{ url('/register') }}"><h2 style="font-size:25px"><b>Register</b></h2></a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-fw fa-sign-out"></i>Logout</a></li>
                            <li><a href="{{ url('/change-password') }}"><i class="fa fa-btn fa-fw fa-lock"></i>Change Password</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('/help') }}"><i class="fa fa-btn fa-fw fa-question-circle"></i>Help</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
