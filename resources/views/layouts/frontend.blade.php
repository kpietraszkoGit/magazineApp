<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Application for managing a clothing warehouse">
	    <meta name="keywords" content="magazine, clothes, warehouse, pietraszko, management, application">
	    <meta name="author" content="Kamil Pieraszko">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Magazine App!</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://bootswatch.com/3/readable/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('cssFontello/fontello.css') }}" type="text/css" />
        <link rel="shortcut icon" type="/image/vnd.microsoft.icon" href="{{ asset('images/blouse.png') }}">
    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./">Home <i class='icon-home'></i></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    @auth
                    <ul class="nav navbar-nav">
                        <li><p class="navbar-text">Logged in as:</p></li>
                        <li><p class="navbar-text">{{ Auth::user()->name }}</p></li>
                        <li><a href="{{ route('adminHome') }}">admin <i class='icon-user'></i></a></li>
                        <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout <i class='icon-logout'></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        </li>

                    </ul>
                    @endauth
                    @guest
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('login') }}">Sign in <i class='icon-login'></i></a></li>
                        <li><a href="{{ route('register') }}">Sign up <i class='icon-user-plus'></i></a></li> 
                    </ul>
                    @endguest 
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="jumbotron">
            <div class="container">
                <h1>Magazine App!</h1>
                <p>This is an application for checking the condition of items in the clothes warehouse!</p>
                <p>Log in to check the inventory of clothes!</p>
            </div>
        </div>

        @yield('content')

        <div class="container-fluid">

            <div class="row mobile-apps">

                <div class="col-md-4 col-xs-12">

                    <img class="img-responsive center-block photo" src="{{ asset('images/clothes1.jpg') }}" alt="clothes">

                </div>

                <div class="col-md-4 col-xs-12">

                    <img class="img-responsive center-block photo" src="{{ asset('images/clothes2.jpg') }}" alt="clothes">

                </div>

                <div class="col-md-4 col-xs-12">

                    <img class="img-responsive center-block photo" src="{{ asset('images/clothes3.jpg') }}" alt="clothes">

                </div>

            </div>

            <hr>

            <footer>

                <p class="text-center">&copy; Kamil Pietraszko 2021 <a href="https://github.com/kpietraszkoGit" target="_blank">GitHub</a></p>

            </footer>

        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
