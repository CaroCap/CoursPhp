<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Namespace</title>
</head>
<body>

<?php

include "./Vendor/autoload.php";

// pour ne pas devoir écrire le nom du namespace à chaque création d'objet on crée un USE
use \Shop\Basket\Product as ProduitPanier; //as = alias pour réutiliser dans le code plus facilement
use \Shop\FauxPanier\Product as FauxProduit;

$pf1 = new FauxProduit(5);
// $p1 = new ProduitPanier(4);
$b1 = new \Shop\Basket\Basket(5);

?>

</body>
</html>