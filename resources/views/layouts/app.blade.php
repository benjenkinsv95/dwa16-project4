<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Ben Jenkins</title>
    <link href="/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/libs/font-awesome-4.6.3/css/font-awesome.min.css"
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
                }}">Text-to-Phonetics Engine</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/') }}">Home</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Projects<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="http://p1.ben-jenkins.com/">Portfolio</a></li>
                            <li><a href="https://github.com/benjenkinsv95/dwa16-project1">Portfolio GitHub <i class="fa fa-github"
                                                                                                              aria-hidden="true"></i></a></li>

                            <li class="divider"></li>
                            <li><a href="http://p2.ben-jenkins.com/">xkcd Password Generator</a></li>
                            <li><a href="https://github.com/benjenkinsv95/dwa16-project2">xkcd Password Generator GitHub <i class="fa fa-github"
                                                                                                                            aria-hidden="true"></i></a></li>

                            <li class="divider"></li>
                            <li><a href="http://p3.ben-jenkins.com/">Developer's Best Friend</a></li>
                            <li><a href="https://github.com/benjenkinsv95/dwa16-project3">Developer's Best Friend GitHub <i class="fa fa-github"
                                                                                                                            aria-hidden="true"></i></a></li>

                            <li class="divider"></li>
                            <li><a href="http://p4.ben-jenkins.com/">Text-to-Phonetics Engine</a></li>
                            <li><a href="https://github.com/benjenkinsv95/dwa16-project4">Text-to-Phonetics Engine GitHub
                                    <i class="fa fa-github" aria-hidden="true"></i></a></li>
                        </ul>
                    </li>

                    @if(Auth::check())
                        <li><a href='/logout'>Log out</a></li>
                    @else
                        <li><a href='/login'>Log in</a></li>
                        <li><a href='/register'>Register</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>


    <div class="page-content container">
        <div class="row page-info">
            <h1>@yield('title')</h1>
            <h3>@yield('description')</h3>
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