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
  <link href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/css/uploadfile.css') }}" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/assesment_initiation.css" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/css/accordionother.css')}}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/css/form.css') }}" rel="stylesheet">
<style>
  body{
    padding-top: 70px; 
  }
  ul li{
    list-style-position: inside;
    width:100% !important;
    
  }
  ul li input{
    left:20px;
    width:100%;
  }

  
</style>
 
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
          <li><a href="">Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <div class="wrapper wrapper--w680 mt-6">
    <div class="card card-1">
      <div class="card-heading h-50"></div>
          <div class="card-body">
              <h2 class="title text-center">PO-1 Define IT Strategic Plan</h2>
           @foreach($init1 as $i)
            <form method="POST" action="{!! url('/initiation/assesment/'.$i->id);  !!}">
                  @csrf
              <div class="form-group row">
                <h4>Perencanaan, Kebijakan & Prosedur</h4>
                  </div>
                    <div class="form-group row">
                       <label for="question1">1. Bagaimanakah pelaksanaan proses terkait proses ini?</label>
                          <div class="col-12 col-sm-9">
                              <input class="" type="text" placeholder="Jawaban" name="question1" id="question1">
                                  </div>
                                    <div class="col-12 col-sm-3">
                                      <input class="" type="number" min="0" max="4" step=".1" placeholder="Rate" name="rate1" id="rate1">
                                          </div>
                    </div>
                      <div class="form-group row">
                        <label for="question2">2. Apakah ada Kebijakan atau SOP yang mempertimbangkan:</label>
                          <ul>
                      </div>
                            <li class="">
                              <label for="question2a">Value Management</label>
                                <div class="form-group row">
                                    <div class="col-12 col-sm-9">
                                      <input class="" type="text" placeholder="Jawaban" name="question2a" id="question2a">
                                  </div>
                                <div class="col-12 col-sm-3 ">
                                      <input class="" type="number"min="0" max="4" step=".1"  placeholder="Rate" name="rate2a" id="rate2a">
                                 </div></div>
                              </li>
                              <li class="">
                              <label for="question2b">Business/IT Alignment</label>
                                  <div class="form-group row">
                                    <div class="col-12 col-sm-9">
                                      <input class="" type="text" placeholder="Jawaban" name="question2b" id="question2b">
                                  </div>
                                    <div class="col-12 col-sm-3 ">
                                      <input class="" type="number" min="0" max="4" step=".1" placeholder="Rate" name="rate2b" id="rate2b">
                                  </div></div>
                              </li>
                              <li class="">
                              <label for="question2c">Business/IT Alignment</label>
                                  <div class="form-group row">
                                    <div class="col-12 col-sm-9">
                                      <input class="" type="text" placeholder="Jawaban" name="question2c" id="question2c">
                                  </div>
                                    <div class="col-12 col-sm-3 ">
                                      <input class="" type="number" min="0" max="4" step=".1" placeholder="Rate" name="rate2c" id="rate2c">
                                  </div></div>
                              </li>
                              </ul>
               <div class="form-group row">
                  <h4>Responsibility & Accountability</h4>
                    </div>
                        <div class="form-group row">
                          <label for="question3" class="text-justify">3. Dalam struktur organisasi, entitas struktur apa yang bertanggung jawab atas pelaksanaan proses ini?
                            Apakah penugasan tersebut sejalan dengan jobdesc yang sudah ada?</label>
                              <div class="col-12 col-sm-9">
                                <input class="" type="text" placeholder="Jawaban" name="question3" id="question3">
                              </div>
                              <div class="col-12 col-sm-3">
                                <input class="" type="number" min="0" max="4" step=".1" placeholder="Rate" name="rate3" id="rate3">
                              </div>
                          </div>
                          <div class="form-group row">
                  <h4>Goal Setting & Measurement</h4>
                    </div>
                        <div class="form-group row">
                          <label for="question4" class="text-justify">4. Apakah ada indikator yang ditetapkan terkait dengan proses ini?</label>
                              <div class="col-12 col-sm-9">
                                <input class="" type="text" placeholder="Jawaban" name="question4" id="question4">
                              </div>
                              <div class="col-12 col-sm-3">
                                <input class="" type="number" min="0" max="4" step=".1" placeholder="Rate" name="rate4" id="rate4">
                              </div>
                          </div>
                          <div class="form-group row">
                          <label for="question5" class="text-justify">5. Apakah ada alasan penetapan indikator kinerja terhadap pencapaian kinerja strategis IT?</label>
                              <div class="col-12 col-sm-9">
                                <input class="" type="text" placeholder="Jawaban" name="question5" id="question5">
                              </div>
                              <div class="col-12 col-sm-3">
                                <input class="" type="number" min="0" max="4" step=".1" placeholder="Rate" name="rate5" id="rate5">
                              </div>
                          </div>
                <div class="form-group row">
                   <h4>Skill & Expertise</h4>
                    </div>
                        <div class="form-group row">
                          <label for="question6" class="text-justify">6. Apakah terdapat program pengembangan kapasitas SDM terkait dengan pemahaman dan penguasaan proses ini?</label>
                              <div class="col-12 col-sm-9">
                                <input class="" type="text" placeholder="Jawaban" name="question6" id="question6">
                              </div>
                              <div class="col-12 col-sm-3">
                                <input class="" type="number" min="0" max="4" step=".1" placeholder="Rate" name="rate6" id="rate6">
                              </div>
                          </div>
                          <div class="form-group row">
                          <label for="question7" class="text-justify">7. Bagaimana realisasi dari program pengembangan SDM terkait dengan proses ini?</label>
                              <div class="col-12 col-sm-9">
                                <input class="" type="text" placeholder="Jawaban" name="question7" id="question7">
                              </div>
                              <div class="col-12 col-sm-3">
                                <input class="" type="number" min="0" max="4" step=".1" placeholder="Rate" name="rate7" id="rate7">
                              </div>
                          </div>
                          <div class="form-group row">
                   <h4>Awareness & Communication</h4>
                    </div>
                        <div class="form-group row">
                          <label for="question8" class="text-justify">8. Apakah terdapat pemahaman yang memadai atas proses (oleh pihak pihak terkait)?</label>
                              <div class="col-12 col-sm-9">
                                <input class="" type="text" placeholder="Jawaban" name="question8" id="question8">
                              </div>
                              <div class="col-12 col-sm-3">
                                <input class="" type="number" min="0" max="4" step=".1" placeholder="Rate" name="rate8" id="rate8">
                              </div>
                          </div>
                          <div class="form-group row">
                          <label for="question9" class="text-justify">9. Apakah ada mekanisme komunikasi atas keberjalanan proses ini?</label>
                              <div class="col-12 col-sm-9">
                                <input class="" type="text" placeholder="Jawaban" name="question9" id="question9">
                              </div>
                              <div class="col-12 col-sm-3">
                                <input class="" type="number" min="0" max="4" step=".1" placeholder="Rate" name="rate9" id="rate9">
                              </div>
                          </div>
                 <div class="form-group row">
                   <h4>Tools & Automation</h4>
                    </div>
                        <div class="form-group row">
                          <label for="question10" class="text-justify">10. Apakah ada tool yang digunakan untuk memfasilitasi proses ini?</label>
                              <div class="col-12 col-sm-9">
                                <input class="" type="text" placeholder="Jawaban" name="question10" id="question10">
                              </div>
                              <div class="col-12 col-sm-3">
                                <input class="" type="number" min="0" max="4" step=".1" placeholder="Rate" name="rate10" id="rate10">
                              </div>
                          </div>
                          <div class="form-group row">
                          <label for="question11" class="text-justify">11. Apakah tool ini terintegrasi dengan tool lain yang memfasilitasi proses terkait?</label>
                              <div class="col-12 col-sm-9">
                                <input class="" type="text" placeholder="Jawaban" name="question11" id="question11">
                              </div>
                              <div class="col-12 col-sm-3">
                                <input class="" type="number" min="0" max="4" step=".1" placeholder="Rate" name="rate11" id="rate11">
                              </div>
                          </div>
                          <div class="form-group row">
                          <label for="question12" class="text-justify">12. Apakah tool bisa membantu mendeteksi perkecualian kontrol jika terjadi?</label>
                              <div class="col-12 col-sm-9">
                                <input class="" type="text" placeholder="Jawaban" name="question12" id="question12">
                              </div>
                              <div class="col-12 col-sm-3">
                                <input class="" type="number" min="0" max="4" step=".1" placeholder="Rate" name="rate12" id="rate12">
                              </div>
                          </div>
                          <div class="form-group row">    
                          <input type="file" name="file-7[]" id="file-7" class="inputfile inputfile-6" data-multiple-caption="{count} files selected" multiple />
					                    <label for="file-7"><span></span> <strong> Upload Evidences&hellip;</strong></label>
                          <div class="col-12 col-sm-auto">
                            <label for="note" style="font-size:xx-small; font-style: italic;">**Please upload all evidences into 1 .rar or .zip format</label>
                            </div>
                          </div>
                        </div><button type="submit" class="btn btn-primary btn-block">Submit</button></div>
              </form>@endforeach
