<?php
require 'header.php';

/*page spécifique */
$video1 = "https://www.youtube.com/embed/Y3-ahf9AzD4";
$detailsJob = "Dream<br>Create<br>Live";

    /*Galerie Photo Grid*/
$photo1="assets/img/tomorrow2.jpg";
$description1="Festival Tomorrow Land [BE]";
$photo2="assets/img/tomorrow1.jpg";
$description2="Festival Tomorrow Land [BE]";
$photo3="assets/img/tomorrow3.jpg";
$description3="Festival Tomorrow Land [BE]";
$photo4="assets/img/tomorrow2018.jpg";
$description4="Festival Tomorrow Land [BE]";
$photo5="assets/img/tomorrowDeco.jpg";
$description5="Festival Tomorrow Land [BE]";
$photo6="assets/img/tomorrowWinter.jpg";
$description6="Festival Tomorrow Land [BE]";

$photo7="assets/img/Parookaville3.jpg";
$description7="Festival Parookaville [DE]";
$photo8="assets/img/Parookaville4.jpg";
$description8="Festival Parookaville [DE]";
$photo9="assets/img/Parookaville5.jpg";
$description9="Festival Parookaville [DE]";
$photo10="assets/img/Parookaville6.jpg";
$description10="Festival Parookaville [DE]";
$photo11="assets/img/Parookaville2.jpg";
$description11="Festival Parookaville [DE]";
$photo12="assets/img/Parookaville7.jpg";
$description12="Festival Parookaville [DE]";
$photo13="assets/img/Parookaville8.jpg";
$description13="Festival Parookaville [DE]";
$photo14="assets/img/Parookaville9.jpg";
$description14="Festival Parookaville [DE]";
$photo15="assets/img/Parookaville10.jpg";
$description15="Festival Parookaville [DE]";
$photo16="assets/img/Parookaville11.jpg";
$description16="Festival Parookaville [DE]";
$photo17="assets/img/Parookaville12.jpg";
$description17="Festival Parookaville [DE]";

$photo18="assets/img/zodiak3.jpg";
$description18="Le Zodiak [BE]";
$photo19="assets/img/zodiak2.jpg";
$description19="Le Zodiak [BE]";
$photo20="assets/img/zodiak1.jpg";
$description20="Le Zodiak [BE]";

$photo21="assets/img/Square2.jpg";
$description21="The Square [BE]";
$photo22="assets/img/Square.jpg";
$description22="The Square [BE]";

$photo23="assets/img/pieuvre.jpg";
$description23="Festival de la Tour de Samme [BE]";
$photo24="assets/img/TDS.jpg";
$description23="Festival de la Tour de Samme [BE]";
$photo23="assets/img/tete.jpg";
$description23="Festival de la Tour de Samme [BE]";

$photo24="assets/img/nyege.jpg";
$description24="Festival Nyege Nyege [UG]";

$photo25="assets/img/DanseResurection.jpg";
$description25="Soirées Danse Resurection [BE]";
$photo26="assets/img/DanseResurection2.jpg";
$description26="Soirées Danse Resurection [BE]";

$photo27="assets/img/FiestaLatina.jpg";
$description27="Festival Fiesta Latina [BE]";
$photo28="assets/img/FiestaLatina2.jpg";
$description28="Festival Fiesta Latina [BE]";
$photo29="assets/img/FiestaLatina3.jpg";
$description29="Festival Fiesta Latina [BE]";

$photo30="assets/img/NamurMai.jpg";
$description30="Festival Namur en mai [BE]";

$photo31="assets/img/Deco.jpg";
$description31="";
$photo32="assets/img/Deco1.jpg";
$description32="";
$photo33="assets/img/Deco2.jpg";
$description33="";
$photo34="assets/img/Deco3.jpg";
$description34="";
$photo35="assets/img/Deco4.jpg";
$description35="";
$photo36="assets/img/Deco5.jpg";
$description36="";
$photo37="assets/img/DecoMystere2.jpg";
$description37="";
$photo38="assets/img/decoParookaville.jpg";
$description38="";

