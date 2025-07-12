@extends('layouts.front')
@section('content')

      <!-- ======= Portfolio Details Section ======= -->
      <section id="portfolio-details" class="portfolio-details" style="margin-top: 80px;">
        <div class="container">
  
          <div class="row g-2">
            <div class="col-lg-6">
                <img src="{{asset('front/assets/img/v/v.jpg')}}" alt="" class="img-fluid w-75" style="border-radius: 5px;">
            </div>
            <div class="col-lg-6">
               <h1 style="font-size: 54px;">Achats & Ventes Immobilières</h1>
               <p class="mt-4">Que vous souhaitiez acheter une nouvelle propriété, vendre votre bien actuel ou investir dans l'immobilier, notre équipe est là pour vous accompagner à chaque étape de votre parcours immobilier. Avec notre expertise et notre réseau, nous simplifions le processus d'achat et de vente pour vous.
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
                    <h1 style="font-size: 20px; font-weight: 700;">Nos Services d'Achats & Ventes  </h1>
                </div>
             </div>
  
         
             <div class="row">
              <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px; border:none ;">
                  <div class="row g-0" style="box-shadow: 5px 5px 10px rgba(0,0,0,.2); border-radius: 5px;">
                    <div class="col-md-4">
                      <img src="{{asset('front/assets/img/v/a.jpg')}}" class="img-fluid rounded-start h-100 w-100" alt="..." style="height: 316px !important;
                      object-fit: cover;">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title" id="conseil_titre">Achats Immobiliers </h5>
                        <p class="card-text mb-4">Que vous cherchiez une maison, un appartement, un terrain ou un bien commercial, nous vous aidons à trouver la propriété qui correspond à vos besoins et à votre budget.</p>
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px; border:none;">
                  <div class="row g-0" style="box-shadow: 5px 5px 10px rgba(0,0,0,.2); border-radius: 5px;">
                    <div class="col-md-4">
                      <img src="{{asset('front/assets/img/v/ve.jpg')}}" class="img-fluid rounded-start h-100 w-100" alt="..." style="height: 316px !important;
                      object-fit: cover;">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title" id="conseil_titre">Ventes Immobilières</h5>
                        <p class="card-text">Si vous souhaitez vendre un bien immobilier, nous proposons des services de marketing efficaces pour maximiser la visibilité de votre propriété et obtenir le meilleur prix.</p>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              {{-- <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px; border:none ;">
                  <div class="row g-0" style="box-shadow: 5px 5px 10px rgba(0,0,0,.2);">
                    <div class="col-md-4">
                      <img src="{{asset('front/assets/img/e/ge.jpg')}}" class="img-fluid rounded-start h-100 w-100" alt="..." style="height: 316px !important;
                      object-fit: cover;">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title" id="conseil_titre"> Gestion Locative</h5>
                        <p class="card-text mb-4">Pour les propriétaires, nous offrons des services de gestion locative complets pour maximiser vos revenus et simplifier la gestion de vos biens.</p>
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div> --}}
              <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px; border:none;">
                  <div class="row g-0" style="box-shadow: 5px 5px 10px rgba(0,0,0,.2); border-radius: 5px;">
                    <div class="col-md-4">
                      <img src="{{asset('front/assets/img/v/ev.jpg')}}" class="img-fluid rounded-start h-100 w-100" alt="..." style="height: 316px !important;
                      object-fit: cover;">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title" id="conseil_titre">Évaluation Gratuite</h5>
                        <p class="card-text">Contactez-nous pour une évaluation gratuite de la valeur de votre bien. Nous vous donnerons une estimation précise pour vous aider à prendre des décisions éclairées.</p>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px; border:none;">
                  <div class="row g-0" style="box-shadow: 5px 5px 10px rgba(0,0,0,.2);border-radius: 5px;">
                    <div class="col-md-4">
                      <img src="{{asset('front/assets/img/v/ge.jpg')}}" class="img-fluid rounded-start h-100 w-100" alt="..." style="height: 316px !important;
                      object-fit: cover;">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title" id="conseil_titre">Gestion des Transactions</h5>
                        <p class="card-text">Nous gérons toutes les étapes de la transaction, y compris la négociation, les contrats, les inspections et la clôture, pour que vous puissiez vous concentrer sur l'essentiel.</p>
                        
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
                <h1 style="font-size: 20px; font-weight: 700;">Pourquoi Choisir Cocody Immobilier pour vos Achats et Ventes Immobilières ?</h1>
            </div>
         </div>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
              <div class="card h-100 border-0 text-center">
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
                <div class="card h-100 border-0 text-center">
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
                <div class="card h-100 border-0 text-center">
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
                <div class="card h-100 border-0 text-center">
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
    </section><!-- End Frequently Asked Questions Section -->

     <!-- ======= Features Section ======= -->
     <section id="features" class="features"  style="margin-top: -30px;">
      <div class="container">
        <div class="row">
          <div class="col-8">
           <div class="section-title">
              <h1 style="font-size: 20px; font-weight: 700;">Quelques  biens immobiliers en vente </h1>
                <p> </p>
              </div>
                 </div>
                 <div class="col-4 text-end">
                   
                 </div>
               </div>
       
               <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 g-4">
                 @if ($vente->count() > 0)  
                   @foreach ($vente as $item)
                    <div class="col">
                      
                       <div class="card h-100">
                        <a href="{{ url('ventes-detail/'.$item->id)}}">
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
                             <div class="col-6" style="border-right: 1px solid;">
                               <p style="    font-size: 14px;
                               font-weight: 600;"><i class='bx bx-money mr-2' style="margin-right: 2px;"></i> {{$item->prix}} FCFA</p>
                             </div>
                             <div class="col-6 text-center">
                               <p style="font-size: 14px;"><a href="{{ url('location-details/'.$item->id)}}"> Voir</a></p>
                             </div>
                           </div>
                         </div>
                       </div>
                    </div>
                   @endforeach
                @else
                   <p>Aucune annonce recente  disponible</p>
                @endif
                
                 
               </div>
       
             </div>
           </section>
           <!-- End Features Section -->
   
     
       <!-- ======= Portfolio Details Section ======= -->
       <section id="portfolio-details" class="portfolio-details">
        <div class="container">
  
          <div class="row gy-4">
            
            <div class="col-lg-12 text-center" style="background: #3097a552; padding: 38px; border-radius: 5px;">
              <p>Prêt à commencer votre aventure immobilière ? Contactez-nous dès aujourd'hui pour discuter de vos projets d'achat ou de vente.
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