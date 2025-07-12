@extends('layouts.front')

@section('content')

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details" style="margin-top: 80px;">
        <div class="container">
  
          <div class="row g-2">
            <div class="col-lg-6">
                <img src="{{asset('front/assets/img/aide/aide.jpg')}}" alt="" class="img-fluid w-75" style="border-radius: 5px">
            </div>
            <div class="col-lg-6">
               <h1 style="font-size: 54px;">Autorisation de Construire </h1>
               <p class="mt-4">Le Permis de Construire est une autorisation administrative en Côte d'Ivoire qui permet à toute personne physique ou morale, qu'elle soit publique ou privée, de réaliser des travaux de construction après avoir vérifié leur conformité aux règles d'urbanisme et de construction en vigueur.
               </p>
            </div>
          </div>    
        </div>
      </section>
      <!-- End Portfolio Details Section -->

        <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container"> 
        
        <div class="row gy-4 ">

          
          <div class="col-lg-12">
            <div class="row mb-5">
              <div class="col-md-12">
                  <h1 style="font-size: 20px; font-weight: 700;">Description   </h1>
                  <p class="mt-3">L'ACD est l'acte unique qui octroie la propriété d'un terrain urbain. Les règles pour l'acquisition de la propriété foncière urbaine sont définies par l'Ordonnance n° 2013-481 du 2 juillet 2013. Ce texte précise les étapes et les acteurs impliqués dans le processus. L'article souligne la complexité du circuit et la nécessité de clarifier les rôles des intervenants institutionnels.</p>
              </div>
               
           </div>
          </div>
          
           
        </div>  
          
      </div>
    </section>
    <!-- End Portfolio Details Section -->
   

    <section id="faq" class="faq" style="background: #f6f8fb ; margin-top:-70px" >
      <div class="container">
        
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col"  style="  background: white;  border-radius: 5px;">
              <div class="row mb-5">
                <div class="col-md-12" style="margin-top: 0px;">
                    <h1 style="font-size: 20px; font-weight: 700;" class="mt-4" >Définition du Permis de Construire   </h1>
                    <p class="mt-3">Le Permis de Construire est une autorisation nécessaire pour entreprendre des travaux de construction, de modification ou de rénovation de tout bâtiment existant. Il garantit que les travaux respectent les règles d'urbanisme, de sécurité et de construction en vigueur.</p>

                </div>
             </div>
              
            </div>
            <div class="col">
                <img src="{{asset('front/assets/img/permi.jpg')}}" alt="" class="img-fluid" style="border-radius: 5px">
            </div>
           
        </div>
      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <section id="faq" class="faq" style=" margin-top:-10px" >
      <div class="container">
        
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <div class="col">
            <img src="{{asset('front/assets/img/urb.jpg')}}" alt="" class="img-fluid" style="border-radius: 5px">
        </div>
       
            <div class="col"  style="  background: #f6f8fb;  border-radius: 5px;">
              <div class="row mb-5">
                <div class="col-md-12" style="margin-top: 0px;">
                    <h1 style="font-size: 20px; font-weight: 700;" class="mt-4">Prescriptions d'Urbanisme   </h1>
                    <p class="mt-3">Les prescriptions d'urbanisme définissent des règles telles que la surface constructible sur chaque parcelle, les types de bâtiments autorisés, les hauteurs permises et les servitudes d'utilité publique applicables au terrain. Les projets de construction doivent également respecter les normes et règles de construction, telles que les Documents Techniques Unifiés (DTU), les Cahiers des Prescriptions Techniques Générales du CSTB et les normes de l'Union Technique de l'Électricité (UTE).:</p>

                </div>
             </div>
              
            </div>
           
        </div>
      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <section id="faq" class="faq" style="background: #f6f8fb; margin-top:-10px" >
      <div class="container">
        
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col"  style="  background: white;  border-radius: 5px;">
              <div class="row mb-5">
                <div class="col-md-12" style="margin-top: 0px;">
                    <h1 style="font-size: 20px; font-weight: 700;" class="mt-4">Demande de Permis de Construire</h1>
                    <p class="mt-3">La demande de Permis de Construire doit être introduite par un architecte agréé, inscrit au tableau de l'Ordre des Architectes de Côte d'Ivoire. Le dossier technique établi par l'architecte doit inclure plusieurs pièces graphiques et écrites, telles que des plans, des devis descriptifs et estimatifs, des vues en plan, des façades, des coupes, des plans de toiture, des plans d'assainissement, etc.</p>

                </div>
             </div>
              
            </div>
            <div class="col">
                <img src="{{asset('front/assets/img/dem.jpg')}}" alt="" class="img-fluid" style="border-radius: 5px">
            </div>
           
        </div>
      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <section id="faq" class="faq" style=" margin-top:-10px" >
      <div class="container">
        
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <div class="col">
            <img src="{{asset('front/assets/img/dem.jpg')}}" alt="" class="img-fluid" style="border-radius: 5px">
        </div>
            <div class="col" style="  background: #f6f8fb;  border-radius: 5px;">
              <div class="row mb-5">
                <div class="col-md-12" style="margin-top: 0px;">
                    <h1 style="font-size: 20px; font-weight: 700;" class="mt-4" >Guichet Unique pour la Délivrance du Permis de Construire</h1>
                    <p class="mt-3">Le Gouvernement a mis en place un Guichet Unique du Permis de Construire (GUPC) dans le District Autonome d'Abidjan pour simplifier la procédure de traitement et de délivrance du Permis de Construire. Toutes les demandes de Certification d'Urbanisme (CU) et de Permis de Construire doivent être adressées exclusivement au GUPC depuis le 29 avril 2016.</p>

                </div>
             </div>
              
            </div>
           
           
        </div>
      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <section id="faq" class="faq" style="background: #f6f8fb; margin-top:-10px" >
      <div class="container">
        
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col" style="  background: white;  border-radius: 5px;">
              <div class="row mb-5">
                <div class="col-md-12" style="margin-top: 0px;">
                    <h1 style="font-size: 20px; font-weight: 700;" class="mt-4">Obtention du Permis de Construire</h1>
                    <p class="mt-3">Pour obtenir un Permis de Construire, il est nécessaire de disposer d'une parcelle avec la preuve de propriété. Les titres de propriété exigés incluent le Certificat de Propriété Foncière (CPF), le Certificat de Mutation de Propriété Foncière (CMPF), l'Arrêté de Concession Définitive (ACD), la lettre d'Attribution (LA), l'arrêté d'occupation temporaire ou bail emphytéotique.</p>

                </div>
             </div>
              
            </div>
            <div class="col">
                <img src="{{asset('front/assets/img/permi.jpg')}}" alt="" class="img-fluid" style="border-radius: 5px">
            </div>
           
        </div>
      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <section id="faq" class="faq" style=" margin-top:-10px" >
      <div class="container">
        
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <div class="col">
            <img src="{{asset('front/assets/img/urb.jpg')}}" alt="" class="img-fluid" style="border-radius: 5px">
        </div>
            <div class="col" style="  background: #f6f8fb;  border-radius: 5px;">
              <div class="row mb-5">
                <div class="col-md-12" style="margin-top: 0px;">
                    <h1 style="font-size: 20px; font-weight: 700;" class="mt-4" >Classification des Bâtiments selon les Risques</h1>
                    <p class="mt-3">Les bâtiments sont classés en cinq catégories en fonction du risque, allant de la Classe I (bâtiments ne nécessitant pas de Permis de Construire) à la Classe V (bâtiments avec un facteur de risque très élevé). Les exigences et les documents requis varient en fonction de la classe du bâtiment.</p>

                </div>
             </div>
              
            </div>
           
           
        </div>
      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <section id="faq" class="faq" style="background: #f6f8fb; margin-top:-10px" >
      <div class="container">
        
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col" style="  background: white;  border-radius: 5px;">
              <div class="row mb-5">
                <div class="col-md-12" style="margin-top: 0px;">
                    <h1 style="font-size: 20px; font-weight: 700;" class="mt-4">Réformes pour Réduire les Délais de Traitement</h1>
                    <p class="mt-3">Plusieurs réformes ont été mises en place pour réduire les délais de traitement des demandes liées au Permis de Construire. Ces réformes comprennent le regroupement de tous les acteurs impliqués dans le processus au sein du GUPC, des visites conjointes sur le terrain pour une meilleure synergie d'actions, et la mise en place d'un système informatisé pour le traitement des demandes en ligne. Les paiements en ligne sont également envisagés pour simplifier davantage le processus.</p>

                </div>
             </div>
              
            </div>
            <div class="col">
                <img src="{{asset('front/assets/img/permi.jpg')}}" alt="" class="img-fluid" style="border-radius: 5px">
            </div>
          
        </div>
      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <section id="faq" class="faq" style=" margin-top:-10px">
      <div class="container">
        
        <div class="row row-cols-1 row-cols-md-1 g-4">
            <div class="col">
              <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <h1 style="font-size: 20px; font-weight: 700;" class="mt-4"> Classification des Bâtiments selon les Risques</h1>
                    <p class="mt-3">Les bâtiments sont classés en cinq catégories en fonction du risque, allant de la Classe I (bâtiments ne nécessitant pas de Permis de Construire) à la Classe V (bâtiments avec un facteur de risque très élevé). Les exigences et les documents requis varient en fonction de la classe du bâtiment.</p>

                    <table class="table table-bordered mt-4">
                      <thead class="text-start">
                          <tr>
                            <th scope="col">ACTES</th>
                            <th scope="col">COÛT</th>
                            
                          </tr>
                        </thead>
                        <tbody class="text-start">
                          <tr class="text-start">
                             
                            <td>PC pour tous types de construction</td>
                            <td>50.000 F CFA</td>
                             
                          </tr>
                          <tr>
                            <td>VISA Domaine Urbain</td>
                            <td>6.000 F CFA</td>
                          </tr>
                          <tr>
                            <td>VISA Assainissement et Drainage</td>
                            <td>6.000 F CFA</td>
                          </tr>
                          <tr>
                            <td>Certificat d'Urbanisme (CU)</td>
                            <td>6.000 F CFA</td>
                          </tr>

                          <tr>
                            <td>VISA SODECI</td>
                            <td>Gratuit</td>
                          </tr>

                          <tr>
                            <td>VISA CIE</td>
                            <td>Gratuit</td>
                          </tr>
                        </tbody>
                  </table>
                  <p>En réduisant les coûts et en simplifiant la procédure, le gouvernement ivoirien vise à faciliter l'obtention du Permis de Construire, ce qui contribue à stimuler l'investissement privé et à améliorer le climat des affaires en Côte d'Ivoire. La modernisation du processus grâce à des outils informatiques et la réduction des délais de traitement sont autant de mesures visant à encourager la construction et le développement urbain dans le pays.</p>

                  <a href="{{url('rdv')}}" class="text-center">
                    <button class="btn btn-primary text-center" style="background: #3097a5;
                    border-color: #3097a5;">Prendre rendez-vous</button>
                  </a>
                </div>
             </div>
              
            </div>
            
           
        </div>
      </div>
    </section><!-- End Frequently Asked Questions Section -->

   
   
    
@endsection