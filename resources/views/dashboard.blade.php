@extends('layouts.admin')
@section('content')
            <div class="row" style="margin-top: 40px;">
                <div class="col-lg-6 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4 text-center">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex" style=" justify-content: center;">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="{{asset('admin/assets/img/location.png')}}"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                             
                          </div>
                          <span class="fw-semibold d-block mb-1" style="font-size: 18px; color: black;">Location</span>
                          <h3 class="card-title mb-2 mt-2" style="font-size: 18px;">{{$loc}}</h3>
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4 text-center">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex" style=" justify-content: center;">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="{{asset('admin/assets/img/vente.png')}}"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                             
                          </div>
                          <span class="fw-semibold d-block mb-1 " style="font-size: 18px; color: black;">Vente</span>
                          <h3 class="card-title mb-2 mt-2" style="font-size: 18px;">{{$ve}}</h3>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-4 order-1 ">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4 text-center">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex" style=" justify-content: center;">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="{{asset('admin/assets/img/achat.png')}}"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                             
                          </div>
                          <span class="fw-semibold d-block mb-1" style="font-size: 18px; color: black;">Achat</span>
                          <h3 class="card-title mb-2 mt-2" style="font-size: 18px;">0</h3>
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4 text-center">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex" style=" justify-content: center;">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="{{asset('admin/assets/img/Blog.png')}}"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                             
                          </div>
                          <span class="fw-semibold d-block mb-1" style="font-size: 18px; color: black;">Blog</span>
                          <h3 class="card-title mb-2 mt-2" style="font-size: 18px;">{{$blo}}</h3>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4 text-center">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex" style=" justify-content: center;">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="{{asset('admin/assets/img/visites.png')}}"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                             
                          </div>
                          <span class="fw-semibold d-block mb-1" style="font-size: 18px; color: black;">Visites</span>
                          <h3 class="card-title mb-2 mt-2" style="font-size: 18px;">{{$vis}}</h3>
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4 text-center">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex" style=" justify-content: center;">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="{{asset('admin/assets/img/Newsletter.png')}}"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                             
                          </div>
                          <span class="fw-semibold d-block mb-1 " style="font-size: 18px; color: black;">Newsletter</span>
                          <h3 class="card-title mb-2 mt-2" style="font-size: 18px;">{{$vis}}</h3>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-4 order-1 ">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4 text-center">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex" style=" justify-content: center;">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="{{asset('admin/assets/img/Contact.png')}}"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                             
                          </div>
                          <span class="fw-semibold d-block mb-1" style="font-size: 18px; color: black;">Contact</span>
                          <h3 class="card-title mb-2 mt-2" style="font-size: 18px;">{{$cont}}</h3>
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4 text-center">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex" style=" justify-content: center;">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="{{asset('admin/assets/img/Communication.png')}}"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                             
                          </div>
                          <span class="fw-semibold d-block mb-1" style="font-size: 18px; color: black;">Communication</span>
                          <h3 class="card-title mb-2 mt-2" style="font-size: 18px;">{{$com}}</h3>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
@endsection