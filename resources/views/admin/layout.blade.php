<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title>@yield('title')</title>

  <!-- Code For Bootstrap CSS-->
  <link rel="stylesheet" href="{{asset('custom')}}/style/bootstrap/css/bootstrap.min.css"/>

  <!-- Code For Font Awesome -->
  <link rel="stylesheet" href="{{asset('custom')}}/style/fontawesome/css/all.min.css"/>

  <!-- Code For Layout CSS -->
  <link rel="stylesheet" href="{{asset('custom')}}/style/css/admin.css"/>
  @yield('style')
</head>
<body>
  <div class="container-fluid mb-2 bg_header">
    <div class="container">
      <div class="row">
        <div class="header_section d-flex flex-fill">
          <div class="logo col-sm-2">
            <img src="{{asset('custom')}}/images/logo/logo1.png" alt="Logo">
          </div>
          <div class="header_menu d-flex justify-content-end col-sm-10 pr-0">
            <nav class="navbar navbar-expand-sm">
              <ul class="navbar-nav menu_top">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.index')}}">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">File Manager</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.addModerator')}}">
                    <i class="fas fa-plus"></i> Moderator</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.add_content')}}">
                    <i class="fas fa-plus"></i> Upload</a>
                </li>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{route('logout')}}">Logout</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid bg_content">
    <div class="container">
      <div class="row">
        <div class="content_section border p-1 d-flex flex-fill justify-content-start">
          <div class="content_left p-1">
            <div class="info border px-2 py-1">
              <img class="img-thumbnail d-block mx-auto mb-3" src="{{asset('custom')}}/images/user.png" alt="Current User">
              <h5 class="text-center mb-0">Welcome,</h5>
              <p class="text-center">{{session('username')}}</p>
            </div>
            <div class="side_menu mt-1">
              <nav class="navbar px-0">
                <ul class="navbar-nav side_menu_bar flex-fill" id="accordion">
                  <li class="nav-item mb-2">
                    <a class="nav-link collapsed" data-toggle="collapse" href="#addUser">
                      <i class="fas fa-list-ul"></i> Content List <i class="fas fa-caret-down dropdown_icon"></i> </a>

                      <div id="addUser" class="collapse border" data-parent="#accordion">
                      <ul class="list-group drop_menu_bar">
                        <li class="list-group-item p-0">
                          <a class="d-block pl-3 pr-2 py-1" @yield('active_addStudent') href="#">
                            <i class="fas fa-list-ul"></i> Software</a>
                        </li>
                        <li class="list-group-item p-0">
                          <a class="d-block pl-3 pr-2 py-1" @yield('active_addTeacher') href="#">
                            <i class="fas fa-list-ul"></i> Movies</a>
                        </li>
                        <li class="list-group-item p-0">
                          <a class="d-block pl-3 pr-2 py-1" @yield('active_addAdmin') href="#">
                            <i class="fas fa-list-ul"></i> Video Songs</a>
                        </li>
                        <li class="list-group-item p-0">
                          <a class="d-block pl-3 pr-2 py-1" @yield('active_addAdmin') href="#">
                            <i class="fas fa-list-ul"></i> Natok</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item mb-2">
                    <a class="nav-link" href="#">Link 3</a>
                  </li>
                  <li class="nav-item mb-2">
                    <a class="nav-link" href="#">Link 1</a>
                  </li>
                  <li class="nav-item mb-2">
                    <a class="nav-link" href="{{route('logout')}}">Logout</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="content_right border p-1 mt-1">
            @yield('main_content')
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
  @yield('ajax')
</body>
</html>
