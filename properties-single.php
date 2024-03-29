<?php
include 'connect.php';
$id=$_GET['id'];
$sql=mysqli_query($con,"SELECT * from propimg");
$row=mysqli_fetch_assoc($sql);
?>
<!DOCTYPE php>
<php lang="en">

	<!-- Mirrored from preview.colorlib.com/theme/hamlet/properties-single.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Apr 2023 11:56:38 GMT -->

	<head>
		<title><?php echo $row['property_name'] ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
		<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/aos.css">
		<link rel="stylesheet" href="css/ionicons.min.css">
		<link rel="stylesheet" href="css/bootstrap-datepicker.css">
		<link rel="stylesheet" href="css/jquery.timepicker.css">
		<link rel="stylesheet" href="css/flaticon.css">
		<link rel="stylesheet" href="css/icomoon.css">
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container">
				<a class="navbar-brand" href="index-2.php">Hamlet.</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="oi oi-menu"></span> Menu
				</button>
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
						<li class="nav-item active"><a href="properties.php" class="nav-link">Properties</a></li>
						<li class="nav-item"><a href="agents.php" class="nav-link">Agents</a></li>
						<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
						<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
						<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
						<li class="nav-item cta"><a href="signup.php" class="nav-link"><span>Sign Up</span></a></li>
					</ul>
				</div>
			</div>
		</nav>

		<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_4.jpg');" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-center">
					<div class="col-md-9 ftco-animate text-center">
						<h1 class="mb-2 bread"><?php echo $row['property_name'] ?></h1>
						<p class="breadcrumbs"><span class="mr-2"><a href="index-2.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="properties.php">Properties <i class="ion-ios-arrow-forward"></i></a></span> <span>Properties Single <i class="ion-ios-arrow-forward"></i></span></p>
					</div>
				</div>
			</div>
		</section>
		<section class="ftco-section">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="search-wrap">
							<h3>Advance Search</h3>
							<form action="#" class="search-property">
								<div class="row">
									<div class="col-md-12 align-items-end ftco-animate">
										<div class="form-group">
											<label for="#">Keyword</label>
											<div class="form-field">
												<div class="icon"><span class="icon-pencil"></span></div>
												<input type="text" class="form-control" placeholder="Keyword">
											</div>
										</div>
									</div>
									<div class="col-md-12 align-items-end ftco-animate">
										<div class="form-group">
											<label for="#">Location</label>
											<div class="form-field">
												<div class="icon"><span class="icon-pencil"></span></div>
												<input type="text" class="form-control" placeholder="City/Locality Name">
											</div>
										</div>
									</div>
									<div class="col-md-12 align-items-end ftco-animate">
										<div class="form-group">
											<label for="#">Property Type</label>
											<div class="form-field">
												<div class="select-wrap">
													<div class="icon"><span class="ion-ios-arrow-down"></span></div>
													<select name="" id="" class="form-control">
														<option value="">Type</option>
														<option value="">Commercial</option>
														<option value="">- Office</option>
														<option value="">Residential</option>
														<option value="">Villa</option>
														<option value="">Condominium</option>
														<option value="">Apartment</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12 align-items-end ftco-animate">
										<div class="form-group">
											<label for="#">Property Status</label>
											<div class="form-field">
												<div class="select-wrap">
													<div class="icon"><span class="ion-ios-arrow-down"></span></div>
													<select name="" id="" class="form-control">
														<option value="">Type</option>
														<option value="">Rent</option>
														<option value="">Sale</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12 align-items-end ftco-animate">
										<div class="form-group">
											<label for="#">Agents</label>
											<div class="form-field">
												<div class="select-wrap">
													<div class="icon"><span class="ion-ios-arrow-down"></span></div>
													<select name="" id="" class="form-control">
														<option value="">Any</option>
														<option value="">Jonh Doe</option>
														<option value="">Doe Mags</option>
														<option value="">Kenny Scott</option>
														<option value="">Emily Storm</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 align-items-end ftco-animate">
										<div class="form-group">
											<label for="#">Min Beds</label>
											<div class="form-field">
												<div class="select-wrap">
													<div class="icon"><span class="ion-ios-arrow-down"></span></div>
													<select name="" id="" class="form-control">
														<option value="">1</option>
														<option value="">2</option>
														<option value="">3</option>
														<option value="">4</option>
														<option value="">5</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12 align-items-end ftco-animate">
										<div class="form-group">
											<label for="#">Min Bathroom</label>
											<div class="form-field">
												<div class="select-wrap">
													<div class="icon"><span class="ion-ios-arrow-down"></span></div>
													<select name="" id="" class="form-control">
														<option value="">1</option>
														<option value="">2</option>
														<option value="">3</option>
														<option value="">4</option>
														<option value="">5</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12 align-items-end ftco-animate">
										<div class="form-group">
											<label for="#">Min Price</label>
											<div class="form-field">
												<div class="select-wrap">
													<div class="icon"><span class="ion-ios-arrow-down"></span></div>
													<select name="" id="" class="form-control">
														<option value="">Min Price</option>
														<option value="">$1,000</option>
														<option value="">$5,000</option>
														<option value="">$10,000</option>
														<option value="">$50,000</option>
														<option value="">$100,000</option>
														<option value="">$200,000</option>
														<option value="">$300,000</option>
														<option value="">$400,000</option>
														<option value="">$500,000</option>
														<option value="">$600,000</option>
														<option value="">$700,000</option>
														<option value="">$800,000</option>
														<option value="">$900,000</option>
														<option value="">$1,000,000</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12 align-items-end ftco-animate">
										<div class="form-group">
											<label for="#">Max Price</label>
											<div class="form-field">
												<div class="select-wrap">
													<div class="icon"><span class="ion-ios-arrow-down"></span></div>
													<select name="" id="" class="form-control">
														<option value="">Max Price</option>
														<option value="">$5,000</option>
														<option value="">$10,000</option>
														<option value="">$50,000</option>
														<option value="">$100,000</option>
														<option value="">$200,000</option>
														<option value="">$300,000</option>
														<option value="">$400,000</option>
														<option value="">$500,000</option>
														<option value="">$600,000</option>
														<option value="">$700,000</option>
														<option value="">$800,000</option>
														<option value="">$900,000</option>
														<option value="">$1,000,000</option>
														<option value="">$2,000,000</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12 align-items-end ftco-animate">
										<div class="form-group">
											<label for="#">Min Area <span>(sq ft)</span></label>
											<div class="form-field">
												<div class="icon"><span class="icon-pencil"></span></div>
												<input type="text" class="form-control" placeholder="Min Area">
											</div>
										</div>
									</div>
									<div class="col-md-12 align-items-end ftco-animate">
										<div class="form-group">
											<label for="#">Max Area <span>(sq ft)</span></label>
											<div class="form-field">
												<div class="icon"><span class="icon-pencil"></span></div>
												<input type="text" class="form-control" placeholder="Max Area">
											</div>
										</div>
									</div>
									<div class="col-md-12 align-self-end ftco-animate">
										<div class="form-group">
											<div class="form-field">
												<input type="submit" value="Search" class="form-control btn btn-primary">
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-9 properties-single">
						<div class="single-slider owl-carousel">
							<div class="item">
								<div class="properties-img" style="background-image: url(images/work-1.jpg);"></div>
							</div>
							<div class="item">
								<div class="properties-img" style="background-image: url(images/work-2.jpg);"></div>
							</div>
							<div class="item">
								<div class="properties-img" style="background-image: url(images/work-3.jpg);"></div>
							</div>
						</div>
						<div class="col-md-12 Properties-single mt-4 mb-5 ftco-animate">
							<h2>Fatima Columbus House</h2>
							<p class="rate mb-4">
								<span class="loc"><a href="#"><i class="icon-map"></i> 291 South 21th Street, Suite 721 New York NY 10016</a></span>
							</p>
							<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
							<div class="d-md-flex mt-5 mb-5">
								<ul>
									<li><span>Lot Area: </span> 1,250 SQ FT</li>
									<li><span>Bed Rooms: </span> 4</li>
									<li><span>Bath Rooms: </span> 4</li>
									<li><span>Garage: </span> 1</li>
								</ul>
								<ul class="ml-md-5">
									<li><span>Floor Area: </span> 1,300 SQ FT</li>
									<li><span>Year Build:: </span> 2018</li>
									<li><span>Stories: </span> 1</li>
									<li><span>Roofing: </span> New</li>
								</ul>
							</div>
							<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
						</div>
						<div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
							<h3 class="mb-4">Take A Tour</h3>
							<div class="block-16">
								<figure>
									<img src="images/image_2.jpg" alt="Image placeholder" class="img-fluid">
									<a href="https://vimeo.com/45830194" class="play-button popup-vimeo"><span class="icon-play"></span></a>
								</figure>
							</div>
						</div>
						<div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
							<h4 class="mb-4">Review &amp; Ratings</h4>
							<div class="row">
								<div class="col-md-6">
									<form method="post" class="star-rating">
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="exampleCheck1">
											<label class="form-check-label" for="exampleCheck1">
												<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i> 100 Ratings</span></p>
											</label>
										</div>
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="exampleCheck1">
											<label class="form-check-label" for="exampleCheck1">
												<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i> 30 Ratings</span></p>
											</label>
										</div>
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="exampleCheck1">
											<label class="form-check-label" for="exampleCheck1">
												<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 5 Ratings</span></p>
											</label>
										</div>
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="exampleCheck1">
											<label class="form-check-label" for="exampleCheck1">
												<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
											</label>
										</div>
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="exampleCheck1">
											<label class="form-check-label" for="exampleCheck1">
												<p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
											</label>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer class="ftco-footer ftco-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Hamlet.</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
								<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md">
						<div class="ftco-footer-widget mb-4 ml-md-4">
							<h2 class="ftco-heading-2">Company</h2>
							<ul class="list-unstyled">
								<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
								<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
								<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
								<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>FAQ</a></li>
								<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Reviews</a></li>
								<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Stories</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Explore</h2>
							<ul class="list-unstyled">
								<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Privacy</a></li>
								<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Policy</a></li>
								<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Terms</a></li>
								<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Review</a></li>
								<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Features</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Get Started</h2>
							<ul class="list-unstyled">
								<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Buy</a></li>
								<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Rent</a></li>
								<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Payment</a></li>
								<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Mortgage</a></li>
								<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Loan</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Newsletter</h2>
							<p>Far far away, behind the word mountains, far from the countries.</p>
							<form action="#" class="subscribe-form">
								<div class="form-group">
									<input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
									<input type="submit" value="Subscribe" class="form-control submit px-3">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
						</p>
					</div>
				</div>
			</div>
		</footer>

		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
				<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
				<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
			</svg></div>
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-migrate-3.0.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/aos.js"></script>
		<script src="js/jquery.animateNumber.min.js"></script>
		<script src="js/scrollax.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
		<script src="js/google-map.js"></script>
		<script src="js/main.js"></script>

		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
		<script>
			window.dataLayer = window.dataLayer || [];

			function gtag() {
				dataLayer.push(arguments);
			}
			gtag('js', new Date());

			gtag('config', 'UA-23581568-13');
		</script>
		<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7bce299bc90ef35f","version":"2023.3.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
	</body>

	<!-- Mirrored from preview.colorlib.com/theme/hamlet/properties-single.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Apr 2023 11:56:38 GMT -->
</php>