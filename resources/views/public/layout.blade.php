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
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
	<div class="page-container">
		<div class="main-container">
			<!-- Navbar -->
			<section id="navbar-section">
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					<a class="navbar-brand mr-lg-4" href="/"> <img src="{{asset('images/logo.png')}}" alt="logo" style="height: 30px;"> Qaqnus</a>
					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#this">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="this">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item">
								<a class="nav-link" href="/all">All News</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="nv-drop" data-toggle="dropdown">Categories</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="/category/World">World</a>
									<a class="dropdown-item" href="/category/Local">Local</a>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/contact">Contact</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/about">About Us</a>
							</li>
						</ul>
						<form class="form-inline mr-lg-2">
					      <input class="form-control search" type="text" placeholder="Search">
					      <button class="btn rounded-circle" type="button"><i class="fa fa-search"></i></button>
					    </form>
					</div>
				</nav>
            </section>
			
			@include('include.messages')
            <!-- Content -->
            @yield('content')
			
		</div>

		<!-- Footer -->
		<footer id="footer-section" class="footer">
			<div class="container-fluid bg-dark p-2 mt-2 pb-3">
				<div class="container text-info">
					<div class="row mt-sm-2">
						<div class="col-lg-6 col-sm-12 footer-text">
							<p><i class="fa fa-copyright"></i> Copyright. All Rights Reserved 2020, Qaqnus</p>
						</div>
						<div class="col-lg-6 col-sm-12 footer-icons">
							<a href="#" class="sc-link"><i class="fa fa-facebook fa-lg"></i></a>
							<a href="#" class="sc-link"><i class="fa fa-twitter  fa-lg"></i></a>
							<a href="#" class="sc-link"><i class="fa fa-telegram  fa-lg"></i></a>
							<a href="#" class="sc-link"><i class="fa fa-instagram  fa-lg"></i></a>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
	<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>