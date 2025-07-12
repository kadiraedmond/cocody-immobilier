@extends('layouts.front')

@section('content')

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details" style="margin-top: 80px;">
        <div class="container">
  
          <div class="row g-2">
            <div class="col-lg-6">
                <img src="{{asset('front/assets/img/about.jpg')}}" alt="" class="img-fluid w-75" style="border-radius: 5px">
            </div>
            <div class="col-lg-6">
               <h1 style="font-size: 54px;">Vos Rêves Prendront Vie ici. </h1>
               <p class="mt-4">Bienvenue dans l'univers captivant de Cocody Immobilier, où chaque brique, chaque espace et chaque transaction sont façonnés avec une passion inébranlable pour l'excellence. 
               </p>
            </div>
          </div>    
        </div>
      </section>
      <!-- End Portfolio Details Section -->

    <section id="faq" class="faq" style="background: #f6f8fb ;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px; border:none ;">
              <div class="row g-0" style="box-shadow: 5px 5px 10px rgba(0,0,0,.2);border-radius: 5px;">
                <div class="col-md-4">
                  <img src="{{asset('front/assets/img/e/about.jpg')}}" class="img-fluid rounded-start h-100 w-100" alt="..." style="height: 316px !important;
                  object-fit: cover;">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    
                    <p class="card-text mb-4">Nous sommes bien plus qu'une simple agence immobilière – nous sommes les artisans de vos rêves immobiliers, les architectes de vos projets et les gardiens de vos aspirations. </p>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px; border:none;">
              <div class="row g-0" style="box-shadow: 5px 5px 10px rgba(0,0,0,.2); border-radius: 5px;">
                <div class="col-md-4">
                  <img src="{{asset('front/assets/img/e/about1.jpg')}}" class="img-fluid rounded-start h-100 w-100" alt="..." style="height: 316px !important;
                  object-fit: cover;">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                     
                    <p class="card-text">En choisissant Cocody Immobilier, vous faites bien plus que choisir un service ; vous choisissez un partenariat qui transcende les attentes et définit de nouvelles normes dans le domaine de l'immobilier.</p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
         
      </div>
    </section><!-- End Frequently Asked Questions Section -->

     <section id="faq" class="faq" style="">
        <div class="container">
          <div class="row row-cols-1 row-cols-md-2 g-4">
              <div class="col" style="margin-top: 26px;">
                <div class="row mb-2">
                  <div class="col-md-12  ">
                      <h1 style="font-size: 20px; font-weight: 700;"> Qui somme nous ?</h1>
                       
                  </div>
               </div>
                <p style=" line-height: 35px;">Dans le tourbillon des opportunités immobilières, nous sommes la constante qui vous guidera avec assurance. Chez Cocody Immobilier, nous sommes votre boussole dans le monde de l'immobilier. Avec une équipe de professionnels passionnés et une connaissance approfondie du marché, nous sommes vos partenaires dévoués pour réaliser vos ambitions. </p>
  
              </div>
              
              <div class="col text-center">
                <img src="{{ asset('front/assets/img/blog-2.jpg')}}" alt=""  class="img-fluid" style="    border-radius: 0% 100% 100% 0%;
                width: 350px;
                height: 350px;">
                 
              </div>
              
  
          </div>
        </div>
      </section><!-- End Frequently Asked Questions Section -->


       <!-- ======= Steps Section ======= -->
       <section id="steps" class="steps" style="background: #f6f8fb">
        <div class="container">
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100 border-0" style="background: transparent;">
                 
                <div class="card-body">
                  <h5 class="card-title" id="about_h">Nos Services</h5>
                  <p class="card-text" id="about_p">Chez Cocody Immobilier, nous sommes fiers de vous offrir une gamme complète de services immobiliers qui répondent à vos besoins uniques. Chacun de nos services est conçu pour vous apporter une valeur exceptionnelle, une expertise inégalée et une expérience sans faille. Laissez-nous vous guider à travers les options qui s'ouvrent à vous </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 border-0">
                <div class="card-body">
                  <h5 class="card-title" id="about_h"><img src="{{asset('front/assets/img/e/1.png')}}" class="img-fluid w-25" alt="..." style=" width: 20%!important;"> Expertise et Conseils en Immobilier </h5>
                  <p class="card-text" id="about_p">Naviguer dans le monde complexe de l'immobilier peut être intimidant. C'est pourquoi notre équipe d'experts chevronnés est là pour vous offrir des conseils éclairés. Que vous cherchiez à acheter, vendre ou investir, nous vous fournirons les informations nécessaires pour prendre des décisions informées et stratégiques.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 border-0">
                <div class="card-body">
                  <h5 class="card-title" id="about_h"><img src="{{asset('front/assets/img/e/5.png')}}" class="img-fluid w-25" alt="..." style=" width: 20%!important;">Construction</h5>
                  <p class="card-text" id="about_p">Dans le monde de la construction, Cocody Immobilier se démarque en tant que maître d'œuvre dédié à transformer vos visions en réalités architecturales exceptionnelles. Notre équipe compétente et passionnée est prête à donner vie à vos projets avec une attention méticuleuse aux détails et un engagement indéfectible envers la qualité. Explorez nos domaines d'expertise </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 border-0">
                <div class="card-body">
                  <h5 class="card-title" id="about_h"><img src="{{asset('front/assets/img/e/6.png')}}" class="img-fluid w-25" alt="..." style=" width: 20%!important;">Achat de Biens Immobiliers </h5>
                  <p class="card-text" id="about_p">La quête de la propriété parfaite commence ici. Parcourez notre sélection soigneusement élaborée de biens immobiliers à vendre, du nid douillet idéal aux espaces commerciaux prometteurs. Notre équipe vous accompagne avec expertise pour vous aider à trouver la propriété qui vous correspond.</p>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card h-100 border-0">
                <div class="card-body">
                  <h5 class="card-title" id="about_h"><img src="{{asset('front/assets/img/e/7.png')}}" class="img-fluid w-25" alt="..." style=" width: 20%!important;">	Location de Biens Immobiliers</h5>
                  <p class="card-text" id="about_p">Pour ceux qui cherchent la flexibilité ou qui sont en déplacement, nos options de location sont conçues pour offrir un confort inégalé. Découvrez notre gamme d'appartements, de maisons et d'espaces commerciaux disponibles à la location, avec des solutions adaptées à chaque besoin.</p>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card h-100 border-0">
                <div class="card-body">
                  <h5 class="card-title" id="about_h"><img src="{{asset('front/assets/img/e/8.png')}}" class="img-fluid w-25" alt="..." style=" width: 20%!important;">Vente de Biens Immobiliers </h5>
                  <p class="card-text" id="about_p">La vente d'une propriété demande une approche experte pour maximiser sa valeur et sa visibilité sur le marché. Avec notre connaissance approfondie du secteur, nous mettons en œuvre des stratégies de vente dynamiques pour vous garantir une expérience transparente et gratifiante.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col-md-12">
              <div class="card h-100 border-0">
                <div class="card-body">
                  <p class="card-text" id="about_p">Chez Cocody Immobilier, chaque service que nous offrons est ancré dans notre engagement envers l'excellence, l'innovation et la satisfaction client. Que vous cherchiez à concrétiser un projet, à faire fructifier votre investissement ou à trouver le foyer idéal, nous sommes là pour vous guider avec expertise et dévouement. Laissez-nous être votre partenaire privilégié dans votre voyage immobilier.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Steps Section -->

      
      <section id="faq" class="faq" style="">
        <div class="container">
          <div class="row row-cols-1 row-cols-md-2 g-4">
            
              <div class="col" style="margin-top: 26px;">
                <div class="row mb-2">
                  <div class="col-md-12 ">
                      <h1 style="font-size: 20px; font-weight: 700;">Pourquoi choisir cocody immobilier ?</h1>
                       
                  </div>
               </div>
                <p style=" line-height: 35px;">Parce que nous comprenons que chaque propriété a une émotion à transmettre. Choisir Cocody Immobilier signifie choisir une expérience immersive, où chaque détail est façonné pour refléter vos aspirations.</p>
  
              </div>

               
              <div class="col text-center">
                <img src="{{ asset('front/assets/img/blog-2.jpg')}}" alt=""  class="img-fluid" style="    border-radius: 0% 100% 100% 0%;
                width: 350px;
                height: 350px;">
                 
              </div>

              
              
  
          </div>
        </div>
      </section><!-- End Frequently Asked Questions Section -->

      <section id="faq" class="faq"  style="background: #f6f8fb">
        <div class="container">
          <div class="row row-cols-1 row-cols-md-2 g-4">
             
              <div class="col text-center">
                <img src="{{ asset('front/assets/img/vision.jpg')}}" alt=""  class="img-fluid" style="    border-radius: 100% 0% 0% 100%;
                width: 350px;
                height: 350px;">
                 
              </div>

              <div class="col" style="margin-top: 26px;">
                <div class="row mb-2">
                  <div class="col-md-12">
                      <h1 style="font-size: 20px; font-weight: 700;">Ce Que Nous Promettons</h1>
                       
                  </div>
               </div>
                <p style=" line-height: 35px;">Nous promettons l'excellence, du premier sourire au moment où vous entrez dans votre nouveau chez-vous. Notre engagement envers votre bonheur est inébranlable, et nous poursuivons chaque défi avec détermination pour atteindre vos objectifs.</p>
  
              </div>
              
              
  
          </div>
        </div>
      </section><!-- End Frequently Asked Questions Section -->

       <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row mb-2">
          <div class="col-md-12 text-center">
              <h1 style="font-size: 20px; font-weight: 700;">Notre portfolio</h1>
              <p></p>
              <p>Explorez notre portfolio pour découvrir des transformations étonnantes. Chaque projet est une preuve de notre engagement à transformer des espaces en expériences de vie.</p>
               
          </div>
       </div>

        <div class="row mt-4">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Tous</li>
              <li data-filter=".filter-app">En vente</li>
              <li data-filter=".filter-card">En location</li>
              <li data-filter=".filter-cards">En construction</li>
              {{-- <li data-filter=".filter-web">Web</li> --}}
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('front/assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{asset('front/assets/img/portfolio/portfolio-1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('front/assets/img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{asset('front/assets/img/portfolio/portfolio-3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('front/assets/img/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="{{asset('front/assets/img/portfolio/portfolio-4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

         
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('front/assets/img/portfolio/portfolio-6.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{asset('front/assets/img/portfolio/portfolio-6.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('front/assets/img/portfolio/portfolio-7.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="{{asset('front/assets/img/portfolio/portfolio-7.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('front/assets/img/portfolio/portfolio-8.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="{{asset('front/assets/img/portfolio/portfolio-8.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('front/assets/img/portfolio/portfolio-6.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{asset('front/assets/img/portfolio/portfolio-6.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-cards">
            <div class="portfolio-wrap">
              <img src="{{asset('front/assets/img/portfolio/portfolio-7.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="{{asset('front/assets/img/portfolio/portfolio-7.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-cards">
            <div class="portfolio-wrap">
              <img src="{{asset('front/assets/img/portfolio/portfolio-8.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="{{asset('front/assets/img/portfolio/portfolio-8.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

         

        </div>

      </div>
    </section><!-- End Portfolio Section -->



   
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">
           
          <div class="col-lg-12 text-center" style="background: #3097a552; padding: 38px; border-radius: 5px;">
            <p>Prêt à voir comment nous pouvons faire de vos rêves une réalité tangible ? Prenez la première étape en nous contactant. Notre équipe chaleureuse est prête à écouter vos idées et à les transformer en plans concrets.
              </p>
              <div class="row text-start">
                <div class="col-md-6 mt-4">
                  <img src="{{asset('front/assets/img/contact/3.jpg')}}" alt="" class="img-fluid h-auto" style="border-radius: 5px;">
                </div>
                <div class="col-md-6 mt-4">
                  
                  <form class="row g-3 mt-1 needs-validation" novalidate action="{{ url('add-contact') }}" method="POST" enctype="multipart/form-data" style=" box-shadow: 0 0 30px rgba(214, 215, 216, 0.6); padding: 18px; background: #fff; border-radius:5px;">
                    @csrf
                    <div class="col-md-6">
                      
                      <input type="text" class="form-control" name="nom" id="validationCustom01" placeholder="Nom" required id="cont_input">
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-6">
                      
                      <input type="text" class="form-control" name="prenoms" id="validationCustom02" placeholder="Prénoms" id="cont_input"  required>
                      
                    </div>
      
                    <div class="col-md-6">
                      
                      <input type="email" class="form-control" name="email" id="validationCustom02"   placeholder="Adresse électronique" required>
                    
                    </div>
      
                    <div class="col-md-6">
                      
                      <input type="tel" class="form-control" name="telephone" id="validationCustom02" placeholder="Téléphone"   required>
                    
                    </div>
      
                    <div class="col-md-12">
                    
                      <input type="text" class="form-control" name="objet" id="validationCustom02" placeholder="Sujet"  required>
                    
                    </div>
      
                    <div class="col-md-12">
                      
                      <textarea type="text" class="form-control" name="message" id="validationCustom02" placeholder="Message" required style="height: 130px;"></textarea>
                    
                    </div>
                
                    <div class="col-12 text-center">
                      <button class="btn btn-primary" type="submit" style="
                      background: #3097a5;
                      border-color: #3097a5;
                  ">Envoyer</button>
                    </div>
                  </form>
                </div>
              </div>
            
          </div>
        </div> 
        <div class="row">
          
          <div class="col-md-6 mt-4" style="box-shadow: 5px 5px 10px rgba(0,0,0,.2); border-radius: 5px;     width: 48%;">
            <p class="mt-4" style="    line-height: 33px;
            font-size: 18px;">Chez Cocody Immobilier, nous sommes plus qu'une agence - nous sommes des créateurs d'histoires immobilières. Chaque projet que nous entreprenons est imprégné de votre essence et de notre expertise. Laissez-nous transformer des briques et du ciment en des espaces qui vous accueilleront chaleureusement. Bienvenue dans le monde de Cocody Immobilier - où l'imagination rencontre la réalité.

            </p>
          </div>
          <div class="col" style="width: 4%;">

          </div>
          <div class="col-md-6  mt-4" style="box-shadow: 5px 5px 10px rgba(0,0,0,.2); border-radius: 5px; width: 48%;">
            <div class="row">
              <p class="mt-4"><strong>Tel | </strong> +225 07 08 14 91 44  </p>
              <p><strong>WhatsApp  | </strong> +225 07 08 14 91 44 </p>
              <p><strong>Email  | </strong> contact@cocody-immobilier.com </p>
              
              <p><strong>Adresse  | </strong> Côte d'Ivoire, Abidjan, Angré non loin du nouveau CHU </p>
            </div>
            </div>
           
        
         </div>   
      </div>
    </section>
    <!-- End Portfolio Details Section -->
    
@endsection