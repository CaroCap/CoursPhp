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


// // EX1 Créez un array associatif contenant de couples film-réalisateur. Affichez le contenu sans utiliser de boucles et en utilisant de boucles
// $cinema = ["Orange Mécanique" => "Stanley Kubrick", "Jurassic Park" => "Steven Spielberg", "Kill Bill" => "Quentin Tarantino"];
// var_dump($cinema);
// foreach($cinema as $cle => $valeur){
//     print("<br>Le Film " . $cle . " est réalisé par " . $valeur);
// }
// // EX2 (suite ex1) Remplacez le réalisateur du premier film par "Ed Wood"
// $cinema["Orange Mécanique"] = "Ed Wood";
// var_dump($cinema);


// EX 3 Créez un contenant les noms de pays et leur capital. Créez une boucle foreach pour afficher son contenu dans la forme "La capital de xxxx est xxxx"
$monde = [["pays"=>"Belgique", "capitale" => "Bruxelles"], ["pays"=>"France", "capitale" => "Paris"], ["pays"=>"Italie", "capitale" => "Rome"]];
// EX 4 (suite ex3) Rajoutez deux pays et leur capital après la déclaration mais avant la boucle d'affichage
$monde[] = ["pays"=>"Hongrie", "capitale" => "Budapest"];
foreach ($monde as $valeur){
    print("<br>La Capitale de " . $valeur["pays"] . " est " . $valeur["capitale"]);
}
// EX 5 (suite 3) Modifiez la boucle pour qu'elle affiche uniquement les pays. Modifiez la boucle pour qu'elle affiche uniquement les capitales. Revenez à la boucle originale.
print("<br>---------<br>");
foreach ($monde as $valeur){
    print("<br>La Capitale de " . $valeur["pays"]);
}
print("<br>---------<br>");
foreach ($monde as $valeur){
    print("<br>La Capitale de " . $valeur["pays"]);
}
// EX 6(suite3) Affichez le contenu du array avec print_r pour mieux comprendre l'organisation des indices
print("<br>---------<br>");
print_r($monde)



//var_dump($tab); pour imprimer un tableau
?>

</body>
</html>