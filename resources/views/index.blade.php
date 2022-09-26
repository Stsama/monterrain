@extends('layouts.app')

@section('content')
<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
    <div class="carousel-indicators">
        <button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img alt="..." class="d-block w-100" src="images/wheat-2391348_1280.jpg">
            <div class="carousel-caption bann">
                <h5>Acheter un bien immobilier</h5>
                <p>MonterrainTogo est une agence immobilière qui se concentre sur le marché immobilier togolais.
                    Grâce à un vaste réseau d'agents immobiliers locaux, nous sommes au courant de nombreuses opportunités intéressantes.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img alt="..." class="d-block w-100" src="images/house-g4855e34ca_1920.jpg">
            <div class="carousel-caption bann">
                <h5>Vendez un bien immobilier</h5>
                <p>Monterrain votre spécialiste de l'immobilier vous propose une sélection des plus beaux appartements et maisons à vendre</p>
            </div>
        </div>
        <div class="carousel-item">
            <img alt="..." class="d-block w-100" src="images/post-576729.png">
            <div class="carousel-caption bann">
                <h5>Otennez tout les documents administratifs</h5>
                <p>Vous souhaitez obtenir les document de votre bien immobilier ? Notre équipe d'experts est à votre disposition </p>
            </div>
        </div>
    </div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
</div><!-- about section starts -->
<section class="about section-padding" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
                <div class="about-img"><img alt="" class="img-fluid" src="images/hands-1917895_1280.png"></div>
            </div>
            <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                <div class="about-text">
                    <h2>Nous fournissons la meilleure qualité
                        Services jamais realisée</h2>
                    <p>Nos experts vous accompagnent dans la sécurisation ou l'acquisition de votre immeuble auprès d’une personne tierce. Cet accompagnement est une prestation complète de bout en bout qui comprend toutes les procédures de vérifications en vigueur au Togo. Nos experts sécurisent la transaction puis s’occupent des formalités du Titre foncier de votre terrain ou votre maison.</a>
                </div>
            </div>
        </div>
    </div>
</section><!-- about section Ends -->
<!-- services section Starts -->
<section class="services section-padding" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2>Nos Services</h2>
                    <p>Nous fournissons un service minutieux et sur-mesure
                        conforment aux besoins et attentes des différents clients
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-white text-center bg-dark pb-2 carte">
                    <div class="card-body">
                        <h3 class="card-title">Lotissements approuvés et terrains ruraux</h3>
                        <p class="lead">Tous nos terrains se trouvent dans des lotissements approuvés et vérifiés par un cabinet de notaire au près des services spécialisés. Nous vous assistons dans votre processus d’achat</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-white text-center bg-dark pb-2 carte">
                    <div class="card-body">
                        <h3 class="card-title">Vérification administrative</h3>
                        <p class="lead">
                            L’acquisition de votre bien immobilier s’effectue devant notaire pour un maximum de garantie.
                            Votre achat est authentifié et vous pouvez donc le faire valoir devant n'importe quelle institution togolaise .
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-white text-center bg-dark pb-2 carte">
                    <div class="card-body">
                        <i class="bi bi-intersect"></i>
                        <h3 class="card-title">Titre foncier et securisation</h3>
                        <p class="lead">Que votre terrain soit immatriculé ou pas, vous avez besoin de le sécuriser. Nous nous occupons de la procédure entière de sécurisation  de votre immeuble depuis l’achat jusqu’à l’obtention du titre foncier</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- services section Ends -->
<!-- portfolio strats -->
<section class="portfolio section-padding" id="offres">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2>Nos Offres</h2>
                    <p class="descript">Nous contrôlons l’ensemble des documents du terrain par un cabinet de notaire, ainsi que la pleine propriété du cédant avant de le mettre à disposition. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-light text-center bg-white pb-2">
                    <div class="card-body text-dark">
                        <div class="img-area mb-4"><img alt="" class="img-fluid" src="images/africa-7.jpg"></div>
                        <h4 class="card-title">22 000 000 XOF</h4>
                        <p class="lead-one">600 m²</p>
                        <p class="lead"><span><i class="fa-solid fa-location-dot"></i></i></span> Lomé, Kégué, rue 506</p>
                        <button class="btn bg-warning text-dark">Learn More</button>
                        
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-light text-center bg-white pb-2">
                    <div class="card-body text-dark">
                        <div class="img-area mb-4"><img alt="" class="img-fluid" src="images/africa-6170631_1280.jpg"></div>
                        <h4 class="card-title">12 000 000 XOF</h4>
                        <p class="lead-one">1200 m²</p>
                        <p class="lead"><span><i class="fa-solid fa-location-dot"></i></span> Kara, Tomdè, rue 202</p>
                        <button class="btn bg-warning text-dark">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-light text-center bg-white pb-2">
                    <div class="card-body text-dark">
                        <div class="img-area mb-4"><img alt="" class="img-fluid" src="images/africa-6170633_1280.jpg"></div>
                        <h4 class="card-title">6 000 000 XOF</h4>
                        <p class="lead-one">1800 m²</p>
                        <p class="lead"><span><i class="fa-solid fa-location-dot"></i></span> Sokodé, Barrière, rue 33</p>
                        <button class="btn bg-warning text-dark">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="boutton"> <button class="btn bg-warning text-dark"><a href="{{route('posts')}}" class="del">Voir toutes les Offres</a></button></div>
        </div>
    </div>
