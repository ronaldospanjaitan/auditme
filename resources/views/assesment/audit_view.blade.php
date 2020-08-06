<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>AuditMe - Helping you know your system</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/accordionother.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top " style="background-color:#0c3c53">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">AuditMe</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block" >
        <ul>
    
          <li><a href="">Home</a></li>
          <li><a href="">Resource</a></li>
          <li><a href="">Blog</a></li>
          @guest        <li><a href="{{route('login')}}">Login</a></li>
          @else
                            <li class="nav-item dropdown">
                                <a  id="navbarDropdown" class="nav-link dropdown-toggle pt-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->firstName }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <span style="color:black;">Logout</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest


        </ul>
      </nav><!-- .nav-menu -->

      

    </div>
  </header><!-- End Header -->

  
<section id="about" class="why-us">
  <div class="row">
    
  <div class="col-12 col-sm-7">
  <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200" style="position:absolute">
  
  <h7 class="mt-5">COBIT 4.1 Assesment</h1>
          <h2>PO1 - Define a <br>Strategic IT Plan</h2>
          <h7 style="color:whitesmoke">
          <a class="d-none d-sm-block" href=""><span class="btn btn-outline-info" style="border-radius:15px">Learn More</span></a>
</div>
<div class="pt-3">
    <img src="assets/img/access2.jpg" class=" img-fluid" alt="" >
    </div>
    </div>
    <div class="col-12 col-sm-5 about">
<div class="row pt-1">
  <!-- kepala -->
  <div class="col-12 mt-2 bg-dark align-center text-center rounded">
<p style="color:whitesmoke;">PO - 1 Define a Strategic IT Plan<p>
</div>
<!-- akhir kepala-->
<div class="col-12 col-sm ">
<div class="col-sm-12">  
  
<form action="{!! url('/initiation/assesment/'); !!}" method="POST">
@csrf 
<div class="form-group row">
<label for="yourname" class="col-sm-3 col-form-label">Your Name</label>
</div>
<div class="form-group row">
  <div class="col-sm-6 col-sm-5">
<input type="text" class="form-control" id="firstName" name="firstName" placeholder="{{ Auth::user()->firstName }}">
</div>
<div class="col-sm-6 col-sm-5">
<input type="text" class="form-control " id="lastName" name="lastName" placeholder="{{ Auth::user()->lastName }}">
</div>
</div>
<div class="form-group row">
<label for="yourcompany" class="col-sm-12 col-form-label">Company Name</label>
</div>
<div class="form-group row">
  <div class="col-sm-12 col-sm-8">
<input type="text" class="form-control" id="companyName" name="companyName" placeholder="{{ Auth::user()->companyName }}">
</div>
</div>
<div class="form-group row">
<label for="companyaddress" class="col-sm-12 col-form-label">Company Address</label>
</div>
<div class="form-group row">
  <div class="col-sm-12 col-sm-8">
  <textarea class="form-control" id="companyAddress" name="companyAddress" rows="5" placeholder="{{ Auth::user()->companyAddress }}"></textarea>
</div>
</div>
<div class="form-group row">
<label for="Email" class="col-sm-12 col-form-label">Email</label>
</div>
<div class="form-group row">
  <div class="col-sm-12 col-sm-8">
<input type="text" class="form-control" id="email" name="email" placeholder="{{ Auth::user()->email }}">
</div>
</div>
<div class="form-group row">
<div class="col-sm-12">
<input type="checkbox" class="form-check-input" name="approve" id="approve" value="">
<label for="form-check-label" for="approve">
<strong>Yes.</strong>&nbsp;I will receive the softcopy of assesment and latest news about AuditMe services.
</label>
</div>
</div>
<div class="col-sm-12 col-sm-8">
<input type="submit" class="btn btn-primary btn-block" style="border-radius:15px;" id="submit" name="submit">
</div>
</div>
</form>  
</div>

</div>
</div>
    </div>
  </div>
 
  </section>
  

  

  <!-- ======= Footer ======= -->
  <footer id="footer">

    

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>AUDITME</h3>
            <p>
              Jl. Sukabirus Gg. Slamat II <br>
              Bandung, Jawa Barat 40191<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +628 13131 77665<br>
              <strong>Email:</strong> aldopanjaitan23@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links offset-1">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

        

          <div class="col-lg-3 col-md-6 footer-links offset-1">
            <h4>Our Social Networks</h4>
            <p>Tetap terhubung dengan platform media social kita dan dapatkan info terbaru tentang dunia Audit Sistem Informasi</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix  ">
   
      <div class="copyright ">
        &copy; Copyright <strong><span>AuditMe</span></strong>. All Rights Reserved
      </div>
    
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>