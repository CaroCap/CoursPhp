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
// ce code nous permet de lire du clavier
function read()
{
    $fr = fopen("php://stdin", "r");   // open our file pointer to read from stdin
    $input = fgets($fr, 128);        // read a maximum of 128 characters
    $input = rtrim($input);         // trim any trailing spaces.
    fclose($fr);                   // close the file handle
    return $input;                  // return the text entered
}

// // // EX1 Créez un array contenant les valeurs 10,20 et 50 Affichez son contenu sans utiliser de boucles

// $tab = [10,20,50];
// // var_dump($tab);

// // EX2 (1 suite) Rajoutez les valeurs 8 et 70 au tableau précédant. Affichez les éléments 2éme et 5éme du tableau.
// $tab[] = 8;
// $tab[] = 70;
// print($tab[1]);
// print($tab[4]);


// // EX 3 Créez un tableau contenant les noms de 5 villes. Affichez le contenu du tableau (faites une version sans boucles et une avec une boucle)
// $villes = ["Bruxelles", "Paris", "Rome", "Tegucigalpa", "Budapest"];
// print_r($villes);
// foreach ($villes as $valeur){
//     print("\n Ville : " . $valeur);
// }
// // EX 4 (3suite) Rajoutez deux villes au tableau précédant et affichez-le
// $villes[] = "Venise";
// $villes[] = "Sydney";
// foreach ($villes as $valeur){
//     print("\n Ville : " . $valeur);
// }
// // EX 5 (3suite) Remplacez la première ville du tableau par 'Quito'
// $villes[0] = "Quito";
// print_r($villes);



// // EX 6 Créez un tableau qui contient les valeurs de 1 à 20. Affichez son contenu (boucles)
// $chiffres = [];
// for ($i =1; $i<=20; $i++){
//     $chiffres[] = $i;
// }
// foreach ($chiffres as $valeur){
//     print("<br>" . $valeur);
// }
// // EX 7 (suite ex6) Créez une boucle qui multiplie par deux chaque valeur du tableau précédant
// foreach($chiffres as $cle => &$valeur){
//     $chiffres[$cle] = $valeur*2;
// }
// print("<br>");
// print_r($chiffres);


// EX 8 Créez un tableau contenant les notes de 5 élèves et une boucle qui affiche son contenu. Les notes inférieures à 10 seront affichées en rouge. En plus, la boucle calcule et affiche la moyenne des notes. Faites-le avec for et while.
$notes = [20, 4, 13, 7, 15];
$moyenne = 0;
for($i =0; $i < count($notes); $i++){
    if ($notes[$i] < 10){
        print("<br><div style='color: red;'>".$notes[$i]."</div>");
    }
    elseif($notes[$i] >= 10){
        print("<br><div style='color: black;'>".$notes[$i]."</div>");
    }
    $moyenne = $moyenne+$notes[$i];
    print("<br>Moyenne : " . ($moyenne/($i+1)) . "<br>" );
}
// // OU JULIE AVEC WHILE 
// $notes = [10,4,18,12,5];
// $i = 0;
// while ($i <= sizeof($notes)) {
//     if ($notes[$i] < 10) {
//         print('<p style="color:hotpink; font-weight:bold;">' . $notes[$i] . '</p>');
//     }
//     else {
//         print('<p style="color:purple; font-weight:bold;">' . $notes[$i] . '</p>');
//     }
//     $moyenne = $moyenne + $notes[$i];
//     $i++;
// }

// print('<p style="font-size:20px"> Moyenne générale [WHILE] : ' . ($moyenne / sizeof($notes)) . '/20</p>');
// print('<p style="font-size:20px"> Moyenne générale [FOR] : ' . ($math / sizeof($notes)) . '/20</p>');



// // EX 9 Ecrivez un algorithme constituant un tableau, à partir de deux tableaux de même longueur existants. Le nouveau tableau sera la somme des éléments des deux tableaux de départ.

// $tab1 = [5,7,9,15,34,68];
// $tab1 = [45,97,94,71,3,8];

// for ($i = 0; $i < count($tab1))

 ?>

</body>
</html>