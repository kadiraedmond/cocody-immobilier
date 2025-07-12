@extends('layouts.admin')
 
@section('content')
    <div class="row gy-4">
      <div class="col-md-12" style="box-shadow: 1px 0px 9px rgba(0,0,0,.2); border-radius: 10px 10px 0px 0px; ">
 
            <div id="carouselExampleControls" class="" data-bs-ride="carousel" style="margin-left: -13px; margin-right: -13px; border-radius: 10px 10px 0px 0px;">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('uploads/Blog/'.$Blog->images) }}" class="d-block img-fluid w-100 h-25" style="max-height: 400px !important; object-fit: cover; border-radius: 10px;" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('uploads/Blog/'.$Blog->images) }}" class="d-block w-100" alt="..." style="height: 400px !important; object-fit: cover; border-radius: 10px;">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('uploads/Blog/'.$Blog->images) }}" class="d-block w-100" alt="..." style="height: 400px !important ; object-fit: cover; border-radius: 10px;">
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
                <h3 id="detai_h3" class="mt-4">Informations de l'article</h3>
              </div>
                <div class="row mt-4">
                  
                  <div class="col-md-4">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong>Titre</strong> |  {{$Blog->titre}}  
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong>Categorie</strong> |  {{$Blog->categorie}}
                      </p>
                    </div>
                  </div>
                
                </div>
                <hr>
                <div class="row">
                    
                  <div class="col-md-12 mt-4">
                    <div class="portfolio-description">
                      <h2 style="font-size: 17px; font-weight: 700;">Extrait </h2>
                      <p style="text-align: justify;" id="detai_p">
                       {{$Blog->extrait}}
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
       
        <div class="col-md-12 mt-4" style="box-shadow: 1px 0px 9px rgba(0,0,0,.2); border-radius: 10px 10px 0px 0px; background-color: white;">
          <div class="row" style="background: #3097a5; border-radius: 10px 10px 0px 0px;">
            <h3 id="detai_h3" class="mt-4">Contenu</h3>
          </div>
          <div class="row mt-4">
            
            <div class="col-md-12">
              <div class="portfolio-description">                 
                <p style="text-align: justify;">
             {!!$Blog->message!!}
                </p>
              </div>
            </div>
             
          </div>
          
        </div>
    </div>

    <div class="row gy-4 "> 
       
        
        <div class="col-md-8 d-flex" style="margin-top: 50px !important;">
            <a href="{{ url('edit-blog/'.$Blog->id) }}">
              <button class="btn btn-primary"> Modifier </button>
            </a>
           
            <form action="{{ url('delete-blog/'.$Blog->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-primary" type="submit" style="background: red; border-color: red; margin-left: 10px;"> Supprimer </button>
            </form>

            {{-- @if ($Blog->status==1)
            <a href="{{url('/desactiver_bien/'.$Blog->id)}}"
            > <button class="btn btn-success" style=" margin-left: 10px;" > Désactiver </button></a>
            @else

            <a  href="{{url('/activer_bien/'.$Blog->id)}}"
            > <button class="btn btn-success" style=" margin-left: 10px;" > Activer </button></a>
            @endif --}}
  
        </div>

       
       
      
      </div>


     
@endsection