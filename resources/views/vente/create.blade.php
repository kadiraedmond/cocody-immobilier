@extends('layouts.admin')

@section('content')

<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Vente/</span> Ajouter un bien en vente</h4>

              <!-- Basic Layout -->
              <div class="row">
                <div class="col-xl">
                  <div class="card mb-4">
                     
                    <div class="card-body">
                        <form action="{{ url('add-vente') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                         <div class="mb-3">
                            <label for="defaultSelect" class="form-label">Type</label>
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

                          <div class="mb-3">
                            <label class="form-label" for="basic-default-message">Presentation</label>
                            <textarea
                              id="basic-default-message"
                              class="form-control"
                              name="presentation"
                            ></textarea>
                          </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Adresse</label>
                          <input type="text" name="adresse" class="form-control" id="basic-default-company" />
                        </div>
                       
                          <div class="mb-3">
                            <label for="defaultSelect" class="form-label">Configuration </label>
                            <select id="defaultSelect" name="configuration"  class="form-select">
                              <option></option>
                              <option value="studio">Studio</option>
                              <option value="deux_piéces">Deux pièces </option>
                              <option value="trois_piéces">Trois pièces </option>
                              <option value="quatre_piéces">Quatre pièces </option>
                              <option value="cinq_piéces">Cinq pièces </option>
                              <option value="six_piéces">Six pièces</option>
                              <option value="entrepot">Entrepôts</option>
                              <option value="boutique">Boutique</option>
                            </select>
                          </div>
                        
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-phone">Prix</label>
                          <input
                            type="text"
                            id="basic-default-phone"
                            class="form-control phone-mask"
                            name="prix"
                          />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-email">Superficie</label>
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                id="basic-icon-default-email"
                                class="form-control" 
                                name="superficie"
                              />
                               
                            </div>
                             
                        </div>
                        {{-- <div class="mb-3">
                            <small class="d-block" style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: inherit;">La cour</small>
                            <div class="form-check form-check-inline mt-3">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="cour"
                                id="inlineRadio1"
                                value="oui"
                              />
                              <label class="form-check-label" for="inlineRadio1">Oui</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="cour"
                                id="inlineRadio2"
                                value="non"
                              />
                              <label class="form-check-label" for="inlineRadio2">Non</label>
                            </div>
                            
                        </div> --}}

                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-icon-default-email">Climatisation</label>
                                    <div class="input-group input-group-merge">
                                      <input
                                        type="number"
                                        id="basic-icon-default-email"
                                        class="form-control" 
                                        name="climatisation"
                                      />
                                       
                                    </div>
                                     
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-icon-default-email">Douche</label>
                                    <div class="input-group input-group-merge">
                                      <input
                                        type="number"
                                        id="basic-icon-default-email"
                                        class="form-control" 
                                        name="douche"
                                      />
                                       
                                    </div>
                                     
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-icon-default-email">Cuisine</label>
                                    <div class="input-group input-group-merge">
                                      <input
                                        type="number"
                                        id="basic-icon-default-email"
                                        class="form-control" 
                                        name="cuisine"
                                      />
                                       
                                    </div>
                                     
                                </div>
                            </div>
                            <div class="col-md-3">
                              <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-email">Balcon</label>
                                <div class="input-group input-group-merge">
                                  <input
                                    type="number"
                                    id="basic-icon-default-email"
                                    class="form-control" 
                                    name="balcon"
                                  />
                                   
                                </div>
                                 
                            </div>
                            
                            </div>
                        </div>

                        <div class="mb-3">
                          <label for="defaultSelect" class="form-label">Niveau </label>
                          <select id="defaultSelect" name="niveau" class="form-select">
                            <option></option>
                            <option value="rez-de-chaussée">rez-de-chaussée</option>
                            <option value="1">Etage 1</option>
                            <option value="2">Etage 2 </option>
                            <option value="3">Etage 3</option>
                            <option value="4">Etage 4 </option>
                            <option value="5">Etage 5</option>
                            <option value="6">Etage 6 </option>
                            <option value="7">Etage 7</option>
                            <option value="8">Etage 8 </option>
                            <option value="9">Etage 9</option>
                            <option value="10">Etage 10 </option>
                             
                          </select>
                        </div>

                         
                        <div class="row">
                          <div class="col-md-3">
                              <div class="mb-3">
                                  <small class="d-block" style="font-size: 11px; text-transform: uppercase; letter-spacing: inherit;">Sonnerie</small>
                                  <div class="form-check form-check-inline mt-3">
                                    <input
                                      class="form-check-input"
                                      type="radio"
                                      name="sonnerie"
                                      id="inlineRadio1"
                                      value="oui"
                                    />
                                    <label class="form-check-label" for="inlineRadio1" style="font-size: 11px;">Oui</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input
                                      class="form-check-input"
                                      type="radio"
                                      name="sonnerie"
                                      id="inlineRadio2"
                                      value="non"
                                    />
                                    <label class="form-check-label" for="inlineRadio2" style="font-size: 11px;">Non</label>
                                  </div>
                                  
                              </div>  
                          </div>
                          <div class="col-md-3">
                              <div class="mb-3">
                                  <small class="d-block" style="font-size: 11px; text-transform: uppercase; letter-spacing: inherit;">Alarme incendie </small>
                                  <div class="form-check form-check-inline mt-3">
                                    <input
                                      class="form-check-input"
                                      type="radio"
                                      name="alarme"
                                      id="inlineRadio1"
                                      value="oui"
                                    />
                                    <label class="form-check-label" for="inlineRadio1" style="font-size: 11px;">Oui</label>
                                  </div>
                                  <div class="form-check form-check-inline" >
                                    <input
                                      class="form-check-input"
                                      type="radio"
                                      name="alarme"
                                      id="inlineRadio2"
                                      value="non"
                                    />
                                    <label class="form-check-label" for="inlineRadio2" style="font-size: 11px;">Non</label>
                                  </div>
                                  
                              </div>                                
                          </div>
                          <div class="col-md-3">
                              <div class="mb-3">
                                  <small class="d-block" style="font-size: 11px; text-transform: uppercase; letter-spacing: inherit;">Détecteur de fumée </small>
                                  <div class="form-check form-check-inline mt-3">
                                    <input
                                      class="form-check-input"
                                      type="radio"
                                      name="detecteur"
                                      id="inlineRadio1"
                                      value="oui"
                                    />
                                    <label class="form-check-label" for="inlineRadio1" style="font-size: 11px;">Oui</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input
                                      class="form-check-input"
                                      type="radio"
                                      name="detecteur"
                                      id="inlineRadio2"
                                      value="non"
                                    />
                                    <label class="form-check-label" for="inlineRadio2" style="font-size: 11px;">Non</label>
                                  </div>
                                  
                              </div>                           
                          </div>

                          <div class="col-md-3">
                            <div class="mb-3">
                                <small class="d-block" style="font-size: 11px; text-transform: uppercase; letter-spacing: inherit;">sécurité </small>
                                <div class="form-check form-check-inline mt-3">
                                  <input
                                    class="form-check-input"
                                    type="radio"
                                    name="securite"
                                    id="inlineRadio1"
                                    value="oui"
                                  />
                                  <label class="form-check-label" for="inlineRadio1"  style="font-size: 11px;">Oui</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input
                                    class="form-check-input"
                                    type="radio"
                                    name="securite"
                                    id="inlineRadio2"
                                    value="non"
                                  />
                                  <label class="form-check-label" for="inlineRadio2" style="font-size: 11px;">Non</label>
                                </div>
                                
                            </div>                           
                        </div>
                      </div>

                        
                       
                     
                    </div>
                  </div>
                </div>
                <div class="col-xl">
                  <div class="card mb-4">
                    
                    <div class="card-body">
                        
                      

                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <small class="d-block" style="font-size: 11px; text-transform: uppercase; letter-spacing: inherit;">Contrôle d’accès </small>
                                    <div class="form-check form-check-inline mt-3">
                                      <input
                                        class="form-check-input"
                                        type="radio"
                                        name="controle"
                                        id="inlineRadio1"
                                        value="oui"
                                      />
                                      <label class="form-check-label" for="inlineRadio1" style="font-size: 11px;">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input
                                        class="form-check-input"
                                        type="radio"
                                        name="controle"
                                        id="inlineRadio2"
                                        value="non"
                                      />
                                      <label class="form-check-label" for="inlineRadio2" style="font-size: 11px;">Non</label>
                                    </div>
                                    
                                </div>  
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <small class="d-block" style="font-size: 11px; text-transform: uppercase; letter-spacing: inherit;">Ascenseur </small>
                                    <div class="form-check form-check-inline mt-3">
                                      <input
                                        class="form-check-input"
                                        type="radio"
                                        name="ascenseur"
                                        id="inlineRadio1"
                                        value="oui"
                                      />
                                      <label class="form-check-label" for="inlineRadio1" style="font-size: 11px;">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input
                                        class="form-check-input"
                                        type="radio"
                                        name="ascenseur"
                                        id="inlineRadio2"
                                        value="non"
                                      />
                                      <label class="form-check-label" for="inlineRadio2" style="font-size: 11px;">Non</label>
                                    </div>
                                    
                                </div>                                
                            </div>
                            <div class="col-md-3">
                              <div class="mb-3">
                                  <small class="d-block" style="font-size: 11px; text-transform: uppercase; letter-spacing: inherit;">Cour </small>
                                  <div class="form-check form-check-inline mt-3">
                                    <input
                                      class="form-check-input"
                                      type="radio"
                                      name="cour"
                                      id="inlineRadio1"
                                      value="oui"
                                    />
                                    <label class="form-check-label" for="inlineRadio1" style="font-size: 11px;">Oui</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input
                                      class="form-check-input"
                                      type="radio"
                                      name="cour"
                                      id="inlineRadio2"
                                      value="non"
                                    />
                                    <label class="form-check-label" for="inlineRadio2" style="font-size: 11px;">Non</label>
                                  </div>
                                  
                              </div>                                
                            </div>

                            <div class="col-md-3">
                              <div class="mb-3">
                                  <small class="d-block" style="font-size: 11px; text-transform: uppercase; letter-spacing: inherit;">Groupe électrogène</small>
                                  <div class="form-check form-check-inline mt-3">
                                    <input
                                      class="form-check-input"
                                      type="radio"
                                      name="groupe"
                                      id="inlineRadio1"
                                      value="oui"
                                    />
                                    <label class="form-check-label" for="inlineRadio1" style="font-size: 11px;">Oui</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input
                                      class="form-check-input"
                                      type="radio"
                                      name="groupe"
                                      id="inlineRadio2"
                                      value="non"
                                    />
                                    <label class="form-check-label" for="inlineRadio2" style="font-size: 11px;">Non</label>
                                  </div>
                                  
                              </div>                                
                            </div>
                        </div>
                        {{-- <div class="mb-3">
                            <small class="d-block" style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: inherit;">Titre de propriété </small>
                            <small class="d-block mt-2">ACD</small>
                            <div class="form-check form-check-inline mt-3">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="inlineRadioOptions"
                                id="inlineRadio1"
                                value="oui"
                              />
                              <label class="form-check-label" for="inlineRadio1">Oui</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="inlineRadioOptions"
                                id="inlineRadio2"
                                value="non"
                              />
                              <label class="form-check-label" for="inlineRadio2">Non</label>
                            </div>
                            
                        </div> --}}

                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-fullname">Image de couverture </label>
                            <div class="input-group input-group-merge">
                              
                              <input
                                type="file"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                placeholder="John Doe"
                                aria-label="John Doe"
                                name="images[]"
                                multiple accept="image/*"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                        </div>

                        <div class="row">
                          <div class="col-md-4">
                            <div class="mb-3">
                              <label class="form-label" for="basic-icon-default-fullname">Image 1 </label>
                              <div class="input-group input-group-merge">
                                
                                <input
                                  type="file"
                                  class="form-control"
                                  id="basic-icon-default-fullname"
                                  placeholder="John Doe"
                                  aria-label="John Doe"
                                  name="imag"
                                  aria-describedby="basic-icon-default-fullname2"
                                />
                              </div>
                          </div>
                          </div>
                          <div class="col-md-4">
                            <div class="mb-3">
                              <label class="form-label" for="basic-icon-default-fullname">Image 2 </label>
                              <div class="input-group input-group-merge">
                                
                                <input
                                  type="file"
                                  class="form-control"
                                  id="basic-icon-default-fullname"
                                  placeholder="John Doe"
                                  aria-label="John Doe"
                                  name="ima"
                                  aria-describedby="basic-icon-default-fullname2"
                                />
                              </div>
                          </div>
                          </div>
                          <div class="col-md-4">
                            <div class="mb-3">
                              <label class="form-label" for="basic-icon-default-fullname">Image 3 </label>
                              <div class="input-group input-group-merge">
                                
                                <input
                                  type="file"
                                  class="form-control"
                                  id="basic-icon-default-fullname"
                                  placeholder="John Doe"
                                  aria-label="John Doe"
                                  name="im"
                                  
                                  aria-describedby="basic-icon-default-fullname2"
                                />
                              </div>
                          </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-4">
                            <div class="mb-3">
                              <label class="form-label" for="basic-icon-default-fullname">Image 4 </label>
                              <div class="input-group input-group-merge">
                                
                                <input
                                  type="file"
                                  class="form-control"
                                  id="basic-icon-default-fullname"
                                  placeholder="John Doe"
                                  aria-label="John Doe"
                                  name="picture"
                                  aria-describedby="basic-icon-default-fullname2"
                                />
                              </div>
                          </div>
                          </div>
                          <div class="col-md-4">
                            <div class="mb-3">
                              <label class="form-label" for="basic-icon-default-fullname">Image 5 </label>
                              <div class="input-group input-group-merge">
                                
                                <input
                                  type="file"
                                  class="form-control"
                                  id="basic-icon-default-fullname"
                                  placeholder="John Doe"
                                  aria-label="John Doe"
                                  name="pictur"
                                  aria-describedby="basic-icon-default-fullname2"
                                />
                              </div>
                          </div>
                          </div>
                          <div class="col-md-4">
                            <div class="mb-3">
                              <label class="form-label" for="basic-icon-default-fullname">Image 6  </label>
                              <div class="input-group input-group-merge">
                                
                                <input
                                  type="file"
                                  class="form-control"
                                  id="basic-icon-default-fullname"
                                  placeholder="John Doe"
                                  aria-label="John Doe"
                                  name="pict"
                                  
                                  aria-describedby="basic-icon-default-fullname2"
                                />
                              </div>
                          </div>
                          </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-fullname">Vidéo</label>
                            <div class="input-group input-group-merge">
                              
                              <input
                                type="file"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                placeholder="John Doe"
                                aria-label="John Doe"
                                name="videos"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                        </div>
                        {{-- <div class="mb-3">
                            <label class="form-label" for="basic-default-message">Conditions </label>
                            <textarea
                              id="basic-default-message"
                              class="form-control"
                            ></textarea>
                        </div> --}}
                         
                       
                       <div class="row">
                       <H2 style="font-size: 21px;">Responsable </H2>
                            <div class="col-md-12">
                                <div class="mb-3">
                                            <label class="form-label" for="basic-icon-default-fullname">Image</label>
                                            <div class="input-group input-group-merge">
                                            
                                            <input
                                                type="file"
                                                class="form-control"
                                                id="basic-icon-default-fullname"
                                                placeholder="John Doe"
                                                name="resp_images"
                                                aria-label="John Doe"
                                                aria-describedby="basic-icon-default-fullname2"
                                            />
                                            </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-icon-default-email">Nom</label>
                                    <div class="input-group input-group-merge">
                                      <input
                                        type="text"
                                        id="basic-icon-default-email"
                                        class="form-control" 
                                        name="nom"
                                      />
                                       
                                    </div>
                                     
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-icon-default-email">Prénoms</label>
                                    <div class="input-group input-group-merge">
                                      <input
                                        type="text"
                                        id="basic-icon-default-email"
                                        class="form-control" 
                                        name="prenoms"
                                      />
                                       
                                    </div>
                                     
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-icon-default-email">Téléphone</label>
                                    <div class="input-group input-group-merge">
                                      <input
                                        type="tel"
                                        id="basic-icon-default-email"
                                        class="form-control" 
                                        name="telephone"
                                      />
                                       
                                    </div>
                                     
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-icon-default-email">Adresse électronique </label>
                                    <div class="input-group input-group-merge">
                                      <input
                                        type="email"
                                        id="basic-icon-default-email"
                                        class="form-control" 
                                        name="resp_adresse"
                                      />
                                       
                                    </div>
                                     
                                </div>
                            </div>
                        </div>

                       
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
@endsection