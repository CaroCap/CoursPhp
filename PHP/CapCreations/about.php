<?php
require 'header.php';

/*page spécifique */
    /*ABOUT*/
$about1="We are an immersive design studio. 
We imagine, design and build immersive environnements for the entertainment industry.
We specialized in stage design and installations for events and games.
We strive to create unique and exciting experiences for audiences of all ages and backgrounds.
Want to know more ?
Don’t hesitate to get in touch !";
$about2 ="C’est avant tout une équipe pluridisciplinaire constituée de professionnels de différentes corporations.
Une équipe soudée et modulable, facilement et rapidement réactive aux nouveaux enjeux de la création, auxquels ils associent leurs talents.";
$about3 ="Dynamique et souriante, la dream team aime relever de nouveaux défis et à explorer de nouveaux territoires. Cap Creations travaille en collaboration avec de nombreux partenaires, couvrant un large spectre des disciplines utiles à la conception et à la réalisations de décors.
<br><br>
Du premier coup de crayon au dernier coup de peinture, en passant par l'audiovisuel et l'éclairage: les possibilités sont infinies...<br>
Nous sommes à votre écoute pour donner vie à vos décors et vos envies les plus folles.";
    /*TEAM*/
$photoTeam1 = "assets/img/Pit.jpg";
$photoTeam2 = "assets/img/Max.jpg";

$bioTeam1 = "Pit a fait ses premiers pas dans le monde des décors en travaillant avec le Magic Land Théâtre. Autodidacte, il pris rapidement de l’expérience, suivi quelques cours à Saint-Luc et travailla plusieurs année chez Fiction où il pu entre autre bosser sur les prestigieux décors de Parookaville et Tomorrowland.
<br><br>
Il fini par créer sa propre boîte et pu fabriquer de nombreux décors pour divers festivals (LaSemo, Tour de Samme, Fiesta Latina, Namur en mai…) mais également des escapes rooms et autres animations.
<br><br>
Il continua à développer de nouvelles skills dont le Mapping vidéo.";
$bioTeam2 ="Max… Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.
<br><br>
Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci.";
    /*TIMELINE*/
$date1 = "2015";
$date2 = "2018";
$date3 = "2020";
$date4 = "";

$imgExp1 = "assets/img/logo_capcreations-old.png";
$imgExp2 = "assets/img/Atelierbis.jpg";
$imgExp3 = "assets/img/equipe2.jpg";
$imgExp4 = "";

$nomExp1 = "Création";
$nomExp2 = "Atelier";
$nomExp3 = "Nouveau membre";
$nomExp4 = " ";

