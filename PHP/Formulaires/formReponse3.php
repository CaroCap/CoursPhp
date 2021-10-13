<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    
    <?php

    $nombreADeviner = mt_rand(0,10); 

    if ($_POST['nombre']==$nombreADeviner){
        print "YOU WIN<br>";
        print "<img src='./images/Victoire.png' alt='Victoire'>";
    }
    else{
        print 'You LOOSE<br>';
        print 'The number to find was '. $nombreADeviner;
    }

    ?>
    <br>
    <a href="formulaires.php">RÉESSAYER</a>
</body>
</html>