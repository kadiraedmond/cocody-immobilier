 @extends('layouts.front')

 @section('content')
         <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Détails du bien immobilier</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="portfolio-info">
              <h3>Informations du biens</h3>
              <ul>
                <li><strong>Type | </strong> {{$location->type}}</li>
                <li><strong>Adresse | </strong>{{$location->adresse}}</li>
                {{-- <li><strong>Quartier | </strong>: Marie Koré</li> --}}
                <li><strong>Prix | </strong> {{$location->prix}} FCFA</li>
                 
              </ul>
            </div>
            <div class="portfolio-description">
              <h3 style="    font-size: 22px;
              font-weight: 700;">Présentation</h3>
              <p style="text-align: justify;">
               {{$location->presentation}}
              </p>
              <a href="{{ url('visite/'.$location->id)}}">
                <button class="btn btn-outline-success mt-3" style="background: #3097a5 !important;
                border-color: #3097a5 !important;
                color: white;">Intéressé</button>
              </a>
             

            </div>
          </div>
          <div class="col-lg-6">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  @if (is_null($location->images))
                    
                  @else
                 
                   <img src="{{ asset('uploads/Location/'.$location->images) }}" alt="">
                  @endif
                </div>              

                <div class="swiper-slide">
                  @if (is_null($location->imag))
                  <img src="{{ asset('uploads/Location/'.$location->images) }}" alt="">
                  @else        
                   <img src="{{ asset('uploads/Location/'.$location->imag) }}" alt="">

                  @endif
                </div>
          
                <div class="swiper-slide">
                  @if (is_null($location->im))
                  <img src="{{ asset('uploads/Location/'.$location->images) }}" alt="">
                  @else  
                  <img src="{{ asset('uploads/Location/'.$location->im) }}" alt="">
                  @endif
                </div>
              
        

              

                <div class="swiper-slide">
                  @if (is_null($location->picture))
                  <img src="{{ asset('uploads/Location/'.$location->images) }}" alt="">
                  @else 
                  <img src="{{ asset('uploads/Location/'.$location->picture) }}" alt="">
                  @endif
                </div>

                <div class="swiper-slide">
                  @if (is_null($location->pictur))
                  <img src="{{ asset('uploads/Location/'.$location->images) }}" alt="">
                  @else 
                  <img src="{{ asset('uploads/Location/'.$location->pictur) }}" alt="">
                  @endif

                </div>

                <div class="swiper-slide">
                  @if (is_null($location->pict))
                  <img src="{{ asset('uploads/Location/'.$location->images) }}" alt="">
                  @else 
                  <img src="{{ asset('uploads/Location/'.$location->pict) }}" alt="">
                  @endif
                </div>
              

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>

        <div class="row gy-4 mb-4" style="margin-top: 30px;">
          

          <div class="col-lg-8" style="    padding: 30px; box-shadow: 0px 0 30px rgba(45, 64, 95, 0.08); border-radius: 15px;">
             <div class="row">
              <div class="col-md-12">
                <div class="row" id="detail_border">
                  <div class="col-md-12 mt-3 mb-3">
                    <h2 class="" style="font-size: 17px;">Descriptions </h2>
                  </div>
                </div>
                
  
                <div class="row">
                  <div class="col-md-4">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong>Configuration </strong>|{{$location->configuration}}
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong>Superficie</strong> | {{$location->superficie}}
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong>Douche</strong> | {{$location->douche}}  
                      </p>
                    </div>
                  </div>
                </div>
                <hr>
  
                <div class="row">
                  <div class="col-md-4">
                    <div class="portfolio-description" style="padding-top: 10px !important;">
                       
                      <p style="text-align: justify;">
                        <strong>Usage</strong> | {{$location->usage}}
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="portfolio-description" style="padding-top: 10px !important;">
                      <p style="text-align: justify;">
                        <strong>Caution</strong> |   {{$location->caution}}
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="portfolio-description" style="padding-top: 10px !important;">
                      <p style="text-align: justify;">
                        <strong>Climatisation</strong> | {{$location->climatisation}}  
                      </p>
                    </div>
                  </div>
                </div>
                <hr>
  
                <div class="row">
                  <div class="col-md-4">
                    <div class="portfolio-description" style="padding-top: 10px !important;">
                       
                      <p style="text-align: justify;">
                        <strong>Niveau</strong> | {{$location->niveau}}
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="portfolio-description" style="padding-top: 10px !important;">
                      <p style="text-align: justify;">
                        <strong>Sécurité</strong> |   {{$location->securite}}
                      </p>
                    </div>
                  </div>
                </div>
              
              </div>
              <div class="col-md-12">
                <div class="row" id="detail_border" style="margin-top: 20px !important;">
                  <div class="col-md-12 mt-3">
                    <h2 style="font-size: 17px;">Commodité </h2>
                  </div>
                </div>
              
                 <div class="row">
                  <div class="col-md-4">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong>Balcon</strong> |  {{$location->balcon}}  
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong>Sonnerie</strong> |  {{$location->sonnerie}}
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong>Alarme incendie</strong> | {{$location->alarme}}
                      </p>
                    </div>
                  </div>
                 </div>
                 <hr>
  
                 <div class="row">
                  <div class="col-md-4">
                    <div class="portfolio-description" style="padding-top: 10px !important;">
                       
                      <p style="text-align: justify;">
                        <strong>Detecteur de fumée </strong> | {{$location->detecteur}}
                      </p>
                    </div>
                  </div>
    
                  <div class="col-md-4">
                    <div class="portfolio-description" style="padding-top: 10px !important;">
                      <p style="text-align: justify;">
                        <strong>Contrôle d'accéés </strong> | @if (is_null($location->controle))
                       Non
                    @else
                        {{ $location->controle }}
                    @endif
                          
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="portfolio-description" style="padding-top: 10px !important;">
                      <p style="text-align: justify;">
                        <strong>Ascenseur</strong> |  {{$location->ascenseur}}
                      </p>
                    </div>
                  </div>
                 </div>
                 <hr>
  
                 <div class="row">
                   <div class="col-md-4">
                    <div class="portfolio-description" style="padding-top: 10px !important;">                 
                      <p style="text-align: justify;">
                        <strong>Groupe électrogène</strong> | {{$location->groupe}}  
                      </p>
                    </div>
                   </div>         
                </div>
              </div>
             </div>
              
          </div>


          

          <div class="col-lg-4" style="background: #3097a5; border-radius: 5px;">
            <div class="row row-cols-1 row-cols-md-1 g-4">
              <div class="col" style="margin-top: 3.5rem!important;">
                <div class="card h-100 text-center" style="margin-top: 1.3rem!important; border-radius: 19px; height: 109% !important;" >
                  <img src="{{ asset('uploads/Location/'.$location->resp_images) }}" class="card-img-top" alt="..." id="detail_img">
                  <div class="card-body" style="margin-top: 3.5rem!important;">
                    <h5 class="card-title">{{$location->nom}} {{$location->prenons}}</h5>
                    <p class="card-text" style="font-size: 12px;">
                      {{$location->telephone}}<br> {{$location->resp_adresse}}
                    </p>
                   
                    <div class="row">
                      <div class="col-md-12">
                        <h2 style="font-size: 17px; font-weight: 600; color: #3097a5;">Ce bien vous intéresse ?</h2>
                        <p style="font-size: 13px;">Contactez vite l'agence pour le visiter !</p>
                      </div>
                      <div class="col-md-12">
                        <a href="{{ url('visite/'.$location->id)}}">
                          <button class="btn btn-primary" style="border-color: #3097a5;
                          background: #3097a5;"> Contactez</button>
                        </a>
                      </div>
                    </div>
                  </div>
                   
                </div>
              </div>
            </div>          
          </div>

        </div>

        <div class="row gy-4 mt-4" style="margin-top: 4.5rem!important;">
          <video controls style="border-radius: 5px;">
            <source src="{{ asset('uploads/Location/'.$location->videos) }}" type="video/mp4">
            
          </video>
            
        </div>

        

        
      </div>
    </section><!-- End Portfolio Details Section -->

     <!-- ======= Features Section ======= -->
     <section id="features" class="features"  style="margin-top: -30px;">
      <div class="container">
        <div class="row">
          <div class="col-8">
            <div class="section-title">
              <h2>Biens similaires</h2>
              <p> </p>
            </div>
          </div>
          <div class="col-4 text-end">
           
          </div>
        </div>

        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 g-4">

         @if ($relative->count()>0)
         @foreach ($relative as $item)
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
                <div class="col-8" style="border-right: 1px solid;">
                  <p style="    font-size: 14px;
                  font-weight: 600;"><i class='bx bx-money mr-2' style="margin-right: 2px;"></i> {{$item->prix}} FCFA</p>
                </div>
                <div class="col-4 text-center">
                  <p style="font-size: 14px;"><a href="{{ url('location-details/'.$item->id)}}"> Voir</a></p>
                </div>
              </div>
            </div>
          </div>
       </div>
         @endforeach
         
        @else
         <p>pas de bien similaire disponible</p>
        @endif
           
        </div>

      </div>
    </section>
    <!-- End Features Section -->
 @endsection