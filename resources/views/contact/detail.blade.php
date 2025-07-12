@extends('layouts.admin')
 
@section('content')
     
    <div class="row  mb-4 ">
        <div class="col-md-12" style="box-shadow: 1px 0px 9px rgba(0,0,0,.2); border-radius: 10px 10px 0px 0px;  background-color: white;">
            <div class="portfolio-info">
              <div class="row" style="background: #3097a5; border-radius: 10px 10px 0px 0px;">
                <h3 id="detai_h3" class="mt-4">Informations du contact</h3>
              </div>
                <div class="row mt-4">
                  
                  <div class="col-md-4">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong>id</strong> |  {{$Contact->id}}  
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong>Date</strong> |  {{$Contact->created_at}}
                      </p>
                    </div>
                  </div>
                  
                  <div class="col-md-4">
                     
                    
                  </div>
                  <div class="col-md-12">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong>Nom</strong> |  {{$Contact->nom}}
                      </p>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong>Prénoms</strong> |  {{$Contact->prenoms}}
                      </p>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="portfolio-description">                 
                      <p style="text-align: justify;">
                        <strong> Adresse électronique </strong> |  {{$Contact->email}}
                      </p>
                    </div>
                  </div>
                   
                </div>
                
              </div>
              
        </div>
       
        <div class="col-md-12 mt-4" >
          <div class="row">
            <div class="col-md-5" style="box-shadow: 1px 0px 9px rgba(0,0,0,.2); border-radius: 10px 10px 0px 0px; background-color: white; width: 48%;">
              <div class="row" style="background: #3097a5; border-radius: 10px 10px 0px 0px;">
                <h3 id="detai_h3" class="mt-4">Sujet</h3>
              </div>
              <div class="row mt-4">
               
                <div class="col-md-12">
                  <div class="portfolio-description">                 
                    <p style="text-align: justify;">
                    {{$Contact->Objet}}
                    </p>
                  </div>
                </div>
                 
              </div>
            </div>

            <div class="col-md-2" style="width: 2%;"></div>

            <div class="col-md-5" style="box-shadow: 1px 0px 9px rgba(0,0,0,.2); border-radius: 10px 10px 0px 0px; background-color: white; width: 49%;">
              <div class="row" style="background: #3097a5; border-radius: 10px 10px 0px 0px;">
                <h3 id="detai_h3" class="mt-4">Message</h3>
              </div>
              <div class="row mt-4">
                 
                <div class="col-md-12">
                  <div class="portfolio-description">                 
                    <p style="text-align: justify;">
                   {{$Contact->message}}
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
            
           
            <form action="{{ url('delete-Contact/'.$Contact->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-primary" type="submit" style="background: red; border-color: red; margin-left: 10px;"> Supprimer </button>
            </form>

            {{-- @if ($Contact->status==1)
            <a href="{{url('/desactiver_bien/'.$Contact->id)}}"
            > <button class="btn btn-success" style=" margin-left: 10px;" > Désactiver </button></a>
            @else

            <a  href="{{url('/activer_bien/'.$Contact->id)}}"
            > <button class="btn btn-success" style=" margin-left: 10px;" > Activer </button></a>
            @endif --}}
  
        </div>

       
       
      
      </div>


     
@endsection