$experience1 = "Après de nombreuses années à travailler pour les autres, <a data-toggle='modal' href='#portfolioModal1'>Pierre Cap</a>, fondateur de Cap Creations décide de créer sa propre boîte de création de décor. Il réalise son premier grand projet solo avec les décors des 2 scènes du Festival Fiesta Latina.";
$experience2 = "Avec sans cesse de nouvelles demandes, il décide de s'installer à l'Ad'Hoc à Bruxelles.<br>
Atelier pluridisciplinaire aménagé et outillé pour permettre tout travaux de bois, métal et peinture. <br>
Il rassemble principalement des gens du domaine de la culture et permet d'être entouré d’artistes et d’artisans dans une effervescente ambiance de travail et de créativité.";
$experience3 = "Malgré la crise sanitaire qui rend le travail artistique difficile, Cap Creations continue de se développer en accueillant un nouveau membre passionné, <a data-toggle='modal' href='#portfolioModal2'>Max</a>.<br>
Graphiste d'origine, il permet grâce à ses skills de développer l'image graphique de Cap Creations et est un atout pour l'organisation de la société.";
$experience4 = " ";
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo $name ?> - About</title>
        <link rel="icon" type="image/x-icon" href="<?php echo $logoWeb ?>" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>

    <body id="page-top">
       <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php"><img class="rotate-image" style ="height:70px;" src="<?php echo $logo ?>" alt="" /> <?php echo $name ?></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services.php">Services</a></li> -->
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="works.php">Works</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- About-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About Us</h2>
                    <h3 class="section-subheading text-muted">We create unknown universes</h3>
                    <div class="section-contact">
                        <p>
                            <?php echo $about1 ?>
                            <br>
                        </p>
                        
                    </div>
                    <div >
                        <a class="mx-3 mt-3 btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="contact.php">Contact us</a>
                        <a class="mx-3 mt-3 btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="works.php">Our Works</a>
                    </div>
                </div>

        <!-- Team-->
        <section class="page-section bg-dark" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted"><?php echo $about2 ?></h3>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="team-member">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <img class="mx-auto rounded-circle" src="<?php echo $photoTeam1 ?>" alt="" />
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                            </a>
                            <h4>Pit</h4>
                            <p class="text-muted">Pierre Cap</p>
                            <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.facebook.com/pitch.cap"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team-member">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                <img class="mx-auto rounded-circle" src="<?php echo $photoTeam2 ?>" alt="" />
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                            </a>
                            <h4>Max</h4>
                            <p class="text-muted">Maxime Huart</p>
                            <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.facebook.com/maxime.huart.3"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9 mx-auto text-center"><p class="large text-muted"><?php echo $about3 ?></p></div>
                </div>
            </div>
        </section>
        
        <!-- Timeline-->
        <section class="page-section" id="about">
            <div class="container">
                               
                <section class="page-section" id="about">
                <div class="container">
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo $imgExp1 ?>" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4><?php echo $date1 ?></h4>
                                <h4 class="subheading"><?php echo $nomExp1 ?></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?php echo $experience1 ?></p></div>
                        </div> 
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo $imgExp2 ?>" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4><?php echo $date2 ?></h4>
                                <h4 class="subheading"><?php echo $nomExp2 ?></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?php echo $experience2 ?></p></p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo $imgExp3 ?>" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4><?php echo $date3 ?></h4>
                                <h4 class="subheading"><?php echo $nomExp3 ?></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?php echo $experience3 ?></p></p></div>
                        </div>
                    </li>
                    <!-- <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo $imgExp4 ?>" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4><?php echo $date4 ?></h4>
                                <h4 class="subheading"><?php echo $nomExp4 ?></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?php echo $experience4 ?></p></p></div>
                        </div>
                    </li> -->
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                TO BE
                                <br/>
                                CONTINUED
                                <br/>
                                ...
                            </h4>
                        </div>
                    </li>
                </ul>
                </div>
                </section>
                </ul>
            </div>

            <a class="btn btn-primary btn-warning text-uppercase js-scroll-trigger" href="#page-top">Retour en haut</a>

        </section>
                    
        
        <!-- Footer-->
        <footer class="footer mt-5 pt-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">
                        <p class="lead mb-0">
                        <ul class="list-unstyled">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="works.php">Works</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                        <div>© Caro OMI11 Website 2021</div>
                        </p>
                    </div>
                    <div class="col-lg-4 my-3 my-lg-0"></div>
                    <div class="col-lg-4 text-lg-right">
                    <h4 class="text-uppercase mb-2"><a href="contact.php">Contact</a></h4>
                        <p class="lead mb-0">
                            <?php echo $name ?>
                            <br>
                            <?php echo $numeroContact ?>
                            <br />
                            <?php echo $emailContact ?>
                        </p>
                        <a target="_blank" class="btn btn-outline-light btn-social mx-1" href="<?php echo $facebookProfile; ?>"><i class="fab fa-fw fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Biographie Modals-->
        <!-- Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Pierre Cap  </h2>
                                    <p class="item-intro text-muted">- Pit -</p>
                                    <img class="img-modal d-block mx-auto" src="<?php echo $photoTeam1 ?>" alt="" />
                                    <p><?php echo $bioTeam1 ?></p>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Maxime Huart  </h2>
                                    <p class="item-intro text-muted">- Max -</p>
                                    <img class="img-modal d-block mx-auto" src="<?php echo $photoTeam2 ?>" alt="" />
                                    <p><?php echo $bioTeam2 ?></p>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
