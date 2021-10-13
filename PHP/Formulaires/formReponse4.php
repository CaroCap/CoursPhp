<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
    <?php
    $nombre1 = $_POST['nombre1'];
    $nombre2 = $_POST['nombre2'];

    if($nombre1<$nombre2){
    for ($i=$nombre1; $i < $nombre2 ; $i++) { 
print "<br>".$i;
    }}
    else{
        for ($i=$nombre2; $i < $nombre1 ; $i++) { 
            print "<br>".$i;
    }}

    ?>

    <br>
    <a href="formulaires.php">RETOUR</a>
    
</body>
</html>