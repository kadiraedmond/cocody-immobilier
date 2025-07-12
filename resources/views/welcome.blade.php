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
          <li> <a class="nav-link scrollto active" href="{{ url('')}}"><i class='bx bx-home' id="icon_menu"></i> Accueil</a></li>
          <li class="dropdown"><a href="#"><i class='bx bx-category' id="icon_menu"></i> <span>Services </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{url('constuction')}}">Construction</a></li>
              {{-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> --}}
              <li><a href="{{url('location_immobilier')}}">Location immobiliére</a></li>
              <li><a href="{{url('vente_immobilier')}}">Achats & ventes immobiliére</a></li>
              <li><a href="{{ url('expertise')}}">Expertise et conseils immobiliers</a></li>
              <li><a href="{{ url('gestion')}}">Gestion et Syndic Immobilier</a></li>
            </ul>
          </li>
          {{-- <li><a class="nav-link scrollto" href="services.html"><i class='bx bx-category' id="icon_menu"></i> Services</a></li> --}}
          <li><a class="nav-link scrollto " href="{{ url('aide')}}"><i class='bx bx-help-circle' id="icon_menu"></i> Aide </a></li>
          <li><a class="nav-link scrollto" href="{{ url('rdv')}}"> <button class="btn btn-primary" style="background-color: #3097a5 !important; border-color:#3097a5 !important">Prendre rendez vous</button></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <!-- ========== Hero one =========== -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container-fluid" style=" background: linear-gradient(45deg, #3097a5, white);">
      <div class="container">
        <div class="row g-3 mb-4" style="margin-top: -44px; width: 107%;">
          <div class="col-lg-3 col-md-4 bg-white border-2" style="border-radius: 5px; width: 245px;" id="heros_left_section">
            <ul class="list-none" style="padding: 0px; text-align: justify;list-style: none; margin: 18px;">
              <li class="" style=""><div class="row">
                <div class="col-6"><a href="{{url('les_biens')}}" id="cat_li">Terrain</a></div>
                <div class="col-6 text-end" style="font-weight: 700;
                color: #51a7b3;">
                {{$ter + $ters}}
                </div>
               </div></li>
              <hr style="margin-top: 5px;">
              <li class="" style="margin-top: -10px;"><div class="row">
                 <div class="col-6"><a href="{{url('les_biens')}}" id="cat_li">Appartement</a></div>
                 <div class="col-6 text-end" style="font-weight: 700;
                 color: #51a7b3;">
                 {{$app + $apps}}
                 </div>
                </div></li>
              <hr style="margin-top: 5px;">
              <li class="" style="margin-top: -10px;"><div class="row">
                <div class="col-6"><a href="{{url('les_biens')}}" id="cat_li">Studio</a></div>
                <div class="col-6 text-end" style="font-weight: 700;
                color: #51a7b3;">
                {{$stud + $studs}}
                </div>
               </div></li>
              <hr style="margin-top: 5px;">
              <li class="" style="margin-top: -10px;"><div class="row">
                <div class="col-6"><a href="{{url('les_biens')}}" id="cat_li">Bureaux</a></div>
                <div class="col-6 text-end" style="font-weight: 700;
                color: #51a7b3;">
                {{$bur + $burs}}
                </div>
               </div></li>
              <hr style="margin-top: 5px;">
              <li class="" style="margin-top: -10px;"><div class="row">
                <div class="col-6"><a href="{{url('les_biens')}}" id="cat_li">Maison</a></div>
                <div class="col-6 text-end" style="font-weight: 700;
                color: #51a7b3;">
                {{$mai + $mais}}
                </div>
               </div></li>
              <hr style="margin-top: 5px;">
              <li class="" style="margin-top: -10px;"><div class="row">
                <div class="col-6"><a href="{{url('les_biens')}}" id="cat_li">Villa</a></div>
                <div class="col-6 text-end" style="font-weight: 700;
                color: #51a7b3;">
                 {{$vil + $vils}}
                </div>
               </div></li>
              <hr style="margin-top: 5px;">
              <li class="" style="margin-top: -10px;"><div class="row">
                <div class="col-6"><a href="{{url('les_biens')}}" id="cat_li">Immeuble</a></div>
                <div class="col-6 text-end" style="font-weight: 700;
                color: #51a7b3;">
                 {{$imm + $imms}}
                </div>
               </div></li>
              <hr style="margin-top: 5px;">
              <li class="" style="margin-top: -10px;"><div class="row">
                <div class="col-6"><a href="{{url('les_biens')}}" id="cat_li">Magasin</a></div>
                <div class="col-6 text-end" style="font-weight: 700;
                color: #51a7b3;">
                {{$mag + $mags}}
                </div>
               </div></li>
              <hr style="margin-top: 5px;">
              <li class="" style="margin-top: -10px;"><div class="row">
                <div class="col-6"><a href="{{url('les_biens')}}" id="cat_li">Entrepôts</a></div>
                <div class="col-6 text-end" style="font-weight: 700;
                color: #51a7b3;">
                {{$ent + $ents}}
                </div>
               </div></li>
              <hr style="margin-top: 5px;">
            </ul>
          </div>
          <div class=" col-lg-7 col-md-7">
  
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
              <div class="carousel-indicators" style="display: none;">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                  <img src="{{asset('front/assets/img/1.png')}}" class="d-block w-100 h-100" alt="..." style="border-radius: 5px;">
                  <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p> -->
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <img src="{{asset('front/assets/img/3.png')}}" class="d-block w-100 h-100" alt="..." style="border-radius: 5px;">
                  <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p> -->
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{asset('front/assets/img/2.png')}}" class="d-block w-100 h-100" alt="..." style="border-radius: 5px;">
                  <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p> -->
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{asset('front/assets/img/4.png')}}" class="d-block w-100 h-100" alt="..." style="border-radius: 5px;">
                  <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p> -->
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev" style="display: none;">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next" style="display: none;">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
  
          </div>
          <div class="col-md-2" id="col_rigth_response">
            <div class="row" style="margin-left: -19px;" id="row_rigth">
              <div id="carouselExampleDark" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators"  style="display: none;">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <a href="{{url('En_location')}}">
                  <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                      <img src="{{asset('front/assets/img/bien/1.png')}}" class="d-block w-100 h-100" alt="..." style="border-radius: 5px;">
                      <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p> -->
                      </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="1000">
                      <img src="{{asset('front/assets/img/bien/2.png')}}" class="d-block w-100 h-100" alt="..." style="border-radius: 5px;">
                      <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p> -->
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('front/assets/img/bien/3.png')}}" class="d-block w-100 h-100" alt="..." style="border-radius: 5px;">
                      <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p> -->
                      </div>
                    </div>
  
                    <div class="carousel-item">
                      <img src="{{asset('front/assets/img/bien/4.png')}}" class="d-block w-100 h-100" alt="..." style="border-radius: 5px;">
                      <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p> -->
                      </div>
                    </div>
  
                    <div class="carousel-item">
                      <img src="{{asset('front/assets/img/bien/5.png')}}" class="d-block w-100 h-100" alt="..." style="border-radius: 5px;">
                      <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p> -->
                      </div>
                    </div>
                  </div>
                </a>
               
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev" style="display: none;">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next" style="display: none;">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
            <div class="row" style="margin-left: -19px; margin-top: 6px" id="row_rigth">
              <div id="carouselExampleDark" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators"  style="display: none;">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6" aria-label="Slide 7"></button>
                   <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="7" aria-label="Slide 8"></button>
                </div>
                <a href="{{url('En_vente')}}">
                  <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                      <img src="{{asset('front/assets/img/bien/6.png')}}" class="d-block w-100 h-100" alt="..." style="border-radius: 10px;">
                      <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p> -->
                      </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="500">
                      <img src="{{asset('front/assets/img/bien/7.png')}}" class="d-block w-100 h-100" alt="..." style="border-radius: 5px;">
                      <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p> -->
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('front/assets/img/bien/8.png')}}" class="d-block w-100 h-100" alt="..." style="border-radius: 5px;">
                      <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p> -->
                      </div>
                    </div>

                    <div class="carousel-item">
                      <img src="{{asset('front/assets/img/bien/9.png')}}" class="d-block w-100 h-100" alt="..." style="border-radius: 5px;">
                      <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p> -->
                      </div>
                    </div>

                    <div class="carousel-item">
                      <img src="{{asset('front/assets/img/bien/10.png')}}" class="d-block w-100 h-100" alt="..." style="border-radius: 5px;">
                      <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p> -->
                      </div>
                    </div>

                    <div class="carousel-item">
                      <img src="{{asset('front/assets/img/bien/11.png')}}" class="d-block w-100 h-100" alt="..." style="border-radius: 5px;">
                      <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p> -->
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('front/assets/img/bien/12.png')}}" class="d-block w-100 h-100" alt="..." style="border-radius: 5px;">
                      <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p> -->
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('front/assets/img/bien/13.png')}}" class="d-block w-100 h-100" alt="..." style="border-radius: 5px;">
                      <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p> -->
                      </div>
                    </div>
                  </div>
                </a>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev" style="display: none;">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next" style="display: none;">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 
  
  <!-- End Hero -->

  <!-- ======= Hero Section ======= -->
  <!-- <section id="hero" class="d-flex align-items-center">

    <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
      <h1>Build Better Websites With Bikin</h1>
      <h2>We are team of talented designers making websites with Bootstrap</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
      <img src="assets/img/hero-img.png" class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150">
    </div>

  </section> -->
  <!-- End Hero -->

  <main id="main">

    @if (session('status'))
    <h6 class="alert alert-success">{{ session('status') }}</h6>
    @endif

     <!-- ======= Expertise et conseils en immobiliers Section ======= -->
     <section id="faq" class="faq"  style="margin-top: -80px;">
      <div class="container">
        <div class="row">
          <div class="col-8">
            <div class="section-title">
              <h2>Pourquoi choisir Cocody Immobilier ?</h2>
              
            </div>
          </div>
          <div class="col-4 text-end">
           <a href="{{url('expertise')}}" style="display: none">
            <button class="btn btn-primary" id="btn-gen">Voir plus <i class='bx bx-chevrons-right' ></i></button>
           </a> 
          </div>
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-4">
          <div class="col">
            <div class="card h-100 border-0 text-center" style="background:#f6f8fb;">
              <a href="" class="mt-4">
                  <img src="{{asset('front/assets/img/v/1.png')}}" class="img-fluid w-25" alt="...">
              </a>
              
              <div class="card-body">
                <h5 class="card-title" style="font-size: 17px;">Expertise Locale  </h5>
                <p class="card-text" style="font-size: 14px;">Notre équipe connaît parfaitement le marché local et les quartiers, ce qui nous permet de vous guider vers les meilleures opportunités.</p>
              </div>
            </div>
          </div>
          <div class="col">
              <div class="card h-100 border-0 text-center" style="background:#f6f8fb;">
                <a href="" class="mt-4">
                    <img src="{{asset('front/assets/img/v/2.png')}}" class="img-fluid w-25" alt="...">
                </a>
                
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 17px;">Marketing Professionnel </h5>
                  <p class="card-text" style="font-size: 14px;">Nous utilisons des techniques de marketing avancées pour promouvoir vos biens, ce qui attire les acheteurs potentiels.</p>
                </div>
              </div>
          </div>
          <div class="col">
              <div class="card h-100 border-0 text-center" style="background:#f6f8fb;">
                <a href="" class="mt-4">
                    <img src="{{asset('front/assets/img/v/3.png')}}" class="img-fluid w-25" alt="...">
                </a>
                
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 17px;">Engagement envers la Satisfaction du Client  </h5>
                  <p class="card-text" style="font-size: 14px;">Votre satisfaction est notre priorité. Nous travaillons dur pour répondre à vos besoins et dépasser vos attentes.</p>
                </div>
              </div>
          </div>
          <div class="col">
              <div class="card h-100 border-0 text-center" style="background:#f6f8fb;">
                <a href="" class="mt-4">
                    <img src="{{asset('front/assets/img/v/4.png')}}" class="img-fluid w-25" alt="...">
                </a>
                
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 17px;">Transparence</h5>
                  <p class="card-text" style="font-size: 14px;"> Vous pouvez compter sur une communication ouverte et transparente à chaque étape du processus.</p>
                </div>
              </div>
           </div>
        </div>
    </div>
      </div>
    </section>
    <!-- End Expertise et conseils en immobiliers Section -->

      <!-- ======= Promotion immobilier Section ======= -->
      {{-- <section id="features" class="features"  style="margin-top: -30px;">
        <div class="container">
          <div class="row">
            <div class="col-6">
              <div class="section-title">
                <h2>Construction</h2>
                <p> </p>
              </div>
            </div>
            <div class="col-6 text-end">
             <a href="{{url('constuction')}}">
              <button class="btn btn-primary" id="btn-gen">Voir plus <i class='bx bx-chevrons-right' ></i></button>
             </a> 
            </div>
          </div>
  
          <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
              <a href="">
                <div class="card h-100 border-0" >
                  <img src="{{asset('front/assets/img/c/c.jpg')}}" class="card-img-top" alt="..." id="img_promo">
                   
                  <div class="row ml-4 w-md-100" id="badges2">
                    <div class="col-md-12">
                      
                    </div>
                    <div class="col-md-12">
                      <p style="font-size: 14px; text-transform: none; color: #3097a5;  border-radius: 5px; background-color: white;">  Etude et conception</p>
                      <a href="" id="construction_a">
                        Voir plus
                       </a> 
                    </div>

                  </div>
                  
                </div>
              </a>
              
            </div>
            <div class="col">
              <a href="">
                <div class="card h-100 border-0">
                  <img src="{{asset('front/assets/img/c/rea.jpg')}}" class="card-img-top" alt="..." id="img_promo">
                  
                  <div class="row ml-4 w-md-100" id="badges2">
                    <div class="col-md-12">
                      
                    </div>
                    <div class="col-md-12">
                      <p  style="font-size: 14px; text-transform: none; color: #3097a5;  border-radius: 5px; background-color: white;"> Réhabilitation</p>
                      <a href="" id="construction_a">
                        Voir plus
                       </a> 
                    </div>

                  </div>
                  
                </div>
              </a>
              
            </div>
            <div class="col">
              <a href="">
                <div class="card h-100 border-0" >
                  <img src="{{asset('front/assets/img/c/ren.jpg')}}" class="card-img-top" alt="..." id="img_promo">
                  <!-- <button type="button" class="btn btn-primary" id="badges1">
                   40 %
                  </button> -->
                  <div class="row ml-4 w-md-100" id="badges2">
                    <div class="col-md-12">
                       
                    </div>
                    <div class="col-md-12">
                      <p  style="font-size: 14px; text-transform: none; color: #3097a5;  border-radius: 5px; background-color: white;">Renovation </p>
                      <a href="" id="construction_a">
                        Voir plus
                       </a> 
                    </div>

                  </div>
                  
                </div>
              </a>
              
            </div>
            <div class="col">
              <a href="">
                <div class="card h-100 border-0" >
                  <img src="{{asset('front/assets/img/c/rev.jpg')}}" class="card-img-top" alt="..." id="img_promo">
                   
                  <div class="row ml-4 w-md-100" id="badges2">
                    <div class="col-md-12">
                     
                    </div>
                    <div class="col-md-12">
                      <p style="font-size: 14px; text-transform: none;color: #3097a5;  border-radius: 5px; background-color: white;">Revêtement de façade</p>
                      <a href="" id="construction_a">
                        Voir plus
                       </a> 
                    </div>

                  </div>
                  
                </div>
              </a>
              
            </div>
          </div>
  
           
        </div>
      </section> --}}
  <!-- End promotion immobiliere Section -->

    <!-- ======= Features Section ======= -->
    <section id="services" class="services bg-white"   style="margin-top: -80px;">
      <div class="container">
        <div class="row">
          <div class="col-8">
            <div class="section-title">
              <h2 style="color:#2d405f">Ce que nous offrons</h2>
              <p> </p>
            </div>
          </div>
          <div class="col-4 text-end">
           <a href="{{url('vente_immobilier')}}" style="display: none">
            <button class="btn btn-primary" id="btn-gen">Voir plus <i class='bx bx-chevrons-right' ></i></button>
           </a> 
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mt-4 mb-lg-0"  >
            <div class="icon-box" style="background: linear-gradient(rgb(11 56 84 / 35%), rgb(11 56 84 / 33%)), url('front/assets/img/e/e.jpg'); background-size: cover;">
             <div class="row" id="cons">
              <div class="icon"><img src="{{asset('front/assets/img/e/6.png')}}" alt="" class="img-fluid w-25"></div>
              <h4 class="title" style="background-color: white; border-radius: 5px;"><a href="{{url('expertise')}}">Expertise et conseils immobiliers</a></h4>
              <p class="description">Nous sommes votre partenaire de confiance pour tous les aspects de l'immobilier.</p>
             </div>
             
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mt-4 mb-lg-0"  >
            <div class="icon-box" style="background: linear-gradient(rgb(11 56 84 / 35%), rgb(11 56 84 / 33%)), url('front/assets/img/c.jpg'); background-size: cover;">
              <div class="row" id="cons">
                <div class="icon"><img src="{{asset('front/assets/img/e/8.png')}}" alt="" class="img-fluid w-25"></div>
                <h4 class="title" style="background-color: white; border-radius: 5px;"><a href="{{url('constuction')}}">Construction</a></h4>
                <p class="description">Nous sommes fiers d'offrir une gamme complète de services de construction pour répondre à vos besoins en matière de projets immobiliers</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mt-4 mb-lg-0"  >
            <div class="icon-box" style="background: linear-gradient(rgb(11 56 84 / 35%), rgb(11 56 84 / 33%)), url('front/assets/img/l/ge.jpg'); background-size: cover;">
              <div class="row" id="cons">
                <div class="icon"><img src="{{asset('front/assets/img/e/6.png')}}" alt="" class="img-fluid w-25"></div>
                <h4 class="title" style="background-color: white; border-radius: 5px;"><a href="{{url('location_immobilier')}}">Location immobiliére</a></h4>
                <p class="description">Si vous êtes à la recherche de la maison parfaite, de l'appartement idéal ou d'un espace commercial à louer, vous êtes au bon endroit.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mt-4 mb-lg-0"  >
            <div class="icon-box" style="background: linear-gradient(rgb(11 56 84 / 35%), rgb(11 56 84 / 33%)), url('front/assets/img/v/v.jpg'); background-size: cover;">
              <div class="row" id="cons">
                <div class="icon"><img src="{{asset('front/assets/img/e/8.png')}}" alt="" class="img-fluid w-25"></div>
                <h4 class="title" style="background-color: white; border-radius: 5px;"><a href="{{url('vente_immobilier')}}">Achats immobiliére</a></h4>
                <p class="description">Que vous souhaitiez acheter une nouvelle propriété  ou investir dans l'immobilier, notre équipe est là pour vous accompagner</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mt-4 mb-lg-0"  >
            <div class="icon-box" style="background: linear-gradient(rgb(11 56 84 / 35%), rgb(11 56 84 / 33%)), url('front/assets/img/v/v.jpg'); background-size: cover;">
              <div class="row" id="cons">
                <div class="icon"><img src="{{asset('front/assets/img/e/8.png')}}" alt="" class="img-fluid w-25"></div>
                <h4 class="title" style="background-color: white; border-radius: 5px;"><a href="{{url('vente_immobilier')}}">Vente immobiliére</a></h4>
                <p class="description">Que vous souhaitiez  vendre votre bien actuel ou investir dans l'immobilier, notre équipe est là pour vous accompagner</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mt-4 mb-lg-0"  >
            <div class="icon-box" style="background: linear-gradient(rgb(11 56 84 / 35%), rgb(11 56 84 / 33%)), url('front/assets/img/v/ge.jpg'); background-size: cover;">
              <div class="row" id="cons">
                <div class="icon"><img src="{{asset('front/assets/img/e/8.png')}}" alt="" class="img-fluid w-25"></div>
                <h4 class="title" style="background-color: white; border-radius: 5px;"><a href="{{url('gestion')}}">Gestion et Syndic Immobilier</a></h4>
                <p class="description">Chez Cocody Immobilier, notre engagement envers l'excellence s'étend au-delà de la construction de bâtiments.</p>
              </div>
            </div>
          </div>

        </div>
 

      </div>
    </section>
    <!-- End Features Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features"  style="margin-top: -80px;">
      <div class="container">
        <div class="row">
          <div class="col-8">
            <div class="section-title">
              <h2>Location de biens immobiliers</h2>
              <p> </p>
            </div>
          </div>
          <div class="col-4 text-end">
           <a href="{{url('En_location')}}">
            <button class="btn btn-primary" id="btn-gen">Voir plus <i class='bx bx-chevrons-right' ></i></button>
           </a> 
          </div>
        </div>

        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 g-4">
          @if ($location->count() > 0)  
            @foreach ($location as $item)
             <div class="col">
               
                <div class="card h-100">
                 <a href="{{ url('location-detail/'.$item->id)}}">
                    <img src="{{ asset('uploads/Location/'.$item->images) }}" class="card-img-top" alt="..." style="height: 173px; object-fit: cover;">
                 </a>                
                  <div class="card-body">
                    <h5 class="card-title" id="produit_titre">{{$item->type}}</h5>
                    <p class="card-text" id="produit_p"><i class='bx bx-map' ></i> {{$item->adresse}}</p>
                    <div class="d-flex" style="gap: 6px; ">
                      <div class="">
                        <button class="btn btn-primary" id="produit_btn">{{$item->superficie}}</button>
                      </div>
                      <div class="">
                        <button class="btn btn-primary" id="produit_btn">{{$item->usage}}</button>
                      </div>
                      <div class="">
                        <button class="btn btn-primary" id="produit_btn">{{$item->configuration}}</button>
                      </div>
                    </div>
                    
                  </div>
                  <div class="card-footer bg-white">
                    <div class="row mt-2">
                      <div class="col-8" style="border-right: 1px solid;">
                        <p style="    font-size: 14px;
                        font-weight: 600;"><i class='bx bx-money mr-2' style="margin-right: 2px;"></i> {{$item->prix}} FCFA</p>
                      </div>
                      <div class="col-4 text-center">
                        <p style="font-size: 14px;"><a href="{{ url('location-detail/'.$item->id)}}"> Voir</a></p>
                      </div>
                    </div>
                  </div>
                </div>
             </div>
            @endforeach
         @else
            <p>Aucun bien disponible</p>
         @endif
         
          
        </div>

      </div>
    </section>
    <!-- End Features Section -->

       

     <!-- ======= Features Section ======= -->
     <section id="features" class="features"  style="margin-top: -80px;">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <div class="section-title">
              <h2>Vente de biens immobiliers</h2>
              <p> </p>
            </div>
          </div>
          <div class="col-6 text-end">
           <a href="{{url('En_vente')}}">
            <button class="btn btn-primary" id="btn-gen">Voir plus <i class='bx bx-chevrons-right' ></i></button>
           </a> 
          </div>
        </div>

        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 g-4">
         @if ($vente->count() > 0)
            @foreach ($vente as $item)
            <div class="col">
                <div class="card h-100">
                  <a href="{{ url('vente-details/'.$item->id)}}">
                    <img src="{{ asset('uploads/Vente/'.$item->images) }}" class="card-img-top" alt="..." style="height: 173px; object-fit: cover;">
                  </a>
                  <div class="card-body">
                    <h5 class="card-title" id="produit_titre">{{$item->type}}</h5>
                    <p class="card-text" id="produit_p"><i class='bx bx-map' ></i> {{$item->adresse}}</p>
                    <div class="d-flex" style="gap: 6px; ">
                      <div class="">
                        <button class="btn btn-primary" id="produit_btn">{{$item->superficie}}</button>
                      </div>
                       
                      <div class="">
                        <button class="btn btn-primary" id="produit_btn">{{$item->configuration}}</button>
                      </div>
                    </div>
                    
                  </div>
                  <div class="card-footer bg-white">
                    <div class="row mt-2">
                      <div class="col-8" style="border-right: 1px solid;">
                        <p style="    font-size: 14px;
                        font-weight: 600;"><i class='bx bx-money mr-2' style="margin-right: 2px;"></i> {{$item->prix}} FCFA</p>
                      </div>
                      <div class="col-4 text-center">
                        <p style="font-size: 14px;"><a href="{{ url('vente-details/'.$item->id)}}"> Voir</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>         
            @endforeach
         @else
            <p>Aucun bien disponible</p>
        @endif
         
        </div>

      </div>
    </section>
    <!-- End Features Section -->

