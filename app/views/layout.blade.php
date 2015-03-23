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

    <title>Yalla-Ya</title>
<!-- Bootstrap en la carpeta public -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

<!-- Custom styles for this template -->
    <link href="{{ asset('style.css')}}" rel="stylesheet">

   
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <h1 class="text-muted"><a href='{{URL::route('home')}}'><img class="logo" src="{{ asset('bootstrap/images/yalla.png')}}"></a></h1>
      </div>

<!--Desplegado Vistas utilizando BLADE  -->
        @yield('Posts')
        @yield('login')
        @yield('articlesForm')
        @yield('showArticle')
        @yield('formUsers')
      <footer class="footer">
        <p></p>
      </footer>

    </div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
