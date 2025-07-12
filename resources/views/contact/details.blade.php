@extends('layouts.admin')
 
@section('content')
     
    <div class="row  mb-4 ">
        <div class="col-md-12" style="box-shadow: 1px 0px 9px rgba(0,0,0,.2); border-radius: 10px 10px 0px 0px; background-color: white;">
            <div class="portfolio-info">
              <div class="row" style="background: #3097a5; border-radius: 10px 10px 0px 0px;">
                <h3 id="detai_h3" class="mt-4">Informations du rendez-vous</h3>
              </div>
                <div class="row mt-4">
                  
                  <div class="col-md-4">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong>id</strong> |  {{$rdv->id}}  
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong>Type de services</strong> |  {{$rdv->type}}
                      </p>
                    </div>
                  </div>
                  
                  <div class="col-md-4">
                     
                  </div>
                      
                </div>
                <hr>

                <div class="row">
                  <div class="col-md-4">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong>Nom & prénoms</strong> |  {{$rdv->nom}}
                      </p>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong> Télephone</strong> |  {{$rdv->telephone}}
                      </p>
                    </div>
                  </div>
                </div>
                <hr>

                <div class="row">
                  <div class="col-md-4">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong>Date</strong> |  {{$rdv->date}}
                      </p>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong>Heure</strong> |  {{$rdv->heure}}
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    
                  </div>

                 
                </div>
                <hr>

                <div class="row">
                  <div class="col-md-4">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong> Adresse électronique </strong> |  {{$rdv->email}}
                      </p>
                    </div>
                  </div>

                </div>
                
              </div>
              
        </div>
       
        <div class="col-md-12 mt-4" >
          <div class="row">
            
            <div class="col-md-12" style="box-shadow: 1px 0px 9px rgba(0,0,0,.2); border-radius: 10px 10px 0px 0px;background-color: white;  ">
              <div class="row" style="background: #3097a5; border-radius: 10px 10px 0px 0px;">
                <h3 id="detai_h3" class="mt-4">Commentaire </h3>
              </div>
              <div class="row mt-4">
                
                <div class="col-md-12">
                  <div class="portfolio-description">                 
                    <p style="text-align: justify;">
                   {{$rdv->message}}
                    </p>
                  </div>
                </div>
                 
              </div>
            </div>

          </div>
         
          
        </div>
    </div>

    <div class="row gy-4 "> 
       
        
        <div class="col-md-8 d-flex" style="margin-top: 50px !important;">
            
           
            <form action="{{ url('delete-rdv/'.$rdv->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-primary" type="submit" style="background: red; border-color: red;"> Supprimer </button>
            </form>

            {{-- @if ($rdv->status==1)
            <a href="{{url('/desactiver_bien/'.$rdv->id)}}"
            > <button class="btn btn-success" style=" margin-left: 10px;" > Désactiver </button></a>
            @else

            <a  href="{{url('/activer_bien/'.$rdv->id)}}"
            > <button class="btn btn-success" style=" margin-left: 10px;" > Activer </button></a>
            @endif --}}
  
        </div>

       
       
      
      </div>


     
@endsection