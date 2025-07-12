@extends('layouts.admin')

@section('content')
@can('Administrateur')
@if (session('status'))
<h6 class="alert alert-success">{{ session('status') }}</h6>
@endif
<div class="row">
  <div class="col-lg-2">
    <a href="{{ url('add-blog')}}">
        <button class="btn btn-primary mb-2" style="border-radius: 10px; width: 100%; height: 60px;font-size: 17px;"> Ajouter</button>
    </a>
    
  </div>
  <div class="col-lg-10" style=" background:linear-gradient(90deg, #ffffff 0%, rgb(48 151 165) 100%);border-radius: 10px; height: 60px; ">
    <div class="row g-1">
      <div class="col-3">
        <div class="row g-1">
          <div class="col-6">
            <h4 style="font-size: 17px; margin-top:19px">Tous</h4>
          </div>
          <div class="col-6">
             <button class="btn btn-primary" id="btn-dash">{{$all}}</button>
          </div>
        </div>

      </div>
      <div class="col-3">
        <div class="row g-1">
          <div class="col-7">
            <h4 style="font-size: 17px; margin-top:19px">Construction</h4>
          </div>
          <div class="col-5">
             <button class="btn btn-primary" id="btn-dash">{{$cons}}</button>
          </div>
        </div>
                            
      </div>
      <div class="col-3">
        <div class="row g-1">
          <div class="col-6">
            <h4 style="font-size: 17px; margin-top:19px">Conseils</h4>
          </div>
          <div class="col-6">
             <button class="btn btn-primary" id="btn-dash">{{$conse}}</button>
          </div>
        </div>                       
        
      </div> 

      <div class="col-3">
        <div class="row g-1">
          <div class="col-7">
            <h4 style="font-size: 17px; margin-top:19px">Location-vente</h4>
          </div>
          <div class="col-5">
             <button class="btn btn-primary" id="btn-dash">{{$loc}}</button>
          </div>
        </div>                       
        
      </div> 
     

    </div>
  </div>
</div>
  

  <div class="row mt-5 mb-5" style="background-image:linear-gradient(180deg, #3097a5 0%, rgb(48 151 165) 100%);border-radius: 10px;">
    <div class="col-lg-3 text-center mt-5 mb-5">
      <img src="{{asset('admin/assets/img/Blog.png')}}" alt="" class="img-fluid w-70">
    </div>
      <div class="col-lg-9 mt-5 mb-5">
        <p style="font-size: 18px; color:white">Publiez des articles afin que les utilisateurs du site de Cocody-immobilier.com puissent explorez le blog dédié à l'immobilier pour obtenir des informations précieuses sur les tendances du marché, les conseils d'achat et de vente, et bien plus encore. Restez informé et prenez des décisions éclairées</p>
      </div>
  </div>
  <div class="row mt-5" style="border-radius: 10px; background-color:#3097a514;">
    <div class="col-xl-12">
      <h6 class="text-muted"></h6>
      <div class="card mb-2" style="border-radius: 10px; background-color: white;">
               
        <div class="table-responsive text-nowrap">
          <table class="table table-hover">
            <thead>
              <tr>
                <th><strong>Id</strong></th>
                <th><strong>Titre</strong></th>
                <th><strong>Catégorie</strong></th>
                
                <th><strong>Action</strong></th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach ($Blog as $item)
              <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->titre}}</td>
                <td>{{$item->categorie}}</td>
              
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ url('detail-blog/'.$item->id) }}"
                        ><i class="bx bx-edit-alt me-1"></i> Voir</a
                      >
                       
                      <a class="dropdown-item" href="{{ url('edit-blog/'.$item->id) }}"
                        ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                      >
                      
                      <form action="{{ url('delete-blog/'.$item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"  class="dropdown-item"> <i class="bx bx-trash me-1"></i>Supprimer</button>
                    </form>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
              
              
            </tbody>
          </table>
        </div>
        </div>
    </div>
  </div>
  @endcan

  @can('Gestionnaire')
  @if (session('status'))
  <h6 class="alert alert-success">{{ session('status') }}</h6>
