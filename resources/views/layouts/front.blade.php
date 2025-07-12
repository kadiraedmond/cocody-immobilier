<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cocody Immobilier</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('front/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('front/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Krub:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('front/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('front/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('front/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('front/assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('front/assets/css/response.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bikin
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/bikin-free-simple-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

   <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between" style="height: 40px;">

      <h1 class="logo"><a href="{{ url('')}}"><img src="{{asset('front/assets/img/logo2.png')}}" alt="" class="img-fluid " style="margin-top: -6px;"><b id="titre_logo">Cocody Immobilier</b> </a></h1>
      <form class="d-flex" role="search" action="/search" method="GET">
        {{ csrf_field() }}
        <input class="form-control me-2" type="search" placeholder="Search" name="q" aria-label="Search" id="search">
        <i class='bx bx-search' type="submit" id="icon_search"></i>
        <!-- <button class="btn btn-outline-success" type="submit" style="margin-left: -90px;">Search</button> -->
      </form>

      <nav id="navbar" class="navbar">
        <ul>
          <li> <a class="nav-link scrollto {{ Request::is('/') ? 'active' : '' }} " href="{{ url('')}}"><i class='bx bx-home' id="icon_menu"></i> Accueil</a></li>
          <li class="dropdown {{ Request::is('location_immobilier') ? 'active' : '' }}"><a href="#"><i class='bx bx-category' id="icon_menu"></i> <span>Services </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="{{ Request::is('constuction') ? 'active' : '' }}"><a href="{{url('constuction')}}">Construction</a></li>
              <li ><a href="{{url('location_immobilier')}}">Location immobiliére</a></li>
              <li><a href="{{url('vente_immobilier')}}">Achats & ventes immobiliére</a></li>
              <li><a href="{{ url('expertise')}}">Expertise et conseils immobiliers</a></li>
              <li><a href="{{ url('gestion')}}">Gestion et Syndic Immobilier</a></li>
            </ul>
          </li>
          {{-- <li><a class="nav-link scrollto" href="services.html"><i class='bx bx-category' id="icon_menu"></i> Services</a></li> --}}
          <li><a class="nav-link scrollto {{ Request::is('aide') ? 'active' : '' }} " href="{{ url('aide')}}"><i class='bx bx-help-circle' id="icon_menu"></i> Aide </a></li>
          <li><a class="nav-link scrollto  {{ Request::is('rdv') ? 'active' : '' }}  " href="{{ url('rdv')}}"> <button class="btn btn-primary" style="background-color: #3097a5 !important; border-color:#3097a5 !important">Prendre rendez vous</button></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <main id="main">

   @yield('content')

 
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5">

          <div class="col footer-links">
            <h4>Informations</h4>
            <ul>
              <li><a href="{{ url('faq')}}">Foire aux questions</a></li>
              <li><a href="{{ url('about')}}">Qui sommes nous</a></li>
              <li><a href="{{ url('comment_ca_marche')}}">Comment ça marche</a></li>
              <li><a href="{{ url('blogs')}}">Blog</a></li>
              <li><a href="{{ url('comment_ca_marche')}}">Accessibilité</a></li>
            </ul>
          </div>

          <div class="col footer-links">
            <h4>Liens rapides </h4>
            <ul>
              <li> <a href="{{ url('location_immobilier')}}">En location</a></li>
              <li><a href="{{ url('vente_immobilier')}}">En vente</a></li>
              <li><a href="{{url('constuction')}}">Construction</a></li>
              <li><a href="{{ url('expertise')}}">Expertise & conseils</a></li>
              <li><a href="#">Condition de collaboration</a></li>
              <li><a href="{{ url('partenaire')}}">Pour les partenaires</a></li>
              <li><a href="{{ url('client')}}">Pour les clients</a></li>
            </ul>
          </div>

          <div class="col footer-links">
            <h4>Service client</h4>
            <ul>
              <li><a href="{{ url('front_contact')}}">Contact</a></li>
              <li> <a href="{{ url('aide')}}">Aide</a></li>
              
            </ul>
          </div>

          <div class="col footer-links">
            <h4>Légales</h4>
            <ul>
              
              <li><a href="{{ url('Politiqque_de_confidentialité')}}">Politiques de confidentialité</a></li>
              <li><a href="{{ url('Politique-securite')}}">Politiques de sécurité</a></li>
              <li><a href="{{ url('terme_condition')}}">Termes et conditions</a></li>
            </ul>
          </div>
          
          <div class="col footer-links">
            <h4>Procédures</h4>
            <ul>
              
              <li><a href="{{ url('Foncier')}}">Titre fonciére</a></li>
              <li><a href="{{ url('Construire')}}">Autorisation de construction</a></li>
              <li><a href="{{ url('mutation')}}">Mutations de biens</a></li>
              <li><a href="{{asset('front/assets/img/code.pdf')}}" download>Code immobilier</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
           Copyright &copy; 2023 <strong><span>CocodyImmobilier</span></strong>| All right reserved
        </div>
         
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://twitter.com/Cocodyimmo" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100041431706015" class="facebook"><i class="bx bxl-facebook"></i></a>
        {{-- <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> --}}
        <a href="https://www.linkedin.com/company/98877184/admin/feed/posts/?feedType=following" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        <a href="https://www.youtube.com/channel/UCpMowdJ6CQpAn4kjXEPjeUg" class="youtube"><i class="bx bxl-youtube"></i></a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('front/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('front/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('front/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('front/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('front/assets/vendor/php-email-form/validate.js')}}"></script>

 


  <!-- Template Main JS File -->
  <script src="{{asset('front/assets/js/main.js')}}"></script>

</body>

</html>