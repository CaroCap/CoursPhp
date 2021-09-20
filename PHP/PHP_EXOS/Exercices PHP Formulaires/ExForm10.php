<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ExTrans10.php">
    
<!-- EX 10 Nous avons une liste de produits dans un array. Créer un code PHP capable d'afficher une liste déroulante contenant tous les produits. -->

<form action="exFormTraitement.php">
    <select name="courses">
        <?php
        $listeProduit = [
            "Beurre", "Chocolat", "Sucre", "Farine", "Oeufs"];
        for ($i=0; $i <count($listeProduit); $i++){
            print('<option value="' . $i . '">' . $listeProduit[$i] . '</option><br>');
        } 
        ?>
    </select>

<br><br>
<!-- EX 11 Remplacez la liste déroulante pour des images de chaque produit avec de radio buttons -->
<?php
$listeProduit = [
    "Beurre" => '<iframe src="https://giphy.com/embed/x84Vdy91Q4O88" width="480" height="360" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>',
    "Chocolat" => '<iframe src="https://giphy.com/embed/xT1R9yvXiMMXE4t3Zm" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>', 
    "Sucre" => '<iframe src="https://giphy.com/embed/kVVEP6SmfEXvy" width="480" height="347" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>', 
    "Farine" => '<iframe src="https://giphy.com/embed/lL2eJKkY5IP8dFqTdw" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>', 
    "Oeufs" => '<iframe src="https://giphy.com/embed/qJkRbWM1MfVjq" width="480" height="338" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>'
    ];
    foreach ($listeProduit as $cle => $valeur){
        print('<br><input type="radio" name="listeCourse" value ="'.$cle.'">');
        print($cle.'<br>');
        print($valeur);

    }



?>
    <br><br>
    <button>Envoyer</button>
</form>

</body>
</html>