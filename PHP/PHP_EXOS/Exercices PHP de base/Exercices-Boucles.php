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

// //EX1 Faites un logiciel qui demande l'âge à l'utilisateur. Le logiciel continue à demander jusqu'à ce qu'il introduise une valeur entre 0 et 130.
// // Si l'utilisateur est une personne majeure on lui donne la bienvenue. Dans le cas contraire, on affiche le message « Vous êtes encore très jeune»
// print("\nQuel est votre âge ? ");
// $age = read();
// while ($age <0 or $age >130){
//     print("\nQuel est votre âge ? ");
//     $age = read();
// } 
// if ($age < 18){
//     print("\nVous êtes encore très jeune !");
// } else{
//     print("\nBienvenue !");
// }


// // EX2 Faites une boucle while pour afficher les valeurs entre 0 et 10
// $valeur = 0;
// while ($valeur < 11){
//     print("\n".$valeur);
//     $valeur ++;
// }


// // EX3 Modifiez l'exercice 1) pour que l'utilisateur puisse se tromper 3 fois
// print("\nQuel est votre âge ? ");
// $age = read();
// $essai = 1;
// while (($age <0 or $age >130) and $essai <3){
//     print("\nQuel est votre âge ? ");
//     $age = read();
//     $essai ++;
// } 
// if ($essai <3){
//     if ($age < 18){
//         print("\nVous êtes encore très jeune ! ");
//     } else{
//         print("\nBienvenue !");
//     }
// } else{
//     print("\nVous n'avez plus d'essai ! ");
// }


// //4 Faites une boucle while et une boucle for pour afficher les valeurs entre 50 et 70

// $valeur = 50;
// while ($valeur < 71){
//     print("\n".$valeur);
//     $valeur ++;
// }

// for ($valeur = 50; $valeur < 71 ; $valeur++ ){
//     print("\n".$valeur);
// }


// // EX5 Faites une boucle pour afficher les valeurs impaires entre 50 et 100
// for ($impair = 51; $impair < 100 ; $impair += 2){
//     print("\n".$impair);
// }


// // EX6 Faites une boucle qui, à partir d'une valeur de départ stockée dans une variable, affiche les dix nombres suivants. Par exemple, si la valeur stockée est 17, le programme affichera les nombres de 18 à 27. Faites deux versions de l'algorithme : while et for.
// print("\nAvec boucle WHILE");

// $depart = 31;
// $i = $depart;
// while ($i < $depart+10){
//     $i++;
//     print("\n".$i);
// }

// print("\nAvec boucle FOR");
// $depart = 17;
// for ($i = $depart+1; $i <= $depart+10; ++$i){
//     print("\n".$i);
// }


// // EX7 Créez un logiciel qui calcule la multiplication d'une suite de valeurs saisies par l'utilisateur. Le logiciel doit demander à l'utilisateur le nombre de valeurs qu'il souhaite saisir
// print("\nCombien de valeurs vous voulez calculer ? ");
// $nombreValeurs = read();
// $multiplication = 1;
// for($i = 0; $i < $nombreValeurs; $i++){
//     print("\nQuelle valeur souaitez-vous multiplier ? ");
//     $Valeurs = read();
//     $multiplication = $multiplication*$Valeurs;
// }
// print("\n".$multiplication);

// OU avec LISTE
print("\nCombien de valeurs vous voulez calculer ? ");
$nombreValeurs = read();
$multiplication = 1;
$array = [];
$calcul = "";
for($i = 0; $i < $nombreValeurs; $i++){
    print("\nQuelle valeur souaitez-vous multiplier ? ");
    $Valeurs = read();
    $array[$i] = $Valeurs;
    $multiplication = $multiplication*$Valeurs;
    $calcul = $calcul . " x " . $Valeurs;
}
print("\n" . $calcul . " = " . $multiplication);
print_r($array);


// // EX8 Créez un logiciel qui calcule la multiplication d'une suite de valeurs saisis par l'utilisateur. L'entrée de données doit s'arrêter quand l'utilisateur saisit la valeur -1.
// $multiplication = 1;
// print("\nQuelle valeur souaitez-vous multiplier ? (-1 pour STOP) ");
// for($valeur = read(); $valeur !=-1; $valeur = read()){
//     print("\nQuelle valeur souaitez-vous multiplier ? (-1 pour STOP) ");
//     $multiplication = $multiplication*$valeur;
// }
// print($multiplication);


// // EX9 Créez une boucle qui écrit la table de multiplication d'un nombre (stocké dans une variable), présentée comme suit

// $tableMultiplication = 7;

// for ($i =1; $i < 11 ; $i++){
//     print("\n" . $tableMultiplication . " x " . $i . " = " . $tableMultiplication*$i);
// }


// // EX10 Créer une boucle qui affiche les 24h d'une journée. Pour chaque heure il affiché toutes les 5 minutes et pour chacune de ces 5 min il affiche toutes les 10 secondes

// for ($h = 1; $h < 25; $h++){
//     print("\n" . $h . "heure ");
//     for ($m = 5; $m <60; $m = $m+5){
//         print("\n" . $m . "min ");
//         for ($s = 10; $s <60; $s = $s+10){
//             print("\n" . $s . "sec ");
//         }    
//     }
// }