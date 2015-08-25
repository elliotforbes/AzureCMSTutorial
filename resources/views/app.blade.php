<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>AzueCMS Tutorial</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
        AzureCMS
      </a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="#">Home</a>
                </li>
                <li><a href="#">Articles</a>
                </li>
                <li><a href="#">Search</a>
                </li>
            </ul>

        </div>
    </nav>

    <div class="container">

        <div class="blog-header">
            <h1 class="blog-title">AzureCMS Laravel 5 Tutorial CMS</h1>
            <p class="lead blog-description">The un-official site for learning Laravel 5</p>
        </div>

        <div class="row">

            <div class="col-sm-8 blog-main">
               @yield('content')
            </div>
            <!-- /.blog-main -->

            <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                <div class="sidebar-module sidebar-module-inset">
                    <h4>About</h4>
                    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                </div>
                <div class="sidebar-module">
                    <h4>Archives</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">March 2014</a>
                        </li>
                        <li><a href="#">February 2014</a>
                        </li>
                        <li><a href="#">January 2014</a>
                        </li>
                        <li><a href="#">December 2013</a>
                        </li>
                        <li><a href="#">November 2013</a>
                        </li>
                        <li><a href="#">October 2013</a>
                        </li>
                        <li><a href="#">September 2013</a>
                        </li>
                        <li><a href="#">August 2013</a>
                        </li>
                        <li><a href="#">July 2013</a>
                        </li>
                        <li><a href="#">June 2013</a>
                        </li>
                        <li><a href="#">May 2013</a>
                        </li>
                        <li><a href="#">April 2013</a>
                        </li>
                    </ol>
                </div>
                <div class="sidebar-module">
                    <h4>Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a>
                        </li>
                        <li><a href="#">Twitter</a>
                        </li>
                        <li><a href="#">Facebook</a>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.blog-sidebar -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <footer class="blog-footer">
        <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>
