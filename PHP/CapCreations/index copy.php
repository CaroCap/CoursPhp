<?php
require 'header.php';

$facebookProfile = "https://www.facebook.com/capcreationsevents";
/*page spécifique */
$detailsJob = "Immersive Design";
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cap Creations - Immersive Design</title>
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
                <!-- <a class="navbar-brand js-scroll-trigger" href="index.php"><img class="rotate-image" style ="height:70px;" src="<?php echo $logo ?>" alt="" /> <?php echo $name ?></a> -->
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
                    <!-- Logo -->
                    <img class="rotate-logo mb-5" src="<?php echo $logo; ?>" alt="" />
                    <!-- Nom Site -->                
                    <h1 class="section-heading text-uppercase"><?php echo $name; ?></h1>
                    <!-- Séparateur étoile -->
                    <div class="divider-custom divider-light">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="rotate-image fas fa-star"></i></div>
                        <div class="divider-custom-line"></div>
                    </div>
                    <!-- Slogan -->
                    <p class="font-weight-light mt-1 mb-0"><?php echo $detailsJob; ?></p>                
                </div>
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
    </body>
</html>
