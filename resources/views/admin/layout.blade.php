<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

  <title>{{$data['title']}}</title>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>

<body>
  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-dark border-right" id="sidebar-wrapper">
      <div class="sidebar-heading text-light">
        <span style="font-weight: 700; font-size: 1.5rem"><img src="{{asset('images/logo.png')}}" class="logo" alt="logo">Qaqnus</span></div>
      <div class="list-group list-group-flush">
        <a href="/admin/dashboard" class="list-group-item list-group-item-action bg-dark text-success">
          <i class="fa fa-area-chart fa-lg"></i> Dashboard
        </a>
        <a href="/admin/posts" class="list-group-item list-group-item-action bg-dark text-info">
          <i class="fa fa-newspaper-o fa-lg"></i> Posts <span class="badge badge-primary">1000</span></a>
        <a class="list-group-item list-group-item-action bg-dark text-warning">
          <i class="fa fa-folder-o fa-lg"></i> Categories</a>
        <a href="/admin/users" class="list-group-item list-group-item-action bg-dark text-secondary">
          <i class="fa fa-group fa-lg"></i> Users <span class="badge badge-light">1</span>
        </a>
      </div>
    </div>

    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle"><i class="fa fa-exchange fa-lg"></i></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <form class="form-inline ml-lg-2 mr-lg-2 search">
                <input class="form-control search" type="text" placeholder="Search">
                <button class="btn rounded-circle" type="button"><i class="fa fa-search text-primary"></i></button>
              </form>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                Khurshidbek Kobilov
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item">Status: <code class="badge bg-success text-light">Admin</code></a>
                <a class="dropdown-item text-primary font-weight-bold" href="#">Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger font-weight-bold" href="/admin">Sign out</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      @include('include.messages')
      @yield('content')
    
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
