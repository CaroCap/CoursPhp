<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 1</h1>
    <?php

        echo ("Bienvenue " . $_POST['prenom'] . " " . $_POST['nom'] . ", vous avez " . $_POST['age'] . "ans !");

    ?>
    <br>
    <a href="./formulaires.php">RETOUR</a>
</body>
</html>