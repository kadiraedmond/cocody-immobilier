@extends('layouts.front')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="index.html">Bien</a></li>
        <li>En vente</li>
      </ol>

    </div>
  </section><!-- End Breadcrumbs -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features"  style="margin-top: -30px;">
        <div class="container">
          <div class="row">
             
            <div class="col-4 text-end">
              
            </div>
          </div>
         
          <div class="row">
            <div class="col-md-3">
             
              <div class="card" style="width: 100%;">
                 
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 17px; font-weight: 600;">les catégories</h5>
                </div>
                <ul class="list-none" style="padding: 0px; text-align: justify;list-style: none; margin: 18px;">
                  <li class="" style=""><div class="row">
                    <div class="col-6"><a href="" id="cat_li">Terrain</a></div>
                     
                   </div></li>
                  <hr style="margin-top: 5px;">
                  <li class="" style="margin-top: -10px;"><div class="row">
                     <div class="col-6"><a href="" id="cat_li">Appartement</a></div>
                    
                    </div></li>
                  <hr style="margin-top: 5px;">
                  <li class="" style="margin-top: -10px;"><div class="row">
                    <div class="col-6"><a href="" id="cat_li">Studio</a></div>
                     
                   </div></li>
                  <hr style="margin-top: 5px;">
                  <li class="" style="margin-top: -10px;"><div class="row">
                    <div class="col-6"><a href="" id="cat_li">Bureaux</a></div>
                     
                   </div></li>
                  <hr style="margin-top: 5px;">
                  <li class="" style="margin-top: -10px;"><div class="row">
                    <div class="col-6"><a href="" id="cat_li">Maison</a></div>
                     
                   </div></li>
                  <hr style="margin-top: 5px;">
                  <li class="" style="margin-top: -10px;"><div class="row">
                    <div class="col-6"><a href="" id="cat_li">Villa</a></div>
                    
                   </div></li>
                  <hr style="margin-top: 5px;">
                  <li class="" style="margin-top: -10px;"><div class="row">
                    <div class="col-6"><a href="" id="cat_li">Immeuble</a></div>
                    
                   </div></li>
                  <hr style="margin-top: 5px;">
                  <li class="" style="margin-top: -10px;"><div class="row">
                    <div class="col-6"><a href="" id="cat_li">Magasin</a></div>
                     
                   </div></li>
                  <hr style="margin-top: 5px;">
                  <li class="" style="margin-top: -10px;"><div class="row">
                    <div class="col-6"><a href="" id="cat_li">Entrepôts</a></div>
                     
                   </div></li>
                  <hr style="margin-top: 5px;">
                </ul>
                
              </div>
            </div>
            <div class="col-md-9">
              <div class="row" style="background: #f1f3ff; padding: 20px; border-radius: 5px;">
                <div class="col-md-12">
                  <form class="row g-3 needs-validation" method="post" action="{{ url('filtrers') }}">
                    @csrf
                    <div class="col-md-3">
                      
                      <select id="defaultSelect" name="type" class="form-select">
                        <option></option>
                        <option value="Terrain">Terrain</option>
                        <option value="Appartement">Appartement</option>
                        <option value="Studio">Studio</option>
                        <option value="Bureaux">Bureaux</option>
                        <option value="Maison">Maison</option>
                        <option value="Villa">Villa</option>
                        <option value="Immeuble">Immeuble</option>
                        <option value="Magazin">Magazin</option>
                        <option value="Entrepôt">Entrepôts</option>
                      </select>
                      
                    </div>
                    <div class="col-md-3">
                       
                      <input type="text" name="adresse" class="form-control" id="validationCustom02" placeholder="Adresse">
                    
                    </div>
                    <div class="col-md-3">
                      
                        <input type="text" name="prix" class="form-control" id="validationCustomUsername" placeholder="Prix" aria-describedby="inputGroupPrepend">
                         
                    </div>
                   
                    <div class="col-3">
                      <div class="row g-1">
                        <div class="col-md-6">
                          <button class="btn btn-primary" type="submit" style="background: #3097a5; border-color: #3097a5;">Valider</button>
                        </div>
                        <div class="col-md-6">
                          <a href="{{ url('reinitialisers') }}">
                            <button class="btn btn-primary" style="background: red; border-color: red;">Réinitialiser</button>
                          </a>
                         
                        </div>
                      </div>
                      
                    </div>
                  </form>
                 
                </div>
              </div>
    
              <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 mt-4 g-4">
                @if ($vente->count() > 0)  
                  @foreach ($vente as $item)
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
                  <p>Aucun bien disponible</p>
               @endif
               
                
              </div>
            </div>
          </div>
  
         
  
        </div>
      </section>
      <!-- End Features Section -->
    
@endsection