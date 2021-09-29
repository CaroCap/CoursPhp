<?php
// fonction qui génére de fonctions qui affichent de tableau
// de multiplication. Voir l'utilisation pour mieux comprendre
$genTables = function ($maxVals): callable{ 
    return (function ($chiffre) use ($maxVals): void {
        // $max n'est pas accéssible si on n'utilise pas
        // "use". Pas besoin d'use en JS
        for ($i=0;$i<=$maxVals;$i++){
            print ("<br/>La multip de ".$chiffre."x".
                    $i."=".($chiffre*$i));
        }
        print ("<hr>");	
    });
};

// utilisation

// tables de 5 valeurs
$multMax5 = $genTables(5); // dans cet appel, la fonction utilise la valeur de la variable $max
$multMax5 (3); // pour le chiffre 3, 5 valeurs
$multMax5 (7); // pour le chiffre 3, 5 valeurs

// tables de 10 valeurs
$multMax5 = $genTables(10); // dans cet appel, la fonction utilise la valeur de la variable $max
$multMax5 (2); // pour le chiffre 3, 5 valeurs
$multMax5 (4); // pour le chiffre 3, 5 valeurs
