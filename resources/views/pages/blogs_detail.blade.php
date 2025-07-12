@extends('layouts.front')
@section('content')

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="index.html">Home</a></li>
            <li>Détails du blog</li>
        </ol>

    </div>
</section><!-- End Breadcrumbs -->

<section id="portfolio-details" class="portfolio-details">
    <div class="container">
        
          <div class="row g-5">
            <div class="col-md-8">
              <img src="{{ asset('uploads/Blog/'.$blog->images) }}" alt="" class="img-fluid w-100 mb-3" style="height: 40%; border-radius: 5px;">
              <h3 class="pb-4 mb-4 fst-italic border-bottom">
               {{$blog->titre}}
              </h3>
        
              <article class="blog-post">
                <h2 class="blog-post-title mb-4" style="font-size: 19px; font-weight: 600;">Extrait</h2>
                 
        
                <p>{{$blog->extrait}}</p>
                <hr>
                  <p>{!!$blog->message!!}</p> 
              </article>
              <hr>
              
            </div>
            
        
            <div class="col-md-4">
              <div class="position-sticky" style="top: 0rem;">
                <div class="p-4 mb-3 bg-light rounded">
                  <h4 class="fst-italic">Apropos</h4>
                  <p class="mb-0">Notre page de détail vous invite à plonger dans l'intimité d'une propriété unique, à découvrir ses secrets et à imaginer comment elle pourrait devenir votre chez-vous. De la vue panoramique depuis le balcon aux détails architecturaux soignés, laissez-vous inspirer par ce rêve immobilier.</p>
                </div>
        
                <div class="p-4">
                  <h4 class="fst-italic mb-4">Categories d'articles</h4>
                  <ol class="list-unstyled mb-0">
                   

                    <li><a href="{{url('blog-conseil')}}">Conseils</a></li>
                    <li><a href="{{url('blog-vente')}}">Vente</a></li>
                    <li><a href="{{url('blog-location')}}">Location</a></li>
                    <li><a href="{{url('blog-construction')}}">Construction</a></li>
                    <li><a href="{{url('blog-gestion')}}">Gestion</a></li>
                   
                    
                  </ol>

                </div>

                <div class="p-4" style="background:#f8f9fa">
                  <h4 class="fst-italic mb-4">Articles récents</h4>
                  <ol class="list-unstyled mb-0">
                    
                     @foreach ($blogs as $item)
                      <li>
                        <div class="card mb-3 border-0"  style="background:#f8f9fa;border-radius: 5px;">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="{{ asset('uploads/Blog/'.$item->images) }}" class="img-fluid rounded-start w-75" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <a href="{{ url('blog-details/'.$item->id)}}">
                                  <h5 class="card-title" style="font-size: 14px;">{{$item->titre}}</h5>
                                </a>
                                  <p style="font-size: 13px;">{{ Str::limit($item->extrait, 50) }}</p>
                               
                              
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <hr>
                     @endforeach
                     <li class="text-center">
                      <a href="{{url('blogs')}}">
                        <h5>Voir tous nos articles</h5>
                      </a>
                     
                     </li>
           
                  </ol>
                  
                </div>
        
                
              </div>
            </div>
          </div>
    </div>
   
</section>


<section id="portfolio-details" class="portfolio-details">
    <div class="container">
        
          <div class="row g-5">
            <div class="col-md-8">
              
              <div class="row">
               
                <div class="col-md-12">
                  <h2 class="mb-4" style="font-size: 19px;
                  font-weight: 600;
                  margin-top: 44px;">Laisser un commentaire</h2>
                  <form method="POST" action="{{ url('comment') }}">
                    @csrf
                    <div class="row" style="background: #f8f9fa; border-radius: 5px;">
                      <div class="col-md-12 mt-3 mb-3">
                        <label for="validationCustom02" class="form-label">Votre nom *</label>
                        <input type="text" class="form-control" name="nom" id="validationCustom03" placeholder="nom" required style="height: 47px;">
                        
                      </div>
                      <div class="col-md-12">
                        <label for="validationCustom02" class="form-label">Votre commentaire *</label>
                        <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                        <textarea name="content" rows="4" cols="50" class="form-control" placeholder="Ajouter un commentaire" style="height: 161px;"></textarea>
                      </div>

                      <div class="col-md-12 mb-4">
                        <button class="btn btn-primary mt-4" type="submit" style=" background: #3097a5; border-color: #3097a5;">Laisser un commentaire</button>
                      </div>
                     
                    </div>
                   
                   
                </form>
                
                </div>

                <div class="col-md-12">
                  <h2 class="mb-4" style="font-size: 19px;
                  font-weight: 600;
                  margin-top: 44px;">Commentaires précédents</h2>
                  <hr>
                 
                    @foreach ($blog->comments as $comment)
                        <div class="comment">
                          <div class="row">
                            <div class="col-md-6">
                              <p><strong>{{ $comment->nom }} </strong></p>
                              <p style="color: #aaa; font-size: 13px; margin-top: -14px;"> Posté le {{ $comment->created_at }} </p>
                            </div>
                            <div class="col-md-6">
                              <p style="font-size: 15px;">{{ $comment->content }}</p>
                            </div>
                          </div>
                          
                            
                        </div>
                        <hr>
                    @endforeach

                </div>
              </div>
        
             
            </div>
        
            <div class="col-md-4">
              
            </div>
          </div>
    </div>
   
</section>
    
@endsection