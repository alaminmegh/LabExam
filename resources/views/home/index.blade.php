<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>

  <!-- Code For Bootstrap CSS-->
  <link rel="stylesheet" href="{{asset('custom')}}/style/bootstrap/css/bootstrap.min.css"/>

  <!-- Code For Font Awesome -->
  <link rel="stylesheet" href="{{asset('custom')}}/style/fontawesome/css/all.min.css"/>

  <!-- Code For Layout CSS -->
  <link rel="stylesheet" href="{{asset('custom')}}/style/css/home/home.css"/>
</head>
<body>

  <div class="container-fluid bg_header">
    <div class="container">
      <div class="row header_section">
        <div class="col-sm-3 logo">
          <a href="/home">
            <img src="{{asset('custom')}}/images/logo/logo.png" alt="Logo">
            <h3></h3>
          </a>
        </div>
        <div class="col-sm-6 social_media"></div>
      </div>
    </div>
  </div>

  <div class="container-fluid bg_nav">
    <div class="container">
      <div class="row nav_section">
        <nav class="navbar navbar-expand-sm p-0">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link px-3 py-2 text-white" href="#"><i class="fas fa-home"></i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3 py-2 text-white" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3 py-2 text-white" href="#">Contact</a>
            </li>
          </ul>
        </nav>
        <nav class="navbar navbar-expand-sm p-0 ml-auto">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link px-3 py-2 text-white" href="{{route('signup.index')}}"><i class="fas fa-user-plus"></i> Signup</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3 py-2 text-white" href="{{route('login.index')}}"><i class="fas fa-user"></i> Login</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>

  <!-- <div class="container-fluid bg_footer mb-1">
    <div class="container">
      <div class="row footer_section justify-content-center clearfix py-2">
        <p class="mt-2">Copyright 2018-19 &copy; onlineschool.com</p>
      </div>
    </div>
  </div> -->

  <!-- Code For Font Awesome JS -->
  <script type="text/javascript" src="{{asset('custom')}}/style/fontawesome/js/all.min.js"></script>
  <!-- Code For Bootstrap JS -->
  <script type="text/javascript" src="{{asset('custom')}}/style/bootstrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="{{asset('custom')}}/style/bootstrap/js/popper.min.js"></script>
  <script type="text/javascript" src="{{asset('custom')}}/style/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
