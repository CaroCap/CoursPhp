<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $bdd = "mysql:host=localhost;dbname=dbslide;charset=utf8";
        $login = "root";
        $psw = "";
//*_GUET va récupérer 
        if(isset($_GET["id"])){
            $id=$_GET["id"];

            try{
                $pdo = new PDO($bdd, $login, $psw);
                $requete = "SELECT*FROM student WHERE student_id=(:id)";

                $selection = $pdo->prepare($requete);
                $selection->execute(array(":id"=>$id));
                
                $student = $selection->fetch();

                echo "<form method='post'>";
                echo "<p>Nom : <input type=text name='Name' value='$student[1]'></p>";
                echo "<p>Prénom : <input type=text name='Prenom' value='$student[2]'></p>";
                echo "<p><input type=submit value='update'></p>";

                echo "</form>";

//$_POST une fois qu'on appuie sur le bouton submit
//!empty = n'est pas vide
                if((isset($_POST["Name"]) && !empty($_POST["Name"])) || (isset($_POST["Prenom"]) && !empty($_POST["Prenom"]))){
                    $nom=$_POST["Name"];
                    $prenom=$_POST["Prenom"];
                    
                    $updateQuery ="UPDATE student SET last_name=:prenom, first_name=:nom WHERE student_id=:id;";
                    $update = $pdo->prepare($updateQuery);
                    $update->execute(array(
                        ":prenom"=>$prenom,
                        ":nom"=>$nom,
                        ":id"=>$id
                    ));
                    header("location:index.php");
                }

                echo "<br><br><a href='index.php'>INDEX</a>";
            }catch (PDOException $e){
                echo $e->getMessage();
            }
        
            $pdo = new PDO($bdd, $login, $psw);
            // echo $id;
        } else {
            header("location:index.php");
        }
    ?>

</body>
</html>