</section><!-- portfolio ends -->
<!-- team starts -->
<section class="team section-padding" id="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2>Nos Partenaires</h2>
                    <p class="merites">Nos divers partenariats avec des pointures dans le domaine immobilier et foncier nous permetteent de vous offrir le meilleurs services et dans des délais raisonnables.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card text-center carte2">
                    <div class="card-body">
                        <img alt="" class="img-fluid rounded-circle" src="images/partenaire1.jpg">
                        <h3 class="card-title py-2">Albert EZOULA</h3>
                        <p class="card-text">Software Engineer, Developpeur Fullstack, Developpeur d'application mobile.</p>
                        <p class="socials"><i class="bi bi-twitter text-dark mx-1"></i> <i class="bi bi-facebook text-dark mx-1"></i> <i class="bi bi-linkedin text-dark mx-1"></i> <i class="bi bi-instagram text-dark mx-1"></i></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card text-center carte2">
                    <div class="card-body">
                        <img alt="" class="img-fluid rounded-circle" src="images/partenaire2.jpg">
                        <h3 class="card-title py-2">Paul serbie</h3>
                        <p class="card-text">Chargé de communication  et de reseautage, spécialiste  en achats et construction immobilier.</p>
                        <p class="socials"><i class="bi bi-twitter text-dark mx-1"></i> <i class="bi bi-facebook text-dark mx-1"></i> <i class="bi bi-linkedin text-dark mx-1"></i> <i class="bi bi-instagram text-dark mx-1"></i></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card text-center carte2">
                    <div class="card-body">
                        <img alt="" class="img-fluid rounded-circle" src="images/partenaire3.jpg">
                        <h3 class="card-title py-2">David Essofa</h3>
                        <p class="card-text">Notaire spécialiste en Droit foncier et agraire, en acquisition et revente immobilière.</p>
                        <p class="socials"><i class="bi bi-twitter text-dark mx-1"></i> <i class="bi bi-facebook text-dark mx-1"></i> <i class="bi bi-linkedin text-dark mx-1"></i> <i class="bi bi-instagram text-dark mx-1"></i></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card text-center carte2">
                    <div class="card-body">
                        <img alt="" class="img-fluid rounded-circle" src="images/partenaire4.jpg">
                        <h3 class="card-title py-2">Léonard Dédina</h3>
                        <p class="card-text">Chef de la direction du cadastre chargé de la suppervison du département du cadastre au Togo.</p>
                        <p class="socials"><i class="bi bi-twitter text-dark mx-1"></i> <i class="bi bi-facebook text-dark mx-1"></i> <i class="bi bi-linkedin text-dark mx-1"></i> <i class="bi bi-instagram text-dark mx-1"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- team ends -->
<!-- Contact starts -->
<section class="contact section-padding" id="contact">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2>Contactez-nous</h2>
                    <p>Contactez-nous pour toutes vos préocupations liée à l'immobiler</p>
                    <div class="row ">
                        <div class="col-lg-7 mx-auto">
                          <div class="carder mt-2 mx-auto p-4 bg-light">
                              <div class="card-body bg-light">
                         
                              <div class = "container">
                                               <form id="contact-form" role="form">
                      
                              <div class="controls">
                      
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="form_name">Nom</label>
                                              <input id="form_name" type="text" name="name" class="form-control" placeholder="Ex: John *" required="required" data-error="Firstname is required.">
                                              
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="form_lastname">Téléphone *</label>
                                              <input id="form_lastname" type="tel" name="tel" class="form-control" placeholder="Ex: Doe *" required="required" data-error="Lastname is required.">
                                                                              </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="form_message">Message *</label>
                                              <textarea id="form_message" name="message" class="form-control" placeholder="Saisissez votre message" rows="4" required="required" data-error="Please, leave us a message."></textarea
                                                  >
                                              </div>
                      
                                          </div>
                      
                      
                                      <div class="col-md-12">
                                          
                                          <input type="submit" class="btn btn-success btn-send  pt-2 btn-block
                                              " value="Send Message" >
                                      
                                  </div>
                            
                                  </div>
                      
                      
                          </div>
                           </form>
                          </div>
                              </div>
                      
                      
                      </div>
                </div>
            </div>
        </div>
        <div class="row m-0">
            <div class="col-md-12 p-0 pt-4 pb-4">
                <!--for getting the form download the code from download button-->
            </div>
        </div>
    </div>
</section><!-- contact ends -->
<!-- footer starts -->
@endsection