<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>BeautyCare - Halaman Register </title>
                                <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <style>body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-image: linear-gradient(to right, #D500F9, #FFD54F);
    background-repeat: no-repeat
}

input,
textarea {
    background-color: #F3E5F5;
    border-radius: 50px !important;
    padding: 12px 15px 12px 15px !important;
    width: 100%;
    box-sizing: border-box;
    border: none !important;
    border: 1px solid #F3E5F5 !important;
    font-size: 16px !important;
    color: #000 !important;
    font-weight: 400
}

input:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #D500F9 !important;
    outline-width: 0;
    font-weight: 400
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}

.card {
    border-radius: 0;
    border: none
}

.card1 {
    width: 50%;
    padding: 40px 30px 10px 30px
}

.card2 {
    width: 50%;
    background-image: linear-gradient(to right, #FFD54F, #D500F9)
}

#logo {
    width: 70px;
    height: 60px
}

.heading {
    margin-bottom: 60px !important
}

::placeholder {
    color: #000 !important;
    opacity: 1
}

:-ms-input-placeholder {
    color: #000 !important
}

::-ms-input-placeholder {
    color: #000 !important
}

.form-control-label {
    font-size: 12px;
    margin-left: 15px
}

.msg-info {
    padding-left: 15px;
    margin-bottom: 30px
}

.btn-color {
    border-radius: 50px;
    color: #fff;
    background-image: linear-gradient(to right, #FFD54F, #D500F9);
    padding: 15px;
    cursor: pointer;
    border: none !important;
    margin-top: 40px
}

.btn-color:hover {
    color: #fff;
    background-image: linear-gradient(to right, #D500F9, #FFD54F)
}

.btn-white {
    border-radius: 50px;
    color: #D500F9;
    background-color: #fff;
    padding: 8px 40px;
    cursor: pointer;
    border: 2px solid #D500F9 !important
}

.btn-white:hover {
    color: #fff;
    background-image: linear-gradient(to right, #FFD54F, #D500F9)
}

a {
    color: #000
}

a:hover {
    color: #000
}

.bottom {
    width: 100%;
    margin-top: 50px !important
}

.sm-text {
    font-size: 15px
}

@media screen and (max-width: 992px) {
    .card1 {
        width: 100%;
        padding: 40px 30px 10px 30px
    }

    .card2 {
        width: 100%
    }

    .right {
        margin-top: 100px !important;
        margin-bottom: 100px !important
    }
}

@media screen and (max-width: 768px) {
    .container {
        padding: 10px !important
    }

    .card2 {
        padding: 50px
    }

    .right {
        margin-top: 50px !important;
        margin-bottom: 50px !important
    }
}</style>
   <link rel="shortcut icon" href="assets/images/icon.png">

                                </head>
                                
                                <body oncontextmenu='return false' class='snippet-body'>
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{ url('index') }}"><img src ="assets/images/relax.png" width="30px">&nbsp;BeautyCare</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="{{ url('login') }}" class="nav-link">Login</a></li>
	          <li class="nav-item active"><a href="{{ url('index') }}" class="nav-link">Home</a></li>
	          <li class="nav-item active"><a href="{{ url('treatments') }}" class="nav-link">Treatments</a></li>
	          <li class="nav-item active"><a href="{{ url('specialists') }}" class="nav-link">Doctor</a></li>
	          <li class="nav-item active"><a href="{{ url('contact') }}" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
                                
                                <div class="container px-4 py-5 mx-auto">
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-10 my-5">
                        <div class="row justify-content-center px-3 mb-3"> <img id="logo" src="assets/images/icon.png"> </div>
                        <h3 class="mb-5 text-center heading">BeautyCare</h3>
                        <h6 class="msg-info">Silahkan Register Akun Anda</h6>
                        <div class="form-group"> <label class="form-control-label text-muted">Username</label> <input type="text" id="name" name="name" placeholder="Masukkan Username" class="form-control"> </div>
                        <div class="form-group"> <label class="form-control-label text-muted">Email</label> <input type="email" id="email" name="email" placeholder="Masukkan Email" class="form-control"> </div>
                        <div class="form-group"> <label class="form-control-label text-muted">Password</label> <input type="password" id="password" name="password" placeholder="Masukkan Password" class="form-control"> </div>
                        <div class="row justify-content-center my-3 px-3"> <button class="btn-block btn-color">Register</button> </div>
                    </div>
                </div>
            </div>
            <div class="card card2">
                <div class="my-auto mx-md-5 px-md-5 right">
                    <h3 class="text-white">Kami Tidak Sekedar Perawatan Kecantikan</h3> <medium class="text-white">Di Klinik BeautyCare kami menyadari bahwa setiap individu memiliki
                jenis dan masalah kulit yang berbeda-beda, untuk itu kami menyediakan berbagai macam perawatan kecantikan
                kulit yang dilakukan langsung oleh dokter spesialis kulit dan kecantikan.</small>
                </div>
            </div>
        </div>
        <div class="footer">
      <marquee><b>Selamat Datang Di Website Beauty Care - Perawatan Kecantikan Kulit & Konsultasi Kesehatan Kulit Wanita</b></marquee>
    </div>
    </div>
</div>

                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript'></script>
                                </body>
                            </html>