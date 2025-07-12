@extends('layouts.front')

@section('content')
      <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details" style="margin-top: 80px;">
        <div class="container">
  
          <div class="row g-2">
            <div class="col-lg-6">
                <img src="{{asset('front/assets/img/client.jpg')}}" alt="" class="img-fluid w-75">
            </div>
            <div class="col-lg-6">
               <h1 style="font-size: 54px;">Service client</h1>
               <p class="mt-4">Chez Cocody Immobilier, nous considérons chaque interaction avec nos clients comme une opportunité de dépasser leurs attentes. Notre équipe dévouée est là pour répondre à vos questions, résoudre vos problèmes et vous accompagner dans tous vos besoins immobiliers. Nous sommes engagés à vous offrir un service client exceptionnel.
               </p>
            </div>
          </div>    
        </div>
      </section>
      <!-- End Portfolio Details Section -->
   <!-- ======= Contact Section ======= -->
   <section id="contact" class="contact section-bg" style=" margin-top: 10px;">
    <div class="container">

      <div class="row mb-4">
        <div class="col-lg-6">

            <div class="row">
              
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Email</h3>
                  <p><a href="contact@cocody-immobilier.com">contact@cocody-immobilier.com</a></p>
                </div>
              </div>
              <div class="col-md-12">
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
            <p>Si vous préférez, vous pouvez également nous contacter en utilisant le formulaire de contact ci-dessous. Remplissez les informations nécessaires et nous vous répondrons dans les plus brefs délais.</p>
          </div>
        <div class="col-md-6 mt-4">
            <img src="{{asset('front/assets/img/contact/3.jpg')}}" alt="" class="img-fluid" style="border-radius: 15px;">
        </div>
        <div class="col-md-6 mt-4">
           
            <form action="forms/contact.php" method="post" role="form" class="php-email-form" style="border-radius: 15px;">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nom & prénoms " required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="telephone" placeholder="Téléphone" required>
                  </div>

                  <div class="col-md-12 form-group mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Adresse e-mail " required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="objet" id="subject" placeholder="Objet" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Envoyer</button></div>
              </form>
        </div>
        
      </div>

    </div>
   
</section>
  <!-- End Contact Section -->
      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">       
          <div class="row mt-3">
             
            <div class="col-md-2">
            </div>
            <div class="col-md-8 mt-4" style=" margin-top: -35px !important; ">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 id="titre_new" class="text-center" style="font-size: 20px;">Signaler un Problème</h1>
                        <p class="text-center">Si vous rencontrez des problèmes techniques sur notre site web, si vous avez des préoccupations ou si vous avez besoin d'une assistance immédiate, veuillez utiliser notre formulaire de signalement de problème.</p>
                        <a href="">
                            <button class="btn btn-primary" style="background: #3097a5;border-color: #3097a5;">Signaler</button>
                        </a>
                       
                    </div>
                </div>

                <div class="col-md-12 text-center mt-4">
                    <h1 id="titre_new" class="text-center mt-4" style="font-size: 20px;">Foire aux Questions (FAQ)</h1>
                    <p class="text-center">Consultez notre Foire aux Questions (FAQ) pour obtenir des réponses aux questions les plus courantes sur nos services, l'immobilier et bien plus encore.</p>
                    <a href="{{url('faq')}}">
                        <button class="btn btn-primary" style="background: #3097a5;border-color: #3097a5;">Voir plus</button>
                    </a>
                </div>

                <div class="col-md-12 mt-4">
                    <h1 id="titre_new" class="text-center mt-4" style="font-size: 20px;">Réseaux Sociaux </h1>
                    <p class="text-center">Suivez-nous sur les réseaux sociaux pour rester informé de nos dernières actualités, annonces et offres spéciales.</p>
                    <div class="social-links text-center text-md-right pt-3 pt-md-0">
                        <a href="#" class="twitter" id="client_icone"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook" id="client_icone"><i class="bx bxl-facebook"></i></a>
                        {{-- <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> --}}
                        <a href="#" class="linkedin" id="client_icone"><i class="bx bxl-linkedin"></i></a>
                        <a href="#" class="youtube" id="client_icone"><i class="bx bxl-youtube"></i></a>
                      </div>
                </div>

                <div class="col-md-12 mt-4 text-center">
                    <h1 id="titre_new" class="text-center mt-4" style="font-size: 20px;">Nous Sommes Là pour Vous Aider </h1>
                    <p class="text-center">Chez Cocody Immobilier, votre satisfaction est notre priorité. Nous nous engageons à fournir un service client de haute qualité et à répondre à toutes vos questions et préoccupations. N'hésitez pas à nous contacter, que ce soit pour des conseils en immobilier, des demandes d'assistance ou simplement pour discuter de vos projets.</p>
                    <a href="">
                        <button class="btn btn-primary" style="background: #3097a5;border-color: #3097a5;">Appeler</button>
                    </a>
                </div>
              
             
                 
            </div>
            <div class="col-md-2">
            </div>
  
            
          </div>
  
        </div>
  
      
    
@endsection