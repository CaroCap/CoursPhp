<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8</title>
</head>
<body>
    <?php
    $tva=$_POST['tva'];
    $prix = $_POST['prixHtva'];
        print "Le prix de ". $prix ."€ HTVA vaut avec une TVA à ". $_POST['tva']. "% : ". ($prix+($prix*$tva/100))."€ TVA comprise" ;
    ?>
    <br>
    <a href="formulaires.php">RETOUR</a>
</body>
</html>