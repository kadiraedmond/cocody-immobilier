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
             <button class="btn btn-primary" id="btn-dash">{{ $News }}</button>
          </div>
        </div>

      </div>
      <div class="col-4">
        <div class="row g-1">
          <div class="col-6">
            <h4 style="font-size: 17px; margin-top:19px">Abonnés</h4>
          </div>
          <div class="col-6">
             <button class="btn btn-primary" id="btn-dash">0</button>
          </div>
        </div>
                            
      </div>
      <div class="col-4">
        <div class="row g-1">
          <div class="col-6">
            <h4 style="font-size: 17px; margin-top:19px">Mail</h4>
          </div>
          <div class="col-6">
             <button class="btn btn-primary" id="btn-dash">0</button>
          </div>
        </div>                       
        
      </div>
     

    </div>
  </div>
</div>
  

  <div class="row mt-5 mb-5" style="background-image:linear-gradient(180deg, #3097a5 0%, rgb(48 151 165) 100%);border-radius: 10px;">
    <div class="col-lg-3 text-center mt-5 mb-5">
      <img src="{{asset('admin/assets/img/Newsletter.png')}}" alt="" class="img-fluid w-50">
    </div>
      <div class="col-lg-9 mt-5 mb-5">
        <p style="font-size: 18px; color:white">Nourrissez vos abonnés avec des informations exclusives du secteur immobilier pour les envelopper dans une atmosphère chaleureuse et familière, où ils se sentiront toujours chez eux.</p>
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
                <th><strong>Date</strong></th>
                <th><strong>email</strong></th>
                
                <th><strong>Action</strong></th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach ($Newsletter as $item)
              <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->email}}</td>
                
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                       
                      {{-- <a class="dropdown-item" href="{{ url('edit-communication/'.$item->id) }}"
                        ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                      > --}}
                      
                      <form action="{{ url('delete-newsletter/'.$item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="dropdown-item"> <i class="bx bx-trash me-1"></i>Delete</button>
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
             <button class="btn btn-primary" id="btn-dash">{{ $News }}</button>
          </div>
        </div>

      </div>
      <div class="col-4">
        <div class="row g-1">
          <div class="col-6">
            <h4 style="font-size: 17px; margin-top:19px">Abonnés</h4>
          </div>
          <div class="col-6">
             <button class="btn btn-primary" id="btn-dash">0</button>
          </div>
        </div>
                            
      </div>
      <div class="col-4">
        <div class="row g-1">
          <div class="col-6">
            <h4 style="font-size: 17px; margin-top:19px">Mail</h4>
          </div>
          <div class="col-6">
             <button class="btn btn-primary" id="btn-dash">0</button>
          </div>
        </div>                       
        
      </div>
     

    </div>
  </div>
</div>
  

  <div class="row mt-5 mb-5" style="background-image:linear-gradient(180deg, #3097a5 0%, rgb(48 151 165) 100%);border-radius: 10px;">
    <div class="col-lg-3 text-center mt-5 mb-5">
      <img src="{{asset('admin/assets/img/Newsletter.png')}}" alt="" class="img-fluid w-50">
    </div>
      <div class="col-lg-9 mt-5 mb-5">
        <p style="font-size: 18px; color:white">Nourrissez vos abonnés avec des informations exclusives du secteur immobilier pour les envelopper dans une atmosphère chaleureuse et familière, où ils se sentiront toujours chez eux.</p>
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
                <th><strong>email</strong></th>
                
                <th><strong>Action</strong></th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach ($Newsletter as $item)
              <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->email}}</td>
                
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
{{--                        
                      <a class="dropdown-item" href="{{ url('edit-communication/'.$item->id) }}"
                        ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                      > --}}
                      
                      <form action="{{ url('delete-communication/'.$item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="dropdown-item"  > <i class="bx bx-trash me-1"></i>Delete</button>
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
<div class="row">
   
  <div class="col-lg-12" style=" background:linear-gradient(90deg, #ffffff 0%, rgb(48 151 165) 100%);border-radius: 10px; height: 60px; ">
    <div class="row g-1">
      <div class="col-4">
        <div class="row g-1">
          <div class="col-6">
            <h4 style="font-size: 17px; margin-top:19px">Tous</h4>
          </div>
          <div class="col-6">
             <button class="btn btn-primary" id="btn-dash">{{ $News }}</button>
          </div>
        </div>

      </div>
      <div class="col-4">
        <div class="row g-1">
          <div class="col-6">
            <h4 style="font-size: 17px; margin-top:19px">Abonnés</h4>
          </div>
          <div class="col-6">
             <button class="btn btn-primary" id="btn-dash">0</button>
          </div>
        </div>
                            
      </div>
      <div class="col-4">
        <div class="row g-1">
          <div class="col-6">
            <h4 style="font-size: 17px; margin-top:19px">Mail</h4>
          </div>
          <div class="col-6">
             <button class="btn btn-primary" id="btn-dash">0</button>
          </div>
        </div>                       
        
      </div>
     

    </div>
  </div>
</div>
  

  <div class="row mt-5 mb-5" style="background-image:linear-gradient(180deg, #3097a5 0%, rgb(48 151 165) 100%);border-radius: 10px;">
    <div class="col-lg-3 text-center mt-5 mb-5">
      <img src="{{asset('admin/assets/img/Newsletter.png')}}" alt="" class="img-fluid w-50">
    </div>
      <div class="col-lg-9 mt-5 mb-5">
        <p style="font-size: 18px; color:white">Nourrissez vos abonnés avec des informations exclusives du secteur immobilier pour les envelopper dans une atmosphère chaleureuse et familière, où ils se sentiront toujours chez eux.</p>
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
                <th><strong>email</strong></th>
                
                 
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach ($Newsletter as $item)
              <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->email}}</td>
                
                
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