<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tirage au sort</title>
    <link rel="stylesheet" href="choixPers.css">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Stick+No+Bills&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">

</head>

<body>
<?php
    session_start();

    if (!isset($_SESSION['wad21']) || $_SESSION['wad21'] == []) {
        $_SESSION['wad21'] = ["Anaïs", "Assmaa", "Caroline", "Grace", "Judy", "Julie", "Laure", "Marwa", "Minh", "Myriam", "Stefania", "Valerie", "Ylenia"];
    }

    function afficheTableau(array $tableau): void
    {
        foreach ($tableau as $value) {
            print("<div class = 'personne'>" . $value . "</div>");
        }
    }

    function tirageAuSort(array $liste): array
    {
        $indexVolontaire = array_rand($liste);
        $nomChoisi = $liste[$indexVolontaire];
        unset($liste[$indexVolontaire]);
        print($nomChoisi);
        return $liste;
    }
    ?>
    
    <div class="titre">
        <h1>Tirage au sort</h1>
    </div>

<div class="contenuGeneral">
    <div class="flexTitre">
        <div class="gaucheTitre">
            <h2>The Winner is :</h2>
        </div>
        <div class="droiteTitre gagnant">
            <?php
            $_SESSION['wad21'] = tirageAuSort($_SESSION['wad21']);
            ?>
        </div>
    </div>
    
    <div class="flexContainer">
        <div class="droite">
            
            <div>
                <form action="choixPers.php">
                    <input class="bouton ombre" type="submit" name="random" value="Random" />
                </form>
            </div>
        </div>
        <div class="gauche ombre">
            <div class="question">
                Qui n'a pas encore répondu ?
            </div>
            <div class="flexPersonne">
                <?php
                if($_SESSION['wad21'] == []){
                    print("<span class = 'personne'>Tout le monde a répondu</span>");
                }
                else{
                    afficheTableau($_SESSION['wad21']);
                }
                ?>
            </div>
        </div>
        <div></div>
    </div>
    </div>
    <div>
    <?php
    // FAUX CHANGEMENT DE PAGE POUR RECHARGER DISCRETEMENT => A ECRIRE SUR PAGE BLANCHE ET REDIRIGERA DIRECT SUR ANCIENNE PAGE 
        // session_start();
        // $_SESSION['compteur']=0;
        // header('location: .choixPers.php');
    ?>
    </div>
</body>

</html>