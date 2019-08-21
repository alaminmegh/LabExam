<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>


    <!-- Code For Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('custom')}}/style/bootstrap/css/bootstrap.min.css"/>

    <!-- Code For Font Awesome -->
    <link rel="stylesheet" href="{{asset('custom')}}/style/fontawesome/css/all.min.css"/>
  <!--  -->
  <link rel="stylesheet" href="{{asset('custom')}}/style/css/signup/signup.css">

</head>
<body>
  <div class="container-fluid bg_login clearfix">
    <div class="container">
      <div class="row">
        <div class="login_section d-flex flex-fill justify-content-center">
          <div class="login_form w-50">
            <h5 class="text-center">Registration</h5>
            <span class="alert text-white p-0 py-1 m-0 mt-2 d-block text-center">{{session('error')}}</span>
            <form class="w-75 mx-auto mt-3 pb-4 text-white clearfix" method="post">
              @csrf
              <div class="form-group">
                <label for="">Username:</label>
                <input type="text" name="username" class="form-control form-control-sm" id="" placeholder="Username">
              </div>
              <div class="form-group">
                <label for="">Email:</label>
                <input type="text" name="email" class="form-control form-control-sm" id="" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="">Password:</label>
                <input type="password" name="password" class="form-control form-control-sm" id="" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="">Confirm Password:</label>
                <input type="password" name="cpassword" class="form-control form-control-sm" id="" placeholder="Confirm Password">
              </div>
              <button type="submit" class="btn btn-sm btn-success btn-block mb-3">Registration</button>

              <a href="#" class="float-left">Forget Password?</a>
              <a href="{{route('home.index')}}" class="float-right">Back to Home</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Code For Font Awesome JS -->
  <script type="text/javascript" src="{{asset('custom')}}/style/fontawesome/js/all.min.js"></script>
  <!-- Code For Bootstrap JS -->
  <script type="text/javascript" src="{{asset('custom')}}/style/bootstrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="{{asset('custom')}}/style/bootstrap/js/popper.min.js"></script>
  <script type="text/javascript" src="{{asset('custom')}}/style/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
