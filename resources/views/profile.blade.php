<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BizPage Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{url('/')}}/template/img/favicon.png" rel="icon">
  <link href="{{url('/')}}/template/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{url('/')}}/template/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{url('/')}}/template/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{url('/')}}/template/lib/animate/animate.min.css" rel="stylesheet">
  <link href="{{url('/')}}/template/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="{{url('/')}}/template/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{url('/')}}/template/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{url('/')}}/template/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  

  <!--==========================
    Intro Section
  ============================-->


   
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Profil Saya</h3>
          <center>
            <img src="{{url('/')}}/Auth::user()->profil_picture" style="height: 50px; width: 50px;">
            
          </center>
        </header>

        <br>
        <br>
        <br>


        <div class="row about-cols">

         

          <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
          </body>
            <div class="about-col">

              <div class="img">
                <img src="{{url('/')}}/template/img/" alt="" class="img-fluid">
                <div class="icon">
                  <i class="fas fa-user"></i>
                  
                </div>


              </div>
              <h2 class="title"><a href="#">{{ Auth::user()->username }} </a></h2>
              <h5><center>
                {{ Auth::user()->email}}   
               <div class="col-md-12 grid-margin stretch-card">
              <!-- <div class="card"> -->
                <div class="card-body">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#posting-1" role="tab" aria-controls="home" aria-selected="true">
                        Post
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#like-1" role="tab" aria-controls="profile" aria-selected="false">
                        Like
                      </a>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="posting-1" role="tabpanel" aria-labelledby="home-tab">
                      <div class="media">
                        <!--isi tab 1-->
                      <div class="col-md-6">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. 


                      </div>
                    </div>

                    <div class="tab-pane fade" id="like-1" role="tabpanel" aria-labelledby="profile-tab">
                      <div class="media">
                        
                      </div>
                    </div>
                    <div class="tab-pane fade" id="contact-1" role="tabpanel" aria-labelledby="contact-tab">
                      <div class="media">
                    <!--  ISI -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
     
     </div>
  </section>
             
            </div>

          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
  

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Idekita</h3>
            <p>Idekita merupakan sebuah platform untuk tempat para kreator yang memiliki ide-ide kreatif untuk perbaikan kehidupan yang lebih baik. </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Universitas Gadjah Mada <br>
              Yogyakarta<br>
              Indonesia <br>
              <strong>Phone:</strong> 083849971010<br>
              <strong>Email:</strong> Bajaweb@mail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Tentang Tim</h4>
            <p>Kami adalah sekumpulan anak yang tertarik terhadap design website dan juga back end website, dan kami tertarik untuk melakukan perubahan untuk menjadi yang lebih baik.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Web B Aja</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="{{url('/')}}/template/lib/jquery/jquery.min.js"></script>
  <script src="{{url('/')}}/template/lib/jquery/jquery-migrate.min.js"></script>
  <script src="{{url('/')}}/template/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('/')}}/template/lib/easing/easing.min.js"></script>
  <script src="{{url('/')}}/template/lib/superfish/hoverIntent.js"></script>
  <script src="{{url('/')}}/template/lib/superfish/superfish.min.js"></script>
  <script src="{{url('/')}}/template/lib/wow/wow.min.js"></script>
  <script src="{{url('/')}}/template/lib/waypoints/waypoints.min.js"></script>
  <script src="{{url('/')}}/template/lib/counterup/counterup.min.js"></script>
  <script src="{{url('/')}}/template/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="{{url('/')}}/template/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="{{url('/')}}/template/lib/lightbox/js/lightbox.min.js"></script>
  <script src="{{url('/')}}/template/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{url('/')}}/template/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="{{url('/')}}/template/js/main.js"></script>

</body>
</html>