@endif
  <div class="row">
    <div class="col-lg-2">
      <a href="{{ url('add-blog')}}">
          <button class="btn btn-primary mb-2" style="border-radius: 10px; width: 100%; height: 60px;font-size: 17px;"> Ajouter</button>
      </a>
      
    </div>
    <div class="col-lg-10" style=" background:linear-gradient(90deg, #ffffff 0%, rgb(48 151 165) 100%);border-radius: 10px; height: 60px; ">
      <div class="row g-1">
        <div class="col-3">
          <div class="row g-1">
            <div class="col-6">
              <h4 style="font-size: 17px; margin-top:19px">Tous</h4>
            </div>
            <div class="col-6">
              <button class="btn btn-primary" id="btn-dash">{{$all}}</button>
            </div>
          </div>

        </div>
        <div class="col-3">
          <div class="row g-1">
            <div class="col-7">
              <h4 style="font-size: 17px; margin-top:19px">Construction</h4>
            </div>
            <div class="col-5">
              <button class="btn btn-primary" id="btn-dash">{{$cons}}</button>
            </div>
          </div>
                              
        </div>
        <div class="col-3">
          <div class="row g-1">
            <div class="col-6">
              <h4 style="font-size: 17px; margin-top:19px">Conseils</h4>
            </div>
            <div class="col-6">
              <button class="btn btn-primary" id="btn-dash">{{$conse}}</button>
            </div>
          </div>                       
          
        </div> 

        <div class="col-3">
          <div class="row g-1">
            <div class="col-7">
              <h4 style="font-size: 17px; margin-top:19px">Location-vente</h4>
            </div>
            <div class="col-5">
              <button class="btn btn-primary" id="btn-dash">{{$loc}}</button>
            </div>
          </div>                       
          
        </div> 
      

      </div>
    </div>
  </div>
    

    <div class="row mt-5 mb-5" style="background-image:linear-gradient(180deg, #3097a5 0%, rgb(48 151 165) 100%);border-radius: 10px;">
      <div class="col-lg-3 text-center mt-5 mb-5">
        <img src="{{asset('admin/assets/img/Blog.png')}}" alt="" class="img-fluid w-70">
      </div>
        <div class="col-lg-9 mt-5 mb-5">
          <p style="font-size: 18px; color:white">Publiez des articles afin que les utilisateurs du site de Cocody-immobilier.com puissent explorez le blog dédié à l'immobilier pour obtenir des informations précieuses sur les tendances du marché, les conseils d'achat et de vente, et bien plus encore. Restez informé et prenez des décisions éclairées</p>
        </div>
    </div>
    <div class="row mt-5" style="border-radius: 10px; background-color:#3097a514;">
      <div class="col-xl-12">
        <h6 class="text-muted"></h6>
        <div class="card mb-2" style="border-radius: 10px; background-color: white;">
                
          <div class="table-responsive text-nowrap">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th><strong>Id</strong></th>
                  <th><strong>Titre</strong></th>
                  <th><strong>Catégorie</strong></th>
                  
                  <th><strong>Action</strong></th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                @foreach ($Blog as $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->titre}}</td>
                  
                  <td>{{$item->message}}</td>
                  <td>
                    <div class="dropdown">
                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">

                        <a class="dropdown-item" href="{{ url('detail-blog/'.$item->id) }}"
                          ><i class="bx bx-edit-alt me-1"></i> Voir</a
                        >
                        
                        <a class="dropdown-item" href="{{ url('edit-blog/'.$item->id) }}"
                          ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                        >
                        
                      </div>
                    </div>
                  </td>
                </tr>
                @endforeach
                
                
              </tbody>
            </table>
          </div>
          </div>
      </div>
    </div>
  @endcan

  @can('Gérant')
  @if (session('status'))
  <h6 class="alert alert-success">{{ session('status') }}</h6>