$photo39="assets/img/Improviste.jpg";
$description39="Enseigne Théâtre L'Improviste [BE]";
$photo40="assets/img/EscapeBank.jpg";
$description40="Escape Room [BE]";
$photo41="assets/img/MagicEscape.jpg";
$description41="Escape Room - Magic Escape [BE]";
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo $name ?> - Works</title>
        <link rel="icon" type="image/x-icon" href="<?php echo $logoWeb ?>" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- lightbox pour gallerie photo-->
        <link href="css/lightbox.min.css" rel="stylesheet" />
        <script src="js/lightbox-plus-jquery.min.js"></script>
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
        
        <!-- Masthead-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <!-- Vidéo -->
                    <iframe class="video my-5" width="560" height="315" src="<?php echo $video1 ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    <!-- Nom Page -->                
                    <h1 class="section-heading text-uppercase">Our Works</h1>
                    <!-- Séparateur étoile -->
                    <div class="divider-custom divider-light">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                        <div class="divider-custom-line"></div>
                    </div>
                    <!-- Slogan -->
                    <p class="font-weight-light mt-1 mb-0"><?php echo $detailsJob; ?></p>     
                    <!-- Boutons -->
                    <div >
                        <a class="mx-3 mt-3 btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="contact.php">Contact us</a>
                        <a class="mx-3 mt-3 btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="about.php">About us</a>
                    </div>           
                </div>
            </div>    


 <!--SLIDER-->
    <div class="slider">
        <div class="slides">
            <div class="slide"><img src="assets/img/slider/1.jpg" alt=""/></div>
            <div class="slide"><img src="assets/img/slider/2.jpg" alt=""/></div>
            <div class="slide"><img src="assets/img/slider/3.jpg" alt=""/></div>
            <div class="slide"><img src="assets/img/slider/4.jpg" alt=""/></div>
            <div class="slide"><img src="assets/img/slider/5.jpg" alt=""/></div>
            <div class="slide"><img src="assets/img/slider/6.jpg" alt=""/></div>
            <div class="slide"><img src="assets/img/slider/7.jpg" alt=""/></div>
            <div class="slide"><img src="assets/img/slider/8.jpg" alt=""/></div>
            <div class="slide"><img src="assets/img/slider/9.jpg" alt=""/></div>
            <div class="slide"><img src="assets/img/slider/10.jpg" alt=""/></div>
        </div>
    </div>

 <!-- Galerie Photo Grid-->
