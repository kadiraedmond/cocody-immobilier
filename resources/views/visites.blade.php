@extends('layouts.front')

@section('content')

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="index.html">Details du biens immobilier</a></li>
        <li>Formulaire de visite</li>
      </ol>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="row gy-4" >
        <div class="col-lg-6">
          <div class="portfolio-details-slider swiper" style="height: 600px;">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                @if (is_null($vente->images))
                  
                @else
               
                 <img src="{{ asset('uploads/Vente/'.$vente->images) }}" alt="" style="height: 500px;">
                @endif
              </div>              

              <div class="swiper-slide">
                @if (is_null($vente->imag))
                <img src="{{ asset('uploads/Vente/'.$vente->images) }}" alt="" style="height: 500px;">
                @else        
                 <img src="{{ asset('uploads/Vente/'.$vente->imag) }}" alt="" style="height: 500px;">

                @endif
              </div>
        
              <div class="swiper-slide">
                @if (is_null($vente->im))
                <img src="{{ asset('uploads/Vente/'.$vente->images) }}" alt="" style="height: 500px;">
                @else  
                <img src="{{ asset('uploads/Vente/'.$vente->im) }}" alt="" style="height: 500px;">
                @endif
              </div>
            
      

            

              <div class="swiper-slide">
                @if (is_null($vente->picture))
                <img src="{{ asset('uploads/Vente/'.$vente->images) }}" alt="" style="height: 500px;">
                @else 
                <img src="{{ asset('uploads/Vente/'.$vente->picture) }}" alt="" style="height: 500px;">
                @endif
              </div>

              <div class="swiper-slide">
                @if (is_null($vente->pictur))
                <img src="{{ asset('uploads/Vente/'.$vente->images) }}" alt="" style="height: 500px;">
                @else 
                <img src="{{ asset('uploads/Vente/'.$vente->pictur) }}" alt="" style="height: 500px;">
                @endif

              </div>

              <div class="swiper-slide">
                @if (is_null($vente->pict))
                <img src="{{ asset('uploads/Vente/'.$vente->images) }}" alt="" style="height: 500px;">
                @else 
                <img src="{{ asset('uploads/Vente/'.$vente->pict) }}" alt="" style="height: 500px;">
                @endif
              </div>
            

            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="row row-cols-6" style=" margin-top: -28px;">
            <div class="col-">
              @if (is_null($vente->imag))
              <img src="{{ asset('uploads/Vente/'.$vente->images) }}" alt="" class="img-fluid" style=" border-radius: 20px;">
              @else        
               <img src="{{ asset('uploads/Vente/'.$vente->imag) }}" alt="" class="img-fluid" style=" border-radius: 20px;">

              @endif
               
            </div>
            <div class="col-">
              @if (is_null($vente->ima))
              <img src="{{ asset('uploads/Vente/'.$vente->images) }}" alt="" class="img-fluid" style=" border-radius: 20px;">
              @else        
               <img src="{{ asset('uploads/Vente/'.$vente->ima) }}" alt="" class="img-fluid" style=" border-radius: 20px;">

              @endif
            </div>
            <div class="col-">
              @if (is_null($vente->picture))
              <img src="{{ asset('uploads/Vente/'.$vente->images) }}" alt="" class="img-fluid" style=" border-radius: 20px;">
              @else        
               <img src="{{ asset('uploads/Vente/'.$vente->picture) }}" alt="" class="img-fluid" style=" border-radius: 20px;">

              @endif
            </div>

            <div class="col-">
              @if (is_null($vente->im))
              <img src="{{ asset('uploads/Vente/'.$vente->images) }}" alt="" class="img-fluid" style=" border-radius: 20px;">
              @else        
               <img src="{{ asset('uploads/Vente/'.$vente->im) }}" alt="" class="img-fluid" style=" border-radius: 20px;">

              @endif
            </div>

            <div class="col-">
              @if (is_null($vente->pictur))
              <img src="{{ asset('uploads/Vente/'.$vente->images) }}" alt="" class="img-fluid" style=" border-radius: 20px;">
              @else        
               <img src="{{ asset('uploads/Vente/'.$vente->pictur) }}" alt="" class="img-fluid" style=" border-radius: 20px;">

              @endif
            </div>

            <div class="col-">
              @if (is_null($vente->pict))
              <img src="{{ asset('uploads/Vente/'.$vente->images) }}" alt="" class="img-fluid" style=" border-radius: 20px;">
              @else        
               <img src="{{ asset('uploads/Vente/'.$vente->pict) }}" alt="" class="img-fluid" style=" border-radius: 20px;">

              @endif
            </div>
          </div>
        </div>

        <div class="col-lg-6" style="background: #f6f8fb; padding: 15px; border-radius: 10px;">
          <form class="row g-3" action="{{ url('add-visite') }}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nom</label>
                <input type="text" name="nom" class="form-control" id="inputEmail4">
              </div>
              <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Prénoms</label>
                <input type="text" name="prenoms" class="form-control" id="inputPassword4">
              </div>
              <div class="col-12">
                <label for="inputAddress" class="form-label">Adresse e-mail</label>
                <input type="email" name="email" class="form-control" id="inputAddress">
              </div>
              <div class="col-12">
                <label for="inputAddress2" class="form-label">Téléphone</label>
                <input type="tel" class="form-control" name="telephone" id="inputAddress2">
              </div>
              <div class="col-12">
                <label for="inputAddress2" class="form-label">Profession</label>
                <input type="text" name="profession" class="form-control" id="inputAddress2">
              </div>

              <div class="col-6">
                <label for="inputAddress2" class="form-label">Bien</label>
                <input type="text" name="bien" value="Vente ({{$vente->id}})"  class="form-control" id="inputAddress2" readonly>
              </div>

              <div class="col-6">
                <label for="inputAddress2" class="form-label">Type</label>
                <input type="text" name="type" value="{{$vente->type}}" class="form-control" id="inputAddress2" readonly>
              </div>
              <div class="col-md-12">
                <label for="inputCity" class="form-label">Date de visite</label>
                <input type="date" class="form-control" name="date" id="inputCity">
              </div>
              <div class="col-md-12">
                  <label for="" class="form-label">Heure de visite</label>
                  <input type="time" class="form-control" name="heure" id="inputCity">
                </div>
               
             
              <div class="col-12 mt-4 text-center">
                <button type="submit" class="btn btn-primary w-50" style="background: #3097a5;
                border-color: #3097a5;">Envoyer</button>
              </div>
            </form>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Details Section -->
  
@endsection