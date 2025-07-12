@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Ajouter un blog
                        <a href="{{ url('blog') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('add-blog') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">titre du blog</label>
                            <input type="text" name="titre" class="form-control"> 
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Resumer du blog</label>
                            <textarea type="text" name="resume" class="form-control"></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Premiere paragraphe du blog</label>
                            <textarea type="text" name="paragraphe1" class="form-control"></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Deuxieme paragraphe du blog</label>
                            <textarea type="text" name="paragraphe2" class="form-control"></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Troisiemme paragraphe du blog</label>
                            <textarea type="text" name="paragraphe3" class="form-control"></textarea>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="">Photo de initiale</label>
                            <input type="file" name="picture" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Photo de initiale</label>
                            <input type="file" name="images" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Photo de initiale</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                         
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save blog</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection