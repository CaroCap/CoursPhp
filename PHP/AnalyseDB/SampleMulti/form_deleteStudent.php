<?php 
    if(isset($_GET["id"])){
        $id=$_GET["id"];

        if(!empty($_POST)){
            $bdd = "mysql:host=localhost;dbname=dbslide;charset=utf8";
            $login = "root";
            $psw = "";
            try{
                $pdo = new PDO($bdd, $login, $psw);
                $requete = "DELETE FROM student WHERE student_id=:id;";
                $delete = $pdo->prepare($requete);
                $delete->execute(array(":id"=>$id));
                header("location:index.php");
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    } else {
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <form class="form-horizontal" method="post">
    <input type="hidden" name="id" value="<?php $id ?>"/>
    Voulez vous vraiment supprimer ?
    <br>
    <div class="form-actions">
        <button type="submit" class="btn btn-danger">Yes</button>
        <a class ="btn" href="index.php">No</a>
        </div>
    </form>
</body>
</html>