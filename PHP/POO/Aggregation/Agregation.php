<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Aggrégation</title>
</head>
<body>
    
<?php
    include "./class/Local.class.php";
    include "./class/Ordinateur.class.php";
    include "./class/Projecteur.class.php";

    $ordi1 = new Ordinateur("Ordi01", "Dell");
    $ordi2 = new Ordinateur("Ordi02", "ThinkPad");
    $projo01 = new Projecteur("Projo01", "Acer");


    $monLocal = new Local("WAD");
    $monLocal->addOrdi($ordi1);
    $monLocal->addOrdi($ordi2);
    $monLocal->setProjo($projo01);

    $monLocal->Afficher();
?>

</body>
</html>