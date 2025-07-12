@extends('layouts.front')

@section('content')

 <!-- ======= Portfolio Details Section ======= -->
 <section id="portfolio-details" class="portfolio-details" style="margin-top: 80px;">
    <div class="container">

      <div class="row g-2">
        <div class="col-lg-6">
            <img src="{{asset('front/assets/img/blo.jpg')}}" alt="" class="img-fluid w-75" style="border-radius: 5px">
        </div>
        <div class="col-lg-6">
           <h1 style="font-size: 54px;">
            Explorez nos articles immobiliers  </h1>
           <p class="mt-4">Notre objectif est de vous offrir des articles de qualité qui vous tiendront informé(e), stimulé(e) et engagé(e). Que vous soyez un novice cherchant à en savoir plus sur immobilier ou un expert à la recherche de nouvelles perspectives, vous trouverez quelque chose ici qui éveillera votre curiosité.
           </p>
        </div>
      </div>    
    </div>
  </section>
  <!-- End Portfolio Details Section -->

 <!-- ======= Features Section ======= -->
 <section id="features" class="features"  style="margin-top: -30px;">
  <div class="container">

    <div class="row">
      <div class="col-6">
        
      </div>
      <div class="col-6 text-end">
        
      </div>
    </div>

    <div class="row row-cols-1 row-cols-md-4 g-4">
      @if ($blog->count() > 0)
       @foreach ($blog as $item)
          
       <div class="col">
              <div class="card h-100 border-0" style="box-shadow: 5px 5px 10px rgba(0,0,0,.2);">
                <img src="{{ asset('uploads/Blog/'.$item->images) }}" class="card-img-top" alt="..." style=" height: 237px; object-fit: cover;">
                <div class="card-body">
                  <div class="row" id="blog_row">
                    <div class="col-md-12">
                      <h5 class="card-title" id="blog_title">{{$item->titre}}</h5>
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="col-md-8">
                      <h5 class="" style="font-size: 15px;"> <i class='bx bxs-circle mr-2' style="margin-right: 2px;"></i> {{$item->created_at}}</h5>
                    </div>
                    <div class="col-md-4">
                      {{-- <h5 class="" style="font-size: 15px;"> <i class='bx bx-radio-circle-marked mr-2' style="margin-right: 2px;"></i> Publié par joe</h5> --}}
                    </div>
                  </div>
                  
                  <p class="card-text" style="font-size: 13px;">{{ Str::limit($item->extrait, 100) }}</p>
                  <div class="row">
                    <div class="col-md-6">
                      <a href="{{ url('blog-details/'.$item->id)}}">
                        <button class="btn btn-primary" style=" background-color: #3097a5 !important;border: none;"> Voir plus</button>
                      </a>
                     
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
       @endforeach
      @else
        <p>Aucune nouvelle disponible</p>
    @endif
      
    </div>
   

     
  </div>
</section>
<!-- End Features Section -->
    
@endsection