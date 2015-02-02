<html>
    <head>
        <title>{{ Config::get('firecat::firecat.site_name') }}</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

        <style type="text/css">
            body {
                padding-top: 50px;
            }
            .starter-template {
                padding: 40px 15px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <nav>
                    <ul class="nav nav-pills pull-right">
                        <li role="presentation" class="active"><a href="#">Home</a></li>
                        <li role="presentation"><a href="#">About</a></li>
                        <li role="presentation"><a href="#">Contact</a></li>
                        @if (Auth::check())
                            <li role="presentation"><a href="{{ url('logout') }}">Log out</a></li>
                        @else
                            <li role="presentation"><a href="{{ url('login') }}">Sign in</a></li>
                        @endif
                    </ul>
                </nav>
                <h3 class="text-muted">{{ Config::get('firecat::firecat.site_name') }}</h3>
            </div>

            @yield('content')

            <footer class="footer">
                <p>&copy; {{ Config::get('firecat::firecat.company' )}} 2014</p>
            </footer>

        </div> <!-- /container -->

        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    </body>
</html>
