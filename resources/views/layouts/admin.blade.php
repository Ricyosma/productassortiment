<!DOCTYPE html>
<html lang="{{ Config::get('app.locale') }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ mix('js/admin-app.js')}}" defer></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="https://kit.fontawesome.com/3d6d942d7a.js" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Admin Panel</title>
</head>

<body>
    <nav class="navbar navbar sticky-top py-3 p-0 nav-top">
        <li class="nav-item ">
            <a class="nav-link log-out-link" href="{{ url('/logout') }}">
                Sign out
            </a>
        </li>
    </nav>
    <div class="container-fluid admin-container">
    <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
          <li class="nav-item dash-link">
                    <a class="nav-link dash-item" href="/admin">
                        Dashboard
                    </a>
                </li>
                <li class="nav-item dash-link">
                    <a class="nav-link dash-item" href="/admin/create/product">
                        Add product
                    </a>
                </li>
                <li class="nav-item dash-link">
                    <a class="nav-link dash-item" href="/admin/create/category">
                        Add categories
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
