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
               <li><strong>Type | </strong> {{$vente->type}}</li>
               <li><strong>Adresse | </strong>{{$vente->adresse}}</li>
               {{-- <li><strong>Quartier | </strong>: Marie Koré</li> --}}
               <li><strong>Prix | </strong> {{$vente->prix}} FCFA</li>
                
             </ul>
           </div>
           <div class="portfolio-description">
             <h3 style="    font-size: 22px;
             font-weight: 700;">Présentation</h3>
             <p style="text-align: justify;">
              {{$vente->presentation}}
             </p>
             <a href="{{ url('visite/'.$vente->id)}}">
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
                 @if (is_null($vente->images))
                   
                 @else
                
                  <img src="{{ asset('uploads/Vente/'.$vente->images) }}" alt="">
                 @endif
               </div>              

               <div class="swiper-slide">
                 @if (is_null($vente->imag))
                 <img src="{{ asset('uploads/Vente/'.$vente->images) }}" alt="">
                 @else        
                  <img src="{{ asset('uploads/Vente/'.$vente->imag) }}" alt="">

                 @endif
               </div>
         
               <div class="swiper-slide">
                 @if (is_null($vente->im))
                 <img src="{{ asset('uploads/Vente/'.$vente->images) }}" alt="">
                 @else  
                 <img src="{{ asset('uploads/Vente/'.$vente->im) }}" alt="">
                 @endif
               </div>
             
       

             

               <div class="swiper-slide">
                 @if (is_null($vente->picture))
                 <img src="{{ asset('uploads/Vente/'.$vente->images) }}" alt="">
                 @else 
                 <img src="{{ asset('uploads/Vente/'.$vente->picture) }}" alt="">
                 @endif
               </div>

               <div class="swiper-slide">
                 @if (is_null($vente->pictur))
                 <img src="{{ asset('uploads/Vente/'.$vente->images) }}" alt="">
                 @else 
                 <img src="{{ asset('uploads/Vente/'.$vente->pictur) }}" alt="">
                 @endif

               </div>

               <div class="swiper-slide">
                 @if (is_null($vente->pict))
                 <img src="{{ asset('uploads/Vente/'.$vente->images) }}" alt="">
                 @else 
                 <img src="{{ asset('uploads/Vente/'.$vente->pict) }}" alt="">
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
               <div class="row h-25" id="detail_border">
                 <div class="col-md-12 mt-3 mb-3">
                   <h2 class="" style="font-size: 17px;">Descriptions </h2>
                 </div>
               </div>
               
 
               <div class="row">
                 <div class="col-md-4">
                   <div class="portfolio-description">                 
                     <p style="text-align: justify;">
                       <strong>Configuration </strong>|{{$vente->configuration}}
                     </p>
                   </div>
                 </div>
                 <div class="col-md-4">
                   <div class="portfolio-description">                 
                     <p style="text-align: justify;">
                       <strong>Superficie</strong> | {{$vente->superficie}}
                     </p>
                   </div>
                 </div>
                 <div class="col-md-4">
                   <div class="portfolio-description">                 
                     <p style="text-align: justify;">
                       <strong>Douche</strong> | {{$vente->douche}}  
                     </p>
                   </div>
                 </div>
               </div>
               <hr>
 
               <div class="row">
                <div class="col-md-4">
                  <div class="portfolio-description" style="padding-top: 10px !important;">
                     
                    <p style="text-align: justify;">
                      <strong>Niveau</strong> | {{$vente->niveau}}
                    </p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="portfolio-description" style="padding-top: 10px !important;">
                    <p style="text-align: justify;">
                      <strong>Sécurité</strong> |   {{$vente->securite}}
                    </p>
                  </div>
                </div>
                 <div class="col-md-4">
                   <div class="portfolio-description" style="padding-top: 10px !important;">
                     <p style="text-align: justify;">
                       <strong>Climatisation</strong> | {{$vente->climatisation}}  
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
                       <strong>Balcon</strong> |  {{$vente->balcon}}  
                     </p>
                   </div>
                 </div>
                 <div class="col-md-4">
                   <div class="portfolio-description">                 
                     <p style="text-align: justify;">
                       <strong>Sonnerie</strong> |  {{$vente->sonnerie}}
                     </p>
                   </div>
                 </div>
                 <div class="col-md-4">
                   <div class="portfolio-description">                 
                     <p style="text-align: justify;">
                       <strong>Alarme incendie</strong> | {{$vente->alarme}}
                     </p>
                   </div>
                 </div>
                </div>
                <hr>
 
                <div class="row">
                 <div class="col-md-4">
                   <div class="portfolio-description" style="padding-top: 10px !important;">
                      
                     <p style="text-align: justify;">
                       <strong>Detecteur de fumée </strong> | {{$vente->detecteur}}
                     </p>
                   </div>
                 </div>
   
                 <div class="col-md-4">
                   <div class="portfolio-description" style="padding-top: 10px !important;">
                     <p style="text-align: justify;">
                       <strong>Contrôle d'accéés </strong> | @if (is_null($vente->controle))
                      Non
                   @else
                       {{ $vente->controle }}
                   @endif
                         
                     </p>
                   </div>
                 </div>
                 <div class="col-md-4">
                   <div class="portfolio-description" style="padding-top: 10px !important;">
                     <p style="text-align: justify;">
                       <strong>Ascenseur</strong> |  {{$vente->ascenseur}}
                     </p>
                   </div>
                 </div>
                </div>
                <hr>
 
                <div class="row">
                  <div class="col-md-4">
                   <div class="portfolio-description" style="padding-top: 10px !important;">                 
                     <p style="text-align: justify;">
                       <strong>Groupe électrogène</strong> | {{$vente->groupe}}  
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
                 <img src="{{ asset('uploads/vente/'.$vente->resp_images) }}" class="card-img-top" alt="..." id="detail_img">
                 <div class="card-body" style="margin-top: 3.5rem!important;">
                   <h5 class="card-title">{{$vente->nom}} {{$vente->prenons}}</h5>
                   <p class="card-text" style="font-size: 12px;">
                     {{$vente->telephone}}<br> {{$vente->resp_adresse}}
                   </p>
                  
                   <div class="row">
                     <div class="col-md-12">
                       <h2 style="font-size: 17px; font-weight: 600; color: #3097a5;">Ce bien vous intéresse ?</h2>
                       <p style="font-size: 13px;">Contactez vite l'agence pour le visiter !</p>
                     </div>
                     <div class="col-md-12">
                       <a href="{{ url('visitess/'.$vente->id)}}">
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
           <source src="{{ asset('uploads/Vente/'.$vente->videos) }}" type="video/mp4">
           
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
          <a href="{{ url('vente-detail/'.$item->id)}}">
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
               <div class="col-8" style="border-right: 1px solid;">
                 <p style="    font-size: 14px;
                 font-weight: 600;"><i class='bx bx-money mr-2' style="margin-right: 2px;"></i> {{$item->prix}} FCFA</p>
               </div>
               <div class="col-4 text-center">
                 <p style="font-size: 14px;"><a href="{{ url('vente-details/'.$item->id)}}"> Voir</a></p>
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