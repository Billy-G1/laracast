<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>My blog on Laravel</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">
  </head>

  <body>

   @include ('layouts/nav')

    <main role="main" class="container" style="width: 100%; float: left;">

      <div class="row">

        @yield ('content')

       

      </div><!-- /.row -->
	  
	  

    </main><!-- /.container -->
	
	@include('layouts/sidebar')
<div class="footer">
    @include ('layouts/footer')
</div>


    
  </body>
</html>
