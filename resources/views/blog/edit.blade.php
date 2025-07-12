<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Dashboard Cocody-Immobilier</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

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
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">

                          @if (session('status'))
                              <h6 class="alert alert-success">{{ session('status') }}</h6>
                          @endif

                          <div class="card">
                              <div class="card-header">
                                  
                              </div>
                              <div class="card-body">

                                  <form action="{{ url('update-blog/'.$blog->id) }}" method="POST" enctype="multipart/form-data">
                                      @csrf
                                      @method('PUT')

                                      <div class="mb-3">
                                          <label class="form-label" for="basic-default-company">Titre</label>
                                          <input type="text" name="titre"  value="{{$blog->titre}}"  class="form-control" id="basic-default-company" />
                                      </div>
                                      <div class="mb-3">
                                        <label for="defaultSelect" class="form-label">Catégorie</label>
                                        <select id="defaultSelect" name="categorie" class="form-select">
                                          <option value="{{$blog->categorie}}">{{$blog->categorie}}</option>
                                          <option value="Conseils">Conseils</option>
                                          <option value="Vente">Vente</option>
                                          <option value="Location">Location</option>
                                          <option value="Construction">Construction</option>
                                                                      
                                        </select>
                                      </div>

                                      <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Extrait</label>
                                        <textarea
                                          id="basic-default-message"
                                          class="form-control"
                                          name="extrait"
                                          value="{{$blog->extrait}}"
                                        >{{$blog->extrait}}</textarea>
                                      </div>

                                      <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Message</label>
                                        <textarea
                                          id="summernote"
                                          class="form-control"
                                          name="message"
                                          value="{{$blog->message}}"
                                        >{{$blog->message}}</textarea>
                                      </div>

                                      
                                      
                                      
                                      <div class="form-group mb-3">
                                          <label for="">Photo initiale</label>
                                          <input type="file" name="images" class="form-control">
                                          <img src="{{ asset('uploads/Blog/'.$blog->images) }}" width="70px" height="70px" alt="Image">
                                      </div>
                                      
                                      <div class="form-group mb-3">
                                          <button type="submit" class="btn btn-primary">Modifier</button>
                                      </div>

                                  </form>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>

            </div>
               
          </div>

       </div>
       
      </div>
    </div>
    
    <div class="content-backdrop fade"></div>
  </div>
  <!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
     
    <script>
      $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    </script>
  </body>
</html>

 