@endif
  <div class="row">
    <div class="col-lg-2">
      <a href="{{ url('add-blog')}}">
          <button class="btn btn-primary mb-2" style="border-radius: 10px; width: 100%; height: 60px;font-size: 17px;"> Ajouter</button>
      </a>
      
    </div>
    <div class="col-lg-10" style=" background:linear-gradient(90deg, #ffffff 0%, rgb(48 151 165) 100%);border-radius: 10px; height: 60px; ">
      <div class="row g-1">
        <div class="col-3">
          <div class="row g-1">
            <div class="col-6">
              <h4 style="font-size: 17px; margin-top:19px">Tous</h4>
            </div>
            <div class="col-6">
              <button class="btn btn-primary" id="btn-dash">{{$all}}</button>
            </div>
          </div>

        </div>
        <div class="col-3">
          <div class="row g-1">
            <div class="col-7">
              <h4 style="font-size: 17px; margin-top:19px">Construction</h4>
            </div>
            <div class="col-5">
              <button class="btn btn-primary" id="btn-dash">{{$cons}}</button>
            </div>
          </div>
                              
        </div>
        <div class="col-3">
          <div class="row g-1">
            <div class="col-6">
              <h4 style="font-size: 17px; margin-top:19px">Conseils</h4>
            </div>
            <div class="col-6">
              <button class="btn btn-primary" id="btn-dash">{{$conse}}</button>
            </div>
          </div>                       
          
        </div> 

        <div class="col-3">
          <div class="row g-1">
            <div class="col-7">
              <h4 style="font-size: 17px; margin-top:19px">Location-vente</h4>
            </div>
            <div class="col-5">
              <button class="btn btn-primary" id="btn-dash">{{$loc}}</button>
            </div>
          </div>                       
          
        </div> 
      

      </div>
    </div>
  </div>
    

    <div class="row mt-5 mb-5" style="background-image:linear-gradient(180deg, #3097a5 0%, rgb(48 151 165) 100%);border-radius: 10px;">
      <div class="col-lg-3 text-center mt-5 mb-5">
        <img src="{{asset('admin/assets/img/Blog.png')}}" alt="" class="img-fluid w-70">
      </div>
        <div class="col-lg-9 mt-5 mb-5">
          <p style="font-size: 18px; color:white">Publiez des articles afin que les utilisateurs du site de Cocody-immobilier.com puissent explorez le blog dédié à l'immobilier pour obtenir des informations précieuses sur les tendances du marché, les conseils d'achat et de vente, et bien plus encore. Restez informé et prenez des décisions éclairées</p>
        </div>
    </div>
    <div class="row mt-5" style="border-radius: 10px; background-color:#3097a514;">
      <div class="col-xl-12">
        <h6 class="text-muted"></h6>
        <div class="card mb-2" style="border-radius: 10px; background-color: white;">
                
          <div class="table-responsive text-nowrap">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th><strong>Id</strong></th>
                  <th><strong>Titre</strong></th>
                  <th><strong>Catégorie</strong></th>
                  <th><strong>Extrait</strong></th>
                  <th><strong>Message</strong></th>
                  <th><strong>Action</strong></th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                @foreach ($Blog as $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->titre}}</td>
                  <td>{{$item->categorie}}</td>
                  <td>{{$item->extrait}}</td>
                  <td>{{$item->message}}</td>
                  <td>
                    <div class="dropdown">
                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('detail-blog/'.$item->id) }}"
                          ><i class="bx bx-edit-alt me-1"></i> Voir</a
                        >
                        
                        <a class="dropdown-item" href="{{ url('edit-blog/'.$item->id) }}"
                          ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                        >
                        
                      </div>
                    </div>
                  </td>
                </tr>
                @endforeach
                
                
              </tbody>
            </table>
          </div>
          </div>
      </div>
    </div>
  @endcan

@endsection