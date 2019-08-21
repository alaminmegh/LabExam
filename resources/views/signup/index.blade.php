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
            @if(session()->has('success'))
    <div class="alert alert-success py-1 w-75 mx-auto">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>{{session('success')}}</strong>
    </div>
    @endif
    @if(session()->has('error'))
    <div class="alert alert-danger py-1 w-75 mx-auto">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>{{session('error')}}</strong>
    </div>
    @endif
            <form class="w-75 mx-auto mt-3 pb-4 text-white clearfix" method="post">
              @csrf
              <div class="form-group">
                <label for="">Username:</label>
                <input type="text" name="username" class="form-control form-control-sm" id="" placeholder="Username">
              </div>
              @if ($errors->has('username'))
                <p class="text-danger">{{ $errors->first('username') }}</p>
                @endif
              <div class="form-group">
                <label for="">Email:</label>
                <input type="text" name="email" class="form-control form-control-sm" id="" placeholder="Email">
              </div>
              @if ($errors->has('email'))
                <p class="text-danger">{{ $errors->first('email') }}</p>
                @endif
              <div class="form-group">
                <label for="">Password:</label>
                <input type="password" name="password" class="form-control form-control-sm" id="" placeholder="Password">
              </div>
              @if ($errors->has('password'))
                <p class="text-danger">{{ $errors->first('password') }}</p>
                @endif
              <div class="form-group">
                <label for="">Confirm Password:</label>
                <input type="password" name="cpassword" class="form-control form-control-sm" id="" placeholder="Confirm Password">
              </div>
              @if ($errors->has('cpassword'))
                <p class="text-danger">{{ $errors->first('cpassword') }}</p>
                @endif

                <div class="form-group">
      <label for="">User Type:</label>
      <select class="form-control form-control-sm" id="" name="userType">
        <option value="">Select Role</option>
        <option value="admin">Admin</option>
        <option value="moderator">Moderator</option>
      </select>
    </div>
    @if ($errors->has('userType'))
      <p class="text-danger">{{ $errors->first('userType') }}</p>
    @endif
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
