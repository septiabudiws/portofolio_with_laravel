<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Login</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('loginn') }}/img/favicon.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('loginn') }}/css/bootstrap.min.css">
  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="{{ asset('loginn') }}/css/fontawesome-all.min.css">
  <!-- Flaticon CSS -->
  <link rel="stylesheet" href="{{ asset('loginn') }}/font/flaticon.css">
  <!-- Google Web Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('loginn') }}/style.css">
</head>

<body>
  <div id="preloader" class="preloader">
    <div class='inner'>
      <div class='line1'></div>
      <div class='line2'></div>
      <div class='line3'></div>
    </div>
  </div>
  @yield('content')
  </section>
  <!-- jquery-->
  <script src="{{ asset('loginn') }}/js/jquery.min.js"></script>
  <!-- Bootstrap js -->
  <script src="{{ asset('loginn') }}/js/bootstrap.min.js"></script>
  <!-- Imagesloaded js -->
  <script src="{{ asset('loginn') }}/js/imagesloaded.pkgd.min.js"></script>
  <!-- Validator js -->
  <script src="{{ asset('loginn') }}/js/validator.min.js"></script>
  <!-- Custom Js -->
  <script src="{{ asset('loginn') }}/js/main.js"></script>

</body>

</html>
