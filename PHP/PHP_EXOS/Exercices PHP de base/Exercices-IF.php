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

// // 1.  Créez un code capable de calculer la surface d'une chambre. Demandez à l'utilisateur la largeur et la longueur. Si les valeurs sont pareilles, affichez le message \"La chambre est carrée!\"
// print("Quelle est la largeur de votre chambre ?");
// $largeur = read();
// print("Quelle est la longueur de votre chambre ?");
// $longueur = read();

// if ($largeur == $longueur){
//     print("La chambre est carrée");
// }

// // 2.  Demandez à l'utilisateur la température de la salle où il se trouve.
// // Si elle vaut entre 15 et 25 affichez \"Il fait bon\". Si la valeur est inférieure, affichez \"Ça caille !! Montez la température !\" et si la valeur est supérieure affiche \"Trop chaud ! Descendez la température !\"
// print("\nQuelle est la température de votre chambre ?");
// $temperature = read();
// if ($temperature >= 15 && $temperature<25){
//     print("Il fait bon");
// } elseif ($temperature < 15){
//     print("ça caille !! Montez la température !");
// } else{
//     print("Trop chaud ! Descendez la température !");
// }

// // 3.  Demandez deux chiffres à l'utilisateur et une opération à réaliser avec ces deux chiffres (addition, multiplication, soustraction et division). Affichez le calcul correspondant.
// print("\nChoisissez un chiffre :");
// $chiffre1 = read();
// print("\nChoisissez un autre chiffre :");
// $chiffre2 = read();
// print("\nQuel calcul voulez-vous faire ? (+ ou - ou : ou x) ");
// $calcul = read();

// if ($calcul == "+"){
//     print("\n" . $chiffre1 . " + ". $chiffre2 ." = " . ($chiffre1+$chiffre2));
// } elseif($calcul == "-"){
//     print("\n" . $chiffre1 . " - ". $chiffre2 ." = " . ($chiffre1-$chiffre2));
// } elseif($calcul == "x"){
//     print("\n" . $chiffre1 . " x ". $chiffre2 ." = " . ($chiffre1*$chiffre2));
// } elseif($calcul == ":"){
//     print("\n" . $chiffre1 . " : ". $chiffre2 ." = " . ($chiffre1/$chiffre2));
// } else{
//     print("\nCeci  n'est pas un caractère autorisé");
// }


// // 4. Pour qu'un élève puisse réussir une matière il doit assister à un minimum de cours :
// // 80% des cours s'il est en 1ere année
// // 70% des cours s'il est en 2eme année
// // 60% des cours s'il est en 3eme année
// // Créez une variable contenant le nombre total de cours de cette matière. Demandez à l'utilisateur le nombre d'absences de l'élève et affichez s'il a réussi (ou pas) son année
// $nombreDeCours = 50;
// print("Quelle année ? (1 ou 2 ou 3) ");
// $annee = read();
// print("Combien d'Absences ? ");
// $nombreAbsences = read();
// $presence = 100 - $nombreAbsences / $nombreDeCours * 100;
// if (($annee == 1 and $presence >= 80)
//     or ($annee == 2 and $presence >= 70)
//     or ($annee == 3 and $presence >= 60)
// ) {
//     print("Vous avez " . $presence . "% de présence. Vous avez réussi !");
// } else {
//     print("Vous avez " . $presence . "% de présence. Vous avez échoué !");
// }


// 5. Nous voulons calculer le prix d'une commande dans un magasin d'informatique. Le prix total est sujet à des remises. 
// Affichez une liste de trois produits et leur prix correspondant
// Demandez à l'utilisateur le nombre d'unités qu'il veut acheter de chaque produit
// Calculez le total de la commande sachant que :
    // Si on commande plus de 5 unités d'un certain produit on a une remise du 10% sur le prix de ce produit
    // Les produits peuvent être retirés au magasin ou livrés. La livraison coute 2% du prix total de la commande, mais elle est gratuite si notre commande dépasse 100 euros
    // Une carte de fidélité accorde 20% de réduction sur le prix total de la commande

$produit1 = "Ordinateur";
$prix1 = 500;
$produit2 = "Souris";
$prix2 = 10;
$produit3 = "Écran";
$prix3 = 60;
$prixPanier = 0;

print($produit1 . " = ". $prix1 . "€\n" . $produit2 . " = ". $prix2 . "€\n" . $produit3 . " = ". $prix3 . "€\n");

print("Combien souhaitez-vous acheter de " . $produit1 . "? ");
$quantite1 = read();
if ($quantite1 >= 5){
    $prixPanier = $prixPanier + (($prix1*$quantite1)-($prix1*$quantite1*10/100));
    print("Produit : " . $produit1 . "Quantité : " . $quantite1 . "Total : " . ($prix1*$quantite1) . "Réduction 10% : -" . ($prix1*$quantite1*10/100) . "€");
} elseif ($quantite1 < 5){
    $prixPanier = $prixPanier + ($prix1*$quantite1);
    print("Produit : " . $produit1 . " / Quantité : " . $quantite1 . " / Total : " . ($prix1*$quantite1) . "€ / Réduction : - (uniquement à partir de 5 articles)");
}
print("\nVotre panier actuel est de : " . $prixPanier . "€");

print("\nCombien souhaitez-vous acheter de " . $produit2 . "? ");
$quantite2 = read();
if ($quantite2 >= 5){
    $prixPanier = $prixPanier + (($prix2*$quantite2)-($prix2*$quantite2*10/100));
    print("Produit : " . $produit2 . " / Quantité : " . $quantite2 . " / Total : " . ($prix2*$quantite2) . "€ / Réduction 10% : -" . ($prix2*$quantite2*10/100) . "€");
} elseif ($quantite2 < 5){
    $prixPanier = $prixPanier + ($prix2*$quantite2);
    print("Produit : " . $produit2 . " / Quantité : " . $quantite2 . " / Total : " . ($prix2*$quantite2) . "€ / Réduction : - (uniquement à partir de 5 articles)");
}
print("\nVotre panier actuel est de : " . $prixPanier . "€");

print("\nCombien souhaitez-vous acheter de " . $produit3 . "? ");
$quantite3 = read();
if ($quantite3 >= 5){
    $prixPanier = $prixPanier + (($prix3*$quantite3)-($prix3*$quantite3*10/100));
    print("Produit : " . $produit3 . " / Quantité : " . $quantite3 . " / Total : " . ($prix3*$quantite3) . "€ / Réduction 10% : -" . ($prix3*$quantite3*10/100) . "€");
} elseif ($quantite3 < 5){
    $prixPanier = $prixPanier + ($prix3*$quantite3);
    print("Produit : " . $produit3 . " / Quantité : " . $quantite3 . " / Total : " . ($prix3*$quantite3) . "€ / Réduction : - (uniquement à partir de 5 articles)");
}

print("\nLe prix total de votre commande est de : ". $prixPanier . "€");
if ($prixPanier < 100){
    $prixLivraison = ($prixPanier+$prixPanier*2/100);
    print("Si vous souhaitez être livré, un supplément de " . $prixLivraison . "€ sera ajouté." );
} else{
    print("\nSi vous souhaitez être livré, la livraison est offerte." );
}
print("\nSi vous avez la carte de fidélité, vous avez droit à 20% de réduction. Soit une réduction de : " . $prixPanier*20/100 . "€" );
