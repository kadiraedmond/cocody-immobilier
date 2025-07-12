@extends('layouts.admin')

@section('content')

<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Parametre/</span> Ajouter un rôle</h4>

              <!-- Basic Layout -->
              <div class="row">
                <div class="col-xl">
                  <div class="card mb-4">
                     
                    <div class="card-body">
                        <form action="{{ url('add-role') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                          <div class="mb-3">
                              <label class="form-label" for="basic-default-company">nom</label>
                              <input type="text" name="nom" class="form-control" id="basic-default-company" />
                           </div>

                           <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Attribution</label>
                            <input type="text" name="attribution" class="form-control" id="basic-default-company" />
                         </div>
                       
                          <button type="submit" class="btn btn-primary">Envoyer</button>
                      </form>
                     </div>
                        
 
                        
                     
                    </div>
                  </div>
                </div>
                 
              </div>

@endsection