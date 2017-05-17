<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>@yield('title') | {{ config('app.name') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
  </head>
  <body>

    @include('templates.partials.nav')
    @yield('header')
    @include('layouts.partials._notifications')
    <div class="container">
      @yield('content')
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/js/bootstrap/bootstrap.min.js"></script>
  </body>
</html>
