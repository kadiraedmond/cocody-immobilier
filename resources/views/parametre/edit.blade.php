@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Modifier un utilisateur
                        
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-user/'.$user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Nom</label>
                            <input type="text" name="name" value="{{$user->name}}" class="form-control" id="basic-default-company" />
                         </div>
                         <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Prénoms</label>
                          <input type="text" name="prenoms" value="{{$user->prenoms}}" class="form-control" id="basic-default-company" />
                       </div>

                       <div class="mb-3">
                        <label class="form-label" for="basic-default-company">Téléphone</label>
                        <input type="tel" name="telephone" value="{{$user->telephone}}" class="form-control" id="basic-default-company" />
                     </div>
                       <div class="mb-3">
                          <label for="defaultSelect" class="form-label">Rôle</label>
                          <select id="defaultSelect" name="type" class="form-select">
                            <option value="{{$user->type}}">{{$user->type}}</option>
                            <option value="Administrateur">Administrateur</option>
                            <option value="Gestionnaire">Gestionnaire</option>
                            <option value="Gérant">Gérant</option>
                             
                          </select>
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Poste</label>
                          <input type="text" name="poste" value="{{$user->poste}}" class="form-control" id="basic-default-company" />
                       </div>
                       <div> 

                        <label class="form-label" for="basic-default-company">Email</label>
                        <input type="text" name="email" value="{{$user->email}}" class="form-control" id="basic-default-company" />
                      </div>

                      <div class="mb-3 form-password-toggle">
                        <label class="form-label" for="password">MOT DE PASSE</label>
                        <div class="input-group input-group-merge">
                          <input
                            type="password"
                            id="password"
                            value="{{$user->password}}"
                            class="form-control
                            @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            aria-describedby="password"
                          />
                          <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                        </div>
                      </div>
      
                   
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Modifier</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
