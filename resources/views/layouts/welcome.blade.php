<!DOCTYPE html>
<html lang="{{ Config::get('app.locale') }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ mix('js/admin-app.js')}}" defer></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="https://kit.fontawesome.com/3d6d942d7a.js" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Welcome</title>
</head>

<body>
    <nav class="navbar navbar sticky-top py-3 p-0 nav-top">
        <h1>Welcome</h1>
    </nav>
    <div class="container-fluid admin-container">
    <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
          <li class="nav-item dash-link">
                    <a class="nav-link dash-item" href="/login">
                        Login
                    </a>
                </li>
                <li class="nav-item dash-link">
                    <a class="nav-link dash-item" href="/register">
                        Register
                    </a>
                </li>
          </ul>
        </div>
      </nav>
        <main role="main" class="admin-window col-md-9 ml-sm-auto col-lg-10 align-items-center">
            @yield('content')
        </main>
    </div>
    </div>
</body>
</html>
