<html>
    <head>
        <title>{{ Config::get('firecat::firecat.site_name') }} Admin</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

        <style>
        /*
        * Base structure
        */

        /* Move down content because we have a fixed navbar that is 50px tall */
        body {
        padding-top: 50px;
        }


        /*
        * Global add-ons
        */

        .sub-header {
        padding-bottom: 10px;
        border-bottom: 1px solid #eee;
        }

        /*
        * Top navigation
        * Hide default border to remove 1px line.
        */
        .navbar-fixed-top {
        border: 0;
        }

        /*
        * Sidebar
        */

        /* Hide for mobile, show later */
        .sidebar {
        display: none;
        }
        @media (min-width: 768px) {
        .sidebar {
        position: fixed;
        top: 51px;
        bottom: 0;
        left: 0;
        z-index: 1000;
        display: block;
        padding: 20px;
        overflow-x: hidden;
        overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
        background-color: #f5f5f5;
        border-right: 1px solid #eee;
        }
        }

        /* Sidebar navigation */
        .nav-sidebar {
        margin-right: -21px; /* 20px padding + 1px border */
        margin-bottom: 20px;
        margin-left: -20px;
        }
        .nav-sidebar > li > a {
        padding-right: 20px;
        padding-left: 20px;
        }
        .nav-sidebar > .active > a,
        .nav-sidebar > .active > a:hover,
        .nav-sidebar > .active > a:focus {
        color: #fff;
        background-color: #428bca;
        }


        /*
        * Main content
        */

        .main {
        padding: 20px;
        }
        @media (min-width: 768px) {
        .main {
        padding-right: 40px;
        padding-left: 40px;
        }
        }
        .main .page-header {
        margin-top: 0;
        }


        /*
        * Placeholder dashboard ideas
        */

        .placeholders {
        margin-bottom: 30px;
        text-align: center;
        }
        .placeholders h4 {
        margin-bottom: 0;
        }
        .placeholder {
        margin-bottom: 20px;
        }
        .placeholder img {
        display: inline-block;
        border-radius: 50%;
        }

        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">{{ Config::get('firecat::firecat.site_name') }}</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ url('admin') }}">Dashboard</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="{{ url('logout') }}">Logout</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                        <li class="active"><a href="{{ url('admin/') }}">Overview <span class="sr-only">(current)</span></a></li>
                        <li><a href="{{ url('admin/users') }}">Users</a></li>
                        <li><a href="#">Analytics</a></li>
                        <li><a href="#">Export</a></li>
                    </ul>
                    <!--
                    <ul class="nav nav-sidebar">
                        <li><a href="">Nav item</a></li>
                        <li><a href="">Nav item again</a></li>
                        <li><a href="">One more nav</a></li>
                        <li><a href="">Another nav item</a></li>
                        <li><a href="">More navigation</a></li>
                    </ul>
                    <ul class="nav nav-sidebar">
                        <li><a href="">Nav item again</a></li>
                        <li><a href="">One more nav</a></li>
                        <li><a href="">Another nav item</a></li>
                    </ul>
                    -->
                </div> <!--/sidebar -->
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    @yield('content')
                </div> <!-- /main -->
            </div> <!-- /row -->
        </div> <!-- /container-fluid -->

        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    </body>
</html>
