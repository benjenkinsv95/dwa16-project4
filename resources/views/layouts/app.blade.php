<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Text-to-Phonetics Engine</title>
    <link href="/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/libs/font-awesome-4.7.0/css/font-awesome.min.css"
          rel="stylesheet">
    <link href="/images/favicon.png" rel="shortcut icon">
    <link href="/css/master.css" rel="stylesheet">
    @yield('header')
</head>
<body>

@if(Session::get('flash_message') != null)
    <div class="alert alert-dismissible alert-info">
        {{ Session::get('flash_message') }}
    </div>
@endif

<div class="wrapper">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <!--If we are on mobile, show a toggle button with a hamburger icon-->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/')
                }}">Text2Phonetics Engine</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/') }}">Home</a></li>

                    <li><a href='/pronunciations'>Pronunciations</a></li>
                    <li><a href='/voices'>Voices</a></li>
                    <li><a href='https://acapela-box.com/AcaBox/index.php' target='_blank'>Speech Demo</a></li>

                    @if(Auth::check())

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="user-icon fa fa-user-circle"></i> {{Auth::user()->name}}
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href='/logout'>Log out</a></li>
                            </ul>
                        </li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="user-icon fa fa-user-circle"></i>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href='/login'>Log in</a></li>
                                <li class="divider"></li>
                                <li><a href='/register'>Register</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>


    <div class="page-content container">
        <div class="row page-info container">
            @hasSection('title')
                <h1>@yield('title')</h1>
            @endif
            @hasSection('description')
                <h3>@yield('description')</h3>
            @endif
            @yield('breadcrumbs')
        </div>
        @yield('content')
    </div>

    <div class="footer jumbotron">
        <div class="container text-center">
            Copyright © {{ date('Y') }} Ben Jenkins. All rights reserved.<br>
            <a href='https://github.com/benjenkinsv95/dwa16-project4'
               target='_blank'>GitHub <i class='fa fa-github'></i></a> &nbsp;&nbsp;
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

@yield('footer')
</body>
</html>