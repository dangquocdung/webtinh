<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="./images/favicon.ico">
  @yield('title')
  <base href="{{asset('')}}">
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/app.css">
  <script type="text/javascript" src="./js/jquery.min.js"></script>
  <script type="text/javascript" src="./js/bootstrap.min.js" ></script>
  <!-- Danang -->
  <link rel="stylesheet" type="text/css" href="./css/header-menu.css">
  <link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <link rel="stylesheet" type="text/css" href="./css/mentions.css">
  <link rel="stylesheet" type="text/css" href="./css/main.css">
</head>
<body>
  @include('guest.layout.header-banner')
  @include('guest.layout.main-menu')
  @include('guest.layout.menu-mobile')
  @yield('content')
  @include('guest.layout.footer')
</body>
</html>
