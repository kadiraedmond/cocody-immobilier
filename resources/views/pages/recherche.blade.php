@extends('layouts.front')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="index.html">Bien</a></li>
        <li>Recherche</li>
      </ol>

    </div>
  </section><!-- End Breadcrumbs -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features"  style="margin-top: -30px;">
        <div class="container">
          <div class="row">
            <div class="col-8">
              <div class="section-title">
                <h2>Résultat de votre recherche</h2>
                <p> </p>
              </div>
            </div>
            <div class="col-4 text-end">
              
            </div>
          </div>
  
          <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 g-4">
            @if ($locations == $ventes->count() > 0)  
              @foreach ($locations as $item)
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
         
           @foreach ($ventes as $item)
            <div class="col">
              
               <div class="card h-100">
                <a href="{{ url('location-detail/'.$item->id)}}">
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
                       <p style="font-size: 14px;"><a href="{{ url('vente-detail/'.$item->id)}}"> Voir</a></p>
                     </div>
                   </div>
                 </div>
               </div>
            </div>
           @endforeach
        @else
        <p>Aucun bien  disponible a votre recherche</p>
        @endif
           
            
          </div>
  
        </div>
      </section>
      <!-- End Features Section -->
    
@endsection