<!-- ======= Features Section ======= -->
<section id="features" class="features"  style="margin-top: -80px;">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="section-title">
          <h2>Toutes les catégories</h2>
          
        </div>
      </div>
      <div class="col-6 text-end">
       <a href="{{url('categorie')}}">
        <button class="btn btn-primary" id="btn-gen">Voir plus <i class='bx bx-chevrons-right' ></i></button>
       </a> 
      </div>
    </div>

     
    <div class="row row-cols-1 row-cols-md-4 g-4">
      <div class="col">
        <div class="card h-100" id="cat_btn">
          <div class="card-body text-center">
            <a href="{{url('les_biens')}}">
              <h5 class="card- title mt-4" id="cat_btn_titre">Terrain</h5>
            </a>
            
           <div class="row">
            <div class="col-md-12 text-center mt-4">
              <button class="btn btn-primary" id="cat_btn_home"> <h5 style="font-size: 11px;
              font-weight: 900; color:white">{{$ter + $ters}}</h5></button>
             
            </div>
           </div>
          </div>
          <a href="{{url('les_biens')}}">
            <img src="{{asset('front/assets/img/categorie/terrain.jpg')}}" class="card-img-top w-100" alt="..." id="cat_btn_img">
          </a>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" id="cat_btn">
          <div class="card-body text-center">
            <a href="{{url('les_biens')}}">
              <h5 class="card- title mt-4" id="cat_btn_titre">Appartement</h5>
            </a>
            
           <div class="row">
            <div class="col-md-12 text-center mt-4">
              <button class="btn btn-primary" id="cat_btn_home"> <h5 style="font-size: 11px;
              font-weight: 900; color:white">{{$app + $apps}}</h5></button>
             
            </div>
           </div>
          </div>
          <a href="{{url('les_biens')}}">
            <img src="{{asset('front/assets/img/categorie/appartement.jpg')}}" class="card-img-top w-100 border-0" alt="..." id="cat_btn_img">
          </a>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" id="cat_btn">
          <div class="card-body text-center">
            <a href="{{url('les_biens')}}">
              <h5 class="card- title mt-4" id="cat_btn_titre">Studio</h5>
            </a>
            
           <div class="row">
            <div class="col-md-12 text-center mt-4">
              <button class="btn btn-primary" id="cat_btn_home"> <h5 style="font-size: 11px;
              font-weight: 900; color:white">{{$stud + $studs}}</h5></button>
             
            </div>
           </div>
          </div>
          <a href="{{url('les_biens')}}">
            <img src="{{asset('front/assets/img/categorie/studio.jpg')}}" class="card-img-top w-100" alt="..." id="cat_btn_img">
          </a>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" id="cat_btn">
          <div class="card-body text-center">
            <a href="{{url('les_biens')}}">
              <h5 class="card- title mt-4" id="cat_btn_titre">Bureaux</h5>
            </a>
            
           <div class="row">
            <div class="col-md-12 text-center mt-4">
              <button class="btn btn-primary" id="cat_btn_home"> <h5 style="font-size: 11px;
              font-weight: 900; color:white">{{$bur + $burs}}</h5></button>
             
            </div>
           </div>
          </div>
          <a href="{{url('les_biens')}}">
            <img src="{{asset('front/assets/img/categorie/bureau.jpg')}}" class="card-img-top w-100" alt="..." id="cat_btn_img">
          </a>
        </div>
      </div>
    </div>

    <div class="row row-cols-1 row-cols-md-4 mt-4 g-4">
      <div class="col">
        <div class="card h-100" id="cat_btn">
          <div class="card-body text-center">
            <a href="{{url('les_biens')}}">
              <h5 class="card- title mt-4" id="cat_btn_titre">Maison</h5>
            </a>
            
           <div class="row">
            <div class="col-md-12 text-center mt-4">
              <button class="btn btn-primary" id="cat_btn_home"> <h5 style="font-size: 11px;
              font-weight: 900; color:white">{{$mai + $mais}}</h5></button>
             
            </div>
           </div>
          </div>
          <a href="{{url('les_biens')}}">
            <img src="{{asset('front/assets/img/images2.jpg')}}" class="card-img-top w-100" alt="..." id="cat_btn_img">
          </a>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" id="cat_btn">
          <div class="card-body text-center">
            <a href="{{url('les_biens')}}">
              <h5 class="card- title mt-4" id="cat_btn_titre">Villa</h5>
            </a>
            
           <div class="row">
            <div class="col-md-12 text-center mt-4">
              <button class="btn btn-primary" id="cat_btn_home"> <h5 style="font-size: 11px;
              font-weight: 900; color:white">{{$vil + $vils}}</h5></button>
             
            </div>
           </div>
          </div>
          <a href="{{url('En_location')}}">
            <img src="{{asset('front/assets/img/categorie/villa.jpg')}}" class="card-img-top w-100 border-0" alt="..." id="cat_btn_img">
          </a>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" id="cat_btn">
          <div class="card-body text-center">
            <a href="{{url('les_biens')}}">
              <h5 class="card- title mt-4" id="cat_btn_titre">Immeuble</h5>
            </a>
            
           <div class="row">
            <div class="col-md-12 text-center mt-4">
              <button class="btn btn-primary" id="cat_btn_home"> <h5 style="font-size: 11px;
              font-weight: 900; color:white">{{$imm + $imms}}</h5></button>
             
            </div>
           </div>
          </div>
          <a href="{{url('En_location')}}">
            <img src="{{asset('front/assets/img/categorie/immeuble.jpg')}}" class="card-img-top w-100" alt="..." id="cat_btn_img">
          </a>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" id="cat_btn">
          <div class="card-body text-center">
            <a href="{{url('les_biens')}}">
              <h5 class="card- title mt-4" id="cat_btn_titre">Magasin</h5>
            </a>
            
           <div class="row">
            <div class="col-md-12 text-center mt-4">
              <button class="btn btn-primary" id="cat_btn_home"> <h5 style="font-size: 11px;
              font-weight: 900; color:white">{{$mag + $mags}}</h5></button>
             
            </div>
           </div>
          </div>
          <a href="{{url('les_biens')}}">
            <img src="{{asset('front/assets/img/categorie/magazin.jpg')}}" class="card-img-top w-100" alt="..." id="cat_btn_img">
          </a>
        </div>
      </div>
    </div>
   

     
  </div>
