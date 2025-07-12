@extends('layouts.admin')
 @section('content')
 <div class="row">     
    <div class="col-lg-12" style=" background:linear-gradient(90deg, #ffffff 0%, rgb(48 151 165) 100%);border-radius: 10px;">
      <div class="row row-cols-lg-3 row-cols-md-4 row-cols-sm-2 mt-3 mb-1 px-2">
        <div class="col-">
          <div class="row">
            <div class="col-6">
              <h4 style="font-size: 20px; margin-top:23px">Tous</h4>
            </div>
            <div class="col-6">
               <button class="btn btn-primary" id="btn-dash" style="width: 100px;
               height: 39px;
               font-size: 15px !important;">5.000</button>
            </div>
          </div>

        </div>

         
      </div>
    </div>
  </div>
  

  <div class="row mt-5 mb-5" style="background-image:linear-gradient(180deg, #3097a5 0%, rgb(48 151 165) 100%);border-radius: 10px;">
    <div class="col-lg-3 text-center mt-5 mb-5">
      <img src="assets/img/illustrations/man-with-laptop-light.png" alt="" class="img-fluid w-50">
    </div>
      <div class="col-lg-9 mt-5 mb-5">
        <p style="font-size: 18px; color:white">une interface conviviale, vous permet de facilement des demandes de paiement et
          avoir une vue d'ensemble de vos activités financières. vous pouvez analyser les
          performances de vos ventes et prendre des décisions éclairées pour maximiser vos
          revenus.</p>
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
                <th><strong>Ref</strong></th>
                <th><strong>Email</strong></th>
                <th><strong>Action</strong></th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              <tr>
                <td>1</td>
                <td>Albert Cook</td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="detail_immo.html"
                        ><i class="bx bx-edit-alt me-1"></i> Voir</a
                      >
                      <a class="dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                      >
                      <a class="dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-trash me-1"></i>Supprimer</a
                      >
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                  <td>1</td>
                  <td>Albert Cook</td>
                  <td>
                    <div class="dropdown">
                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="detail_immo.html"
                          ><i class="bx bx-edit-alt me-1"></i> Voir</a
                        >
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                        >
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-trash me-1"></i>Supprimer</a
                        >
                      </div>
                    </div>
                  </td>
              </tr>
              <tr>
                  <td>1</td>
                  <td>Albert Cook</td>
                  <td>
                    <div class="dropdown">
                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="detail_immo.html"
                          ><i class="bx bx-edit-alt me-1"></i> Voir</a
                        >
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                        >
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-trash me-1"></i>Supprimer</a
                        >
                      </div>
                    </div>
                  </td>
              </tr>
              <tr>
                  <td>1</td>
                  <td>Albert Cook</td>
                  <td>
                    <div class="dropdown">
                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="detail_immo.html"
                          ><i class="bx bx-edit-alt me-1"></i> Voir</a
                        >
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                        >
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-trash me-1"></i>Supprimer</a
                        >
                      </div>
                    </div>
                  </td>
              </tr>
            </tbody>
          </table>
        </div>
        </div>
    </div>
  </div>

 @endsection