</div>
</div>


  

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
  <a href="#" class="guide" style="display:inline;"><i class="ri-question-line"></i></a>
  <div id="myModal" class="modal fade ">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#ffae42 ;">
            <h4 class="modal-title" >PO-1 : Assessment Form</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
            <div class="modal-body">
                
               <p>Kami berdedikasi untuk menjaga integritas data anda, sebelum anda mengakses form ini perhatikan beberapa hal dibawah ini:</p>
               <p>
               <ol >
               <li class=" offset-1 pl-1">Pastikan anda mengisi kolom yang tersedia <p><b>tanpa</b>&nbsp;mengosongkan salah satu kolom</p>
               </li>
               <li class=" offset-1 pl-1"><i>Rate scale</i> yang ditetapkan (0,1-4,0) </li>
               </ol>
               </p>
              
            
             </div>
               
               <div class="modal-footer">
               
               <p></p>
             
          <button id="paham" type="button" class="btn btn-success rounded"  data-dismiss="modal">Close</button>
        </div>
            </div>
        </div>
    </div>
</div>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ URL::asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ URL::asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="{{ URL::asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
  
  <!-- Template Main JS File -->
  <script src="{{ URL::asset('assets/js/main.js') }}"></script>
  <script src="{{ URL::asset('assets/js/custom-file-input.js') }}"></script>
  <script src="{{ URL::asset('assets/js/jquery.custom-file-input.js') }}"></script>

</body>

</html>