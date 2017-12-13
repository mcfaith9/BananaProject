<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Banana Project</title>
    
    <!-- Tab Icon-->
    <link rel="icon" href="uploads/avatars/ninjaBanana.png" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    

<style>
body {
    font-family: 'Roboto', sans-serif;
}

.fa-btn {
    margin-right: 6px;
}
.navbar-default {
    background-color: #0e1c25;
    border-color: #0e1c25;
}
.navbar-brand {
    float: left;
    height: 50px;
    padding: 15px 15px;
    font-size: 20px;
    line-height: 20px;
}
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    top: 0;
    right: 100%;
    margin-top: -1px;
}
</style>
</head>



<body background="{{ asset('img/bodyBg.jpg') }}">
    <nav class="navbar navbar-default navbar-static-top">
    <img src="{{ asset('img/ninjaBanana.png') }}" style="width: 100px; height: 100px; position: absolute;  border-radius: 50%; left: 10px;">
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

                <a class="navbar-brand" href="{{ url('/') }}" style="position: relative;">
                  Banana Project                                          
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position: relative; padding-left: 50px;">
                             <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width: 32px; height: 32px; position: absolute; top: 10px; left: 10px; border-radius: 50%;">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>         

                              <ul class="dropdown-menu">
                              <li class="dropdown-submenu">
                                <a class="test" tabindex="-1" href="#"><i class="fa fa-btn fa-paperclip"></i>Assign<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="{{ url('/person') }}" tabindex="-1"><i class="fa fa-btn fa-users" aria-hidden="true"></i>Person</a></li>
                                  <li><a href="" tabindex="-1"><i class="fa fa-btn fa-phone-square" aria-hidden="true"></i>Phone</a></li>
                                </ul>
                              </li>

                              <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i>Profile</a></li>
                              <li><a href="{{ url('/dashboard') }}"><i class="fa fa-btn fa-list"></i>Dashboard</a></li>
                              <li><a href="{{ url('/task') }}"><i class="fa fa-btn fa-tasks"></i>Tasks</a></li>
                              <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

<script>
$(document).ready(function(){
$('.dropdown-submenu a.test').on("click", function(e){
$(this).next('ul').toggle();
e.stopPropagation();
e.preventDefault();
});
});
</script>

</body>
</html>


