<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" href="../images/favicon.png">

  <title>Login to Qaqnus</title>

  <!-- Styles -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="{{ asset('css/signin.css') }}" rel="stylesheet">

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
<body class="text-center">
  <form class="form-signin" action="{{ route('login') }}" method="POST">
    @csrf
    @include('include.messages')
    <img class="mb-4" src="../images/logo.png" alt="qaqnus-logo" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Administrator</h1>
    <label for="inputEmail" class="sr-only">Username</label>
    <input id="email" type="email" class="form-control" name="email" required autocomplete="email" autofocus>
    
    <label for="inputPassword" class="sr-only">Password</label>
    <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
    
    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    <p class="mt-5 mb-3 text-muted"><i class="fa fa-copyright"></i> Qaqnus.uz 2020</p>
  </form>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>