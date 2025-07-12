@extends('layouts.front')
@section('content')

      <!-- ======= Portfolio Details Section ======= -->
      <section id="portfolio-details" class="portfolio-details" style="margin-top: 80px;">
        <div class="container">
  
          <div class="row g-2">
            <div class="col-lg-6">
                <img src="{{asset('front/assets/img/l/ge.jpg')}}" alt="" class="img-fluid w-75" style="border-radius: 5px">
            </div>
            <div class="col-lg-6">
               <h1 style="font-size: 54px;">Location Immobilière</h1>
               <p class="mt-4">Si vous êtes à la recherche de la maison parfaite, de l'appartement idéal ou d'un espace commercial à louer, vous êtes au bon endroit. Notre équipe dévouée est prête à vous aider à trouver la location qui correspond à vos besoins, que ce soit pour résider ou pour investir.
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
                    <h1 style="font-size: 20px; font-weight: 700;">Nos services de location immobilière </h1>
                </div>
             </div>
  
             <div class="row">
              <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px; border:none ;">
                  <div class="row g-0" style="box-shadow: 5px 5px 10px rgba(0,0,0,.2); border-radius: 5px !important;">
                    <div class="col-md-4">
                      <img src="{{asset('front/assets/img/l/re.jpg')}}" class="img-fluid rounded-start h-100 w-100" alt="..." style="height: 316px !important;
                      object-fit: cover;">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title" id="conseil_titre"> Recherche de Location</h5>
                        <p class="card-text mb-4">Notre vaste portefeuille de biens immobiliers en location vous offre un large éventail d'options. Nous vous aidons à trouver la location qui répond à vos critères.</p>
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px; border:none;">
                  <div class="row g-0" style="box-shadow: 5px 5px 10px rgba(0,0,0,.2); border-radius: 5px !important;">
                    <div class="col-md-4">
                      <img src="{{asset('front/assets/img/l/ge.jpg')}}" class="img-fluid rounded-start h-100 w-100" alt="..." style="height: 316px !important;
                      object-fit: cover;">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title" id="conseil_titre">Gestion Locative</h5>
                        <p class="card-text">Si vous êtes propriétaire et que vous cherchez à louer votre bien, nous proposons des services de gestion locative complets pour simplifier le processus et maximiser vos revenus.</p>
                        
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
                  <div class="row g-0" style="box-shadow: 5px 5px 10px rgba(0,0,0,.2); border-radius: 5px !important;">
                    <div class="col-md-4">
                      <img src="{{asset('front/assets/img/l/co.jpg')}}" class="img-fluid rounded-start h-100 w-100" alt="..." style="height: 316px !important;
                      object-fit: cover;">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title" id="conseil_titre">Contrats de Location</h5>
                        <p class="card-text">Nous vous guidons à travers la rédaction et la négociation des contrats de location, veillant à protéger vos intérêts en tant que locataire ou propriétaire.</p>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px; border:none;">
                  <div class="row g-0" style="box-shadow: 5px 5px 10px rgba(0,0,0,.2); border-radius: 5px !important;">
                    <div class="col-md-4">
                      <img src="{{asset('front/assets/img/l/se.jpg')}}" class="img-fluid rounded-start h-100 w-100" alt="..." style="height: 316px !important;
                      object-fit: cover;">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title" id="conseil_titre">Service Clientèle</h5>
                        <p class="card-text">Notre équipe est disponible pour répondre à vos questions, gérer les problèmes liés à la location et assurer un service client de haute qualité.</p>
                        
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
                <h1 style="font-size: 20px; font-weight: 700;">Pourquoi choisir cocody immobilier pour vos locations immobilières ?</h1>
            </div>
         </div>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
              <div class="card h-100 border-0 text-center">
                <a href="" class="mt-4">
                    <img src="{{asset('front/assets/img/l/1.png')}}" class="img-fluid w-25" alt="...">
                </a>
                
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 17px;">Large Portefeuille de Biens </h5>
                  <p class="card-text" style="font-size: 14px;">Nous avons un vaste choix de biens immobiliers disponibles à la location, allant des appartements aux maisons en passant par les espaces commerciaux.</p>
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card h-100 border-0 text-center">
                  <a href="" class="mt-4">
                      <img src="{{asset('front/assets/img/l/2.png')}}" class="img-fluid w-25" alt="...">
                  </a>
                  
                  <div class="card-body">
                    <h5 class="card-title" style="font-size: 17px;">Connaissance du Marché Local  </h5>
                    <p class="card-text" style="font-size: 14px;">En tant qu'experts locaux, nous comprenons le marché de la location dans la région et pouvons vous guider vers les meilleures opportunités.</p>
                  </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 border-0 text-center">
                  <a href="" class="mt-4">
                      <img src="{{asset('front/assets/img/l/3.png')}}" class="img-fluid w-25" alt="...">
                  </a>
                  
                  <div class="card-body">
                    <h5 class="card-title" style="font-size: 17px;">Processus Simplifié  </h5>
                    <p class="card-text" style="font-size: 14px;">Nous simplifions le processus de location, de la recherche initiale à la signature du contrat, pour que vous puissiez emménager en toute tranquillité.</p>
                  </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 border-0 text-center">
                  <a href="" class="mt-4">
                      <img src="{{asset('front/assets/img/l/4.png')}}" class="img-fluid w-25" alt="...">
                  </a>
                  
                  <div class="card-body">
                    <h5 class="card-title" style="font-size: 17px;">Service Personnalisé </h5>
                    <p class="card-text" style="font-size: 14px;">Nous nous engageons à comprendre vos besoins spécifiques et à vous fournir des solutions sur mesure.</p>
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
                 <h1 style="font-size: 20px; font-weight: 700;">Quelques biens immobiliers à Louer </h1>
                   <p> </p>
                 </div>
                    </div>
                    <div class="col-4 text-end">
                      
                    </div>
                  </div>
          
                  <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 g-4">
                    @if ($location->count() > 0)  
                      @foreach ($location as $item)
                       <div class="col">
                         
                          <div class="card h-100">
                           <a href="{{ url('location-detail/'.$item->id)}}">
                              <img src="{{ asset('uploads/Location/'.$item->images) }}" class="card-img-top" alt="..." style="height: 173px; object-fit: cover;">
                           </a>                
                            <div class="card-body">
                              <h5 class="card-title" id="produit_titre">{{$item->type}}</h5>
                              <p class="card-text" id="produit_p"><i class='bx bx-map' ></i> {{$item->adresse}}</p>
                              <div class="d-flex" style="gap: 6px; ">
                                <div class="">
                                  <button class="btn btn-primary" id="produit_btn">{{$item->superficie}}</button>
                                </div>
                                <div class="">
                                  <button class="btn btn-primary" id="produit_btn">{{$item->usage}}</button>
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
            <p>Si vous êtes prêt à trouver la location parfaite ou si vous cherchez à louer votre propriété, contactez-nous dès aujourd'hui. Notre équipe est là pour vous aider.
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