<div class="grille"> 
    <a href="<?php echo $photo1 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description1 ?>">
        <img class="grid-item" src="<?php echo $photo1 ?>" alt="">
    </a>
    <a href="<?php echo $photo2 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description2 ?>">
        <img class="grid-item" src="<?php echo $photo2 ?>" alt="">
    </a>
    <a href="<?php echo $photo3 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description3 ?>">
        <img class="grid-item" src="<?php echo $photo3 ?>" alt="">
    </a>
    <a href="<?php echo $photo4 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description4 ?>">
        <img class="grid-item" src="<?php echo $photo4 ?>" alt="">
    </a>
    <a href="<?php echo $photo5 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description5 ?>">
        <img class="grid-item" src="<?php echo $photo5 ?>" alt="">
    </a>
    <a href="<?php echo $photo6 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description6 ?>">
        <img class="grid-item" src="<?php echo $photo6 ?>" alt="">
    </a>
    <a href="<?php echo $photo7 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description7 ?>">
        <img class="grid-item" src="<?php echo $photo7 ?>" alt="">
    </a>
    <a href="<?php echo $photo8 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description8 ?>">
        <img class="grid-item" src="<?php echo $photo8 ?>" alt="">
    </a>
    <a href="<?php echo $photo9 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description9 ?>">
        <img class="grid-item" src="<?php echo $photo9 ?>" alt="">
    </a>
    <a href="<?php echo $photo10 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description10 ?>">
        <img class="grid-item" src="<?php echo $photo10 ?>" alt="">
    </a>
    <a href="<?php echo $photo11 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description11 ?>">
        <img class="grid-item" src="<?php echo $photo11 ?>" alt="">
    </a>
    <a href="<?php echo $photo12 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description12 ?>">
        <img class="grid-item" src="<?php echo $photo12 ?>" alt="">
    </a>
    <a href="<?php echo $photo13 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description13 ?>">
        <img class="grid-item" src="<?php echo $photo13 ?>" alt="">
    </a>
    <a href="<?php echo $photo14 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description14 ?>">
        <img class="grid-item" src="<?php echo $photo14 ?>" alt="">
    </a>
    <a href="<?php echo $photo15 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description15 ?>">
        <img class="grid-item" src="<?php echo $photo15 ?>" alt="">
    </a>
    <a href="<?php echo $photo16 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description16 ?>">
        <img class="grid-item" src="<?php echo $photo16 ?>" alt="">
    </a>
    <a href="<?php echo $photo17 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description17 ?>">
        <img class="grid-item" src="<?php echo $photo17 ?>" alt="">
    </a>
    <a href="<?php echo $photo18 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description18 ?>">
        <img class="grid-item" src="<?php echo $photo18 ?>" alt="">
    </a>
    <a href="<?php echo $photo19 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description19 ?>">
        <img class="grid-item" src="<?php echo $photo19 ?>" alt="">
    </a>
    <a href="<?php echo $photo20 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description20 ?>">
        <img class="grid-item" src="<?php echo $photo20 ?>" alt="">
    </a>
    <a href="<?php echo $photo21 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description21 ?>">
        <img class="grid-item" src="<?php echo $photo21 ?>" alt="">
    </a>
    <a href="<?php echo $photo22 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description22 ?>">
        <img class="grid-item" src="<?php echo $photo22 ?>" alt="">
    </a>
    <a href="<?php echo $photo23 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description23 ?>">
        <img class="grid-item" src="<?php echo $photo23 ?>" alt="">
    </a>
    <a href="<?php echo $photo24 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description24 ?>">
        <img class="grid-item" src="<?php echo $photo24 ?>" alt="">
    </a>
    <a href="<?php echo $photo25 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description25 ?>">
        <img class="grid-item" src="<?php echo $photo25 ?>" alt="">
    </a>
    <a href="<?php echo $photo26 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description26 ?>">
        <img class="grid-item" src="<?php echo $photo26 ?>" alt="">
    </a>
    <a href="<?php echo $photo27 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description27 ?>">
        <img class="grid-item" src="<?php echo $photo27 ?>" alt="">
    </a>
    <a href="<?php echo $photo28 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description28 ?>">
        <img class="grid-item" src="<?php echo $photo28 ?>" alt="">
    </a>
    <a href="<?php echo $photo29 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description29 ?>">
        <img class="grid-item" src="<?php echo $photo29 ?>" alt="">
    </a>
    <a href="<?php echo $photo30 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description30 ?>">
        <img class="grid-item" src="<?php echo $photo30 ?>" alt="">
    </a>
    <a href="<?php echo $photo31 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description31 ?>">
        <img class="grid-item" src="<?php echo $photo31 ?>" alt="">
    </a>
    <a href="<?php echo $photo32 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description32 ?>">
        <img class="grid-item" src="<?php echo $photo32 ?>" alt="">
    </a>
    <a href="<?php echo $photo33 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description33 ?>">
        <img class="grid-item" src="<?php echo $photo33 ?>" alt="">
    </a>
    <a href="<?php echo $photo34 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description34 ?>">
        <img class="grid-item" src="<?php echo $photo34 ?>" alt="">
    </a>
    <a href="<?php echo $photo35 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description35 ?>">
        <img class="grid-item" src="<?php echo $photo35 ?>" alt="">
    </a>
    <a href="<?php echo $photo36 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description36 ?>">
        <img class="grid-item" src="<?php echo $photo36 ?>" alt="">
    </a>
    <a href="<?php echo $photo37 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description37 ?>">
        <img class="grid-item" src="<?php echo $photo37 ?>" alt="">
    </a>
    <a href="<?php echo $photo38 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description38 ?>">
        <img class="grid-item" src="<?php echo $photo38 ?>" alt="">
    </a>
    <a href="<?php echo $photo39 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description39 ?>">
        <img class="grid-item" src="<?php echo $photo39 ?>" alt="">
    </a>
    <a href="<?php echo $photo40 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description40 ?>">
        <img class="grid-item" src="<?php echo $photo40 ?>" alt="">
    </a>
    <a href="<?php echo $photo41 ?>" class="grid-item" data-lightbox="MaGalerie" data-title="<?php echo $description41 ?>">
        <img class="grid-item" src="<?php echo $photo41 ?>" alt="">
    </a>
</div>

<div class="container mt-5">
    <a class="btn btn-primary btn-warning text-uppercase js-scroll-trigger" href="#page-top">Retour en haut</a>
</div>

        <!-- Footer-->
        <footer class="footer mt-5 pt-4">
            <!-- Séparateur 
            <div class="divider-custom">
                        <div class="divider-custom-line-footer"></div>
            -->
            </div>
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
        <!-- lightbox pour gallerie photo-->
        <script src="js/lightbox.js"></script>
    </body>
</html>
