@extends('layouts.front')

@section('content')
     <!-- ======= Portfolio Details Section ======= -->
     <section id="portfolio-details" class="portfolio-details" style="margin-top: 80px;">
        <div class="container">
  
          <div class="row g-2">
            <div class="col-lg-6">
                <img src="{{asset('front/assets/img/e/e.jpg')}}" alt="" class="img-fluid w-75" style="border-radius: 5px;">
            </div>
            <div class="col-lg-6">
               <h1 style="font-size: 54px;">Conseils et Expertise</h1>
               <p class="mt-4">Nous sommes votre partenaire de confiance pour tous les aspects de l'immobilier. Que vous soyez un investisseur, un acheteur, un vendeur ou simplement à la recherche de conseils avisés, notre équipe d'experts est là pour vous guider à travers le monde complexe de l'immobilier.
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
                    <h1 style="font-size: 20px; font-weight: 700;">Nos services de conseils et d'expertise </h1>
                </div>
             </div>

             <div class="row">
              <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px; border:none ;">
                  <div class="row g-0" style="box-shadow: 5px 5px 10px rgba(0,0,0,.2);border-radius: 5px;">
                    <div class="col-md-4">
                      <img src="{{asset('front/assets/img/e/ev.jpg')}}" class="img-fluid rounded-start h-100 w-100" alt="..." style="height: 316px !important;
                      object-fit: cover;">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title" id="conseil_titre"> Évaluation Immobilière </h5>
                        <p class="card-text mb-4">Notre équipe d'experts en conception vous aidera à transformer vos idées en plans concrets. Nous travaillons en étroite collaboration avec vous pour créer des conceptions innovantes qui répondent à vos besoins.Notre équipe d'évaluateurs professionnels peut estimer la valeur marchande de votre propriété, que ce soit pour une vente, un achat, une hypothèque ou des fins fiscales.</p>
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px; border:none;">
                  <div class="row g-0" style="box-shadow: 5px 5px 10px rgba(0,0,0,.2); border-radius: 5px;">
                    <div class="col-md-4">
                      <img src="{{asset('front/assets/img/e/co.jpg')}}" class="img-fluid rounded-start h-100 w-100" alt="..." style="height: 316px !important;
                      object-fit: cover;">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title" id="conseil_titre">Conseils en Investissement</h5>
                        <p class="card-text">Vous cherchez à investir dans l'immobilier ? Nous vous fournirons des conseils stratégiques basés sur l'analyse du marché et notre connaissance approfondie du secteur.</p>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
               
              <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px; border:none;">
                  <div class="row g-0" style="box-shadow: 5px 5px 10px rgba(0,0,0,.2);border-radius: 5px;">
                    <div class="col-md-4">
                      <img src="{{asset('front/assets/img/e/ex.jpg')}}" class="img-fluid rounded-start h-100 w-100" alt="..." style="height: 316px !important;
                      object-fit: cover;">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title" id="conseil_titre">Expertise Juridique</h5>
                        <p class="card-text">Notre équipe comprend des experts juridiques spécialisés dans l'immobilier pour vous conseiller sur toutes les questions juridiques liées à l'immobilier.</p>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px; border:none;">
                  <div class="row g-0" style="box-shadow: 5px 5px 10px rgba(0,0,0,.2);border-radius: 5px;">
                    <div class="col-md-4">
                      <img src="{{asset('front/assets/img/e/dev.jpg')}}" class="img-fluid rounded-start h-100 w-100" alt="..." style="height: 316px !important;
                      object-fit: cover;">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title" id="conseil_titre">Conseils en Développement Immobilier</h5>
                        <p class="card-text">Notre équipe comprend des experts juridiques spécialisés dans l'immobilier pour vous conseiller sur toutes les questions juridiques liées à l'immobilier.</p>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
  
       
  
        </div>
      </section>
      <!-- End Steps Section -->

    <section id="faq" class="faq" style="background: #f6f8fb ;">
      <div class="container">
         <div class="row mb-5">
            <div class="col-md-8">
                <h1 style="font-size: 20px; font-weight: 700;">Pourquoi choisir cocody immobilier pour vos besoins en conseils et expertise ?</h1>
            </div>
         </div>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
              <div class="card h-100 border-0 text-center">
                <a href="" class="mt-4">
                    <img src="{{asset('front/assets/img/e/1.png')}}" class="img-fluid w-25" alt="...">
                </a>
                
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 17px;">Expertise Approfondie </h5>
                  <p class="card-text" style="font-size: 14px;"> Nos experts en immobilier possèdent une connaissance approfondie du marché et des tendances, ce qui vous assure des conseils précis et fiables.</p>
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card h-100 border-0 text-center">
                  <a href="" class="mt-4">
                    <img src="{{asset('front/assets/img/e/2.png')}}" class="img-fluid w-25" alt="...">
                  </a>
                  
                  <div class="card-body">
                    <h5 class="card-title" style="font-size: 17px;">Personnalisation </h5>
                    <p class="card-text" style="font-size: 14px;"> Nous comprenons que chaque situation est unique. Nous personnalisons nos conseils pour répondre à vos besoins spécifiques.</p>
                  </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 border-0 text-center">
                  <a href="" class="mt-4">
                    <img src="{{asset('front/assets/img/e/3.png')}}" class="img-fluid w-25" alt="...">
                  </a>
                  
                  <div class="card-body">
                    <h5 class="card-title" style="font-size: 17px;">Transparence</h5>
                    <p class="card-text" style="font-size: 14px;">Vous pouvez compter sur notre transparence totale dans toutes nos interactions. Nous vous tenons informés à chaque étape du processus.</p>
                  </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 border-0 text-center">
                  <a href="" class="mt-4">
                    <img src="{{asset('front/assets/img/e/4.png')}}" class="img-fluid w-25" alt="...">
                  </a>
                  <div class="card-body">
                    <h5 class="card-title" style="font-size: 17px;">Réseau Étendu  </h5>
                    <p class="card-text" style="font-size: 14px;"> Grâce à notre vaste réseau de partenaires et de contacts, nous avons accès aux meilleures ressources pour vous servir.</p>
                  </div>
                </div>
             </div>
          </div>
      </div>
    </section><!-- End Frequently Asked Questions Section -->
   
 

    
     <!-- ======= Portfolio Details Section ======= -->
     <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">
          
          <div class="col-lg-12 text-center" style="background: #3097a552; padding: 38px; border-radius: 5px;">
            <p>N'hésitez pas à nous contacter pour discuter de vos besoins en conseil et expertise en immobilier. Notre équipe est prête à vous aider à atteindre vos objectifs immobiliers.
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