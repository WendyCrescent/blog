<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | {{ config('app.name') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
  </head>
  <body>

    <nav class="navbar navbar-default navbar-static-top">
      @include('templates.partials.nav')
    </nav>

    @yield('header')
    @include('templates.partials._notifications')

    <div id="content" class="container">
      @yield('content')
    </div>

    <footer class="navbar navbar-inverse navbar-static-top">
      @include('templates.partials.footer')
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/js/bootstrap/bootstrap.min.js"></script>
  </body>
</html>
