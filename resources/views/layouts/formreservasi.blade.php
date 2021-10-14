<!DOCTYPE html>
<html lang="en">

<head>
  <title>Form Reservasi</title>
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

  <link rel="shortcut icon" href="assets/images/icon.png">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light ftco-navbar-light-2"
    id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ route('layouts.index') }}"><img src="assets/images/relax.png"
          width="30px">&nbsp;BeautyCare</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="{{ route('layouts.index') }}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="{{ route('layouts.treatments') }}" class="nav-link">Treatments</a></li>
          <li class="nav-item"><a href="{{ route('layouts.specialists') }}" class="nav-link">Doctor</a></li>
          <li class="nav-item"><a href="{{ route('layouts.contact') }}" class="nav-link">Contact</a></li>
          @if (Auth::check())
          {{-- Auth::check untuk check apakah sudah login atau belum --}}
          <li class="nav-item dropdown">
            <a class="btn dropdown-toggle nav-link m-0" id="dropdownMenuButton" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Halo, {{__(explode(' ', Auth::user()->name)[0])}}</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </li>
          <li class="nav-item active"><a href="{{ route('dashboard.formreservasi') }}" class="nav-link">Reservasi
              Sekarang</a></li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg_2.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-3 bread">Treatments</h1>
        </div>
      </div>
    </div>
  </section>
  <br><br>
  <section class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="mb-5">Form Reservasi</h2>
          <form action="#" method="post">
            <div class="row">
              <div class="col-sm-6 form-group">

                <label for="">No KTP</label>
                <input type="noktp" id="noktp" class="form-control ">
              </div>

              <div class="col-sm-6 form-group">

                <label for="">Nama</label>
                <input type="nama" id="nama" class="form-control ">
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 form-group">
                <label for="room">Jenis Kelamin</label>
                <select name="" id="jk" class="form-control">
                  <option value="">Perempuan</option>
                  <option value="">Laki - Laki</option>
                </select>
              </div>

              <div class="col-sm-6 form-group">

                <label for="">Tanggal Lahir</label>
                <div style="position: relative;">
                  <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                  <input type='text' class="form-control" id='arrival_date' />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="message">Alamat</label>
                <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 form-group">

                <label for="">No Telp</label>
                <input type="notelp" id="notelp" class="form-control ">
              </div>

              <div class="col-sm-6 form-group">

                <label for="">Email</label>
                <input type="email" id="email" class="form-control ">
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 form-group">
                <label for="room">Jenis Pembayaran</label>
                <select name="" id="jp" class="form-control">
                  <option value="">Tunai</option>
                  <option value="">Debit</option>
                </select>
              </div>

              <div class="col-md-6 form-group">
                <label for="room">Jenis Reservasi</label>
                <select name="" id="jr" class="form-control">
                  <option value="">Treatment</option>
                  <option value="">Konsultasi</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 form-group">

                <label for="">Waktu</label>
                <input type="waktu" id="waktu" class="form-control ">
              </div>

              <div class="col-sm-6 form-group">

                <label for="">Tanggal</label>
                <div style="position: relative;">
                  <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                  <input type='text' class="form-control" id='arrival_date' />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="submit" value="Reservasi Sekarang" class="btn btn-primary" width="50%">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <br><br>

  <footer class="ftco-footer ftco-section">
    <div class="container">
      <div class="row d-flex">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">BeautyCare</h2>
            <p class="ftco-heading-3">Selamat datang di website Klinik BeautyCare, kami adalah klinik perawatan kulit
              wajah dan badan yang didirikan oleh Modav. Di Klinik BeautyCare kami menyadari bahwa setiap individu
              memiliki jenis dan masalah kulit yang berbeda-beda.</p>
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
              <li><a href="{{ route('layouts.index') }}">Home</a></li>
              <li><a href="{{ route('layouts.treatments') }}">Treatments</a></li>
              <li><a href="{{ route('layouts.specialists') }}">Doctor</a></li>
              <li><a href="{{ route('layouts.contact') }}">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Punya Pertanyaan?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><a href="#"><span class="icon icon-map-marker"></span><span class="text">Jl. Sukarno Hatta No 32,
                      Malang
                    </span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">081375685166
                    </span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">modav@gmail.com</span></a>
                </li>
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

            </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by
            <a href="https://colorlib.com" target="_blank">Modav</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" /></svg></div>


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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
  </script>
  <script src="assets/js/google-map.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>