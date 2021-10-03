<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BeautyCare - Halaman Treatments</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link rel="stylesheet" href="assets/css/ionicons.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">


    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light ftco-navbar-light-2" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{ url('index') }}"><img src ="assets/images/relax.png" width="30px">&nbsp;BeautyCare</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="{{ url('index') }}" class="nav-link">Home</a></li>
	          <li class="nav-item active"><a href="{{ url('treatments') }}" class="nav-link">Treatments</a></li>
	          <li class="nav-item"><a href="{{ url('specialists') }}" class="nav-link">Doctor</a></li>
	          <li class="nav-item"><a href="{{ url('contact') }}" class="nav-link">Contact</a></li>
              <li class="nav-item"><a href="{{ url('logout') }}" class="nav-link">Logout</a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">Treatments</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('index') }}">Home</a></span> <span>Treatments</span></p>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section">
	  	<div class="container-fluid px-md-5">
	  		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 heading-section ftco-animate text-center">
            <h3 class="subheading">Services</h3>
            <h2 class="mb-1">Treatments</h2>
          </div>
        </div>
        <div class="row align-items-center">
        	<div class="col-lg-4">
        		<div class="row no-gutters">
        			<div class="col-md-6 d-flex align-items-stretch">
        				<div class="treatment w-100 text-center ftco-animate border border-right-0 border-bottom-0 p-3 py-4">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="flaticon-candle"></span>
									</div>
									<div class="text mt-2">
										<h3>Salt &amp; Aroma</h3>
										<p>A small river named Duden flows by their place and supplies.</p>
									</div>
								</div>
        			</div>
        			<div class="col-md-6 d-flex align-items-stretch">
        				<div class="treatment w-100 text-center ftco-animate border border-bottom-0 p-3 py-4">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="flaticon-spa-1"></span>
									</div>
									<div class="text mt-2">
										<h3>Hydro</h3>
										<p>A small river named Duden flows.</p>
									</div>
								</div>
        			</div>
        			<div class="col-md-6 d-flex align-items-stretch">
        				<div class="treatment w-100 text-center ftco-animate border border-right-0 p-3 py-4">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="flaticon-stone"></span>
									</div>
									<div class="text mt-2">
										<h3>Hot Stone</h3>
										<p>A small river named Duden flows by their place and supplies.</p>
									</div>
								</div>
        			</div>
        			<div class="col-md-6 d-flex align-items-stretch">
        				<div class="treatment w-100 text-center ftco-animate border p-3 py-4">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="flaticon-lotus"></span>
									</div>
									<div class="text mt-2">
										<h3>Aroma</h3>
										<p>A small river named Duden flows.</p>
									</div>
								</div>
        			</div>
        		</div>
        	</div>


        	<div class="col-lg-4 d-flex align-items-stretch">
        		<div id="accordion" class="myaccordion w-100 text-center py-5 px-1 px-md-4">
        			<div>
	        			<h3>Prices</h3>
	        			<p>Far far away, behind the word mountains, far from the countries Vokalia</p>
        			</div>
						  <div class="card">
						    <div class="card-header" id="headingOne">
						      <h2 class="mb-0">
						        <button class="d-flex align-items-center justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Spa Therapies
						          <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
						      <div class="card-body text-left">
						      	<ul>
						      		<li class="d-flex">
						      			<span>Face Treatments</span>
						      			<span>40 min.</span>
						      			<span>$10</span>
						      		</li>
						      		<li class="d-flex">
						      			<span>Nail Treatments</span>
						      			<span>30 min.</span>
						      			<span>$20</span>
						      		</li>
						      		<li class="d-flex">
						      			<span>Medical Treatments</span>
						      			<span>60 min.</span>
						      			<span>$10</span>
						      		</li>
						      		<li class="d-flex">
						      			<span>Hair Treatments</span>
						      			<span>30 min.</span>
						      			<span>$30</span>
						      		</li>
						      	</ul>
						      </div>
						    </div>
						  </div>

						  <div class="card">
						    <div class="card-header" id="headingTwo">
						      <h2 class="mb-0">
						        <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          Massage Therapies
						          <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						      <div class="card-body text-left">
						      	<ul>
						      		<li class="d-flex">
						      			<span>Face Treatments</span>
						      			<span>40 min.</span>
						      			<span>$10</span>
						      		</li>
						      		<li class="d-flex">
						      			<span>Nail Treatments</span>
						      			<span>30 min.</span>
						      			<span>$20</span>
						      		</li>
						      		<li class="d-flex">
						      			<span>Medical Treatments</span>
						      			<span>60 min.</span>
						      			<span>$10</span>
						      		</li>
						      		<li class="d-flex">
						      			<span>Hair Treatments</span>
						      			<span>30 min.</span>
						      			<span>$30</span>
						      		</li>
						      	</ul>
						      </div>
						    </div>
						  </div>
						</div>
        	</div>


        	<div class="col-lg-4">
        		<div class="row no-gutters">
        			<div class="col-md-6 d-flex align-items-stretch">
        				<div class="treatment w-100 text-center ftco-animate border border-right-0 border-bottom-0 p-3 py-4">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="flaticon-beauty-treatment"></span>
									</div>
									<div class="text mt-2">
										<h3>Relaxation</h3>
										<p>A small river named Duden flows by their place and supplies.</p>
									</div>
								</div>
        			</div>
        			<div class="col-md-6 d-flex align-items-stretch">
        				<div class="treatment w-100 text-center ftco-animate border border-bottom-0 p-3 py-4">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="flaticon-relax"></span>
									</div>
									<div class="text mt-2">
										<h3>Athlete</h3>
										<p>A small river named Duden flows.</p>
									</div>
								</div>
        			</div>
        			<div class="col-md-6 d-flex align-items-stretch">
        				<div class="treatment w-100 text-center ftco-animate border border-right-0 p-3 py-4">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="flaticon-massage"></span>
									</div>
									<div class="text mt-2">
										<h3>Thai</h3>
										<p>A small river named Duden flows by their place and supplies.</p>
									</div>
								</div>
        			</div>
        			<div class="col-md-6 d-flex align-items-stretch">
        				<div class="treatment w-100 text-center ftco-animate border p-3 py-4">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="flaticon-rose"></span>
									</div>
									<div class="text mt-2">
										<h3>Rose</h3>
										<p>A small river named Duden flows.</p>
									</div>
								</div>
        			</div>
        		</div>
        	</div>
        </div>
	  	</div>
	  </section>

      <footer class="ftco-footer ftco-section">
        <div class="container">
          <div class="row d-flex">
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">BeautyCare</h2>
                <p class="ftco-heading-3">Selamat datang di website Klinik BeautyCare, kami adalah klinik perawatan kulit wajah dan badan yang didirikan oleh Modav. Di Klinik BeautyCare kami menyadari bahwa setiap individu memiliki jenis dan masalah kulit yang berbeda-beda.</p>
                <ul class="ftco-footer-social list-unstyled float-lft mt-3">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4 ml-md-4">
                <h2 class="ftco-heading-2">Popular</h2>
                <ul class="list-unstyled">
                  <li class="ftco-heading-3">Acne Clear Treatment</a></li>
                  <li class="ftco-heading-3">Bright Glow Skin Booster</a></li>
                  <li class="ftco-heading-3">Korean Glow Laser</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Quick</h2>
                <ul class="list-unstyled">
                  <li class="ftco-heading-3">Home</a></li>
                  <li class="ftco-heading-3">Treatments</a></li>
                  <li class="ftco-heading-3">Doctor</a></li>
                  <li class="ftco-heading-3">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Punya Pertanyaan?</h2>
                <div class="block-23 mb-3">
                  <ul>
                    <li><a href="#"><span class="icon icon-map-marker"></span><span class="text">Jl. Sukarno Hatta No 32, Malang
  </span></li>
                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">081375685166
  </span></a></li>
                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">modav@gmail.com</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">

              <p class="mb-0">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
                  document.write(new Date().getFullYear());

                </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Modav</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>
        </div>
      </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/jquery.animateNumber.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>
  <script src="assets/js/jquery.timepicker.min.js"></script>
  <script src="assets/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="assets/js/google-map.js"></script>
  <script src="assets/js/main.js"></script>

  </body>
</html>
