<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listing étudiant</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css"></link>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        $bdd = "mysql:host=localhost;dbname=dbslide;charset=utf8";
        $login = "root";
        $psw = "";

        //tr = ligne tableau
        //td = cellule tableau
        try {
            $pdo = new PDO($bdd, $login, $psw);
            $requete ="SELECT * FROM student;";
            $listStudents = $pdo->query($requete);
            echo "<table>";
                foreach($listStudents as $student){
                    echo "<tr>";
                        echo "<td>".$student['student_id']."</td>";
                        echo "<td>".$student['first_name']." ".$student['last_name']."</td>";
                        echo "<td><a href='form_infoStudent.php?id=".$student['student_id']."'><i class='far fa-address-card'></i></td>";
                        echo "<td><a href='form_modifStudent.php?id=".$student['student_id']."'><i class='fas fa-edit'></i></td>";
                        echo "<td><a href='form_DeleteStudent.php?id=".$student['student_id']."'><i class='fas fa-trash'></i></td>";   

                    echo "</tr>";
                }
            echo "</table>";
            
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    

    ?>

</body>

</html>