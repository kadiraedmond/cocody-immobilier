@extends('layouts.front')

@section('content')
<section id="portfolio-details" class="portfolio-details" style="margin-top: 80px;">
    <div class="container">

      <div class="row g-2">
        <div class="col-lg-6">
            <img src="{{asset('front/assets/img/faq.jpg')}}" alt="" class="img-fluid w-75" style=" height: 294px; object-fit: cover; border-radius: 15px;">
        </div>
        <div class="col-lg-6">
           <h1 style="font-size: 57px;">Foire aux Questions</h1>
           <p class="mt-4">Bienvenue dans notre Foire aux Questions (FAQ) - Votre Source d'Informations Immobilières Essentielles
           </p>
        </div>
      </div>    
    </div>
  </section>
  <!-- End Portfolio Details Section -->
  
      <!-- ======= Portfolio Details Section ======= -->
      <section id="portfolio-details" class="portfolio-details">
        <div class="container">
  
          <div class="row gy-4">
            <div class="col-lg-4">
                <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <form>
                          <div class="input-group mb-3" style="width: 270px;">
                            <input type="text" class="form-control" placeholder="Recherche par mot-clé" aria-label="Recherche" aria-describedby="button-addon2" style="    height: 50px;                        ">
                            <button class="btn btn-primary" type="submit" id="button-addon2" style="background-color: #3097a5 ; border-color: #3097a5 ;">
                                <i class='bx bx-search' type="submit" id="icon_search1"></i>
                            </button>
                          </div>
                        </form>
                      </div>
                      <div class="col-md-12 mt-4">
                        <ul>
                          <li class="mt-4 active" style="font-size: 18px; font-weight: 600;">Communauté</li>
                          <li class="mt-4" style="font-size: 18px; font-weight: 600;">Biens immobilier</li>
                          <li class="mt-4" style="font-size: 18px; font-weight: 600;">Prêt immobilier</li>
                          <li class="mt-4" style="font-size: 18px; font-weight: 600;"> Avantages </li>
                          <li class="mt-4" style="font-size: 18px; font-weight: 600;">Evaluations</li>
                          <li class="mt-4" style="font-size: 18px; font-weight: 600;"> Planification</li>
                          <li class="mt-4" style="font-size: 18px; font-weight: 600;"> Estimation</li>
                        </ul>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-lg-8">
              <div class="accordion" id="accordionExample">
                  <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="faq_btn">
                          Comment puis-je contacter Cocody Immobilier pour discuter de mes besoins immobiliers ?
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                          Vous pouvez nous contacter en utilisant les coordonnées fournies sur notre page de contact. Nous sommes disponibles par téléphone, par e-mail et en personne dans nos bureaux.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" id="faq_btn">
                          Quels types de biens immobiliers proposez-vous à la vente?
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Nous proposons une variété de biens immobiliers, y compris des maisons, des appartements, des terrains et des propriétés commerciales. Notre sélection est mise à jour régulièrement pour répondre à divers besoins. </p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" id="faq_btn">
                          Pouvez-vous m'aider à obtenir un prêt immobilier?
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Oui, nous pouvons vous recommander des partenaires financiers fiables pour vous aider à obtenir un prêt immobilier. Nous pouvons également vous guider tout au long du processus.</p>
                      </div>
                    </div>
                  </div>
  
                  <div class="accordion-item border-0">
                      <h2 class="accordion-header" id="heading4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4" id="faq_btn">
                            Pouvez-vous m'aider à obtenir un prêt immobilier?
                        </button>
                      </h2>
                      <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <p>Oui, nous pouvons vous recommander des partenaires financiers fiables pour vous aider à obtenir un prêt immobilier. Nous pouvons également vous guider tout au long du processus.</p>
                        </div>
                      </div>
                  </div>
  
                  <div class="accordion-item border-0">
                      <h2 class="accordion-header" id="heading5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4" id="faq_btn">
                          Offrez-vous des services de gestion locative pour les propriétaires?
                        </button>
                      </h2>
                      <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <p>Oui, nous proposons des services de gestion locative complets pour les propriétaires. Cela inclut la recherche de locataires, la collecte des loyers, l'entretien et la gestion des problèmes liés à la propriété.</p>
                        </div>
                      </div>
                  </div>
  
                  <div class="accordion-item border-0">
                      <h2 class="accordion-header" id="heading6">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6" id="faq_btn">
                          Quels sont les avantages de travailler avec Cocody Immobilier pour la construction ou la rénovation de ma propriété?
                        </button>
                      </h2>
                      <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <p>Notre équipe d'experts en construction et rénovation est dédiée à la qualité, à l'efficacité et à la satisfaction du client. Nous proposons des solutions sur mesure pour créer des espaces exceptionnels.</p>
                        </div>
                      </div>
                  </div>
                  <div class="accordion-item border-0">
                      <h2 class="accordion-header" id="heading7">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse6" id="faq_btn">
                          Puis-je voir des exemples de projets précédents réalisés par Cocody Immobilier?
                        </button>
                      </h2>
                      <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <p>Oui, vous pouvez consulter notre portfolio pour voir des exemples de projets précédents, y compris des rénovations, des constructions et des réhabilitations.</p>
                        </div>
                      </div>
                  </div>


                  <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="heading8">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse6" id="faq_btn">
                        Comment Cocody Immobilier garantit-il la transparence dans les transactions immobilières?
                      </button>
                    </h2>
                    <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Nous sommes engagés à maintenir une transparence totale dans toutes nos transactions. Nous vous fournirons tous les détails pertinents et répondrons à toutes vos questions pour vous assurer une expérience transparente.</p>
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="heading9">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse6" id="faq_btn">
                        Quelle est la différence entre une rénovation et une réhabilitation immobilière?
                      </button>
                    </h2>
                    <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>La rénovation consiste généralement à apporter des améliorations cosmétiques à une propriété, tandis que la réhabilitation implique des réparations structurelles plus importantes pour restaurer une propriété à son état d'origine ou à un état fonctionnel.</p>
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="heading10">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10" id="faq_btn">
                        Quels sont les avantages de choisir Cocody Immobilier par rapport à d'autres agences immobilières?
                      </button>
                    </h2>
                    <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Nous sommes déterminés à offrir une expérience client exceptionnelle, à fournir des solutions sur mesure et à mettre en œuvre une expertise inégalée pour chaque projet. Notre portfolio de succès parle de lui-même.</p>
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="heading11">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11" id="faq_btn">
                        Quels sont les frais associés à l'achat, la vente ou la location d'une propriété avec Cocody Immobilier?
                      </button>
                    </h2>
                    <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Nous pouvons vous expliquer en détail les frais associés à chaque transaction, y compris les commissions, les taxes et autres coûts.</p>
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="heading12">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12" id="faq_btn">
                        Comment Cocody Immobilier évalue-t-il la valeur d'une propriété avant de la mettre sur le marché?
                      </button>
                    </h2>
                    <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Nous utilisons une combinaison d'analyses de marché, de comparaisons de propriétés similaires et d'expertise locale pour déterminer la valeur d'une propriété.</p>
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="heading13">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13" id="faq_btn">
                        Quelles sont les tendances actuelles du marché immobilier dans la région que vous servez?
                      </button>
                    </h2>
                    <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Nous pouvons vous fournir des informations sur les tendances actuelles du marché, les prix moyens et les quartiers en croissance.</p>
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="heading14">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14" id="faq_btn">
                        Comment puis-je m'assurer que ma transaction immobilière est légale et conforme à la réglementation locale?
                      </button>
                    </h2>
                    <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="heading14" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Nous travaillons en étroite collaboration avec des experts juridiques pour garantir que chaque transaction est conforme à la législation locale et aux réglementations en vigueur.</p>
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="heading15">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15" id="faq_btn">
                        Pouvez-vous m'aider avec des conseils sur la décoration intérieure et l'aménagement d'espaces après l'achat d'une propriété? 
                      </button>
                    </h2>
                    <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="heading15" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Oui, nous pouvons vous mettre en contact avec des experts en décoration d'intérieur et en aménagement d'espaces pour vous aider à créer votre environnement idéal.</p>
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="heading16">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16" id="faq_btn">
                        Comment puis-je suivre l'état de ma propriété si je suis un propriétaire absent?
                      </button>
                    </h2>
                    <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="heading16" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Notre service de gestion locative peut vous fournir des rapports réguliers sur l'état de votre propriété, y compris des informations sur les loyers, les réparations et la maintenance.</p>
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="heading17">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse16" id="faq_btn">
                        Quels sont les avantages d'investir dans l'immobilier avec Cocody Immobilier? 
                      </button>
                    </h2>
                    <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="heading17" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Nous pouvons discuter des avantages de l'investissement immobilier, y compris la création de flux de trésorerie, la constitution de patrimoine et la diversification de votre portefeuille.</p>
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="heading18">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapse18" id="faq_btn">
                        Comment puis-je planifier la vente de ma propriété de manière à maximiser son rendement ?
                      </button>
                    </h2>
                    <div id="collapse18" class="accordion-collapse collapse" aria-labelledby="heading18" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Nous pouvons vous aider à élaborer une stratégie de vente efficace, y compris la tarification, le marketing et la présentation de la propriété.</p>
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="heading19">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse19" aria-expanded="false" aria-controls="collapse19" id="faq_btn">
                        Puis-je obtenir une estimation de la valeur de ma propriété sans engagement ? 
                      </button>
                    </h2>
                    <div id="collapse19" class="accordion-collapse collapse" aria-labelledby="heading19" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Oui, nous offrons des évaluations gratuites de la valeur de votre propriété. Contactez-nous pour planifier une évaluation.</p>
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="heading20">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse20" aria-expanded="false" aria-controls="collapse20" id="faq_btn">
                        Comment Cocody Immobilier gère-t-il la confidentialité et la sécurité des informations de ses clients ?
                      </button>
                    </h2>
                    <div id="collapse20" class="accordion-collapse collapse" aria-labelledby="heading20" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Nous avons des politiques strictes en place pour garantir la confidentialité et la sécurité de toutes les informations fournies par nos clients.</p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
  
         
          
        </div>
      </section>
      <!-- End Portfolio Details Section -->
    
@endsection