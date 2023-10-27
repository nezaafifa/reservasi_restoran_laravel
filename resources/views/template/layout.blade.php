<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="asset/css/all.css">
	<link rel="stylesheet" type="text/css" href="asset/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="asset/css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="asset/css/fontawesome.min.css">
	<link href="asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="asset/style.css">
	<title>Foreign Resto : @yield('title')</title>
</head>
<body>
	<div class="wrapper-header">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="logo">
						<a href="">
							<img src="images/logo22.png">
						</a>
					</div>
				</div>
				<div class="col-md-9">
					<div class="top-menu">
						<ul class="nav">
							<li class="nav-item">
								<a href="{{url('/')}}" class="nav-link active">Home</a>
							</li>
							<li class="nav-item">
								<a href="{{url('/about')}}" class="nav-link active">About</a>
							</li>
							<li class="nav-item">
								<a href="{{url('/menu')}}" class="nav-link active">Menu</a>
							</li>
							<li class="nav-item">
								<a href="{{url('/reservation')}}" class="nav-link active">Reservation</a>
							</li>
							<li class="nav-item">
								<a href="{{url('/contact_us')}}" class="nav-link active">Contact Us</a>
							</li>
							<li class="nav-item">
								<a href="{{url('/login')}}" class="nav-link active"></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapp-body">
	@yield('content')
	</div>
	<footer id="footer" style="background: #333300;"> 
		<div class="container text-center text-white mt-4">
			<h3 style="font-family: Poppins;">Foreign Restaurant</h3>
      		<p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      		<div class="social-links">
      			<a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
      			<a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
      			<a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
      			<a href="#" class="website"><i class="fa fa-globe"></i></a>
      		</div>
      		<div class="copyright">
      			&copy; Copyright <strong><span>Foreign Resto</span></strong>.	All Rights Reserved
      		</div>
      		<div class="credits">
      			Designed By <a href="https://nezafifa.blogspot.com/">NezzaAfifa</a>
      		</div>
		</div>
	</footer>
</body>
<script type="text/javascript" src="asset/js/all.js"></script>
<script type="text/javascript" src="asset/js/all.min.js"></script>
<script type="text/javascript" src="asset/js/bootstrap.js"></script>
<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
<script type="text/javascript" src="asset/js/fontawesome.js"></script>
 <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
</html>
@stack('bottom')