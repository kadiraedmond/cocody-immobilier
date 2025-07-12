@extends('layouts.admin')

@section('content')
@can('Administrateur')
<div class="row">
   
  <div class="col-lg-12" style=" background:linear-gradient(90deg, #ffffff 0%, rgb(48 151 165) 100%);border-radius: 10px; height: 60px; ">
    <div class="row g-1">
      <div class="col-4">
        <div class="row g-1">
          <div class="col-6">
            <h4 style="font-size: 17px; margin-top:19px">Tous</h4>
          </div>
          <div class="col-6">
             <button class="btn btn-primary" id="btn-dash">{{$all}}</button>
          </div>
        </div>

      </div>
      <div class="col-4">
        <div class="row g-1">
          <div class="col-6">
            <h4 style="font-size: 17px; margin-top:19px">Rendez-vous</h4>
          </div>
          <div class="col-6">
             <button class="btn btn-primary" id="btn-dash">0</button>
          </div>
        </div>
                            
      </div>
      <div class="col-4">
        <div class="row g-1">
          <div class="col-6">
            <h4 style="font-size: 17px; margin-top:19px">Contact</h4>
          </div>
          <div class="col-6">
             <button class="btn btn-primary" id="btn-dash">{{$all}}</button>
          </div>
        </div>                       
        
      </div>
     

    </div>
  </div>
</div>
  

  <div class="row mt-5 mb-5" style="background-image:linear-gradient(180deg, #3097a5 0%, rgb(48 151 165) 100%);border-radius: 10px;">
    <div class="col-lg-3 text-center mt-5 mb-5">
      <img src="{{asset('admin/assets/img/Contact.png')}}" alt="" class="img-fluid w-75">
    </div>
      <div class="col-lg-9 mt-5 mb-5">
        <p style="font-size: 18px; color:white">Recevez toutes les demandes de contact, informations, rendez-vous venant des visiteurs, clients, partenaires et autres parties prenantes de Cocody immobilier afin de mieux les services. </p>
      </div>
  </div>

  <div class="row mt-5" style="border-radius: 10px; background-color:#3097a514;">
    <div class="col-xl-12">
      <h6 class="text-muted"></h6>
      <div class="nav-align-top mb-4">
        <ul class="nav nav-pills mb-3 nav-fill" role="tablist" style="border-bottom: 0.5px solid;">
          <li class="nav-item">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-home" aria-controls="navs-pills-justified-home" aria-selected="true">
              Contact     
            </button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-profile" aria-controls="navs-pills-justified-profile" aria-selected="false">
              Rendez-vous 
            </button>
          </li>
          
        </ul>
        <div class="tab-content" style="box-shadow: none; background-color: #3097a514;">
          <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
            <!-- Hoverable Table rows -->
            <div class="card mb-2" style="border-radius: 10px; background-color: white;">
               
              <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th><strong>Id</strong></th>
                      <th><strong>Date</strong></th>
                      <th><strong>Nom </strong></th>
                      <th><strong>Prénoms </strong></th>
                      <th><strong>Téléphone</strong></th>
                      <th><strong>Adresse électronique </strong></th>
                      <th><strong>Action</strong></th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    @foreach ($Contact as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->created_at}}</td>
                      <td>{{$item->nom}}</td>
                      <td>{{$item->prenoms}}</td>
                      <td>{{$item->telephone}}</td>
                      <td>{{$item->email}}</td>
                      
                     
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('contact-details/'.$item->id)}}"
                              ><i class="bx bx-edit-alt me-1"></i> Voir</a
                            >
                            
                            <form action="{{ url('delete-contact/'.$item->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="dropdown-item" > <i class="bx bx-trash me-1"></i>Supprimer</button>
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
            <!--/ Hoverable Table rows -->
          </div>
          <div class="tab-pane fade" id="navs-pills-justified-profile" role="tabpanel">
            <!-- Hoverable Table rows -->
            <div class="card mb-2" style="border-radius: 25px; background-color: #f5f5f9;">
               
              <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th><strong>Id</strong></th>
                      <th><strong>Date</strong></th>
                      <th><strong>Nom </strong></th>
                      <th><strong>Prénoms </strong></th>
                      <th><strong>Téléphone</strong></th>
                      <th><strong>Adresse électronique </strong></th>
                     
                      <th><strong>Action</strong></th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    @foreach ($rdv as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->created_at}}</td>
                      <td>{{$item->nom}}</td>
                      <td>{{$item->prenoms}}</td>
                      <td>{{$item->telephone}}</td>
                      
                      <td>{{$item->message}}</td>
                     
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('rdv-details/'.$item->id)}}"
                              ><i class="bx bx-edit-alt me-1"></i> Voir</a
                            >
                            
                            
                            <form action="{{ url('delete-rdv/'.$item->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="dropdown-item"  > <i class="bx bx-trash me-1"></i>Supprimer</button>
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
            <!--/ Hoverable Table rows -->
          </div>
          
          <!--/ Hoverable Table rows -->
          </div>
           
        </div>
      </div>
       
    </div>
  </div>
