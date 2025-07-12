@extends('layouts.admin')

@section('content')
@can('Administrateur')
@if (session('status'))
<h6 class="alert alert-success">{{ session('status') }}</h6>
@endif
<div class="row">
  <div class="col-lg-2">
    <a href="{{ url('add-location')}}">
        <button class="btn btn-primary mb-2" style="border-radius: 10px; width: 90%; height: 60px;font-size: 17px;"> Ajouter</button>
    </a>
    
  </div>
  <div class="col-lg-10" style=" background:linear-gradient(90deg, #ffffff 0%, rgb(48 151 165) 100%);border-radius: 10px; height: 60px; ">
    <div class="row g-1">
      <div class="col-4">
        <div class="row g-1">
          <div class="col-6">
            <h4 style="font-size: 17px; margin-top:19px">Tous</h4>
          </div>
          <div class="col-6">
             <button class="btn btn-primary" id="btn-dash">{{$Locatio}}</button>
          </div>
        </div>

      </div>
      <div class="col-4">
        <div class="row g-1">
          <div class="col-6">
            <h4 style="font-size: 17px; margin-top:19px">Disponibles</h4>
          </div>
          <div class="col-6">
             <button class="btn btn-primary" id="btn-dash">{{$disp}}</button>
          </div>
        </div>
                            
      </div>
      <div class="col-4">
        <div class="row g-1">
          <div class="col-6">
            <h4 style="font-size: 17px; margin-top:19px">Occupés</h4>
          </div>
          <div class="col-6">
             <button class="btn btn-primary" id="btn-dash">{{$occ}}</button>
          </div>
        </div>                       
        
      </div>
     

    </div>
  </div>
</div>


<div class="row mt-5 mb-5" style="background-image:linear-gradient(180deg, #3097a5 0%, rgb(48 151 165) 100%);border-radius: 10px;">
  <div class="col-lg-3 text-center mt-5 mb-5">
    <img src="{{asset('admin/assets/img/location.png')}}" alt="" class="img-fluid w-50">
  </div>
    <div class="col-lg-9 mt-5 mb-5">
      <p style="font-size: 18px; color:white">Optimisez la rentabilité de tous vos précieux biens en locations en les mettant en location sur le site web, grâce à un module entièrement conçu pour vous offrir une expérience de location exceptionnelle, le tout enveloppé dans un design époustouflant !</p>
    </div>
</div>

