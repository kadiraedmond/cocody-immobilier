@extends('layouts.admin')

@section('content')

<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Parametre/</span> Ajouter un utilisateur</h4>

              <!-- Basic Layout -->
              <div class="row">
                <div class="col-xl">
                  <div class="card mb-4">
                     
                    <div class="card-body">
                        <form action="{{ url('add-user') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                          <div class="mb-3">
                              <label class="form-label" for="basic-default-company">Nom</label>
                              <input type="text" name="name" class="form-control" id="basic-default-company" />
                           </div>
                           <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Prénoms</label>
                            <input type="text" name="prenoms" class="form-control" id="basic-default-company" />
                         </div>

                         <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Téléphone</label>
                          <input type="tel" name="telephone" class="form-control" id="basic-default-company" />
                       </div>
                         <div class="mb-3">
                            <label for="defaultSelect" class="form-label">Rôle</label>
                            <select id="defaultSelect" name="type" class="form-select">
                              <option value=""> </option>
                              <option value="Administrateur">Administrateur</option>
                              <option value="Gestionnaire">Gestionnaire</option>
                              <option value="Gérant">Gérant</option>
                               
                            </select>
                          </div>

                          <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Poste</label>
                            <input type="text" name="poste" class="form-control" id="basic-default-company" />
                         </div>
                         <div> 

                          <label class="form-label" for="basic-default-company">Email</label>
                          <input type="text" name="email" class="form-control" id="basic-default-company" />
                        </div>

                        <div class="mb-3 form-password-toggle">
                          <label class="form-label" for="password">MOT DE PASSE</label>
                          <div class="input-group input-group-merge">
                            <input
                              type="password"
                              id="password"
                              class="form-control
                              @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"
                              placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                              aria-describedby="password"
                            />
                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                          </div>
                        </div>
        
                        
                          <button type="submit" class="btn btn-primary">Envoyer</button>
                      </form>
                     </div>
                        
 
                        
                     
                    </div>
                  </div>
                </div>
                 
              </div>

@endsection