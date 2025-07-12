@extends('layouts.admin')
 
@section('content')
     
    <div class="row  mb-4 ">
        <div class="col-md-12" style="box-shadow: 1px 0px 9px rgba(0,0,0,.2); border-radius: 10px 10px 0px 0px; background-color: white;">
            <div class="portfolio-info">
              <div class="row" style="background: #3097a5; border-radius: 10px 10px 0px 0px;">
                <div class="col-md-6">
                    <h3 id="detai_h3" class="mt-4">Informations sur la visite</h3>
                </div>
                <div class="col-md-6 text-end">
                    <button class="btn btn-success mt-3">{{$visite->status}}</button>
                </div>
               
              </div>
                <div class="row mt-4">
                  
                  <div class="col-md-4">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong>id</strong> |  {{$visite->id}}  
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong>Type</strong> |  {{$visite->type}}
                      </p>
                    </div>
                  </div>
                  
                  <div class="col-md-4">
                    <div class="portfolio-description">                 
                        <p style="text-align: justify;">
                          <strong>Bien</strong> |  {{$visite->bien}}
                        </p>
                      </div>
                  </div>
                      
                </div>
                <hr>

                <div class="row">
                  <div class="col-md-4">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong>Nom</strong> |  {{$visite->nom}}
                      </p>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong> Prénoms</strong> |  {{$visite->prenoms}}
                      </p>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong> Télephone</strong> |  {{$visite->telephone}}
                      </p>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                      <div class="portfolio-description">                 
                        <p style="text-align: justify;">
                          <strong> Adresse électronique </strong> |  {{$visite->email}}
                        </p>
                      </div>
                    </div>

                    <div class="col-md-4">
                        <div class="portfolio-description">                 
                          <p style="text-align: justify;">
                            <strong> Profession</strong> |  {{$visite->profession}}
                          </p>
                        </div>
                      </div>


  
                  </div>
                  <hr>

                <div class="row">
                  <div class="col-md-4">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong>Date</strong> |  {{$visite->date}}
                      </p>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong>Heure</strong> |  {{$visite->heure}}
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    
                  </div>

                 
                </div>
               

               
                
              </div>
              
        </div>
       
        
    </div>

    <div class="row gy-4 "> 
       
        
        <div class="col-md-8 d-flex" style="margin-top: 50px !important;">
            
           
            <form action="{{ url('delete-visite/'.$visite->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-primary" type="submit" style="background: red; border-color: red;"> Supprimer </button>
            </form>

            @if ($visite->status=='En attente')
            <a href="{{url('/activer_visite/'.$visite->id)}}"
            > <button class="btn btn-success" style=" margin-left: 10px;" > Accepter </button></a>
            @else

            <a  href="{{url('/desactiver_visite/'.$visite->id)}}"
            > <button class="btn btn-success" style=" margin-left: 10px;" > Annuler </button></a>
            @endif
  
        </div>

       
       
      
      </div>


     
@endsection