<div class="row mt-5" style="border-radius: 10px; background-color:#3097a514;">
  <div class="col-xl-12">
    <h6 class="text-muted"></h6>
    <div class="nav-align-top mb-4">
      <ul class="nav nav-pills mb-3 nav-fill" role="tablist" style="border-bottom: 1px solid;">
        <li class="nav-item">
          <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-home" aria-controls="navs-pills-justified-home" aria-selected="true">
            Tous    
          </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-profile" aria-controls="navs-pills-justified-profile" aria-selected="false">
            Terrain
          </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-message" aria-controls="navs-pills-justified-message" aria-selected="false">
             Immeuble
          </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-mess"  aria-controls="navs-pills-justified-mess" aria-selected="false">
            Villa
          </button>
        </li>
        <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-appart" aria-controls="navs-pills-justified-appart" aria-selected="false">
               Apparrtement
            </button>
        </li>
        <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-stud"  aria-controls="navs-pills-justified-stud" aria-selected="false">
              Studio
            </button>
        </li>
        <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-bur" aria-controls="navs-pills-justified-bur" aria-selected="false">
               Bureau
            </button>
        </li>
        <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-mag"  aria-controls="navs-pills-justified-mag" aria-selected="false">
              Magazin
            </button>
        </li>
        <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-entre"  aria-controls="navs-pills-justified-entre" aria-selected="false">
              Entrepôt
            </button>
        </li>
      </ul>
      <div class="tab-content" style="box-shadow: none; background-color: #3097a514;">
        <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
          <!-- Hoverable Table rows -->
          <div class="card mb-2" style="border-radius: 10px; background-color: white;">
             
            <div class="table-responsive text-nowrap">
              @if ($Location->count()> 0)
              <table class="table table-hover">
               
                <thead>
                  <tr>
                    <th><strong>Code</strong></th>
                    <th><strong>Présentation</strong></th>
                    <th><strong>Type</strong></th>
                    
                    <th><strong>Configuration</strong></th>
                    <th><strong>Usage</strong></th>
                    <th><strong>Prix</strong></th>
                    <th><strong>Adresse</strong></th>
                    <th><strong>action</strong></th>
                  </tr>
                </thead>
             
                <tbody class="table-border-bottom-0">
                 
                   @foreach ($Location as $item)
                   <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->presentation}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->configuration}}</td>
                    <td>{{$item->usage}}</td>
                    <td>{{$item->prix}}</td>
                    <td>{{$item->adresse}}</td>
                  
                    <td>
                      
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('location-details/'.$item->id)}}"
                            ><i class="bx bx-edit-alt me-1"></i> Voir</a
                          >
                          <a class="dropdown-item" href="{{ url('edit-location/'.$item->id) }}"
                            ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                          >
                          <form action="{{ url('delete-location/'.$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="dropdown-item" type="submit"
                            ><i class="bx bx-trash me-1"></i>Supprimer</button
                          >
                          </form>
                         
                          @if ($item->status==1)
                            <a class="dropdown-item" href="{{url('/desactiver_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Désactiver</a>
                          @else

                          <a class="dropdown-item" href="{{url('/activer_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Activer</a>
                            @endif
                        </div>
                      </div>
                    </td>
                  </tr>
                   @endforeach
                 

                  
                </tbody>
               
              </table>
              @else
              <p>Aucun bien disponible</p>
            @endif
            </div>
          </div>
          <!--/ Hoverable Table rows -->
        </div>
        <div class="tab-pane fade" id="navs-pills-justified-profile" role="tabpanel">
          <!-- Hoverable Table rows -->
          <div class="card mb-2" style="border-radius: 10px; background-color: #f5f5f9;">
             
            <div class="table-responsive text-nowrap">
              @if ($terrain->count()> 0)
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th><strong>Code</strong></th>
                    <th><strong>Présentation</strong></th>
                    <th><strong>Type</strong></th>
                    
                    <th><strong>Configuration</strong></th>
                    <th><strong>Usage</strong></th>
                    <th><strong>Prix</strong></th>
                    <th><strong>Adresse</strong></th>
                    <th><strong>action</strong></th>
                  </tr>
                </thead>
              
                <tbody class="table-border-bottom-0">
                 
                   @foreach ($terrain as $item)
                   <tr>
                    <td>1</td>
                    <td>{{$item->presentation}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->configuration}}</td>
                    <td>{{$item->usage}}</td>
                    <td>{{$item->prix}}</td>
                    <td>{{$item->adresse}}</td>
                     
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('location-details/'.$item->id)}}"
                            ><i class="bx bx-edit-alt me-1"></i> Voir</a
                          >
                          <a class="dropdown-item" href="{{ url('edit-location/'.$item->id) }}"
                            ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                          >
                          <form action="{{ url('delete-location/'.$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="dropdown-item" type="submit"
                            ><i class="bx bx-trash me-1"></i>Supprimer</button
                          >
                          </form>
                         
                          @if ($item->status==1)
                            <a class="dropdown-item" href="{{url('/desactiver_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Désactiver</a>
                          @else

                          <a class="dropdown-item" href="{{url('/activer_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Activer</a>
                            @endif
                        </div>
                      </div>
                    </td>
                  </tr>
                   @endforeach

                  
                </tbody>
               
              </table>
              @else
              <p>Aucun terrain disponible</p>
            @endif
            </div>
          </div>
          <!--/ Hoverable Table rows -->
        </div>
        <div class="tab-pane fade" id="navs-pills-justified-message" role="tabpanel">
         <!-- Hoverable Table rows -->
         <div class="card mb-2" style="border-radius: 10px; background-color: #f5f5f9;">
             
          <div class="table-responsive text-nowrap">
            @if ($immeuble->count()> 0)
            <table class="table table-hover">
              <thead>
                <tr>
                  <th><strong>Code</strong></th>
                  <th><strong>Présentation</strong></th>
                  <th><strong>Type</strong></th>
                  
                  <th><strong>Configuration</strong></th>
                  <th><strong>Usage</strong></th>
                  <th><strong>Prix</strong></th>
                  <th><strong>Adresse</strong></th>
                  <th><strong>action</strong></th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
               
                 @foreach ($immeuble as $item)
                 <tr>
                  <td>1</td>
                  <td>{{$item->presentation}}</td>
                  <td>{{$item->type}}</td>
                  <td>{{$item->configuration}}</td>
                  <td>{{$item->usage}}</td>
                  <td>{{$item->prix}}</td>
                  <td>{{$item->adresse}}</td>
                   
                  <td>
                    <div class="dropdown">
                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('location-details/'.$item->id)}}"
                          ><i class="bx bx-edit-alt me-1"></i> Voir</a
                        >
                        <a class="dropdown-item" href="{{ url('edit-location/'.$item->id) }}"
                          ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                        >
                        <form action="{{ url('delete-location/'.$item->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button class="dropdown-item" type="submit"
                          ><i class="bx bx-trash me-1"></i>Supprimer</button
                        >
                        </form>
                       
                        @if ($item->status==1)
                          <a class="dropdown-item" href="{{url('/desactiver_bien/'.$item->id)}}"
                          ><i class="bx bx-trash me-1"></i>Désactiver</a>
                        @else

                        <a class="dropdown-item" href="{{url('/activer_bien/'.$item->id)}}"
                          ><i class="bx bx-trash me-1"></i>Activer</a>
                          @endif
                      </div>
                    </div>
                  </td>
                </tr>
                 @endforeach
              

                
              </tbody>
            </table>
            @else
            <p>Aucun bien disponible</p>
          @endif
          </div>
        </div>
        <!--/ Hoverable Table rows -->
        </div>
        <div class="tab-pane fade" id="navs-pills-justified-mess" role="tabpanel">
          <!-- Hoverable Table rows -->
          <div class="card mb-2" style="border-radius: 10px; background-color: #f5f5f9;">
            <div class="table-responsive text-nowrap">
              @if ($villa->count()> 0)
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th><strong>Code</strong></th>
                    <th><strong>Présentation</strong></th>
                    <th><strong>Type</strong></th>
                    
                    <th><strong>Configuration</strong></th>
                    <th><strong>Usage</strong></th>
                    <th><strong>Prix</strong></th>
                    <th><strong>Adresse</strong></th>
                    <th><strong>action</strong></th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                 
                   @foreach ($villa as $item)
                   <tr>
                    <td>1</td>
                    <td>{{$item->presentation}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->configuration}}</td>
                    <td>{{$item->usage}}</td>
                    <td>{{$item->prix}}</td>
                    <td>{{$item->adresse}}</td>
                     
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('location-details/'.$item->id)}}"
                            ><i class="bx bx-edit-alt me-1"></i> Voir</a
                          >
                          <a class="dropdown-item" href="{{ url('edit-location/'.$item->id) }}"
                            ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                          >
                          <form action="{{ url('delete-location/'.$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="dropdown-item" type="submit"
                            ><i class="bx bx-trash me-1"></i>Supprimer</button
                          >
                          </form>
                         
                          @if ($item->status==1)
                            <a class="dropdown-item" href="{{url('/desactiver_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Désactiver</a>
                          @else

                          <a class="dropdown-item" href="{{url('/activer_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Activer</a>
                            @endif
                        </div>
                      </div>
                    </td>
                  </tr>
                   @endforeach
                

                  
                </tbody>
              </table>
              @else
              <p>Aucun bien disponible</p>
            @endif
            </div>
         </div>
         <!--/ Hoverable Table rows -->
         </div>

         <div class="tab-pane fade" id="navs-pills-justified-appart" role="tabpanel">
          <!-- Hoverable Table rows -->
          <div class="card mb-2" style="border-radius: 10px; background-color: #f5f5f9;">
            <div class="table-responsive text-nowrap">
              @if ($appartement->count()> 0)
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th><strong>Code</strong></th>
                    <th><strong>Présentation</strong></th>
                    <th><strong>Type</strong></th>
                    
                    <th><strong>Configuration</strong></th>
                    <th><strong>Usage</strong></th>
                    <th><strong>Prix</strong></th>
                    <th><strong>Adresse</strong></th>
                    <th><strong>action</strong></th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                 
                   @foreach ($appartement as $item)
                   <tr>
                    <td>1</td>
                    <td>{{$item->presentation}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->configuration}}</td>
                    <td>{{$item->usage}}</td>
                    <td>{{$item->prix}}</td>
                    <td>{{$item->adresse}}</td>
                     
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('location-details/'.$item->id)}}"
                            ><i class="bx bx-edit-alt me-1"></i> Voir</a
                          >
                          <a class="dropdown-item" href="{{ url('edit-location/'.$item->id) }}"
                            ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                          >
                          <form action="{{ url('delete-location/'.$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="dropdown-item" type="submit"
                            ><i class="bx bx-trash me-1"></i>Supprimer</button
                          >
                          </form>
                         
                          @if ($item->status==1)
                            <a class="dropdown-item" href="{{url('/desactiver_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Désactiver</a>
                          @else

                          <a class="dropdown-item" href="{{url('/activer_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Activer</a>
                            @endif
                        </div>
                      </div>
                    </td>
                  </tr>
                   @endforeach
                

                  
                </tbody>
              </table>
              @else
              <p>Aucun bien disponible</p>
            @endif
            </div>
         </div>
         <!--/ Hoverable Table rows -->
         </div>

         <div class="tab-pane fade" id="navs-pills-justified-stud" role="tabpanel">
          <!-- Hoverable Table rows -->
          <div class="card mb-2" style="border-radius: 10px; background-color: #f5f5f9;">
            <div class="table-responsive text-nowrap">
              @if ($studio->count()> 0)
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th><strong>Code</strong></th>
                    <th><strong>Présentation</strong></th>
                    <th><strong>Type</strong></th>
                    
                    <th><strong>Configuration</strong></th>
                    <th><strong>Usage</strong></th>
                    <th><strong>Prix</strong></th>
                    <th><strong>Adresse</strong></th>
                    <th><strong>action</strong></th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                 
                   @foreach ($studio as $item)
                   <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->presentation}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->configuration}}</td>
                    <td>{{$item->usage}}</td>
                    <td>{{$item->prix}}</td>
                    <td>{{$item->adresse}}</td>
                     
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('location-details/'.$item->id)}}"
                            ><i class="bx bx-edit-alt me-1"></i> Voir</a
                          >
                          <a class="dropdown-item" href="{{ url('edit-location/'.$item->id) }}"
                            ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                          >
                          <form action="{{ url('delete-location/'.$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="dropdown-item" type="submit"
                            ><i class="bx bx-trash me-1"></i>Supprimer</button
                          >
                          </form>
                         
                          @if ($item->status==1)
                            <a class="dropdown-item" href="{{url('/desactiver_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Désactiver</a>
                          @else

                          <a class="dropdown-item" href="{{url('/activer_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Activer</a>
                            @endif
                        </div>
                      </div>
                    </td>
                  </tr>
                   @endforeach
                

                  
                </tbody>
              </table>
              @else
              <p>Aucun bien disponible</p>
            @endif
            </div>
         </div>
         <!--/ Hoverable Table rows -->
         </div>

         
         <div class="tab-pane fade" id="navs-pills-justified-bur" role="tabpanel">
          <!-- Hoverable Table rows -->
          <div class="card mb-2" style="border-radius: 10px; background-color: #f5f5f9;">
            <div class="table-responsive text-nowrap">
              @if ($bureaux->count()> 0)
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th><strong>Code</strong></th>
                    <th><strong>Présentation</strong></th>
                    <th><strong>Type</strong></th>
                    
                    <th><strong>Configuration</strong></th>
                    <th><strong>Usage</strong></th>
                    <th><strong>Prix</strong></th>
                    <th><strong>Adresse</strong></th>
                    <th><strong>action</strong></th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                 
                   @foreach ($bureaux as $item)
                   <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->presentation}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->configuration}}</td>
                    <td>{{$item->usage}}</td>
                    <td>{{$item->prix}}</td>
                    <td>{{$item->adresse}}</td>
                     
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('location-details/'.$item->id)}}"
                            ><i class="bx bx-edit-alt me-1"></i> Voir</a
                          >
                          <a class="dropdown-item" href="{{ url('edit-location/'.$item->id) }}"
                            ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                          >
                          <form action="{{ url('delete-location/'.$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="dropdown-item" type="submit"
                            ><i class="bx bx-trash me-1"></i>Supprimer</button
                          >
                          </form>
                         
                          @if ($item->status==1)
                            <a class="dropdown-item" href="{{url('/desactiver_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Désactiver</a>
                          @else

                          <a class="dropdown-item" href="{{url('/activer_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Activer</a>
                            @endif
                        </div>
                      </div>
                    </td>
                  </tr>
                   @endforeach
                

                  
                </tbody>
              </table>
              @else
              <p>Aucun bien disponible</p>
            @endif
            </div>
         </div>
         <!--/ Hoverable Table rows -->
         </div>

         <div class="tab-pane fade" id="navs-pills-justified-mag" role="tabpanel">
          <!-- Hoverable Table rows -->
          <div class="card mb-2" style="border-radius: 10px; background-color: #f5f5f9;">
            <div class="table-responsive text-nowrap">
              @if ($magazin->count()> 0)
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th><strong>Code</strong></th>
                    <th><strong>Présentation</strong></th>
                    <th><strong>Type</strong></th>
                    
                    <th><strong>Configuration</strong></th>
                    <th><strong>Usage</strong></th>
                    <th><strong>Prix</strong></th>
                    <th><strong>Adresse</strong></th>
                    <th><strong>action</strong></th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                 
                   @foreach ($magazin as $item)
                   <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->presentation}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->configuration}}</td>
                    <td>{{$item->usage}}</td>
                    <td>{{$item->prix}}</td>
                    <td>{{$item->adresse}}</td>
                     
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('location-details/'.$item->id)}}"
                            ><i class="bx bx-edit-alt me-1"></i> Voir</a
                          >
                          <a class="dropdown-item" href="{{ url('edit-location/'.$item->id) }}"
                            ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                          >
                          <form action="{{ url('delete-location/'.$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="dropdown-item" type="submit"
                            ><i class="bx bx-trash me-1"></i>Supprimer</button
                          >
                          </form>
                         
                          @if ($item->status==1)
                            <a class="dropdown-item" href="{{url('/desactiver_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Désactiver</a>
                          @else

                          <a class="dropdown-item" href="{{url('/activer_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Activer</a>
                            @endif
                        </div>
                      </div>
                    </td>
                  </tr>
                   @endforeach
                

                  
                </tbody>
              </table>
              @else
              <p>Aucun bien disponible</p>
            @endif
            </div>
         </div>
         <!--/ Hoverable Table rows -->
         </div>

         <div class="tab-pane fade" id="navs-pills-justified-entre" role="tabpanel">
          <!-- Hoverable Table rows -->
          <div class="card mb-2" style="border-radius: 10px; background-color: #f5f5f9;">
            <div class="table-responsive text-nowrap">
              @if ($entrepot->count()> 0)
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th><strong>Code</strong></th>
                    <th><strong>Présentation</strong></th>
                    <th><strong>Type</strong></th>
                    
                    <th><strong>Configuration</strong></th>
                    <th><strong>Usage</strong></th>
                    <th><strong>Prix</strong></th>
                    <th><strong>Adresse</strong></th>
                    <th><strong>action</strong></th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                 
                   @foreach ($entrepot as $item)
                   <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->presentation}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->configuration}}</td>
                    <td>{{$item->usage}}</td>
                    <td>{{$item->prix}}</td>
                    <td>{{$item->adresse}}</td>
                     
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('location-details/'.$item->id)}}"
                            ><i class="bx bx-edit-alt me-1"></i> Voir</a
                          >
                          <a class="dropdown-item" href="{{ url('edit-location/'.$item->id) }}"
                            ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                          >
                          <form action="{{ url('delete-location/'.$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="dropdown-item" type="submit"
                            ><i class="bx bx-trash me-1"></i>Supprimer</button
                          >
                          </form>
                         
                          @if ($item->status==1)
                            <a class="dropdown-item" href="{{url('/desactiver_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Désactiver</a>
                          @else

                          <a class="dropdown-item" href="{{url('/activer_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Activer</a>
                            @endif
                        </div>
                      </div>
                    </td>
                  </tr>
                   @endforeach
                

                  
                </tbody>
              </table>
              @else
              <p>Aucun bien disponible</p>
            @endif
            </div>
         </div>
         <!--/ Hoverable Table rows -->
         </div>
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
    <a href="{{ url('add-location')}}">
        <button class="btn btn-primary mb-2" style="border-radius: 10px; width: 90%; height: 60px;font-size: 17px;"> Ajouter</button>
    </a>
    
  </div>
  <div class="col-lg-10" style=" background:linear-gradient(90deg, #ffffff 0%, rgb(48 151 165) 100%);border-radius: 10px; height: 60px; ">
    <div class="row g-1">
      <div class="col-4">
        <div class="row g-1">
          <div class="col-6">
            <h4 style="font-size: 17px; margin-top:19px">Tous</h4>
          </div>
          <div class="col-6">
             <button class="btn btn-primary" id="btn-dash">{{$Locatio}}</button>
          </div>
        </div>

      </div>
      <div class="col-4">
        <div class="row g-1">
          <div class="col-6">
            <h4 style="font-size: 17px; margin-top:19px">Disponibles</h4>
          </div>
          <div class="col-6">
             <button class="btn btn-primary" id="btn-dash">{{$disp}}</button>
          </div>
        </div>
                            
      </div>
      <div class="col-4">
        <div class="row g-1">
          <div class="col-6">
            <h4 style="font-size: 17px; margin-top:19px">Occupés</h4>
          </div>
          <div class="col-6">
             <button class="btn btn-primary" id="btn-dash">{{$occ}}</button>
          </div>
        </div>                       
        
      </div>
     

    </div>
  </div>
