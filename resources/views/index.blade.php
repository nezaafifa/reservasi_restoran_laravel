@extends('template.layout')
@section('content')
		<div class="wrapper-section section-banner">
			<div class="section-inner text-white">
				<div class="container">
					<h1>Welcome To Foreign Restau</h1>
					<h4>Delivering great food for more than 18 years!</h4>
					<a href="{{url('/chef')}}" style="color: #f0ad4e;">Our Profesional Chef Now
						<i class="fa fa-arrow-right"></i>
					</a>
				</div>
			</div>
		</div>
		<div class="section-bottom center mt-3">
			<div class="section-inner">
				<div class="container">
					<h1 class="text">Why Choose Our Restaurant</h1>
					<div class="row">
						<div class="col-md-4">
							<div class="card1" style="width: 20rem; height: 15rem;">
								<h2 class="title1">01</h2>
								<p class="card-text title mt-3">Five Stars</p>
								<p class="sub-title">because our restaurant has been listed in the book, the best and most beautiful restaurant in the world.</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card1" style="width: 20rem; height: 15rem;">
								<h2 class="title1">02</h2>
								<p class="card-text title mt-3">the service is good</p>
								<p class="sub-title">because in our restaurant the waiters have been chosen by good and kind people.</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card1" style="width: 20rem; height: 15rem;">
								<h2 class="title1">03</h2>
								<p class="card-text title mt-3">The food is delicious</p>
								<p class="sub-title">In our restaurant, there is a lot of food that no one sells.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-content mt-5 center text-white">
			<div class="section-inner">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="card-img-overlay">
								<h5 class="title">Check Our Specials</h5>
								<p class="sub-title">Our food is our best food that believes in us</p>
								<div class="col-md-8" style="margin-left: 9%;">
									<div class="clearfix">
										<img src="Images/hero-img.png" class="float-left rounded-circle" style="height: 200px; width: 200px;">
										<p style="text-align: left;">is a typical food from Cirebon, West Java, Indonesia made from tofu and other spices. Gejrot tofu consists of tofu that has been fried and then cut into small pieces and eaten with a sauce made from chilies, garlic, shallots and sugar. Usually served in small lay. Gejrot tofu is also a typical snack from the Cirebon area which is popular among children and adults, because of its unique taste sensation. Gejrot tofu is tofu which is cut into small pieces and then placed on a small plate and the tofu used is sumedang tofu.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-bottom center mt-3">
			<div class="section-inner">
				<div class="container">
					<h5 class="text">Organize Your Events in our Restaurant</h5>
					<div class="row">
						<div class="col-md-4">
							<div class="card" style="width: 20rem;">
								<img src="Images/events-1.jpg" style="width: auto;">
								<p class="card-text title-1 mt-3">Brithday Parties</p>
								<p><span>$189</span></p>
								<ul>
                    				<li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    				<li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    				<li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  				</ul>
                  				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                  				</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card" style="width: 20rem;">
								<img src="Images/events-2.jpg" style="width: auto;">
								<p class="card-text title-1 mt-3">Private Parties</p>
								<p><span>$89</span></p>
								<ul>
                    				<li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    				<li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    				<li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  				</ul>
                  				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                  				</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card" style="width: 20rem;">
								<img src="Images/events-3.jpg" style="width: auto;">
								<p class="card-text title-1 mt-3">Costum Parties</p>
								<p><span>$69</span></p>
								<ul>
                    				<li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    				<li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    				<li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  				</ul>
                  				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                  				</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-recent section-project mt-5 center text-white">
			<div class="section-inner">
				<div class="container">
						<div class="col-md-12">
						 <h5 class="text">Check Our Project</h5>
						</div>
					<div class="row center mt-3">
						<div class="col-md-2">
							<div class="card" >
								<img src="Images/gallery/gallery-1.jpg" style="width: auto;">
							</div>
						</div>
						<div class="col-md-2">
							<div class="card" >
								<img src="Images/gallery/gallery-2.jpg" style="width: auto;">
							</div>
						</div>
						<div class="col-md-2">
							<div class="card" >
								<img src="Images/gallery/gallery-3.jpg" style="width: auto;">
							</div>
						</div>
						<div class="col-md-2">
							<div class="card" >
								<img src="Images/gallery/gallery-4.jpg" style="width: auto;">
							</div>
						</div>
						<div class="col-md-2">
							<div class="card" >
								<img src="Images/gallery/gallery-5.jpg" style="width: auto;">
							</div>
						</div>
						<div class="col-md-2">
							<div class="card" >
								<img src="Images/gallery/gallery-6.jpg" style="width: auto;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-bottom-2 center mt-5">
			<div class="container">
				<h5 class="text">What Are They Saying About Us</h5>
				<div class="row">
					<div class="col-md-4">
						<div class="card color-1" style="width: 18 rem">
							<div class="card-body">
								<img src="Images/testimonials/testimonials-1.jpg" alt class="rounded-circle" style="width: 10rem;">
								<h5 class="card-title center Signpainter">Ceo Food</h5>
								<p class="card-text Poppins">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card color-1" style="width: 18 rem">
							<div class="card-body">
								<img src="Images/testimonials/testimonials-2.jpg" alt class="rounded-circle" style="width: 10rem;">
								<h5 class="card-title center Signpainter">Aktris Food</h5>
								<p class="card-text Poppins">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card color-1" style="width: 18 rem">
							<div class="card-body">
								<img src="Images/testimonials/testimonials-3.jpg" alt class="rounded-circle" style="width: 10rem;">
								<h5 class="card-title center Signpainter">Konsumen Food</h5>
								<p class="card-text Poppins">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection