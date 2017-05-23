<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SB Admin - Bootstrap Admin Template</title>

    <link href="/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/e0d52a7952.js"></script>
    <link href="/css/bootstrap/sb-admin.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

  <div id="wrapper">
    @include('templates.partials.admin.nav')
    <div id="page-wrapper">
      <div class="container-fluid">
        @include('templates.partials._notifications')
        @yield('content')
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="/js/bootstrap/bootstrap.min.js"></script>
  @yield('scriptExtra')
</body>
</html>
