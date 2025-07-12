@extends('layouts.front')

@section('content')
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details" style="margin-top: 80px;">
        <div class="container">
  
          <div class="row g-2">
            <div class="col-lg-6">
                <img src="{{asset('front/assets/img/ccm.jpg')}}" alt="" class="img-fluid w-75" style="border-radius: 5px">
            </div>
            <div class="col-lg-6">
               <h1 style="font-size: 54px;">Comment ça marche</h1>
               <p class="mt-4">Chez Cocody Immobilier, nous croyons en la transparence et en la simplicité. Nous avons conçu ce guide pour vous expliquer en détail le processus que vous suivrez lorsque vous travaillerez avec notre agence immobilière. Que ce soit pour l'achat, la vente ou la location de biens immobiliers, nous sommes là pour vous guider à chaque étape.
               </p>
            </div>
          </div>    
        </div>
      </section>
      <!-- End Portfolio Details Section -->
  
      <section id="faq" class="faq">
        <div class="container">
            <div class="row"> 
                <div class="col-lg-12 mt-4">
                  <ul class="nav nav-tabs border-0" id="myTab" role="tablist" style="justify-content: center;">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true" style="border-radius: 10px 0px 0px 10px;">Processus d'Achat Immobilier</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false"  style="border-radius: 0px 0px 0px 0px;">Processus de Vente Immobilière</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false"  style="border-radius: 0px 10px 10px 0px;">Processus de Location Immobilière </button>
                      </li>
                      
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <section id="faq" class="faq">
                          <div class="container">
                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                <div class="col text-center">
                                  <button class="btn btn-primary" id="rond"> 1</button>
                                </div>
                                <div class="col horizontal-line">
                                    
                                </div>
                                <div class="col">
                                  <div class="card h-100 border-0 text-center" style="background: #f6f8fb;">
                                    <a href="" class="mt-4">
                                        <img src="{{asset('front/assets/img/cc/1.png')}}" class="img-fluid w-25" alt="...">
                                    </a>
                                    
                                    <div class="card-body">
                                      <h5 class="card-title" style="font-size: 17px;">Consultation Initiale </h5>
                                      <p class="card-text" style="font-size: 14px;">Lors de notre première rencontre, nous discuterons de vos besoins, de votre budget et de vos préférences pour trouver la propriété idéale.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="card h-100 border-0 text-center" style="background: #f6f8fb;">
                                    <a href="" class="mt-4">
                                        <img src="{{asset('front/assets/img/cc/2.png')}}" class="img-fluid w-25" alt="...">
                                    </a>
                                    
                                    <div class="card-body">
                                      <h5 class="card-title" style="font-size: 17px;">Recherche et Visites </h5>
                                      <p class="card-text" style="font-size: 14px;">Nous vous présenterons des biens immobiliers correspondant à vos critères et organiserons des visites pour que vous puissiez les découvrir en personne.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col horizontal-line">
                                    
                                </div>
                                <div class="col text-center">
                                  <button class="btn btn-primary" id="rond"> 2</button>
                                </div>
                    
                                <div class="col text-center">
                                  <button class="btn btn-primary" id="rond"> 3</button>
                                </div>
                                <div class="col horizontal-line">
                                    
                                </div>
                                <div class="col">
                                    <div class="card h-100 border-0 text-center" style="background: #f6f8fb;">
                                      <a href="" class="mt-4">
                                          <img src="{{asset('front/assets/img/cc/3.png')}}" class="img-fluid w-25" alt="...">
                                      </a>
                                      
                                      <div class="card-body">
                                        <h5 class="card-title" style="font-size: 17px;">Négociation </h5>
                                        <p class="card-text" style="font-size: 14px;">Une fois que vous avez trouvé la propriété de vos rêves, nous négocierons les conditions d'achat pour obtenir le meilleur prix possible.</p>
                                      </div>
                                    </div>
                                </div>
                    
                                <div class="col">
                                  <div class="card h-100 border-0 text-center" style="background: #f6f8fb;">
                                    <a href="" class="mt-4">
                                        <img src="{{asset('front/assets/img/cc/4.png')}}" class="img-fluid w-25" alt="...">
                                    </a>
                                    
                                    <div class="card-body">
                                      <h5 class="card-title" style="font-size: 17px;">Inspection et Due Diligence</h5>
                                      <p class="card-text" style="font-size: 14px;">Vous aurez l'occasion d'inspecter la propriété et de mener une diligence raisonnable pour vous assurer qu'elle répond à vos attentes.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col horizontal-line">
                                    
                                </div>
                                <div class="col text-center">
                                  <button class="btn btn-primary" id="rond"> 4</button>
                                </div>
                    
                                <div class="col text-center">
                                  <button class="btn btn-primary" id="rond"> 5</button>
                                </div>
                                <div class="col horizontal-line">
                                    
                                </div>
                               
                                <div class="col">
                                  <div class="card h-100 border-0 text-center" style="background: #f6f8fb;">
                                    <a href="" class="mt-4">
                                        <img src="{{asset('front/assets/img/cc/5.jpg')}}" class="img-fluid w-25" alt="...">
                                    </a>
                                    
                                    <div class="card-body">
                                      <h5 class="card-title" style="font-size: 17px;">Clôture </h5>
                                      <p class="card-text" style="font-size: 14px;">Nous vous guiderons tout au long du processus de clôture, y compris la préparation des documents et la signature finale.
                    
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </section>
                        <!-- End Frequently Asked Questions Section -->
                      </div>
                      <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <section id="faq" class="faq">
                          <div class="container">
                             
                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                <div class="col text-center">
                                  <button class="btn btn-primary" id="rond"> 1</button>
                                </div>
                                <div class="col horizontal-line">
                                    
                                </div>
                                <div class="col">
                                  <div class="card h-100 border-0 text-center" style="background: #f6f8fb;">
                                    <a href="" class="mt-4">
                                        <img src="{{asset('front/assets/img/cc/6.png')}}" class="img-fluid w-25" alt="...">
                                    </a>
                                    
                                    <div class="card-body">
                                      <h5 class="card-title" style="font-size: 17px;">Évaluation Gratuite</h5>
                                      <p class="card-text" style="font-size: 14px;">Lors de notre première rencontre, nous discuterons de vos besoins, de votre budget et de vos préférences pour trouver la propriété idéale.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="card h-100 border-0 text-center" style="background: #f6f8fb;">
                                    <a href="" class="mt-4">
                                        <img src="{{asset('front/assets/img/cc/7.png')}}" class="img-fluid w-25" alt="...">
                                    </a>
                                    
                                    <div class="card-body">
                                      <h5 class="card-title" style="font-size: 17px;">Consultation Initiale </h5>
                                      <p class="card-text" style="font-size: 14px;">Nous commercialiserons votre bien de manière efficace pour attirer les acheteurs potentiels.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col horizontal-line">
                                    
                                </div>
                                <div class="col text-center">
                                  <button class="btn btn-primary" id="rond"> 2</button>
                                </div>
                    
                                <div class="col text-center">
                                  <button class="btn btn-primary" id="rond"> 3</button>
                                </div>
                                <div class="col horizontal-line">
                                    
                                </div>
                                <div class="col">
                                    <div class="card h-100 border-0 text-center" style="background: #f6f8fb;">
                                      <a href="" class="mt-4">
                                          <img src="{{asset('front/assets/img/cc/8.png')}}" class="img-fluid w-25" alt="...">
                                      </a>
                                      
                                      <div class="card-body">
                                        <h5 class="card-title" style="font-size: 17px;">Visites et Négociation </h5>
                                        <p class="card-text" style="font-size: 14px;">Nous organiserons des visites pour les acheteurs intéressés et négocierons les meilleures offres en votre nom.</p>
                                      </div>
                                    </div>
                                </div>
                    
                                <div class="col">
                                  <div class="card h-100 border-0 text-center" style="background: #f6f8fb;">
                                    <a href="" class="mt-4">
                                        <img src="{{asset('front/assets/img/cc/9.png')}}" class="img-fluid w-25" alt="...">
                                    </a>
                                    
                                    <div class="card-body">
                                      <h5 class="card-title" style="font-size: 17px;">Contrat et Clôture</h5>
                                      <p class="card-text" style="font-size: 14px;">Une fois que vous avez accepté une offre, nous vous aiderons à traverser le processus de contrat et de clôture.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col horizontal-line">
                                    
                                </div>
                                <div class="col text-center">
                                  <button class="btn btn-primary" id="rond"> 4</button>
                                </div>

                              </div>
                          </div>
                        </section>
                        <!-- End Frequently Asked Questions Section -->
                      </div>
                          
                    
                      <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                        <section id="faq" class="faq">
                          <div class="container">
                             
                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                <div class="col text-center">
                                  <button class="btn btn-primary" id="rond"> 1</button>
                                </div>
                                <div class="col horizontal-line">
                                    
                                </div>
                                <div class="col">
                                  <div class="card h-100 border-0 text-center" style="background: #f6f8fb;">
                                    <a href="" class="mt-4">
                                        <img src="{{asset('front/assets/img/cc/10.png')}}" class="img-fluid w-25" alt="...">
                                    </a>
                                    
                                    <div class="card-body">
                                      <h5 class="card-title" style="font-size: 17px;">Recherche de Location</h5>
                                      <p class="card-text" style="font-size: 14px;">Nous vous aiderons à trouver une location qui correspond à vos besoins et à votre budget.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="card h-100 border-0 text-center" style="background: #f6f8fb;">
                                    <a href="" class="mt-4">
                                        <img src="{{asset('front/assets/img/cc/11.png')}}" class="img-fluid w-25" alt="...">
                                    </a>
                                    
                                    <div class="card-body">
                                      <h5 class="card-title" style="font-size: 17px;">Visites </h5>
                                      <p class="card-text" style="font-size: 14px;">Nous organiserons des visites des propriétés disponibles.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col horizontal-line">
                                    
                                </div>
                                <div class="col text-center">
                                  <button class="btn btn-primary" id="rond"> 2</button>
                                </div>
                    
                                <div class="col text-center">
                                  <button class="btn btn-primary" id="rond"> 3</button>
                                </div>
                                <div class="col horizontal-line">
                                    
                                </div>
                                <div class="col">
                                    <div class="card h-100 border-0 text-center" style="background: #f6f8fb;">
                                      <a href="" class="mt-4">
                                          <img src="{{asset('front/assets/img/cc/12.png')}}" class="img-fluid w-25" alt="...">
                                      </a>
                                      
                                      <div class="card-body">
                                        <h5 class="card-title" style="font-size: 17px;">Contrat de Location</h5>
                                        <p class="card-text" style="font-size: 14px;">Une fois que vous avez choisi une location, nous vous guiderons à travers la rédaction du contrat de location.</p>
                                      </div>
                                    </div>
                                </div>
                    
                                <div class="col">
                                  <div class="card h-100 border-0 text-center" style="background: #f6f8fb;">
                                    <a href="" class="mt-4">
                                        <img src="{{asset('front/assets/img/cc/13.svg')}}" class="img-fluid w-25" alt="...">
                                    </a>
                                    
                                    <div class="card-body">
                                      <h5 class="card-title" style="font-size: 17px;">Emménagement</h5>
                                      <p class="card-text" style="font-size: 14px;">Nous vous accompagnerons dans le processus d'emménagement pour assurer une transition en douceur.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col horizontal-line">
                                    
                                </div>
                                <div class="col text-center">
                                  <button class="btn btn-primary" id="rond"> 4</button>
                                </div>
                    
                                <div class="col text-center">
                                  <button class="btn btn-primary" id="rond"> 5</button>
                                </div>
                                <div class="col horizontal-line">
                                    
                                </div>
                               
                                <div class="col">
                                  <div class="card h-100 border-0 text-center" style="background: #f6f8fb;">
                                    <a href="" class="mt-4">
                                        <img src="{{asset('front/assets/img/cc/5.jpg')}}" class="img-fluid w-25" alt="...">
                                    </a>
                                    
                                    <div class="card-body">
                                      <h5 class="card-title" style="font-size: 17px;">Clôture </h5>
                                      <p class="card-text" style="font-size: 14px;">Nous vous guiderons tout au long du processus de clôture, y compris la préparation des documents et la signature finale.
                    
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </section>
                        <!-- End Frequently Asked Questions Section -->
                        
                         
                      </div>
                      <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
                    </div>
                </div>
                
            </div>
          
        </div>
      </section><!-- End Frequently Asked Questions Section -->

       <!-- End Steps Section -->

     
        <!-- ======= Portfolio Details Section ======= -->
     <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">
          
          <div class="col-lg-12 text-center" style="background: #3097a552; padding: 38px; border-radius: 5px;">
            <p>Nous Sommes Là pour Vous Aider Chez Cocody Immobilier, notre équipe d'experts est à votre disposition pour vous guider à chaque étape de votre parcours immobilier. Si vous avez des questions ou si vous souhaitez en savoir plus sur le processus, n'hésitez pas à nous contacter. Nous sommes là pour vous aider à réaliser vos rêves immobiliers.
              </p>
              <div class="row text-start">
                <div class="col-md-6 mt-4">
                  <img src="{{asset('front/assets/img/contact/3.jpg')}}" alt="" class="img-fluid h-auto" style="border-radius: 5px;">
                </div>
                <div class="col-md-6 mt-4">
                  
                  <form class="row g-3 mt-1 needs-validation" novalidate action="{{ url('add-contact') }}" method="POST" enctype="multipart/form-data" style=" box-shadow: 0 0 30px rgba(214, 215, 216, 0.6); padding: 18px; background: #fff; border-radius: 5px;">
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
        
    </section>
    <!-- End Portfolio Details Section -->
    
@endsection