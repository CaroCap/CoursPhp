<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <h1>Exercice 2</h1>
    
    <?php

        if($_POST['prenom'] == 'Caroline' && $_POST['nom']== 'Cap'){
            print ("Salutation " . $_POST['prenom'] . " " . $_POST['nom'] . ", Que la force soit avec toi");
            print ('<br><a target="_blank" href="https://www.starwars.com/"><img src="./images/Yoda.png" alt="Yoda"></a>');
        }
        else{
            print ("Salutation " . $_POST['prenom'] . " " . $_POST['nom'] . ". Tu n'as pas la force...");

        }

    ?>
    <br>
    <a href="./formulaires.php">RETOUR</a>
</body>
</html>