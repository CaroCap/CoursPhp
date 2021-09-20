<?php

# Query: 
# ContextLines: 1

//EX 1.  Affichez \"Bonjour\" dans l\'écran avec print et echo
print("Bonjour");

echo("Bonjour");

// EX 2.  Affichez \"La console est rudimentaire mais elle fonctionne assez bien...\" dans la ligne suivante (**PHP_EOL** ou **\n** en console)
print("\nLa console est rudimentaire mais elle fonctionne assez bien...");

// EX 3. Créez une variable contenant le titre du dernier film que vous avez regardé et une deuxième variable contenant une note de 0 à 10. Affichez un texte « Je donne un xxxx pour le film xxxxx ».
$film = "Antman";
$film_rate = 7;
print("\nJe donne un " . $film_rate . " pour le film " . $film);

// EX 4.  Créez une variable contenant le prix d'un ticket pour l'UGC et une autre contenant le prix d'un ticket pour le Vendôme. Calculez la différence de prix entre les deux tickets et affichez-la sur l'écran avec un message.
$prix_UGC = 11.40;
$prix_vendome = 9;
print("\nLa différence de prix est de " . ($prix_UGC-$prix_vendome) . "€");

//EX 5.  Le Vendôme est un cinéma cher (contrairement au Styx, qui d\'ailleurs n\'existe plus) et de fois ils offrent une réduction du 10% sur les entrées. Affichez le prix d'un ticket normal et le prix qu'on payerait si on avait la réduction.
print("\nLe prix normale est de " . $prix_vendome ."€ mais grâce à la réduction de 10% ça revient à " . ($prix_vendome- $prix_vendome*0.10) . "€");

//EX 6. Créez un programme qui demande son nom à l'utilisateur et affiche un message du style « Bienvenu xxxxxxxx ». Utilisez la fonction "read()" qui se trouve dans le dossier "Resources" (copiez la au début de votre code)
// ce code nous permet de lire du clavier
function read()
{
        $fr=fopen("php://stdin","r");   // open our file pointer to read from stdin
        $input = fgets($fr,128);        // read a maximum of 128 characters
        $input = rtrim($input);         // trim any trailing spaces.
        fclose ($fr);                   // close the file handle
        return $input;                  // return the text entered
}

print("\nQuel est votre nom ? ");
$nom = read();
print("\nBienvenue " . $nom);

//EX 7.  Créez un logiciel qui demande deux chiffres à l'utilisateur et qui affiche l'addition, la soustraction, la multiplication et la division.
print("\nChoisissez un chiffre :");
$chiffre1 = read();
print("\nChoisissez un autre chiffre :");
$chiffre2 = read();
print("\nQuelques calculs: ");
print("\n" . $chiffre1 . " + ". $chiffre2 ." = " . ($chiffre1+$chiffre2) );
print("\n" . $chiffre1 . " - ". $chiffre2 ." = " . ($chiffre1-$chiffre2) );
print("\n" . $chiffre1 . " x ". $chiffre2 ." = " . ($chiffre1*$chiffre2) );
print("\n" . $chiffre1 . " : ". $chiffre2 ." = " . ($chiffre1/$chiffre2) );

//EX 8.  Créez des variables pour stocker les noms et les prix de trois produits. Affichez un résumé e liste contenant les produits et leur prix.
// Demandez à l'utilisateur la quantité souhaitée de chaque produit et calculez et affichez le prix total de sa commande.
// $produit1 = ["Lait", 2];
// $produit2 = ["Chocolat", 3.5];
// $produit3 = ["Oeuf", 0.5];

// print_r($produit1);

$produit1 = "Lait";
$prix1 = 2;
$produit2 = "Chocolat";
$prix2 = 3.5;
$produit3 = "Oeuf";
$prix3 = 0.5;

print("\nCombien de lait ?");
$quantite1 = read();
print("Combien de Chocolat ?");
$quantite2 = read();
print("Combien d'oeuf ?");
$quantite3 = read();

print("Vos courses coûteront : " . (($quantite1*$prix1)+($quantite2*$prix2)+($quantite3*$prix3)) . "€");
