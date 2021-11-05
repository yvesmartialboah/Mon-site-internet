<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mobili</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  <!-- Favicons -->
  <link href="{{asset('assets_mob/img/logo_2.png')}}" rel="icon">
  <link href="{{asset('assets_mob/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  {{-- <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'> --}}
  <!-- Vendor CSS Files -->
  <link href="{{asset('assets_mob/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets_mob/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets_mob/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets_mob/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets_mob/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets_mob/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets_mob/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets_mob/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets_mob/css/style.css')}}" rel="stylesheet">

</head>
<body>
    
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent shadow-sm">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!-- <h1><a href="index.html"><span>Mobili</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{route('accueil')}}"><img src="{{asset('assets_mob/img/logo.png')}}" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <!-- <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li> -->
          <li><a class="nav-link lien scrollto" href="{{route('accueil')}}#hero">A propos de nous</a></li>
          <li><a class="nav-link lien scrollto {{ Request::is('pneumatique') || Request::is('vidange') || Request::is('revision') || Request::is('freinage') || Request::is('climatisation') || Request::is('batterie') || Request::is('visibilite') || Request::is('reparation_piece_electrique') || Request::is('echappement') || Request::is('kit_distribution') || Request::is('suspension') || Request::is('pre_control_technique') || Request::is('mecanique') || Request::is('pare_brise')  ? 'active' : '' }}"  href="{{route('accueil')}}#features">Services</a></li>
          <li><a class="nav-link lien scrollto" href="{{route('accueil')}}#details">Fonctionalités</a></li>
          <li><a class="nav-link lien scrollto {{ Request::is('promotion_piece') ? 'active' : '' }}" href="{{route('promotion')}}">Promotions pièce auto</a></li>
          <li><a class="nav-link lien scrollto {{ Request::is('faq') ? 'active' : '' }}" href="{{route('faq')}}">Bon à Savoir</a></li>
          <li><a class="nav-link lien scrollto" href="{{route('accueil')}}#contact">Contactez-nous</a></li>
          {{-- <li class="">
            <a href="#store" class="nav-link nolien  text-lg-start btn-get-started " style="font-weight: 500;font-size: 13px;letter-spacing: 0px;display: inline-block;padding: 5px 10px;border-radius: 50px;transition: 0.5s;color: #fff;background: #F8941B;margin-left: 7%;">
              Installer l'application
            </a>
          </li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

{{--  --}}
@yield('content')
{{--  --}}

<!-- ======= Contact Section ======= -->
{{-- <section id="store" class="contact">
  <div class="container">

    <div class="row">

      <div class="col-lg-12" >
        <div class="info text-center">
          <h5 class="mb-3" style="font-size: 36px;color: #34495e;font-weight:bold;"> Télécharger l’application maintenant </h5>
          <a href=""><img class="mb-3 p-2" data-aos="fade-right" data-aos-delay="100" height="74" src="{{asset('assets_mob/img/google-play-fr_get.svg')}}" alt=""></a>
          <a href=""><img class="mb-3 p-2" data-aos="fade-left" data-aos-delay="100" height="74" src="{{asset('assets_mob/img/app-store-fr.svg')}}" alt=""></a>
        </div>

      </div>
    </div>

  </div>
</section> --}}
<!-- End Contact Section -->

{{--  --}}
<section id="contact" class="contact">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Contact</h2>
      <p>Contactez-nous</p>
    </div>

    <div class="row">

      <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Lieu:</h4>
            <p>Riviera Faya non loin de Playce</p>
          </div>

          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>contact@mobili.ci</p>
          </div>

          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Tel:</h4>
            <p>(+225) 07 08 84 59 59</p>
          </div>

        </div>

      </div>

      <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

        <form action="{{ route('contact') }}" method="post" role="form" class="php-email-form">
          @csrf
          @method('POST')
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjet" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Votre message a été envoyé. Merci!</div>
          </div>
          <div class="text-center"><button type="submit">Envoyer le Message</button></div>
        </form>

      </div>

    </div>

  </div>
</section>
{{--  --}}


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="footer-infoo">
              <img src="{{asset('assets_mob/img/logo.png')}}" class="mb-3 " alt="logo mobili">
              {{-- <p class="pb-3">MOBILI, est une application mobile de dépannage/remorquage/vente de pièces auto à la demande.
                Elle met en relation des dépanneurs/remorqueurs et les usagers de la route suite à une panne, un
                accident, ou simplement pour déplacer ou rapatrier son véhicule de tous genres.</p> --}}
              <p class="pb-3">Mobili est un Réseau de mécaniciens professionnel aux services des automobilistes  en cas de panne ou d’assistance routière</p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Société</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/')}}#about">A propos de nous</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/')}}#details">Fonctionalités</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/promotion_piece')}}">Promotions pièces auto</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/faq')}}">Bon à Savoir</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/')}}#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Info</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">(+225) 07 08 84 59 59</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">contact@mobili.ci</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Riviera Faya non loin de Playce</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/confidentialite')}}">Politique de confidentialité<br><br></a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Suivez-nous</h4>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/Mobili-Auto-Services-105229738618517/?ref=pages_you_manage" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span><script type="text/javascript">
          var ladate=new Date()
          document.write(ladate.getFullYear())
          </script></span></strong>, Axios Group tous droits réservés.
      </div>
      <!-- <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div> -->
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets_mob/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets_mob/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets_mob/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets_mob/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets_mob/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('assets_mob/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets_mob/js/main.js')}}"></script>
  {{-- <script src="{{asset('assets_mob/js/countdown.js')}}"></script> --}}

  <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="46035e99-4b4f-485a-a136-c366081da3c0";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</body>
</html>