</section>
<!-- End Features Section -->

  <!-- ======= Features Section ======= -->
    <section id="features" class="features"  style="margin-top: -80px;">
      <div class="container">

        <div class="row">
          <div class="col-6">
            <div class="section-title">
              <h2>Actualités sur l'immobilier</h2>
              
            </div>
          </div>
          <div class="col-6 text-end">
           <a href="">
            <button class="btn btn-primary" id="btn-gen">Voir plus <i class='bx bx-chevrons-right' ></i></button>
           </a> 
          </div>
        </div>
 
        <div class="row row-cols-1 row-cols-md-3 g-4">
          @if ($blog->count() > 0)
           @foreach ($blog as $item)
              
            <div class="col">
              <div class="card h-100 border-0" style="box-shadow: 5px 5px 10px rgba(0,0,0,.2);">
                <img src="{{ asset('uploads/Blog/'.$item->images) }}" class="card-img-top" alt="..." style=" height: 237px; object-fit: cover;">
                <div class="card-body">
                  <div class="row" id="blog_row">
                    <div class="col-md-12">
                      <h5 class="card-title" id="blog_title">{{$item->titre}}</h5>
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="col-md-8">
                      <h5 class="" style="font-size: 15px;"> <i class='bx bxs-circle mr-2' style="margin-right: 2px;"></i> {{$item->created_at}}</h5>
                    </div>
                    <div class="col-md-4">
                      {{-- <h5 class="" style="font-size: 15px;"> <i class='bx bx-radio-circle-marked mr-2' style="margin-right: 2px;"></i> Publié par joe</h5> --}}
                    </div>
                  </div>
                  
                  <p class="card-text" style="font-size: 13px;">{{ Str::limit($item->extrait, 100) }}</p>
                  <div class="row">
                    <div class="col-md-6">
                      <a href="{{ url('blog-details/'.$item->id)}}">
                        <button class="btn btn-primary" style=" background-color: #3097a5 !important;border: none;"> Voir plus</button>
                      </a>
                     
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
           @endforeach
          @else
            <p>Aucune nouvelle disponible</p>
        @endif
          
        </div>
       

         
      </div>
    </section>
