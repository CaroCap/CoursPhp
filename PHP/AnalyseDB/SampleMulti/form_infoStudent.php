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

                echo $student[0]."-".$student[1]."-".$student[2]."-".$student[3];
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