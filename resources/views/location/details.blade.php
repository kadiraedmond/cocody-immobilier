@extends('layouts.admin')
 
@section('content')
    <div class="row">
      <div class="col-md-12" style="box-shadow: 1px 0px 9px rgba(0,0,0,.2); border-radius: 10px 10px 0px 0px; ">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="margin-left: -13px; margin-right: -13px; border-radius: 10px 10px 0px 0px;">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    @if (is_null($location->images))
                    
                    @else
                    <img src="{{ asset('uploads/Location/'.$location->images) }}" class="d-block img-fluid w-100 h-25" style="max-height: 400px !important; -webkit-mask-size: cover; border-radius: 10px ;" alt="...">
                   @endif
                  </div>
                  <div class="carousel-item">
                    @if (is_null($location->picture))
                    <img src="{{ asset('uploads/Location/'.$location->images) }}" class="d-block img-fluid w-100 h-25" style="max-height: 400px !important; -webkit-mask-size: cover; border-radius: 10px ;" alt="...">
                    @else
                    <img src="{{ asset('uploads/Location/'.$location->picture) }}" class="d-block w-100" alt="..." style="height: 400px !important; -webkit-mask-size: cover; border-radius: 10px ;">
                  @endif
                  </div>
                  <div class="carousel-item">
                    @if (is_null($location->pict))
                    <img src="{{ asset('uploads/Location/'.$location->images) }}" class="d-block img-fluid w-100 h-25" style="max-height: 400px !important; -webkit-mask-size: cover; border-radius: 10px ;" alt="...">
                    @else
                    <img src="{{ asset('uploads/Location/'.$location->pict) }}" class="d-block w-100" alt="..." style="height: 400px !important; -webkit-mask-size: cover; border-radius: 10px ;">
                    @endif
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" style="display: none">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" style="display: none">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
      </div>
    </div>

    <div class="row  mb-4 mt-5">
        <div class="col-md-12" style="box-shadow: 1px 0px 9px rgba(0,0,0,.2); border-radius: 10px 10px 0px 0px; background-color: white;">
            <div class="portfolio-info">
                <div class="row" style="background: #3097a5; border-radius: 10px 10px 0px 0px;">
                  <h3 id="detai_h3" class="mt-4">Informations du biens</h3>
                </div>

                <div class="row mt-4">
                  
                  <div class="col-md-4">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong>Type</strong> |  {{$location->type}}  
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong>Adresse</strong> |  {{$location->adresse}}
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong>Prix</strong> | {{$location->prix}}
                      </p>
                    </div>
                  </div>       
                </div>
                <hr>

                <div class="row">
                  <div class="col-md-12 mt-4">
                    <div class="portfolio-description">
                      <h2 style="font-size: 17px; font-weight: 700;">Présentations </h2>
                      <p style="text-align: justify;" id="detai_p">
                       {{$location->presentation}}
                      </p>
                      {{-- <a href="Visite.html">
                        <button class="btn btn-outline-success mt-3" style="background: #3097a5 !important;
                        border-color: #3097a5 !important;
                        color: white;">Intéressé</button>
                      </a> --}}
                     
        
                    </div>
                  </div>
                </div>
                
              </div>
              
        </div>
       
        <div class="col-md-12 mt-4" style=" box-shadow: 1px 0px 9px rgba(0,0,0,.2); border-radius: 10px 10px 0px 0px; background-color: white;">
          <div class="row" style="background: #3097a5; border-radius: 10px 10px 0px 0px;">
            <h3 id="detai_h3" class="mt-4">Description</h3>
          </div>
          <div class="row mt-4">
           
            <div class="col-md-4">
              <div class="portfolio-description">                 
                <p style="text-align: justify;">
               <strong>Configuration</strong> | {{$location->configuration}}
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
         
        </div>

        <div class="col-md-12 mt-4" style=" box-shadow: 1px 0px 9px rgba(0,0,0,.2); border-radius: 10px 10px 0px 0px; background-color: white;">
          <div class="row" style="background: #3097a5; border-radius: 10px 10px 0px 0px;">
            <h3 id="detai_h3" class="mt-4">Commodité</h3>
          </div>
          
          <div class="row mt-4">
            
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
          
          
        </div>
    </div>

    <div class="row gy-4 "> 
        <div class="col-md-4">
            <div class="row row-cols-1 row-cols-md-1 g-4">
                <div class="col" style="">
                  <div class="card h-100 text-center" style=" border-radius: 19px; margin-top: 77px; ">
                    <img src="{{ asset('uploads/location/'.$location->resp_images) }}" class="card-img-top" alt="..." id="detail_img">
                    <div class="card-body" style="margin-top: 3.5rem!important; min-height: 145px !important;">
                      <h5 class="card-title">{{$location->nom}} {{$location->prenons}}</h5>
                      <p class="card-text" style="font-size: 12px;">
                        {{$location->telephone}}<br> {{$location->resp_adresse}}
                      </p>
                     
                      
                    </div>
                     
                  </div>
                </div>
              </div>        
        </div>
        <div class="col-md-8">
          <div class="row gy-4 mt-2" style="">
           
                <video controls style="border-radius: 20px;" class="w-100">
                    <source src="{{ asset('uploads/location/'.$location->videos) }}" type="video/mp4">
                    
                  </video>
           </div>
        </div> 
        
        <div class="col-md-8 d-flex" style="margin-top: 50px !important;">
            <a href="{{ url('edit-location/'.$location->id) }}">
              <button class="btn btn-primary"> Modifier </button>
            </a>
           
            <form action="{{ url('delete-location/'.$location->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-primary" type="submit" style="background: red; border-color: red; margin-left: 10px;"> Supprimer </button>
            </form>

            @if ($location->status==1)
            <a href="{{url('/desactiver_bien/'.$location->id)}}"
            > <button class="btn btn-success" style=" margin-left: 10px;" > Désactiver </button></a>
            @else

            <a  href="{{url('/activer_bien/'.$location->id)}}"
            > <button class="btn btn-success" style=" margin-left: 10px;" > Activer </button></a>
            @endif
  
        </div>

       
       
      
      </div>


     
@endsection