</div>


<div class="row mt-5 mb-5" style="background-image:linear-gradient(180deg, #3097a5 0%, rgb(48 151 165) 100%);border-radius: 10px;">
  <div class="col-lg-3 text-center mt-5 mb-5">
    <img src="{{asset('admin/assets/img/location.png')}}" alt="" class="img-fluid w-50">
  </div>
    <div class="col-lg-9 mt-5 mb-5">
      <p style="font-size: 18px; color:white">Optimisez la rentabilité de tous vos précieux biens en locations en les mettant en location sur le site web, grâce à un module entièrement conçu pour vous offrir une expérience de location exceptionnelle, le tout enveloppé dans un design époustouflant !</p>
    </div>
</div>

<div class="row mt-5" style="border-radius: 10px; background-color:#3097a514;">
  <div class="col-xl-12">
    <h6 class="text-muted"></h6>
    <div class="nav-align-top mb-4">
      <ul class="nav nav-pills mb-3 nav-fill" role="tablist" style="border-bottom: 1px solid;">
        <li class="nav-item">
          <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-home" aria-controls="navs-pills-justified-home" aria-selected="true">
            Tous    
          </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-profile" aria-controls="navs-pills-justified-profile" aria-selected="false">
            Terrain
          </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-message" aria-controls="navs-pills-justified-message" aria-selected="false">
             Immeuble
          </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-mess"  aria-controls="navs-pills-justified-mess" aria-selected="false">
            Villa
          </button>
        </li>
        <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-appart" aria-controls="navs-pills-justified-appart" aria-selected="false">
               Apparrtement
            </button>
        </li>
        <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-stud"  aria-controls="navs-pills-justified-stud" aria-selected="false">
              Studio
            </button>
        </li>
        <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-bur" aria-controls="navs-pills-justified-bur" aria-selected="false">
               Bureau
            </button>
        </li>
        <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-mag"  aria-controls="navs-pills-justified-mag" aria-selected="false">
              Magazin
            </button>
        </li>
        <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-entre"  aria-controls="navs-pills-justified-entre" aria-selected="false">
              Entrepôt
            </button>
        </li>
      </ul>
      <div class="tab-content" style="box-shadow: none; background-color: #3097a514;">
        <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
          <!-- Hoverable Table rows -->
          <div class="card mb-2" style="border-radius: 10px; background-color: white;">
             
            <div class="table-responsive text-nowrap">
              @if ($Location->count()> 0)
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th><strong>Code</strong></th>
                    <th><strong>Présentation</strong></th>
                    <th><strong>Type</strong></th>
                    
                    <th><strong>Configuration</strong></th>
                    <th><strong>Usage</strong></th>
                    <th><strong>Prix</strong></th>
                    <th><strong>Adresse</strong></th>
                    <th><strong>action</strong></th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                 
                   @foreach ($Location as $item)
                   <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->presentation}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->configuration}}</td>
                    <td>{{$item->usage}}</td>
                    <td>{{$item->prix}}</td>
                    <td>{{$item->adresse}}</td>
                     
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('location-details/'.$item->id)}}"
                            ><i class="bx bx-edit-alt me-1"></i> Voir</a
                          >
                          <a class="dropdown-item" href="{{ url('edit-location/'.$item->id) }}"
                            ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                          >
                          <form action="{{ url('delete-location/'.$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="dropdown-item" type="submit"
                            ><i class="bx bx-trash me-1"></i>Supprimer</button
                          >
                          </form>
                         
                          @if ($item->status==1)
                            <a class="dropdown-item" href="{{url('/desactiver_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Désactiver</a>
                          @else

                          <a class="dropdown-item" href="{{url('/activer_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Activer</a>
                            @endif
                        </div>
                      </div>
                    </td>
                  </tr>
                   @endforeach
                
                  
                </tbody>
              </table>
              @else
               <p>Aucun bien disponible</p>
              @endif

            </div>
          </div>
          <!--/ Hoverable Table rows -->
        </div>
        <div class="tab-pane fade" id="navs-pills-justified-profile" role="tabpanel">
          <!-- Hoverable Table rows -->
          <div class="card mb-2" style="border-radius: 10px; background-color: #f5f5f9;">
             
            <div class="table-responsive text-nowrap">
              @if ($terrain->count()> 0)
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th><strong>Code</strong></th>
                    <th><strong>Présentation</strong></th>
                    <th><strong>Type</strong></th>
                    
                    <th><strong>Configuration</strong></th>
                    <th><strong>Usage</strong></th>
                    <th><strong>Prix</strong></th>
                    <th><strong>Adresse</strong></th>
                    <th><strong>action</strong></th>
                  </tr>
                </thead>
              
                <tbody class="table-border-bottom-0">
                 
                   @foreach ($terrain as $item)
                   <tr>
                    <td>1</td>
                    <td>{{$item->presentation}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->configuration}}</td>
                    <td>{{$item->usage}}</td>
                    <td>{{$item->prix}}</td>
                    <td>{{$item->adresse}}</td>
                     
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('location-details/'.$item->id)}}"
                            ><i class="bx bx-edit-alt me-1"></i> Voir</a
                          >
                          <a class="dropdown-item" href="{{ url('edit-location/'.$item->id) }}"
                            ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                          >
                          <form action="{{ url('delete-location/'.$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="dropdown-item" type="submit"
                            ><i class="bx bx-trash me-1"></i>Supprimer</button
                          >
                          </form>
                         
                          @if ($item->status==1)
                            <a class="dropdown-item" href="{{url('/desactiver_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Désactiver</a>
                          @else

                          <a class="dropdown-item" href="{{url('/activer_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Activer</a>
                            @endif
                        </div>
                      </div>
                    </td>
                  </tr>
                   @endforeach

                  
                </tbody>
               
              </table>
              @else
              <p>Aucun terrain disponible</p>
            @endif
            </div>
          </div>
          <!--/ Hoverable Table rows -->
        </div>
        <div class="tab-pane fade" id="navs-pills-justified-message" role="tabpanel">
         <!-- Hoverable Table rows -->
         <div class="card mb-2" style="border-radius: 10px; background-color: #f5f5f9;">
             
          <div class="table-responsive text-nowrap">
            @if ($immeuble->count()> 0)
            <table class="table table-hover">
              <thead>
                <tr>
                  <th><strong>Code</strong></th>
                  <th><strong>Présentation</strong></th>
                  <th><strong>Type</strong></th>
                  
                  <th><strong>Configuration</strong></th>
                  <th><strong>Usage</strong></th>
                  <th><strong>Prix</strong></th>
                  <th><strong>Adresse</strong></th>
                  <th><strong>action</strong></th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
               
                 @foreach ($immeuble as $item)
                 <tr>
                  <td>1</td>
                  <td>{{$item->presentation}}</td>
                  <td>{{$item->type}}</td>
                  <td>{{$item->configuration}}</td>
                  <td>{{$item->usage}}</td>
                  <td>{{$item->prix}}</td>
                  <td>{{$item->adresse}}</td>
                   
                  <td>
                    <div class="dropdown">
                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('location-details/'.$item->id)}}"
                          ><i class="bx bx-edit-alt me-1"></i> Voir</a
                        >
                        <a class="dropdown-item" href="{{ url('edit-location/'.$item->id) }}"
                          ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                        >
                        <form action="{{ url('delete-location/'.$item->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button class="dropdown-item" type="submit"
                          ><i class="bx bx-trash me-1"></i>Supprimer</button
                        >
                        </form>
                       
                        @if ($item->status==1)
                          <a class="dropdown-item" href="{{url('/desactiver_bien/'.$item->id)}}"
                          ><i class="bx bx-trash me-1"></i>Désactiver</a>
                        @else

                        <a class="dropdown-item" href="{{url('/activer_bien/'.$item->id)}}"
                          ><i class="bx bx-trash me-1"></i>Activer</a>
                          @endif
                      </div>
                    </div>
                  </td>
                </tr>
                 @endforeach
              

                
              </tbody>
            </table>
            @else
            <p>Aucun bien disponible</p>
          @endif
          </div>
        </div>
        <!--/ Hoverable Table rows -->
        </div>
        <div class="tab-pane fade" id="navs-pills-justified-mess" role="tabpanel">
          <!-- Hoverable Table rows -->
          <div class="card mb-2" style="border-radius: 10px; background-color: #f5f5f9;">
            <div class="table-responsive text-nowrap">
              @if ($villa->count()> 0)
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th><strong>Code</strong></th>
                    <th><strong>Présentation</strong></th>
                    <th><strong>Type</strong></th>
                    
                    <th><strong>Configuration</strong></th>
                    <th><strong>Usage</strong></th>
                    <th><strong>Prix</strong></th>
                    <th><strong>Adresse</strong></th>
                    <th><strong>action</strong></th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                 
                   @foreach ($villa as $item)
                   <tr>
                    <td>1</td>
                    <td>{{$item->presentation}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->configuration}}</td>
                    <td>{{$item->usage}}</td>
                    <td>{{$item->prix}}</td>
                    <td>{{$item->adresse}}</td>
                     
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('location-details/'.$item->id)}}"
                            ><i class="bx bx-edit-alt me-1"></i> Voir</a
                          >
                          <a class="dropdown-item" href="{{ url('edit-location/'.$item->id) }}"
                            ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                          >
                          <form action="{{ url('delete-location/'.$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="dropdown-item" type="submit"
                            ><i class="bx bx-trash me-1"></i>Supprimer</button
                          >
                          </form>
                         
                          @if ($item->status==1)
                            <a class="dropdown-item" href="{{url('/desactiver_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Désactiver</a>
                          @else

                          <a class="dropdown-item" href="{{url('/activer_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Activer</a>
                            @endif
                        </div>
                      </div>
                    </td>
                  </tr>
                   @endforeach
                

                  
                </tbody>
              </table>
              @else
              <p>Aucun bien disponible</p>
            @endif
            </div>
         </div>
         <!--/ Hoverable Table rows -->
         </div>

         <div class="tab-pane fade" id="navs-pills-justified-appart" role="tabpanel">
          <!-- Hoverable Table rows -->
          <div class="card mb-2" style="border-radius: 25px; background-color: #f5f5f9;">
            <div class="table-responsive text-nowrap">
              @if ($appartement->count()> 0)
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th><strong>Code</strong></th>
                    <th><strong>Présentation</strong></th>
                    <th><strong>Type</strong></th>
                    
                    <th><strong>Configuration</strong></th>
                    <th><strong>Usage</strong></th>
                    <th><strong>Prix</strong></th>
                    <th><strong>Adresse</strong></th>
                    <th><strong>action</strong></th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                 
                   @foreach ($appartement as $item)
                   <tr>
                    <td>1</td>
                    <td>{{$item->presentation}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->configuration}}</td>
                    <td>{{$item->usage}}</td>
                    <td>{{$item->prix}}</td>
                    <td>{{$item->adresse}}</td>
                     
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('location-details/'.$item->id)}}"
                            ><i class="bx bx-edit-alt me-1"></i> Voir</a
                          >
                          <a class="dropdown-item" href="{{ url('edit-location/'.$item->id) }}"
                            ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                          >
                          <form action="{{ url('delete-location/'.$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="dropdown-item" type="submit"
                            ><i class="bx bx-trash me-1"></i>Supprimer</button
                          >
                          </form>
                         
                          @if ($item->status==1)
                            <a class="dropdown-item" href="{{url('/desactiver_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Désactiver</a>
                          @else

                          <a class="dropdown-item" href="{{url('/activer_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Activer</a>
                            @endif
                        </div>
                      </div>
                    </td>
                  </tr>
                   @endforeach
                

                  
                </tbody>
              </table>
              @else
              <p>Aucun bien disponible</p>
            @endif
            </div>
         </div>
         <!--/ Hoverable Table rows -->
         </div>

         <div class="tab-pane fade" id="navs-pills-justified-stud" role="tabpanel">
          <!-- Hoverable Table rows -->
          <div class="card mb-2" style="border-radius: 25px; background-color: #f5f5f9;">
            <div class="table-responsive text-nowrap">
              @if ($studio->count()> 0)
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th><strong>Code</strong></th>
                    <th><strong>Présentation</strong></th>
                    <th><strong>Type</strong></th>
                    
                    <th><strong>Configuration</strong></th>
                    <th><strong>Usage</strong></th>
                    <th><strong>Prix</strong></th>
                    <th><strong>Adresse</strong></th>
                    <th><strong>action</strong></th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                 
                   @foreach ($studio as $item)
                   <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->presentation}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->configuration}}</td>
                    <td>{{$item->usage}}</td>
                    <td>{{$item->prix}}</td>
                    <td>{{$item->adresse}}</td>
                     
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('location-details/'.$item->id)}}"
                            ><i class="bx bx-edit-alt me-1"></i> Voir</a
                          >
                          <a class="dropdown-item" href="{{ url('edit-location/'.$item->id) }}"
                            ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                          >
                          <form action="{{ url('delete-location/'.$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="dropdown-item" type="submit"
                            ><i class="bx bx-trash me-1"></i>Supprimer</button
                          >
                          </form>
                         
                          @if ($item->status==1)
                            <a class="dropdown-item" href="{{url('/desactiver_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Désactiver</a>
                          @else

                          <a class="dropdown-item" href="{{url('/activer_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Activer</a>
                            @endif
                        </div>
                      </div>
                    </td>
                  </tr>
                   @endforeach
                

                  
                </tbody>
              </table>
              @else
              <p>Aucun bien disponible</p>
            @endif
            </div>
         </div>
         <!--/ Hoverable Table rows -->
         </div>

         
         <div class="tab-pane fade" id="navs-pills-justified-bur" role="tabpanel">
          <!-- Hoverable Table rows -->
          <div class="card mb-2" style="border-radius: 25px; background-color: #f5f5f9;">
            <div class="table-responsive text-nowrap">
              @if ($bureaux->count()> 0)
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th><strong>Code</strong></th>
                    <th><strong>Présentation</strong></th>
                    <th><strong>Type</strong></th>
                    
                    <th><strong>Configuration</strong></th>
                    <th><strong>Usage</strong></th>
                    <th><strong>Prix</strong></th>
                    <th><strong>Adresse</strong></th>
                    <th><strong>action</strong></th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                 
                   @foreach ($bureaux as $item)
                   <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->presentation}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->configuration}}</td>
                    <td>{{$item->usage}}</td>
                    <td>{{$item->prix}}</td>
                    <td>{{$item->adresse}}</td>
                     
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('location-details/'.$item->id)}}"
                            ><i class="bx bx-edit-alt me-1"></i> Voir</a
                          >
                          <a class="dropdown-item" href="{{ url('edit-location/'.$item->id) }}"
                            ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                          >
                          <form action="{{ url('delete-location/'.$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="dropdown-item" type="submit"
                            ><i class="bx bx-trash me-1"></i>Supprimer</button
                          >
                          </form>
                         
                          @if ($item->status==1)
                            <a class="dropdown-item" href="{{url('/desactiver_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Désactiver</a>
                          @else

                          <a class="dropdown-item" href="{{url('/activer_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Activer</a>
                            @endif
                        </div>
                      </div>
                    </td>
                  </tr>
                   @endforeach
                

                  
                </tbody>
              </table>
              @else
              <p>Aucun bien disponible</p>
            @endif
            </div>
         </div>
         <!--/ Hoverable Table rows -->
         </div>

         <div class="tab-pane fade" id="navs-pills-justified-mag" role="tabpanel">
          <!-- Hoverable Table rows -->
          <div class="card mb-2" style="border-radius: 25px; background-color: #f5f5f9;">
            <div class="table-responsive text-nowrap">
              @if ($magazin->count()> 0)
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th><strong>Code</strong></th>
                    <th><strong>Présentation</strong></th>
                    <th><strong>Type</strong></th>
                    
                    <th><strong>Configuration</strong></th>
                    <th><strong>Usage</strong></th>
                    <th><strong>Prix</strong></th>
                    <th><strong>Adresse</strong></th>
                    <th><strong>action</strong></th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                 
                   @foreach ($magazin as $item)
                   <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->presentation}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->configuration}}</td>
                    <td>{{$item->usage}}</td>
                    <td>{{$item->prix}}</td>
                    <td>{{$item->adresse}}</td>
                     
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('location-details/'.$item->id)}}"
                            ><i class="bx bx-edit-alt me-1"></i> Voir</a
                          >
                          <a class="dropdown-item" href="{{ url('edit-location/'.$item->id) }}"
                            ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                          >
                          <form action="{{ url('delete-location/'.$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="dropdown-item" type="submit"
                            ><i class="bx bx-trash me-1"></i>Supprimer</button
                          >
                          </form>
                         
                          @if ($item->status==1)
                            <a class="dropdown-item" href="{{url('/desactiver_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Désactiver</a>
                          @else

                          <a class="dropdown-item" href="{{url('/activer_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Activer</a>
                            @endif
                        </div>
                      </div>
                    </td>
                  </tr>
                   @endforeach
                

                  
                </tbody>
              </table>
              @else
              <p>Aucun bien disponible</p>
            @endif
            </div>
         </div>
         <!--/ Hoverable Table rows -->
         </div>

         <div class="tab-pane fade" id="navs-pills-justified-entre" role="tabpanel">
          <!-- Hoverable Table rows -->
          <div class="card mb-2" style="border-radius: 25px; background-color: #f5f5f9;">
            <div class="table-responsive text-nowrap">
              @if ($entrepot->count()> 0)
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th><strong>Code</strong></th>
                    <th><strong>Présentation</strong></th>
                    <th><strong>Type</strong></th>
                    
                    <th><strong>Configuration</strong></th>
                    <th><strong>Usage</strong></th>
                    <th><strong>Prix</strong></th>
                    <th><strong>Adresse</strong></th>
                    <th><strong>action</strong></th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                 
                   @foreach ($entrepot as $item)
                   <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->presentation}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->configuration}}</td>
                    <td>{{$item->usage}}</td>
                    <td>{{$item->prix}}</td>
                    <td>{{$item->adresse}}</td>
                     
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('location-details/'.$item->id)}}"
                            ><i class="bx bx-edit-alt me-1"></i> Voir</a
                          >
                          <a class="dropdown-item" href="{{ url('edit-location/'.$item->id) }}"
                            ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                          >
                          <form action="{{ url('delete-location/'.$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="dropdown-item" type="submit"
                            ><i class="bx bx-trash me-1"></i>Supprimer</button
                          >
                          </form>
                         
                          @if ($item->status==1)
                            <a class="dropdown-item" href="{{url('/desactiver_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Désactiver</a>
                          @else

                          <a class="dropdown-item" href="{{url('/activer_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Activer</a>
                            @endif
                        </div>
                      </div>
                    </td>
                  </tr>
                   @endforeach
                

                  
                </tbody>
              </table>
              @else
              <p>Aucun bien disponible</p>
            @endif
            </div>
         </div>
         <!--/ Hoverable Table rows -->
         </div>
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
    <a href="{{ url('add-location')}}">
        <button class="btn btn-primary mb-2" style="border-radius: 10px; width: 90%; height: 60px;font-size: 17px;"> Ajouter</button>
    </a>
    
  </div>
  <div class="col-lg-10" style=" background:linear-gradient(90deg, #ffffff 0%, rgb(48 151 165) 100%);border-radius: 10px; height: 60px; ">
    <div class="row g-1">
      <div class="col-4">
        <div class="row g-1">
          <div class="col-6">
            <h4 style="font-size: 17px; margin-top:19px">Tous</h4>
          </div>
          <div class="col-6">
             <button class="btn btn-primary" id="btn-dash">{{$Locatio}}</button>
          </div>
        </div>

      </div>
      <div class="col-4">
        <div class="row g-1">
          <div class="col-6">
            <h4 style="font-size: 17px; margin-top:19px">Disponibles</h4>
          </div>
          <div class="col-6">
             <button class="btn btn-primary" id="btn-dash">{{$disp}}</button>
          </div>
        </div>
                            
      </div>
      <div class="col-4">
        <div class="row g-1">
          <div class="col-6">
            <h4 style="font-size: 17px; margin-top:19px">Occupés</h4>
          </div>
          <div class="col-6">
             <button class="btn btn-primary" id="btn-dash">{{$occ}}</button>
          </div>
        </div>                       
        
      </div>
     

    </div>
  </div>
