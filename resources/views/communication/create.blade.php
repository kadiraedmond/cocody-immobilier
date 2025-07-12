@extends('layouts.admin')

@section('content')

<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Communication/</span> Ajouter une communication</h4>

              <!-- Basic Layout -->
              <div class="row">
                <div class="col-xl">
                  <div class="card mb-4">
                     
                    <div class="card-body">
                        <form action="{{ url('add-communication') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                          <div class="mb-3">
                              <label class="form-label" for="basic-default-company">Titre</label>
                              <input type="text" name="titre" class="form-control" id="basic-default-company" />
                           </div>
                         <div class="mb-3">
                            <label for="defaultSelect" class="form-label">Catégorie</label>
                            <select id="defaultSelect" name="categorie" class="form-select">
                              <option value="Information">Information</option>
                              <option value="Marketing">Marketing</option>
                               
                            </select>
                          </div>

                          <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Titre</label>
                            <input type="email" name="destinataire" class="form-control" id="basic-default-company" />
                         </div>

                          {{-- <div class="mb-3">
                            <label for="defaultSelect" class="form-label">Destinataire</label>
                            <select id="defaultSelect" name="destinataire" class="form-select">
                             
                                <option value=" @foreach ($new as $email) {{ $email }}  @endforeach"> Newsletter</option> 
                                <option value=" @foreach ($visite as $email) {{ $email }}  @endforeach"> Visite</option> 
                                <option value=" @foreach ($contact as $email) {{ $email }}  @endforeach"> Contact</option> 
                                <option value=" @foreach ($rdv as $email) {{ $email }}  @endforeach"> Rendez-vous</option> 
                            
                             
                              
                               
                            </select>
                          </div> --}}


                          <div class="mb-3">
                            <label class="form-label" for="basic-default-message">Message</label>
                            <textarea
                              id="basic-default-message"
                              class="form-control"
                              name="message"
                              style="height: 200px;"
                            ></textarea>
                          </div>

                          <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Image</label>
                            <input type="file" name="images" class="form-control" id="basic-default-company" />
                         </div>
                       
                          <button type="submit" class="btn btn-primary">Envoyer</button>
                      </form>
                     </div>
                        
 
                        
                     
                    </div>
                  </div>
                </div>
                 
              </div>

@endsection