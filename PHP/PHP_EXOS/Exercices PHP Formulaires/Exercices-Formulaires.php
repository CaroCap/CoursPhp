<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaires</title>
</head>
<body>

<!-- EX 1 + 2 Créez un site contenant un formulaire où l\'utilisateur saisira son prénom, nom et âge. Le site doit afficher \"Bienvenu XXXX XXXX, vous avez XXXX ans!\" -->

    <form action="exFormTraitement.php">
        Prénom : <input type="text" name="prenom"><br>
        Nom : <input type="text" name="nom"><br>
        Âge : <input type="text" name="age"><br>
        

<br><br>
<!-- EX 3 Créez un site où l'utilisateur doit deviner un chiffre au hasard entre 0 e 10 (ce chiffre est créé par l'ordinateur en utilisant la fonction mt_rand()). Si la personne gagne, affichez une photo comme prix. Conseil : Apprenez à utiliser la fonction avant d'essayer de créer le site -->
    
    Devinez un chiffre enttre 0 et 10 : <input type="number" name="nombre" min ="0" max="10"><br>


<br><br>
<!-- EX 4 Créez un script contenant un formulaire où on saisit deux valeurs entières. Un autre script traitera les données envoyées et affichera toutes les valeurs entières qui existent entre les deux dans un tableau HTML -->
Donnez 2 valeurs entières pour découvrir les nombres qui existent entre eux : 
<br>
Valeur min : <input type="number" name="nombreMin" min ="0" max="100"><br>
Valeur max : <input type="number" name="nombreMax" min ="0" max="100"><br>

<br><br>
<!-- EX 6 Créez un formulaire qui permette de saisir un prix et le rajoute une TVA du 12%. L'utilisateur cliquera sur un bouton et le résultat du calcul sera affiché dans une autre page. -->
Prix ? <input type="text" name="prix">€ <br>


<br><br>
<!-- EX 7 Créez un formulaire qui nous permette de choisir le nom d'un animal d'une liste déroulante. Quand on envoie les données, une image de l'animal choisi sera affichée. Les images se trouvent dans le serveur -->

Quel est votre animal préféré ?</libell>
    <select name="animal">
        <option value="1">Chat</option>
        <option value="2">Chien</option>
        <option value="3">Licorne</option>
    </select>



<br><br>
<!-- EX 9 Pour une application web de réservations de chambres dans un hôtel nous avons besoin d'un formulaire permettant de choisir le nombre de chambres de chaque type (simples, doubles, suites) souhaitées par un client. Fixez le prix de chaque type de chambre dans une variable. Une fois les données seront envoyées, on calculera le prix total de la réservation. -->

Combien de Chambres : <br>
Single : <input type="number" name="single" min="0" max="10" >
/ Double : <input type="number" name="double" min="0" max="10" >
/ Suite : <input type="number" name="suite" min="0" max="10" >



<br><br>
<button>Envoyer</button>
  

</form>

</body>
</html>