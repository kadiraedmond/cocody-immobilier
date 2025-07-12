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
               <h1 style="font-size: 54px;">Services construction</h1>
               <p class="mt-4">Nous sommes fiers d'offrir une gamme complète de services de construction pour répondre à vos besoins en matière de projets immobiliers. Que vous cherchiez à concevoir une nouvelle résidence, à rénover un espace existant ou à donner un nouveau visage à une façade, nous sommes là pour vous accompagner à chaque étape de votre projet.
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
                    <h1 style="font-size: 20px; font-weight: 700;">Nos services de construction  </h1>
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
                        <h5 class="card-title" id="conseil_titre"> Étude et Conception de Plan </h5>
                        <p class="card-text mb-4">Notre équipe d'experts en conception vous aidera à transformer vos idées en plans concrets. Nous travaillons en étroite collaboration avec vous pour créer des conceptions innovantes qui répondent à vos besoins.</p>
                       
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
                        <h5 class="card-title" id="conseil_titre">Réhabilitation</h5>
                        <p class="card-text">Si vous avez un bien immobilier existant nécessitant une réhabilitation, nous avons l'expertise nécessaire pour le revitaliser et le moderniser tout en respectant son caractère original.</p>
                        
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
                        <h5 class="card-title" id="conseil_titre"> Rénovation </h5>
                        <p class="card-text mb-4">Que ce soit une petite mise à jour ou une rénovation complète, nous sommes équipés pour donner une nouvelle vie à votre espace, améliorer son efficacité énergétique et augmenter sa valeur.</p>
                       
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
                        <h5 class="card-title" id="conseil_titre">Revêtement de Façade et Enseigne Lumineuse</h5>
                        <p class="card-text">L'apparence extérieure de votre bâtiment est cruciale pour la première impression. Nous proposons des solutions de revêtement de façade et d'enseigne lumineuse pour mettre en valeur votre propriété.</p>
                        
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
                <h1 style="font-size: 20px; font-weight: 700;">Pourquoi choisir cocody immobilier pour votre projet de construction ?</h1>
            </div>
         </div>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
              <div class="card h-100 border-0 text-center">
                <a href="" class="mt-4">
                    <img src="{{asset('front/assets/img/c/1.png')}}" class="img-fluid w-25" alt="...">
                </a>
                
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 17px;">Expertise Inégalée </h5>
                  <p class="card-text" style="font-size: 14px;">Notre équipe possède une vaste expérience dans le domaine de la construction immobilière. Vous pouvez compter sur notre savoir-faire pour réaliser votre projet avec succès.</p>
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
                    <p class="card-text" style="font-size: 14px;"> Chaque projet est unique. Nous personnalisons nos services pour répondre à vos besoins spécifiques et à votre vision.</p>
                  </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 border-0 text-center">
                  <a href="" class="mt-4">
                      <img src="{{asset('front/assets/img/c/3.png')}}" class="img-fluid w-25" alt="...">
                  </a>
                  
                  <div class="card-body">
                    <h5 class="card-title" style="font-size: 17px;">Respect des Délais et des Budgets </h5>
                    <p class="card-text" style="font-size: 14px;">Nous nous engageons à respecter les délais convenus et les budgets alloués pour chaque projet.</p>
                  </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 border-0 text-center">
                  <a href="" class="mt-4">
                      <img src="{{asset('front/assets/img/c/4.png')}}" class="img-fluid w-25" alt="...">
                  </a>
                  
                  <div class="card-body">
                    <h5 class="card-title" style="font-size: 17px;">Innovation</h5>
                    <p class="card-text" style="font-size: 14px;"> Nous sommes à l'affût des dernières tendances et technologies en matière de construction pour vous offrir des solutions innovantes.</p>
                  </div>
                </div>
             </div>
          </div>
      </div>
    </section>
    <!-- End Frequently Asked Questions Section -->
   
 
   
     <!-- ======= Portfolio Details Section ======= -->
     <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">
          
          <div class="col-lg-12 text-center" style="background: #3097a552; padding: 38px; border-radius: 5px;">
            <p>Vous avez un projet de construction en tête ? Contactez-nous dès aujourd'hui pour discuter de vos besoins, obtenir un devis et commencer à transformer votre vision en réalité.
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