</div>


<div class="row mt-5 mb-5" style="background-image:linear-gradient(180deg, #3097a5 0%, rgb(48 151 165) 100%);border-radius: 10px;">
  <div class="col-lg-3 text-center mt-5 mb-5">
    <img src="{{asset('admin/assets/img/location.png')}}" alt="" class="img-fluid w-50">
  </div>
    <div class="col-lg-9 mt-5 mb-5">
      <p style="font-size: 18px; color:white">Optimisez la rentabilité de tous vos précieux biens en locations en les mettant en location sur le site web, grâce à un module entièrement conçu pour vous offrir une expérience de location exceptionnelle, le tout enveloppé dans un design époustouflant !</p>
    </div>
</div>

<div class="row mt-5" style="border-radius: 10px; background-color:#3097a514;">
  <div class="col-xl-12">
    <h6 class="text-muted"></h6>
    <div class="nav-align-top mb-4">
      <ul class="nav nav-pills mb-3 nav-fill" role="tablist" style="border-bottom: 1px solid;">
        <li class="nav-item">
          <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-home" aria-controls="navs-pills-justified-home" aria-selected="true">
            Tous    
          </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-profile" aria-controls="navs-pills-justified-profile" aria-selected="false">
            Terrain
          </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-message" aria-controls="navs-pills-justified-message" aria-selected="false">
             Immeuble
          </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-mess"  aria-controls="navs-pills-justified-mess" aria-selected="false">
            Villa
          </button>
        </li>
        <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-appart" aria-controls="navs-pills-justified-appart" aria-selected="false">
               Apparrtement
            </button>
        </li>
        <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-stud"  aria-controls="navs-pills-justified-stud" aria-selected="false">
              Studio
            </button>
        </li>
        <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-bur" aria-controls="navs-pills-justified-bur" aria-selected="false">
               Bureau
            </button>
        </li>
        <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-mag"  aria-controls="navs-pills-justified-mag" aria-selected="false">
              Magazin
            </button>
        </li>
        <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-entre"  aria-controls="navs-pills-justified-entre" aria-selected="false">
              Entrepôt
            </button>
        </li>
      </ul>
      <div class="tab-content" style="box-shadow: none; background-color: #3097a514;">
        <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
          <!-- Hoverable Table rows -->
          <div class="card mb-2" style="border-radius: 10px; background-color: white;">
             
            <div class="table-responsive text-nowrap">
              @if ($Location->count()> 0)
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th><strong>Code</strong></th>
                    <th><strong>Présentation</strong></th>
                    <th><strong>Type</strong></th>
                    
                    <th><strong>Configuration</strong></th>
                    <th><strong>Usage</strong></th>
                    <th><strong>Prix</strong></th>
                    <th><strong>Adresse</strong></th>
                    <th><strong>action</strong></th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                
                   @foreach ($Location as $item)
                   <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->presentation}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->configuration}}</td>
                    <td>{{$item->usage}}</td>
                    <td>{{$item->prix}}</td>
                    <td>{{$item->adresse}}</td>
                     
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('location-details/'.$item->id)}}"
                            ><i class="bx bx-edit-alt me-1"></i> Voir</a
                          >
                          <a class="dropdown-item" href="{{ url('edit-location/'.$item->id) }}"
                            ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                          >
                           
                          @if ($item->status==1)
                            <a class="dropdown-item" href="{{url('/desactiver_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Désactiver</a>
                          @else

                          <a class="dropdown-item" href="{{url('/activer_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Activer</a>
                            @endif
                        </div>
                      </div>
                    </td>
                  </tr>
                   @endforeach
                 

                  
                </tbody>
              </table>
              @else
              <p>Aucun bien disponible</p>
            @endif
            </div>
          </div>
          <!--/ Hoverable Table rows -->
        </div>
        <div class="tab-pane fade" id="navs-pills-justified-profile" role="tabpanel">
          <!-- Hoverable Table rows -->
          <div class="card mb-2" style="border-radius: 10px; background-color: #f5f5f9;">
             
            <div class="table-responsive text-nowrap">
              @if ($terrain->count()> 0)
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th><strong>Code</strong></th>
                    <th><strong>Présentation</strong></th>
                    <th><strong>Type</strong></th>
                    
                    <th><strong>Configuration</strong></th>
                    <th><strong>Usage</strong></th>
                    <th><strong>Prix</strong></th>
                    <th><strong>Adresse</strong></th>
                    <th><strong>action</strong></th>
                  </tr>
                </thead>
              
                <tbody class="table-border-bottom-0">
                 
                   @foreach ($terrain as $item)
                   <tr>
                    <td>1</td>
                    <td>{{$item->presentation}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->configuration}}</td>
                    <td>{{$item->usage}}</td>
                    <td>{{$item->prix}}</td>
                    <td>{{$item->adresse}}</td>
                     
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('location-details/'.$item->id)}}"
                            ><i class="bx bx-edit-alt me-1"></i> Voir</a
                          >
                          <a class="dropdown-item" href="{{ url('edit-location/'.$item->id) }}"
                            ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                          >
                         
                         
                          @if ($item->status==1)
                            <a class="dropdown-item" href="{{url('/desactiver_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Désactiver</a>
                          @else

                          <a class="dropdown-item" href="{{url('/activer_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Activer</a>
                            @endif
                        </div>
                      </div>
                    </td>
                  </tr>
                   @endforeach

                  
                </tbody>
               
              </table>
              @else
              <p>Aucun terrain disponible</p>
            @endif
            </div>
          </div>
          <!--/ Hoverable Table rows -->
        </div>
        <div class="tab-pane fade" id="navs-pills-justified-message" role="tabpanel">
         <!-- Hoverable Table rows -->
         <div class="card mb-2" style="border-radius: 10px; background-color: #f5f5f9;">
             
          <div class="table-responsive text-nowrap">
            @if ($immeuble->count()> 0)
            <table class="table table-hover">
              <thead>
                <tr>
                  <th><strong>Code</strong></th>
                  <th><strong>Présentation</strong></th>
                  <th><strong>Type</strong></th>
                  
                  <th><strong>Configuration</strong></th>
                  <th><strong>Usage</strong></th>
                  <th><strong>Prix</strong></th>
                  <th><strong>Adresse</strong></th>
                  <th><strong>action</strong></th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
               
                 @foreach ($immeuble as $item)
                 <tr>
                  <td>1</td>
                  <td>{{$item->presentation}}</td>
                  <td>{{$item->type}}</td>
                  <td>{{$item->configuration}}</td>
                  <td>{{$item->usage}}</td>
                  <td>{{$item->prix}}</td>
                  <td>{{$item->adresse}}</td>
                   
                  <td>
                    <div class="dropdown">
                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('location-details/'.$item->id)}}"
                          ><i class="bx bx-edit-alt me-1"></i> Voir</a
                        >
                        <a class="dropdown-item" href="{{ url('edit-location/'.$item->id) }}"
                          ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                        >
                        
                       
                        @if ($item->status==1)
                          <a class="dropdown-item" href="{{url('/desactiver_bien/'.$item->id)}}"
                          ><i class="bx bx-trash me-1"></i>Désactiver</a>
                        @else

                        <a class="dropdown-item" href="{{url('/activer_bien/'.$item->id)}}"
                          ><i class="bx bx-trash me-1"></i>Activer</a>
                          @endif
                      </div>
                    </div>
                  </td>
                </tr>
                 @endforeach
              

                
              </tbody>
            </table>
            @else
            <p>Aucun bien disponible</p>
          @endif
          </div>
        </div>
        <!--/ Hoverable Table rows -->
        </div>
        <div class="tab-pane fade" id="navs-pills-justified-mess" role="tabpanel">
          <!-- Hoverable Table rows -->
          <div class="card mb-2" style="border-radius: 10px; background-color: #f5f5f9;">
            <div class="table-responsive text-nowrap">
              @if ($villa->count()> 0)
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th><strong>Code</strong></th>
                    <th><strong>Présentation</strong></th>
                    <th><strong>Type</strong></th>
                    
                    <th><strong>Configuration</strong></th>
                    <th><strong>Usage</strong></th>
                    <th><strong>Prix</strong></th>
                    <th><strong>Adresse</strong></th>
                    <th><strong>action</strong></th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                 
                   @foreach ($villa as $item)
                   <tr>
                    <td>1</td>
                    <td>{{$item->presentation}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->configuration}}</td>
                    <td>{{$item->usage}}</td>
                    <td>{{$item->prix}}</td>
                    <td>{{$item->adresse}}</td>
                     
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('location-details/'.$item->id)}}"
                            ><i class="bx bx-edit-alt me-1"></i> Voir</a
                          >
                          <a class="dropdown-item" href="{{ url('edit-location/'.$item->id) }}"
                            ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                          >
                          
                         
                          @if ($item->status==1)
                            <a class="dropdown-item" href="{{url('/desactiver_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Désactiver</a>
                          @else

                          <a class="dropdown-item" href="{{url('/activer_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Activer</a>
                            @endif
                        </div>
                      </div>
                    </td>
                  </tr>
                   @endforeach
                

                  
                </tbody>
              </table>
              @else
              <p>Aucun bien disponible</p>
            @endif
            </div>
         </div>
         <!--/ Hoverable Table rows -->
         </div>

         <div class="tab-pane fade" id="navs-pills-justified-appart" role="tabpanel">
          <!-- Hoverable Table rows -->
          <div class="card mb-2" style="border-radius: 10px; background-color: #f5f5f9;">
            <div class="table-responsive text-nowrap">
              @if ($appartement->count()> 0)
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th><strong>Code</strong></th>
                    <th><strong>Présentation</strong></th>
                    <th><strong>Type</strong></th>
                    
                    <th><strong>Configuration</strong></th>
                    <th><strong>Usage</strong></th>
                    <th><strong>Prix</strong></th>
                    <th><strong>Adresse</strong></th>
                    <th><strong>action</strong></th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                 
                   @foreach ($appartement as $item)
                   <tr>
                    <td>1</td>
                    <td>{{$item->presentation}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->configuration}}</td>
                    <td>{{$item->usage}}</td>
                    <td>{{$item->prix}}</td>
                    <td>{{$item->adresse}}</td>
                     
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('location-details/'.$item->id)}}"
                            ><i class="bx bx-edit-alt me-1"></i> Voir</a
                          >
                          <a class="dropdown-item" href="{{ url('edit-location/'.$item->id) }}"
                            ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                          >
                         
                         
                          @if ($item->status==1)
                            <a class="dropdown-item" href="{{url('/desactiver_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Désactiver</a>
                          @else

                          <a class="dropdown-item" href="{{url('/activer_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Activer</a>
                            @endif
                        </div>
                      </div>
                    </td>
                  </tr>
                   @endforeach
                

                  
                </tbody>
              </table>
              @else
              <p>Aucun bien disponible</p>
            @endif
            </div>
         </div>
         <!--/ Hoverable Table rows -->
         </div>

         <div class="tab-pane fade" id="navs-pills-justified-stud" role="tabpanel">
          <!-- Hoverable Table rows -->
          <div class="card mb-2" style="border-radius: 10px; background-color: #f5f5f9;">
            <div class="table-responsive text-nowrap">
              @if ($studio->count()> 0)
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th><strong>Code</strong></th>
                    <th><strong>Présentation</strong></th>
                    <th><strong>Type</strong></th>
                    
                    <th><strong>Configuration</strong></th>
                    <th><strong>Usage</strong></th>
                    <th><strong>Prix</strong></th>
                    <th><strong>Adresse</strong></th>
                    <th><strong>action</strong></th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                 
                   @foreach ($studio as $item)
                   <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->presentation}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->configuration}}</td>
                    <td>{{$item->usage}}</td>
                    <td>{{$item->prix}}</td>
                    <td>{{$item->adresse}}</td>
                     
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('location-details/'.$item->id)}}"
                            ><i class="bx bx-edit-alt me-1"></i> Voir</a
                          >
                          <a class="dropdown-item" href="{{ url('edit-location/'.$item->id) }}"
                            ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                          >
                          
                         
                          @if ($item->status==1)
                            <a class="dropdown-item" href="{{url('/desactiver_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Désactiver</a>
                          @else

                          <a class="dropdown-item" href="{{url('/activer_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Activer</a>
                            @endif
                        </div>
                      </div>
                    </td>
                  </tr>
                   @endforeach
                

                  
                </tbody>
              </table>
              @else
              <p>Aucun bien disponible</p>
            @endif
            </div>
         </div>
         <!--/ Hoverable Table rows -->
         </div>

         
         <div class="tab-pane fade" id="navs-pills-justified-bur" role="tabpanel">
          <!-- Hoverable Table rows -->
          <div class="card mb-2" style="border-radius: 10px; background-color: #f5f5f9;">
            <div class="table-responsive text-nowrap">
              @if ($bureaux->count()> 0)
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th><strong>Code</strong></th>
                    <th><strong>Présentation</strong></th>
                    <th><strong>Type</strong></th>
                    
                    <th><strong>Configuration</strong></th>
                    <th><strong>Usage</strong></th>
                    <th><strong>Prix</strong></th>
                    <th><strong>Adresse</strong></th>
                    <th><strong>action</strong></th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                 
                   @foreach ($bureaux as $item)
                   <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->presentation}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->configuration}}</td>
                    <td>{{$item->usage}}</td>
                    <td>{{$item->prix}}</td>
                    <td>{{$item->adresse}}</td>
                     
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('location-details/'.$item->id)}}"
                            ><i class="bx bx-edit-alt me-1"></i> Voir</a
                          >
                          <a class="dropdown-item" href="{{ url('edit-location/'.$item->id) }}"
                            ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                          >
                         
                         
                          @if ($item->status==1)
                            <a class="dropdown-item" href="{{url('/desactiver_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Désactiver</a>
                          @else

                          <a class="dropdown-item" href="{{url('/activer_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Activer</a>
                            @endif
                        </div>
                      </div>
                    </td>
                  </tr>
                   @endforeach
                

                  
                </tbody>
              </table>
              @else
              <p>Aucun bien disponible</p>
            @endif
            </div>
         </div>
         <!--/ Hoverable Table rows -->
         </div>

         <div class="tab-pane fade" id="navs-pills-justified-mag" role="tabpanel">
          <!-- Hoverable Table rows -->
          <div class="card mb-2" style="border-radius: 10px; background-color: #f5f5f9;">
            <div class="table-responsive text-nowrap">
              @if ($magazin->count()> 0)
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th><strong>Code</strong></th>
                    <th><strong>Présentation</strong></th>
                    <th><strong>Type</strong></th>
                    
                    <th><strong>Configuration</strong></th>
                    <th><strong>Usage</strong></th>
                    <th><strong>Prix</strong></th>
                    <th><strong>Adresse</strong></th>
                    <th><strong>action</strong></th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                 
                   @foreach ($magazin as $item)
                   <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->presentation}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->configuration}}</td>
                    <td>{{$item->usage}}</td>
                    <td>{{$item->prix}}</td>
                    <td>{{$item->adresse}}</td>
                     
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('location-details/'.$item->id)}}"
                            ><i class="bx bx-edit-alt me-1"></i> Voir</a
                          >
                          <a class="dropdown-item" href="{{ url('edit-location/'.$item->id) }}"
                            ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                          >
                           
                         
                          @if ($item->status==1)
                            <a class="dropdown-item" href="{{url('/desactiver_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Désactiver</a>
                          @else

                          <a class="dropdown-item" href="{{url('/activer_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Activer</a>
                            @endif
                        </div>
                      </div>
                    </td>
                  </tr>
                   @endforeach
                

                  
                </tbody>
              </table>
              @else
              <p>Aucun bien disponible</p>
            @endif
            </div>
         </div>
         <!--/ Hoverable Table rows -->
         </div>

         <div class="tab-pane fade" id="navs-pills-justified-entre" role="tabpanel">
          <!-- Hoverable Table rows -->
          <div class="card mb-2" style="border-radius: 10px; background-color: #f5f5f9;">
            <div class="table-responsive text-nowrap">
              @if ($entrepot->count()> 0)
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th><strong>Code</strong></th>
                    <th><strong>Présentation</strong></th>
                    <th><strong>Type</strong></th>
                    
                    <th><strong>Configuration</strong></th>
                    <th><strong>Usage</strong></th>
                    <th><strong>Prix</strong></th>
                    <th><strong>Adresse</strong></th>
                    <th><strong>action</strong></th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                 
                   @foreach ($entrepot as $item)
                   <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->presentation}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->configuration}}</td>
                    <td>{{$item->usage}}</td>
                    <td>{{$item->prix}}</td>
                    <td>{{$item->adresse}}</td>
                     
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('location-details/'.$item->id)}}"
                            ><i class="bx bx-edit-alt me-1"></i> Voir</a
                          >
                          <a class="dropdown-item" href="{{ url('edit-location/'.$item->id) }}"
                            ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                          >
                          
                         
                          @if ($item->status==1)
                            <a class="dropdown-item" href="{{url('/desactiver_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Désactiver</a>
                          @else

                          <a class="dropdown-item" href="{{url('/activer_bien/'.$item->id)}}"
                            ><i class="bx bx-trash me-1"></i>Activer</a>
                            @endif
                        </div>
                      </div>
                    </td>
                  </tr>
                   @endforeach
                

                  
                </tbody>
              </table>
              @else
              <p>Aucun bien disponible</p>
            @endif
            </div>
         </div>
         <!--/ Hoverable Table rows -->
         </div>
      </div>
    </div>
  </div>
</div>
@endcan
@endsection