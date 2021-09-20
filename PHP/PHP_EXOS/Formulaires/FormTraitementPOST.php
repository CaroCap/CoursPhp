<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Voici les réponses du Formulaire : <br> <br>
    <?php
    var_dump($_POST);
    print("<h5>Bienvenue ". $_POST['nom'] . "</h5>");
    print("<h5>Vous êtes née le ".$_POST['date']."</h5>");

    ?>
    
</body>
</html>