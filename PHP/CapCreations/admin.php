<?php 

/*général*/
$logoWeb= "assets/img/logo_capcreations.jpg";
$logo = "assets/img/logo_capcreations.png";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        
    <title>Administration Site</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $logoWeb ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css"></link>
    <link rel="stylesheet" href="css/adminStyle.css">
</head>

<body>

<!--Logo animé-->

    <section class="portfolio-experiment">
        <a class="navbar-brand js-scroll-trigger" href="index.php">
                    <img class="rotate-image" style ="height:70px;" src="<?php echo $logo ?>" alt="" /></a>
        <a>
            <span class="text">Homepage</span>
            <span class="line -right"></span>
            <span class="line -top"></span>
            <span class="line -left"></span>
            <span class="line -bottom"></span>
        </a>
    </section>

    <?php
        $bdd = "mysql:host=localhost;dbname=capcreations;charset=utf8";
        $login = "root";
        $psw = "";

        //tr = ligne tableau
        //td = cellule tableau
        try {
            $pdo = new PDO($bdd, $login, $psw);
            $requete ="SELECT * FROM administrateur;";
            $listDonnees = $pdo->query($requete);
            echo "<table>";
                foreach($listDonnees as $donnees){
                    echo "<tr>";
                        echo "<td>".$donnees['id_admin']."</td>";
                        echo "<td>".$donnees['name_cie']."</td>";
                        // echo "<td>".$donnees['locationAdress']." - ".$donnees['locationCP']."</td>";
                        // echo "<td>".$donnees['personneContact']."</td>";
                        // echo "<td>".$donnees['numeroContact']."</td>";
                        // echo "<td>".$donnees['emailContact']."</td>";
                        // echo "<td>".$donnees['facebookProfile']."</td>";

                        echo "<td><a href='admin_modif.php?id=".$donnees['id_admin']."'>Modifier<i class='fas fa-edit'></i></td>";

                    echo "</tr>";
                }
            echo "</table>";
            
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    

    ?>

</body>

</html>