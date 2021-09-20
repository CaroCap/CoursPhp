<?php
function read()
{
        $fr=fopen("php://stdin","r");   // open our file pointer to read from stdin
        $input = fgets($fr,128);        // read a maximum of 128 characters
        $input = rtrim($input);         // trim any trailing spaces.
        fclose ($fr);                   // close the file handle
        return $input;                  // return the text entered
}
$produits = ["tablette", "portable", "lecteur"];
$prix = [300, 499, 80];
$total = 0;
// montrer la liste des prix
for ($p = 0; $p < count($produits); $p++){
    print($produits[$p] . " = ". $prix[$p] . "€ \n");
}
// demander quantité de chaque et calculer le total
for ($i = 0; $i < count($produits); $i++){
    print("Combien d'unités de " . $produits[$i] . "? ");
    $quantite[$i] = read();
    if ($quantite[$i] >= 5){
        $prix[$i] -= (($prix[$i] * 10) / 100);   
    } else{
        $total += ($prix[$i] * $quantite[$i]);
    }
}   

print("Prix Total : " . $total . "€");
print("\nCarte de fidélité (y/n): ");
$carte = read();
if ($carte === "y"){
    print("Prix Total : " . $total - (($total * 20) / 100) . "€");
}
if ($total < 100) {
    print("\nPrix Total avec livraison : " . $total + (($total * 0.2) / 100) . "€");
}