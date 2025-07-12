@extends('layouts.front')

@section('content')
<section id="portfolio-details" class="portfolio-details">
    <div class="bg-dark text-secondary px-4 py-5 text-center"  style="background: url('front/assets/img/categorie/terrain.jpg') !important; height: 400px;"> 
        <div class="py-5" style="margin-top: 80px;">
          <h1 class="display-6 fw-bold text-white" >Bureaux</h1>
           
        </div>
      </div>
</section>

<section id="faq" class="faq" style="    background: #ffffff;
margin-top: -44px">
    <div class="container">
        <nav>
            <div class="nav nav-tabs border-0" id="nav-tab" role="tablist" style="justify-content: center;">
              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true" style="border-radius: 10px 0px 0px 10px;">Tous</button>
              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" style="border-radius: 0px 0px 0px 0px;">En vente</button>
              <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false" style="border-radius: 0px 10px 10px 0px;">En location</button>
               
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <div class="container">
                     
                    <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 g-4 mt-4">
                      @if ($all->count() > 0)  
                        @foreach ($all as $item)
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
                                    <p style="font-size: 14px;"><a href="{{ url('location-detail/'.$item->id)}}"> Voir</a></p>
                                  </div>
                                </div>
                              </div>
                            </div>
                         </div>
                        @endforeach
                     @else
                        <p>Aucun bien disponible</p>
                     @endif
                     
                      
                    </div>
            
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                <div class="container">
                    
            
                    <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 g-4 mt-4">
                     @if ($vente->count() > 0)
                        @foreach ($vente as $item)
                        <div class="col">
                            <div class="card h-100">
                              <a href="{{ url('vente-details/'.$item->id)}}">
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
                                    <p style="font-size: 14px;"><a href="{{ url('vente-details/'.$item->id)}}"> Voir</a></p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>         
                        @endforeach
                     @else
                        <p>Aucun bien disponible</p>
                    @endif
                     
                    </div>
            
                  </div>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                <div class="container">
                     
                    <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 g-4 mt-4">
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
                                    <p style="font-size: 14px;"><a href="{{ url('location-detail/'.$item->id)}}"> Voir</a></p>
                                  </div>
                                </div>
                              </div>
                            </div>
                         </div>
                        @endforeach
                     @else
                        <p>Aucun bien disponible</p>
                     @endif
                     
                      
                    </div>
            
                </div>
            </div>
 
          </div>
    </div>
</section>
@endsection