@endcan

@can('Gestionnaire')
<div class="row">
   
  <div class="col-lg-12" style=" background:linear-gradient(90deg, #ffffff 0%, rgb(48 151 165) 100%);border-radius: 10px; height: 60px; ">
    <div class="row g-1">
      <div class="col-4">
        <div class="row g-1">
          <div class="col-6">
            <h4 style="font-size: 17px; margin-top:19px">Tous</h4>
          </div>
          <div class="col-6">
             <button class="btn btn-primary" id="btn-dash">{{$all}}</button>
          </div>
        </div>

      </div>
      <div class="col-4">
        <div class="row g-1">
          <div class="col-6">
            <h4 style="font-size: 17px; margin-top:19px">Rendez-vous</h4>
          </div>
          <div class="col-6">
             <button class="btn btn-primary" id="btn-dash">0</button>
          </div>
        </div>
                            
      </div>
      <div class="col-4">
        <div class="row g-1">
          <div class="col-6">
            <h4 style="font-size: 17px; margin-top:19px">Contact</h4>
          </div>
          <div class="col-6">
             <button class="btn btn-primary" id="btn-dash">{{$all}}</button>
          </div>
        </div>                       
        
      </div>
     

    </div>
  </div>
</div>
  

  <div class="row mt-5 mb-5" style="background-image:linear-gradient(180deg, #3097a5 0%, rgb(48 151 165) 100%);border-radius: 10px;">
    <div class="col-lg-3 text-center mt-5 mb-5">
      <img src="{{asset('admin/assets/img/Contact.png')}}" alt="" class="img-fluid w-75">
    </div>
      <div class="col-lg-9 mt-5 mb-5">
        <p style="font-size: 18px; color:white">Recevez toutes les demandes de contact, informations, rendez-vous venant des visiteurs, clients, partenaires et autres parties prenantes de Cocody immobilier afin de mieux les services. </p>
      </div>
  </div>

  <div class="row mt-5" style="border-radius: 10px; background-color:#3097a514;">
    <div class="col-xl-12">
      <h6 class="text-muted"></h6>
      <div class="nav-align-top mb-4">
        <ul class="nav nav-pills mb-3 nav-fill" role="tablist" style="border-bottom: 0.5px solid;">
          <li class="nav-item">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-home" aria-controls="navs-pills-justified-home" aria-selected="true">
              Contact     
            </button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-profile" aria-controls="navs-pills-justified-profile" aria-selected="false">
              Rendez-vous 
            </button>
          </li>
          
        </ul>
        <div class="tab-content" style="box-shadow: none; background-color: #3097a514;">
          <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
            <!-- Hoverable Table rows -->
            <div class="card mb-2" style="border-radius: 10px; background-color: white;">
               
              <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th><strong>Id</strong></th>
                      <th><strong>Date</strong></th>
                      <th><strong>Nom </strong></th>
                      <th><strong>Prénoms </strong></th>
                      <th><strong>Téléphone</strong></th>
                      <th><strong>Adresse électronique </strong></th>
                      <th><strong>sujet</strong></th>
                      <th><strong>message</strong></th>
                      <th><strong>Action</strong></th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    @foreach ($Contact as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->created_at}}</td>
                      <td>{{$item->nom}}</td>
                      <td>{{$item->prenoms}}</td>
                      <td>{{$item->telephone}}</td>
                      <td>{{$item->email}}</td>
                      
                     
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('contact-details/'.$item->id)}}"
                              ><i class="bx bx-edit-alt me-1"></i> Voir</a
                            > 
                            <form action="{{ url('delete-contact/'.$item->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="dropdown-item" > <i class="bx bx-trash me-1"></i>Supprimer</button>
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
            <!--/ Hoverable Table rows -->
          </div>
          <div class="tab-pane fade" id="navs-pills-justified-profile" role="tabpanel">
            <!-- Hoverable Table rows -->
            <div class="card mb-2" style="border-radius: 25px; background-color: #f5f5f9;">
               
              <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th><strong>Id</strong></th>
                      <th><strong>Date</strong></th>
                      <th><strong>Nom </strong></th>
                      <th><strong>Prénoms </strong></th>
                      <th><strong>Téléphone</strong></th>
                      <th><strong>Adresse électronique </strong></th>
                      
                       
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    @foreach ($rdv as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->created_at}}</td>
                      <td>{{$item->nom}}</td>
                      <td>{{$item->prenoms}}</td>
                      <td>{{$item->telephone}}</td>
                      <td>{{$item->email}}</td>
                       
                     
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('rdv-details/'.$item->id)}}"
                              ><i class="bx bx-edit-alt me-1"></i> Voir</a
                            >
                            
                            <form action="{{ url('delete-rdv/'.$item->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="dropdown-item" > <i class="bx bx-trash me-1"></i>Supprimer</button>
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
            <!--/ Hoverable Table rows -->
          </div>
          
          <!--/ Hoverable Table rows -->
          </div>
           
        </div>
      </div>
       
    </div>
  </div>
