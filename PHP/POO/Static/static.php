<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        include "./Vendor/autoload.php";

        $m1 = new Medecin("Lola");
        $m2 = new Medecin("Marie");

        $m1->afficher();

        //Si codeo = public
        Medecin::$codeDeo = "Soigner tout le monde";
        echo Medecin::$codeDeo;

        //Si codeo = private => utiliser le get et le set
        Medecin::setCodeDeo("Vaccinez-vous!!!");
        echo "<br>Le code deontologique est : ". Medecin::getCodeDeo();


    ?>

</body>
</html>