<!-- End Features Section -->

  <!-- ======= Features Section ======= -->
  <!-- <section id="features" class="features"  style="margin-top: -30px;">
    <div class="container">
      <div class="row bg-image" style="background-image: linear-gradient(180deg, #3097a59c 0%, rgb(48 151 165 / 31%) 100%) ,url(assets/img/carrousel-1.jpg); border-radius: 30px;">
        <div class="col-md-12 text-center mt-5" style="margin-top: 80px !important;">
          <h1 id="titre_new">Inscrivez vous à notre Newsletter</h1>
          <p class="text-white mt-4">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
            This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
          </p>
          <div class="col-md-12 text-center mt-5">
            <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-4">
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="email" placeholder="Votre adresse e-mail" aria-label="Search">
                  <button class="btn btn-outline-success" style="background: #3097a5 !important;
                  border-color: #3097a5 !important;
                  color: white;" type="submit">S'inscrire</button>
                </form>
              </div>
              <div class="col-md-4"></div>
            </div>
            
          </div>
         
           
        </div>
        <div class="overlay"></div>
        
      </div>
    </div>
  </section> -->
<!-- End Features Section -->

<section id="features" class="features"  style="margin-top: -80px;">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="section-title">
          <h2>Newsletter</h2>
          <p> </p>
        </div>
      </div>
      <div class="col-6 text-end">
       
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center mt-5" style="margin-top: 0px !important;">
        
        <p class="mt-4" style="font-weight: 600;">Veuillez renseignez votre adresse mail, pour etre au courant de toutes nos nouveautés</p>
         
        <div class="col-md-12 text-center mt-5">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <form class="d-flex" action="{{ url('add-newsletter') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="input-group" style="margin-top: -14px;">
                <input type="text" class="form-control form-control-lg input py-3"
                    placeholder="Adresse email" name="email" id="input_newsletter">
                <button class="btn btn-primary" style="background :#3097a5; border-color:#3097a5; border-radius: 0px 50px 50px 0px; width: 133px;">
                    Envoyer
                </button>
              
            </div>
          </form>
            </div>
            <div class="col-md-2"></div>
          </div>
          
        </div>


        <div class="col-md-12">
         
        </div>
       
         
      </div>
 
      
    </div>
  </div>
</section>
    
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
  {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
     

</body>

</html>