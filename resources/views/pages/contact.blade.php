@extends('layouts.front')

@section('content')
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details" style="margin-top: 80px;">
        <div class="container">
  
          <div class="row g-2">
            <div class="col-lg-6">
                <img src="{{asset('front/assets/img/contact/1.jpg')}}" alt="" class="img-fluid w-75" style="border-radius:5px;">
            </div>
            <div class="col-lg-6">
               <h1 style="font-size: 54px;">Contact </h1>
               <p class="mt-4">Nous sommes à votre disposition pour répondre à toutes vos questions, discuter de vos projets immobiliers ou vous fournir des informations supplémentaires sur nos services. Nous sommes engagés à vous offrir un service client de haute qualité et nous sommes impatients de vous aider.
               </p>
            </div>
          </div>    
        </div>
      </section>
      <!-- End Portfolio Details Section -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="row gy-4">
        <div class="col-lg-6">
        </div>
        <div class="col-lg-6">
         
        </div>
      </div>    
    </div>
  </section>
  <!-- End Portfolio Details Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact section-bg" style=" margin-top: -90px;">
      <div class="container">

        <div class="section-title text-center">
          
          <p style="line-height: 1.7;">Nous sommes à votre disposition pour répondre à toutes vos questions, discuter de vos projets immobiliers ou vous fournir des informations supplémentaires sur nos services. Nous sommes engagés à vous offrir un service client de haute qualité et nous sommes impatients de vous aider.</p>
        </div>

        <div class="row mb-4">
          <div class="col-lg-6">

              <div class="row">
                <div class="col-md-12">
                  <div class="info-box">
                    <i class="bx bx-map"></i>
                    <h3>Adresse</h3>
                    <p>Côte d'Ivoire, Abidjan, Angré non loin  du nouveau CHU</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box mt-4">
                    <i class="bx bx-envelope"></i>
                    <h3>Email</h3>
                    <p><a href="contact@cocody-immobilier.com">contact@cocody-immobilier.com</a></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box mt-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Téléphone</h3>
                    <p>+225 07 08 14 91 44 </p>
                  </div>
                </div>
              </div>
  
          </div>

          <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px; border:none;">
              <div class="row g-0" style="box-shadow: 5px 5px 10px rgba(0,0,0,.2);">
                <div class="col-md-4">
                  <img src="{{asset('front/assets/img/contact/2.jpg')}}" class="img-fluid rounded-start h-100 w-100" alt="..." style="height: 356px !important;
                  object-fit: cover;">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title" id="conseil_titre">Heures d'ouverture</h5>
                    <p class="card-text">Lundi | 08H à 18H</p>
                    <p class="card-text">Mardi | 08H à 18H</p>
                    <p class="card-text">Mercredi | 08H à 18H</p>
                    <p class="card-text">Jeudi | 08H à 18H</p>
                    <p class="card-text">Vendredi | 08H à 18H</p>
                    <p class="card-text">Samedi | 08H à 12H</p>
                    <p class="card-text mb-4">Dimanche | <b style="color: red">Fermé</b></p>
                     
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

          {{-- <div class="col-lg-6 mt-4 mt-md-0 text-center">
              
                  <h1 style="font-size: 20px; font-weight: 700; margin-top: 80px;">Heures d'ouverture :</h1>

                  <ul style="list-style: none;">
                      <li class="mt-4"> <h3 style="font-size: 20px; font-weight: 100;">Lundi - Vendredi : </h3></li>
                      <li class="mt-4"> <h3 style="font-size: 20px; font-weight: 100;">Samedi : </h3></li>
                      <li class="mt-4"> <h3 style="font-size: 20px; font-weight: 100;">Dimanche : </h3></li>
                   </ul>
                   
             
             
              
          </div> --}}

        </div>
        <div class="row mt-3">
          <div class="section-title text-center" style=" margin-top: 40px;">
              <p>Vous pouvez également nous contacter en utilisant le formulaire ci-dessous. Remplissez les informations requises et nous vous répondrons dès que possible.</p>
            </div>
          <div class="col-md-6 mt-4">
              <img src="{{asset('front/assets/img/contact/3.jpg')}}" alt="" class="img-fluid h-auto" style="border-radius: 5px;">
          </div>
          <div class="col-md-6 mt-4">
             
            <form class="row g-3 mt-1 needs-validation" novalidate action="{{ url('add-contact') }}" method="POST" enctype="multipart/form-data" style=" box-shadow: 0 0 30px rgba(214, 215, 216, 0.6); padding: 30px; background: #fff; border-radius:5px;">
              @csrf
              <div class="col-md-6">
                 
                <input type="text" class="form-control" name="nom" id="validationCustom01" placeholder="Nom" required id="cont_input">
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-6">
                 
                <input type="text" class="form-control" name="prenoms" id="validationCustom02" placeholder="Prénoms" id="cont_input"  required>
                 
              </div>

              <div class="col-md-6">
                
                <input type="email" class="form-control" name="email" id="validationCustom02"   placeholder="Adresse électronique" required>
               
              </div>

              <div class="col-md-6">
                
                <input type="tel" class="form-control" name="telephone" id="validationCustom02" placeholder="Téléphone"   required>
               
              </div>

              <div class="col-md-12">
               
                <input type="text" class="form-control" name="objet" id="validationCustom02" placeholder="Sujet"  required>
               
              </div>

              <div class="col-md-12">
                
                <textarea type="text" class="form-control" name="message" id="validationCustom02" placeholder="Message" required style="height: 130px;"></textarea>
               
              </div>
           
              <div class="col-12 text-center">
                <button class="btn btn-primary" type="submit" style="
                background: #3097a5;
                border-color: #3097a5;
            ">Envoyer</button>
              </div>
            </form>
          </div>
          
        </div>

      </div>
     
  </section>
    <!-- End Contact Section -->
    <section  id="features" class="features" >
      <div class="container-fluid" data-aos="fade-up">
          <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1358&amp;height=400&amp;hl=en&amp;q=Abidjan Cocody Riviera Palmeraie&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://embed-googlemap.com">embed-googlemap.com</a></div><style>.mapouter{position:relative;text-align:right;width:1358px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:1358px;height:400px;}.gmap_iframe {width:1358px!important;height:400px!important;}</style></div>
      </div>
    </section>

    

    
@endsection