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
    <title>Modification Site</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $logoWeb ?>" />
    <link href="css/adminStyle.css" rel="stylesheet" />


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
//*_GUET va récupérer 
        if(isset($_GET["id"])){
            $id=$_GET["id"];

            try{
                $pdo = new PDO($bdd, $login, $psw);
                $requete = "SELECT*FROM administrateur WHERE id_admin=(:id)";

                $selection = $pdo->prepare($requete);
                $selection->execute(array(":id"=>$id));
                
                $donnee = $selection->fetch();

                echo "<form method='post'>";
                echo "<p class='form_prems'>Nom de la Cie : <br />
                <input class='style_input' type=text name='Name' value='$donnee[1]'></p>";
                echo "<p>Adresse de la Cie : <br />
                <input class='style_input' type=text name='Adresse' value='$donnee[2]'></p>";
                echo "<p>Code postal & Ville : <br />
                <input class='style_input' type=text name='CP' value='$donnee[3]'></p>";
                echo "<p>Personne de contact : <br />
                <input class='style_input' type=text name='Contact' value='$donnee[4]'></p>";
                echo "<p>Numéro de téléphone : <br />
                <input class='style_input' type=text name='Tel' value='$donnee[5]'></p>";
                echo "<p>email : <br />
                <input class='style_input' type=text name='email' value='$donnee[6]'></p>";
                echo "<p>Compte Facebook pro : <br />
                <input class='style_input' type=text name='Facebook' value='$donnee[7]'></p>";


                echo "<p><input class='style_buton' type=submit value='UPDATE'></p>";

                echo "</form>";

//$_POST une fois qu'on appuie sur le bouton submit
//!empty = n'est pas vide
                // if((isset($_POST["Name"]) && !empty($_POST["Name"])) || (isset($_POST["Adresse"]) && !empty($_POST["Adresse"]) || (isset($_POST["CP"]) && !empty($_POST["CP"]) || (isset($_POST["Contact"]) && !empty($_POST["Contact"]) || (isset($_POST["Tel"]) && !empty($_POST["Tel"]) || (isset($_POST["email"]) && !empty($_POST["email"]) || (isset($_POST["Facebook"]) && !empty($_POST["Facebook"]))){
                    if((isset($_POST["Name"]) && !empty($_POST["Name"])) || (isset($_POST["Prenom"]) && !empty($_POST["Prenom"]))){
                    $nom=$_POST["Name"];
                    $adresse=$_POST["Adresse"];
                    $codepostal=$_POST["CP"];
                    $Contact=$_POST["Contact"];
                    $Tel=$_POST["Tel"];
                    $email=$_POST["email"];
                    $facebook=$_POST["Facebook"];

                    
                    $updateQuery ="UPDATE administrateur SET name_cie=:nom, locationAdress=:adresse, locationCP=:CP, personneContact=:Contact, numeroContact=:Tel, emailContact=:email, facebookProfile=:Facebook WHERE id_admin=:id;";
                    $update = $pdo->prepare($updateQuery);
                    $update->execute(array(
                        ":nom"=>$nom,
                        ":adresse"=>$adresse,
                        ":CP"=>$codepostal,
                        ":Contact"=>$codepostal,
                        ":Contact"=>$Contact,
                        ":Tel"=>$Tel,
                        ":email"=>$email,
                        ":Facebook"=>$facebook,
                        ":id"=>$id
                    ));
                    header("location:admin.php");
                }

                echo "<br><br><a href='admin.php'>RETOUR ADMIN</a>";
            }catch (PDOException $e){
                echo $e->getMessage();
            }
        
            $pdo = new PDO($bdd, $login, $psw);
        } else {
            header("location:admin.php");
        }
    ?>




    <script src="js/admin-script.js"></script>
    <script src="js/script.js"></script>

</body>
</html>