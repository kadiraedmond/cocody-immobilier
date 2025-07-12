<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard - index |Cocody-Immobilier</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon.png')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <link rel="stylesheet" href="{{asset('admin/assets/vendor/libs/apex-charts/apex-charts.css')}}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{asset('admin/assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('admin/assets/js/config.js')}}"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="{{ url('')}}" class="app-brand-link">
              <img src="{{asset('admin/assets/img/Logo.png')}}" alt="" class="img-fluid w-100">
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item {{ Request::is('home') ? 'active' : '' }}">
              <a href="{{url('/home')}}" class="menu-link">
                <img src="{{asset('admin/assets/img/icons/home.png')}}" alt="" class="img-fluid menu-icon" style="width: 10% !important;">
                <div data-i18n="Analytics">Tableau de bord</div>
              </a>
            </li>

            <!-- Layouts -->
           
            <li class="menu-item {{ Request::is('location','add-location') ? 'active' : '' }}" >
              <a href="{{url('location')}}" class="menu-link">
               <img src="{{asset('admin/assets/img/icons/Location.png')}}" alt="" class="img-fluid menu-icon" style="width: 10% !important;">
                <div data-i18n="Basic">Location</div>
              </a>
            </li>
            <li class="menu-item {{ Request::is('vente','add-vente') ? 'active' : '' }}" >
              <a href="{{url('vente')}}" class="menu-link">
                <img src="{{asset('admin/assets/img/icons/Vente.png')}}" alt="" class="img-fluid menu-icon" style="width: 10% !important;">
                <div data-i18n="Basic">Vente</div>
              </a>
            </li>
            <li class="menu-item {{ Request::is('communication','add-communication') ? 'active' : '' }}" >
              <a href="{{url('communication')}}" class="menu-link">
                <img src="{{asset('admin/assets/img/icons/Communication.png')}}" alt="" class="img-fluid menu-icon" style="width: 10% !important;">
                <div data-i18n="Basic">Communication </div>
              </a>
            </li>
            <li class="menu-item {{ Request::is('blog','add-blog') ? 'active' : '' }}">
              <a href="{{url('blog')}}" class="menu-link">
                <img src="{{asset('admin/assets/img/icons/Blog.png')}}" alt="" class="img-fluid menu-icon" style="width: 10% !important;">
                <div data-i18n="Basic">Blog</div>
              </a>
            </li>
            <li class="menu-item {{ Request::is('visites') ? 'active' : '' }}">
              <a href="{{url('visites')}}" class="menu-link">
                <img src="{{asset('admin/assets/img/icons/Visite.png')}}" alt="" class="img-fluid menu-icon" style="width: 10% !important;">
                <div data-i18n="Basic">Visite</div>
              </a>
            </li>
            <li class="menu-item {{ Request::is('newsletter') ? 'active' : '' }}">
              <a href="{{url('newsletter')}}" class="menu-link">
                <img src="{{asset('admin/assets/img/icons/Newsletter.png')}}" alt="" class="img-fluid menu-icon" style="width: 15% !important; margin-left: -9px;">
                <div data-i18n="Basic">Newsletter</div>
              </a>
            </li>

            <li class="menu-item {{ Request::is('contact') ? 'active' : '' }}">
              <a href="{{url('contact')}}" class="menu-link">
                <img src="{{asset('admin/assets/img/icons/Contact.png')}}" alt="" class="img-fluid menu-icon" style="width: 10% !important;">
                <div data-i18n="Basic">Contact</div>
              </a>
            </li>
            <li class="menu-item {{ Request::is('parametre','add-user') ? 'active' : '' }}">
              <a href="{{url('parametre')}}" class="menu-link">
                <img src="{{asset('admin/assets/img/icons/Parametre.png')}}" alt="" class="img-fluid menu-icon" style="width: 10% !important;">
                <div data-i18n="Basic">Parametre </div>
              </a>
            </li>

            {{-- <li class="menu-item">
              <a  href="{{ route('logout') }}" class="menu-link">
                <img src="{{asset('admin/assets/img/icons/Deconnexion.png')}}" alt="" class="img-fluid menu-icon" style="width: 10% !important;">
                <div data-i18n="Basic">Déconnexion  </div>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </li> --}}
            <li class="menu-item">
              <a href="{{ route('logout') }}" class="menu-link" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                <img src="{{asset('admin/assets/img/icons/Deconnexion.png')}}" alt="" class="img-fluid menu-icon" style="width: 10% !important;">
                <div data-i18n="Basic">Déconnexion</div>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </li>
     
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                 

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <i class="menu-icon tf-icons bx bx-user"></i>
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <i class="menu-icon tf-icons bx bx-user"></i>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                            <small class="text-muted">{{ Auth::user()->type }}</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    {{-- <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">Mon profil</span>
                      </a>
                    </li> --}}
                    <li>
                      <a class="dropdown-item" href="{{url('parametre')}}">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Paramètre</span>
                      </a>
                    </li>
                    
                    <li>
                      
                      <a class="dropdown-item"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Déconnexion</span>
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    </li>

                    
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
             @yield('content')
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <!-- <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©  Copyright 
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  Livredafrique |All rights reserved
                  
                </div>
                 
              </div>
            </footer> -->
            <!-- / Footer -->


            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
 

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('admin/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('admin/assets/vendor/js/menu.js')}}"></script>

 
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('admin/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('admin/assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('admin/assets/js/dashboards-analytics.js')}}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    
    <script>
      ClassicEditor
          .create(document.querySelector('#editor'))
          .catch(error => {
              console.error(error);
          });
  </script>
  

  </body>
</html>
