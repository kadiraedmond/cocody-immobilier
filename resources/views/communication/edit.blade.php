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
                    <h4>Modifier la communication
                        
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-communication/'.$Communication->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Titre</label>
                            <input type="text" name="titre" class="form-control"  value="{{$Communication->titre}}" id="basic-default-company" />
                         </div>
                       <div class="mb-3">
                          <label for="defaultSelect" class="form-label">Catégorie</label>
                          <select id="defaultSelect" name="categorie" class="form-select">
                            <option value="{{$Communication->categorie}}">{{$Communication->categorie}}</option>
                            <option value="Information">Information</option>
                            <option value="Marketing">Marketing</option>
                             
                          </select>
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Destinataire</label>
                          <input type="text" name="destinataire" value="{{$Communication->destinataire}}" class="form-control" id="basic-default-company" />
                       </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-default-message">Message</label>
                          <textarea
                            id="basic-default-message"
                            class="form-control"
                            name="message"
                            value="{{$Communication->message}}"
                          >
                          {{$Communication->message}}</textarea>
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
