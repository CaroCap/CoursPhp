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

// EX 1 Créez un site contenant un formulaire où l\'utilisateur saisira son prénom, nom et âge. Le site doit afficher \"Bienvenu XXXX XXXX, vous avez XXXX ans!\"
print("Bienvenue " . $_GET["prenom"]. " " . $_GET["nom"]. ", vous avez " . $_GET["age"] . " ans !<br>");


// EX 2 Créez une page contenant un formulaire où on saisit un nom et un prénom. Un autre script traitera les données envoyées et affichera un message de salutation. Si les valeurs rentrées correspondent à votre nom et prénom, le script affichera le message "Que la force soi avec toi." et un lien vers le site officiel de Star Wars

if ($_GET["nom"] == "Cap" and $_GET["prenom"] == "Caroline"){
    print('<br><iframe src="https://giphy.com/embed/6fScAIQR0P0xW" width="379" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://www.starwars.com/">Que la force soit avec toi.</a></p><br>');
}

// EX 3 Créez un site où l'utilisateur doit deviner un chiffre au hasard entre 0 e 10 (ce chiffre est créé par l'ordinateur en utilisant la fonction mt_rand()). Si la personne gagne, affichez une photo comme prix. Conseil : Apprenez à utiliser la fonction avant d'essayer de créer le site

$nombreHasard = mt_rand(0,10);
print("<br>Le nombre à trouver était " . $nombreHasard . "<br>");

if ($nombreHasard == $_GET['nombre']){
    print('<iframe src="https://giphy.com/embed/geL1pDlmZwpvqVQp6V" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/TeamCofidis-cofidis-teamcofidis-teamcofidis2020-geL1pDlmZwpvqVQp6V">BRAVOOOO Vous avez trouvé !</a></p>');
} else{
    print('<iframe src="https://giphy.com/embed/3oFzmko6SiknmpR2NO" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p>PERDUUUUUU !!!</p>');
}

// EX 4 Créez un script contenant un formulaire où on saisit deux valeurs entières. Un autre script traitera les données envoyées et affichera toutes les valeurs entières qui existent entre les deux dans un tableau HTML

print("<br>Vous avez choisi : " . $_GET["nombreMin"] . " et " . $_GET["nombreMax"] . ". <br>Les valeurs entre ces nombres sont : <br>");

for ($i = $_GET["nombreMin"]; $i<=$_GET["nombreMax"]; $i++ ){
    print($i."<br>");
}


// EX 6 Créez un formulaire qui permette de saisir un prix et le rajoute une TVA du 12%. L'utilisateur cliquera sur un bouton et le résultat du calcul sera affiché dans une autre page.
$TVAinclus = $_GET["prix"]*1.12;
print("<br>Le Prix sans TVA est de " . $_GET["prix"] . "€ et le prix avec la TVA de 12% est de " . $TVAinclus . "€ <br>");

// EX 7 Créez un formulaire qui nous permette de choisir le nom d'un animal d'une liste déroulante. Quand on envoie les données, une image de l'animal choisi sera affichée. Les images se trouvent dans le serveur

print("<br>Votre Animal préféré est : <br>" );
if($_GET["animal"]=="1"){
    print('<iframe src="https://giphy.com/embed/A0aEq3RE7OFbi" width="480" height="410" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p>Le Chat</p><br>');
}
elseif($_GET["animal"]=="2"){
    print('<iframe src="https://giphy.com/embed/RQSuZfuylVNAY" width="475" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p>Le Chien</p><br>');
}
elseif($_GET["animal"]=="3"){
    print('<iframe src="https://giphy.com/embed/j0kQJxo5mzGYb4EvWK" width="480" height="377" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p>La Licorne</p><br>');
}


// EX 9 Pour une application web de réservations de chambres dans un hôtel nous avons besoin d'un formulaire permettant de choisir le nombre de chambres de chaque type (simples, doubles, suites) souhaitées par un client. Fixez le prix de chaque type de chambre dans une variable. Une fois les données seront envoyées, on calculera le prix total de la réservation.
$prixSingle = 25;
$prixDouble = 40;
$prixSuite = 100;

print("<br>Le prix total de votre réservation pour ". $_GET["single"] . " chambre(s) single; " . $_GET["double"] . " chambre(s) double et " . $_GET["suite"] . " suite(s) est de : " . (($_GET["single"]*$prixSingle)+($_GET["double"]*$prixDouble)+($_GET["suite"]*$prixSuite)) . " €<br>");

print("<br><br>");



?>


</body>

</html>
