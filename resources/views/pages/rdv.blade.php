@extends('layouts.front')

@section('content')
      <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details" style="margin-top: 80px;">
        <div class="container">
  
          <div class="row g-2">
            <div class="col-lg-6">
                <img src="{{asset('front/assets/img/rdv/rdv.jpg')}}" alt="" class="img-fluid w-75" style="border-radius: 5px">
            </div>
            <div class="col-lg-6">
               <h1 style="font-size: 54px;">Rendez-vous</h1>
               <p class="mt-4">Bienvenue sur notre page de prise de rendez-vous. Chez Cocody Immobilier, nous comprenons à quel point votre temps est précieux. C'est pourquoi nous avons mis en place ce système de prise de rendez-vous en ligne pour simplifier le processus de planification de nos rencontres. Que vous souhaitiez discuter de vos besoins en immobilier, explorer nos services ou obtenir des conseils, planifiez votre rendez-vous dès aujourd'hui.
               </p>
            </div>
          </div>    
        </div>
      </section>
      <!-- End Portfolio Details Section -->
  
      <section id="faq" class="faq">
        <div class="container"  >
            <div class="row">
            
                <div class="col-lg-6" style="background: #f6f8fb;
                padding: 8px;
                border-radius: 5px;">
                    <h1 style="font-size: 20px; font-weight: 700;" class=" mt-4">Pourquoi Prendre un Rendez-vous avec Cocody Immobilier ?</h1>
    
                        <ul style="list-style:none">
                            <li class="mt-4"> <p> <strong>Consultation Personnalisée </strong><br>Lors de notre rendez-vous, vous bénéficierez d'une consultation personnalisée où nous prendrons le temps d'écouter vos besoins et de vous fournir des informations adaptées à votre situation. </p></li>
                            <li class="mt-4"> <p><strong> Gain de Temps </strong>	<br> Évitez les longues attentes et les appels téléphoniques en planifiant votre rendez-vous en quelques clics. </p></li>
                            <li class="mt-4"> <p> <strong> Flexibilité  </strong> <br> Nous offrons des créneaux horaires flexibles pour vous permettre de choisir l'heure qui vous convient le mieux.</p></li>
                         </ul>
                         
                </div>
                 <div class="col-lg-6" style="height: 409px;">
                  <img src="{{asset('front/assets/img/rdv/1.jpg')}}" alt="" class="img-fluid w-100 h-100" style="object-fit: cover;border-radius:5px;">
                 </div>
            </div>
            <div class="row mt-4" style="margin-top: 40px !important;">
              <div class="col-lg-6">
                <img src="{{asset('front/assets/img/rdv/2.jpg')}}" alt="" class="img-fluid w-50" >
              </div>
              <div class="col-lg-6 mt-4">
                <h1 style="font-size: 20px; font-weight: 700;">Comment Prendre Rendez-vous </h1>
                <ul class="faq-list">

                    <li class="mt-4">
                      <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">1.	Sélectionnez le Service <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                      <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Choisissez le service pour lequel vous souhaitez prendre rendez-vous (par exemple, achat immobilier, vente immobilière, conseil en investissement, etc.).
                        </p>
                      </div>
                    </li>
          
                    <li>
                      <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">2.	Choisissez la Date et l'Heure <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                      <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Consultez notre calendrier en ligne pour trouver un créneau horaire disponible qui correspond à votre emploi du temps.
                        </p>
                      </div>
                    </li>
          
                    <li>
                      <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">3.	Renseignez vos Coordonnées  <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                      <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Complétez le formulaire avec vos coordonnées pour que nous puissions vous contacter.
                        </p>
                      </div>
                    </li>
          
                    <li>
                      <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">4.	Confirmez votre Rendez-vous <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                      <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Une fois que vous avez choisi la date et l'heure qui vous conviennent, confirmez votre rendez-vous. Vous recevrez ensuite une confirmation par e-mail
                        </p>
                      </div>
                    </li>
          
          
                  </ul>
          
            </div>
            </div>
          
        </div>
      </section><!-- End Frequently Asked Questions Section -->
      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact section-bg">
        <div class="container" >       
          <div class="row mt-3">
             
            <div class="col-md-2">
            </div>
            <div class="col-md-8 mt-4" style=" margin-top: -35px !important; ">
              <h1 id="titre_new" class="text-center mb-4" style="font-size: 20px;">Prenez Rendez-vous dès Maintenant </h1>
          
                  <form class="row g-3 needs-validation mt-4" action="{{ url('add-rdv') }}" method="POST" enctype="multipart/form-data" style="box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
                  padding: 30px;
                  background: #fff;"  novalidate>
                   @csrf

                   <div class="col-md-12">
                    <div class="row" id="bg_rdv">
                      <div class="col-lg-3"></div>
                      <div class="col-lg-6 text-center">
                        <img src="{{asset('front/assets/img/ci.png')}}" alt="" class="img-fluid " style="width: 22%!important; margin-top: 10px;">
                      </div>
                      <div class="col-lg-3"></div>
                    </div>
                   </div>
                   <h5 class="mt-3" style=" font-size: 15px; font-weight: 700;">Type de Service </h5>

                    <div class="col-md-12">
                      <select class="form-select" name="type" id="validationCustom04" required>
                        <option selected disabled value="">Type</option>
                        <option value="Achat immobilier">Achat immobilier</option>
                        <option value="Vente immobilière">Vente immobilière</option>
                        <option value="Conseils en investissement">Conseils en investissement</option>
                        <option value="Construction">Construction</option>
                        
                      </select>
                    </div>
                    <h5 class="mt-3" style=" font-size: 15px; font-weight: 700;">Date et Heure Souhaitées </h5>
                    <div class="col-md-6">
                       
                      <input type="date" name="date" class="form-control" id="validationCustom02" value="Otto" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-6">
                     
                      <div class="input-group has-validation">
                        
                        <input type="time" name="heure" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                          Please choose a username.
                        </div>
                      </div>
                    </div>

                    <h5 class="mt-3" style=" font-size: 15px; font-weight: 700;">Informations Personnelles </h5>

                    <div class="col-md-6">
                       
                      <input type="text" name="nom" class="form-control" id="validationCustom02"   required placeholder="Nom & Prénoms">
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-6">
                     
                      <div class="input-group has-validation">
                        
                        <input type="tel" name="telephone" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Télephone" required>
                        <div class="invalid-feedback">
                          Please choose a username.
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12">
                       
                      <input type="email" class="form-control" id="validationCustom02" name="email"  required placeholder="Adresse email">
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>

                    <h5 class="mt-3" style=" font-size: 15px; font-weight: 700;"> Commentaires ou Questions (facultatif) </h5>
                    <div class="form-group mt-3">
                      <textarea class="form-control" name="message" rows="5" placeholder="Commentaires" required></textarea>
                    </div>


                     
                    <div class="col-12 text-center">
                      <button class="btn btn-primary" type="submit" style="    background: #3097a5;
                      border-color: #3097a5;">Envoyer</button>
                    </div>
                  </form>
            </div>
            <div class="col-md-2">
            </div>
  
            
          </div>
  
        </div>
  
      
    
@endsection