@endcan

@can('Gérant')
<div class="row">
   
  <div class="col-lg-12" style=" background:linear-gradient(90deg, #ffffff 0%, rgb(48 151 165) 100%);border-radius: 10px; height: 60px; ">
    <div class="row g-1">
      <div class="col-4">
        <div class="row g-1">
          <div class="col-6">
            <h4 style="font-size: 17px; margin-top:19px">Tous</h4>
          </div>
          <div class="col-6">
             <button class="btn btn-primary" id="btn-dash">{{$all}}</button>
          </div>
        </div>

      </div>
      <div class="col-4">
        <div class="row g-1">
          <div class="col-6">
            <h4 style="font-size: 17px; margin-top:19px">Rendez-vous</h4>
          </div>
          <div class="col-6">
             <button class="btn btn-primary" id="btn-dash">0</button>
          </div>
        </div>
                            
      </div>
      <div class="col-4">
        <div class="row g-1">
          <div class="col-6">
            <h4 style="font-size: 17px; margin-top:19px">Contact</h4>
          </div>
          <div class="col-6">
             <button class="btn btn-primary" id="btn-dash">{{$all}}</button>
          </div>
        </div>                       
        
      </div>
     

    </div>
  </div>
</div>
  

  <div class="row mt-5 mb-5" style="background-image:linear-gradient(180deg, #3097a5 0%, rgb(48 151 165) 100%);border-radius: 10px;">
    <div class="col-lg-3 text-center mt-5 mb-5">
      <img src="{{asset('admin/assets/img/Contact.png')}}" alt="" class="img-fluid w-75">
    </div>
      <div class="col-lg-9 mt-5 mb-5">
        <p style="font-size: 18px; color:white">Recevez toutes les demandes de contact, informations, rendez-vous venant des visiteurs, clients, partenaires et autres parties prenantes de Cocody immobilier afin de mieux les services. </p>
      </div>
  </div>

  <div class="row mt-5" style="border-radius: 10px; background-color:#3097a514;">
    <div class="col-xl-12">
      <h6 class="text-muted"></h6>
      <div class="nav-align-top mb-4">
        <ul class="nav nav-pills mb-3 nav-fill" role="tablist" style="border-bottom: 0.5px solid;">
          <li class="nav-item">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-home" aria-controls="navs-pills-justified-home" aria-selected="true">
              Contact     
            </button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-profile" aria-controls="navs-pills-justified-profile" aria-selected="false">
              Rendez-vous 
            </button>
          </li>
          
        </ul>
        <div class="tab-content" style="box-shadow: none; background-color: #3097a514;">
          <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
            <!-- Hoverable Table rows -->
            <div class="card mb-2" style="border-radius: 10px; background-color: white;">
               
              <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th><strong>Id</strong></th>
                      <th><strong>Date</strong></th>
                      <th><strong>Nom </strong></th>
                      <th><strong>Prénoms </strong></th>
                      <th><strong>Téléphone</strong></th>
                      <th><strong>Adresse électronique </strong></th>
                       
                     
                      <th><strong>Action</strong></th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    @foreach ($Contact as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->created_at}}</td>
                      <td>{{$item->nom}}</td>
                      <td>{{$item->prenoms}}</td>
                      <td>{{$item->telephone}}</td>
                     
                     
                     
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('contact-details/'.$item->id)}}"
                              ><i class="bx bx-edit-alt me-1"></i> Voir</a
                            >
                            
                            <form action="{{ url('delete-contact/'.$item->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="dropdown-item" > <i class="bx bx-trash me-1"></i>Supprimer</button>
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
            <!--/ Hoverable Table rows -->
          </div>
          <div class="tab-pane fade" id="navs-pills-justified-profile" role="tabpanel">
            <!-- Hoverable Table rows -->
            <div class="card mb-2" style="border-radius: 25px; background-color: #f5f5f9;">
               
              <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th><strong>Id</strong></th>
                      <th><strong>Date</strong></th>
                      <th><strong>Nom </strong></th>
                      <th><strong>Prénoms </strong></th>
                      <th><strong>Téléphone</strong></th>
                      <th><strong>Adresse électronique </strong></th>
                      
                      <th><strong>Action</strong></th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    @foreach ($rdv as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->created_at}}</td>
                      <td>{{$item->nom}}</td>
                      <td>{{$item->prenoms}}</td>
                      <td>{{$item->telephone}}</td>
                      <td>{{$item->email}}</td>
                       
                     
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('rdv-details/'.$item->id)}}"
                              ><i class="bx bx-edit-alt me-1"></i> Voir</a
                            >
                            
                            <form action="{{ url('rdv-contact/'.$item->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="dropdown-item" > <i class="bx bx-trash me-1"></i>Supprimer</button>
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
            <!--/ Hoverable Table rows -->
          </div>
          
          <!--/ Hoverable Table rows -->
          </div>
           
        </div>
      </div>
       
    </div>
  </div>
@endcan

@endsection