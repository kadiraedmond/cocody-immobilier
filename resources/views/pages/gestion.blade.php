@extends('layouts.front')
@section('content')

      <!-- ======= Portfolio Details Section ======= -->
      <section id="portfolio-details" class="portfolio-details" style="margin-top: 80px;">
        <div class="container">
  
          <div class="row g-2">
            <div class="col-lg-6">
                <img src="{{asset('front/assets/img/c.jpg')}}" alt="" class="img-fluid w-75" style="border-radius: 5px;">
            </div>
            <div class="col-lg-6">
               <h1 style="font-size: 54px;">Gestion et Syndic Immobilier</h1>
               <p class="mt-4">Chez Cocody Immobilier, notre engagement envers l'excellence s'étend au-delà de la construction de bâtiments. Nous sommes également fiers de vous offrir une gamme complète de services de gestion et de syndic immobilier pour répondre à vos besoins en matière de propriété
               </p>
            </div>
          </div>    
        </div>
      </section>
      <!-- End Portfolio Details Section -->


      <!-- ======= Steps Section ======= -->
      <section id="steps" class="steps">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8">
                    <h1 style="font-size: 20px; font-weight: 700;">Nos Services de Gestion Immobilière  </h1>
                </div>
             </div>

             <div class="row">
              <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px; border:none ;">
                  <div class="row g-0" style="box-shadow: 5px 5px 10px rgba(0,0,0,.2); border-radius: 5px;">
                    <div class="col-md-4">
                      <img src="{{asset('front/assets/img/c/c.jpg')}}" class="img-fluid rounded-start h-100 w-100" alt="..." style="height: 316px !important;
                      object-fit: cover;">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title" id="conseil_titre">Gestion Locative </h5>
                        <p class="card-text mb-4">Confiez-nous la gestion de votre propriété locative. Nous nous occupons de tout, de la recherche de locataires à la gestion des contrats de location, pour vous offrir une tranquillité d'esprit totale.</p>
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px; border:none;">
                  <div class="row g-0" style="box-shadow: 5px 5px 10px rgba(0,0,0,.2); border-radius: 5px;">
                    <div class="col-md-4">
                      <img src="{{asset('front/assets/img/c/rea.jpg')}}" class="img-fluid rounded-start h-100 w-100" alt="..." style="height: 316px !important;
                      object-fit: cover;">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title" id="conseil_titre">Entretien et Maintenance </h5>
                        <p class="card-text">Nous veillons à ce que votre propriété soit toujours en parfait état. Notre équipe d'experts en maintenance s'occupe de l'entretien régulier et des réparations nécessaires.</p>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px; border:none ;">
                  <div class="row g-0" style="box-shadow: 5px 5px 10px rgba(0,0,0,.2); border-radius: 5px;">
                    <div class="col-md-4">
                      <img src="{{asset('front/assets/img/c/ren.jpg')}}" class="img-fluid rounded-start h-100 w-100" alt="..." style="height: 316px !important;
                      object-fit: cover;">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title" id="conseil_titre"> Gestion Administrative </h5>
                        <p class="card-text mb-4">Simplifiez la gestion de vos biens avec nos services administratifs. Nous gérons les aspects financiers, les rapports de revenus et de dépenses, ainsi que toutes les formalités légales.</p>
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px; border:none;">
                  <div class="row g-0" style="box-shadow: 5px 5px 10px rgba(0,0,0,.2);border-radius: 5px;">
                    <div class="col-md-4">
                      <img src="{{asset('front/assets/img/c/rev.jpg')}}" class="img-fluid rounded-start h-100 w-100" alt="..." style="height: 316px !important;
                      object-fit: cover;">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title" id="conseil_titre">Syndic de Copropriété </h5>
                        <p class="card-text">Si vous êtes copropriétaire, notre équipe de syndic s'occupe de l'administration de votre copropriété, veillant à ce que tout fonctionne harmonieusement et conformément aux règlements.</p>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
{{--   
          <div class="row no-gutters">
  
            <div class="col-lg-4 col-md-6 content-item">
              <span>01</span>
              <h4>Étude et Conception de Plan  </h4>
              <p>Notre équipe d'experts en conception vous aidera à transformer vos idées en plans concrets. Nous travaillons en étroite collaboration avec vous pour créer des conceptions innovantes qui répondent à vos besoins.</p>
            </div>
  
            <div class="col-lg-4 col-md-6 content-item">
              <span>02</span>
              <h4>Réhabilitation </h4>
              <p>Si vous avez un bien immobilier existant nécessitant une réhabilitation, nous avons l'expertise nécessaire pour le revitaliser et le moderniser tout en respectant son caractère original.</p>
            </div>
  
            <div class="col-lg-4 col-md-6 content-item">
              <span>03</span>
              <h4>Rénovation </h4>
              <p>Que ce soit une petite mise à jour ou une rénovation complète, nous sommes équipés pour donner une nouvelle vie à votre espace, améliorer son efficacité énergétique et augmenter sa valeur.</p>
            </div>
  
            <div class="col-lg-4 col-md-6 content-item">
              <span>04</span>
              <h4>Revêtement de Façade et Enseigne Lumineuse  </h4>
              <p>L'apparence extérieure de votre bâtiment est cruciale pour la première impression. Nous proposons des solutions de revêtement de façade et d'enseigne lumineuse pour mettre en valeur votre propriété.</p>
            </div>
  
            <div class="col-lg-4 col-md-6 content-item">
              
            </div>
  
            <div class="col-lg-4 col-md-6 content-item">
              <!-- <span>06</span>
              <h4>Facilis Impedit</h4>
              <p>Quis eum numquam veniam ea voluptatibus voluptas. Excepturi aut nostrum repudiandae voluptatibus corporis sequi</p> -->
            </div>
  
          </div>
   --}}
        </div>
      </section>


   <!-- End Steps Section -->

    <section id="faq" class="faq" style="background: #f6f8fb ;">
      <div class="container">
         <div class="row mb-5">
            <div class="col-md-8">
                <h1 style="font-size: 20px; font-weight: 700;">Pourquoi choisir cocody immobilier pour votre projet en Gestion et Syndic Immobilier ?</h1>
            </div>
         </div>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
              <div class="card h-100 border-0 text-center">
                <a href="" class="mt-4">
                    <img src="{{asset('front/assets/img/c/1.png')}}" class="img-fluid w-25" alt="...">
                </a>
                
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 17px;">Expertise Éprouvée :  </h5>
                  <p class="card-text" style="font-size: 14px;">Notre équipe possède une vaste expérience dans la gestion immobilière et le syndic de copropriété. Vous pouvez compter sur notre expertise pour prendre soin de votre investissement.</p>
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card h-100 border-0 text-center">
                  <a href="" class="mt-4">
                      <img src="{{asset('front/assets/img/c/2.png')}}" class="img-fluid w-25" alt="...">
                  </a>
                  
                  <div class="card-body">
                    <h5 class="card-title" style="font-size: 17px;">Personnalisation </h5>
                    <p class="card-text" style="font-size: 14px;"> Chaque propriété est unique, tout comme vos besoins en gestion. Nous personnalisons nos services pour répondre à vos exigences spécifiques.</p>
                  </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 border-0 text-center">
                  <a href="" class="mt-4">
                      <img src="{{asset('front/assets/img/c/3.png')}}" class="img-fluid w-25" alt="...">
                  </a>
                  
                  <div class="card-body">
                    <h5 class="card-title" style="font-size: 17px;">Transparence et Intégrité  </h5>
                    <p class="card-text" style="font-size: 14px;">Nous croyons en une gestion transparente et intègre de vos biens. Vous serez toujours informé de l'état de vos investissements.</p>
                  </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 border-0 text-center">
                  <a href="" class="mt-4">
                      <img src="{{asset('front/assets/img/c/4.png')}}" class="img-fluid w-25" alt="...">
                  </a>
                  
                  <div class="card-body">
                    <h5 class="card-title" style="font-size: 17px;">Gestion Proactive </h5>
                    <p class="card-text" style="font-size: 14px;">Notre approche proactive garantit que les problèmes sont résolus rapidement et que votre propriété reste en excellent état.</p>
                  </div>
                </div>
             </div>

             <div class="col">
                <div class="card h-100 border-0 text-center">
                  <a href="" class="mt-4">
                      <img src="{{asset('front/assets/img/c/4.png')}}" class="img-fluid w-25" alt="...">
                  </a>
                  
                  <div class="card-body">
                    <h5 class="card-title" style="font-size: 17px;">Engagement envers la Qualité  </h5>
                    <p class="card-text" style="font-size: 14px;">Tout comme dans notre service de construction, nous visons l'excellence dans tout ce que nous faisons.</p>
                  </div>
                </div>
             </div>
          </div>
      </div>
    </section>
    <!-- End Frequently Asked Questions Section -->

     <!-- End Steps Section -->

     <section id="faq" class="faq">
      <div class="container">
         <div class="row mb-5">
            <div class="col-md-8">
                <h1 style="font-size: 20px; font-weight: 700;">Quelques réalisations</h1>
            </div>
         </div>
         <div class="row row-cols-1 row-cols-md-4 g-4">
          <div class="col">
            <a href="">
              <div class="card h-100 border-0" >
                <img src="{{asset('front/assets/img/c/c.jpg')}}" class="card-img-top" alt="..." id="img_promo">
                 
                
                
              </div>
            </a>
            
          </div>
          <div class="col">
            <a href="">
              <div class="card h-100 border-0">
                <img src="{{asset('front/assets/img/c/rea.jpg')}}" class="card-img-top" alt="..." id="img_promo">
                
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

    </section>
    <!-- End Frequently Asked Questions Section -->
   
   
 
   
     <!-- ======= Portfolio Details Section ======= -->
     <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">
          
          <div class="col-lg-12 text-center" style="background: #3097a552; padding: 38px; border-radius: 5px;">
            <p>Que vous ayez besoin de services de gestion locative, de syndic de copropriété ou d'autres services de gestion immobilière, contactez-nous dès aujourd'hui pour discuter de vos besoins, obtenir des informations et commencer à maximiser la valeur de vos biens immobiliers.
              </p>
              <div class="row text-start">
                <div class="col-md-6 mt-4">
                  <img src="{{asset('front/assets/img/contact/3.jpg')}}" alt="" class="img-fluid h-auto" style="border-radius: 5px;">
                </div>
                <div class="col-md-6 mt-4">
                  
                  <form class="row g-3 mt-1 needs-validation" novalidate action="{{ url('add-contact') }}" method="POST" enctype="multipart/form-data" style=" box-shadow: 0 0 30px rgba(214, 215, 216, 0.6); padding: 18px; background: #fff; border-radius:5px;">
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
        </div>    
      </div>
    </section>
    <!-- End Portfolio Details Section -->
   
    
@endsection