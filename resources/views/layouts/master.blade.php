
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>

@include('layouts.nav')

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="row">
      <div class="col-md-8">
      <div class="jumbotron">
            @yield('content')
      </div>
      </div>

      <div class="col-md-4 col-md-offset-8">
      <div class="jumbotron">
            @include('layouts.sidebar')
      </div>
      </div>
    </div>



    </main>

@include('layouts.footer')
