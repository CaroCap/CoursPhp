<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Exercice 1</h2>
    <div><em>Créez une page contenant un bouton. Chaque fois que l'on clique sur le bouton, un nom aléatoire sera affiche. Les noms se trouvent dans array qui se trouve dans la page du traitement. </em></div>
    <button id="boutonAleatoire">Aléatoire</button>
    <div id="reponseAleatoire"></div>

    <h2>Exercice 2</h2>
    <div><em>Créer une page contenant une liste déroulante contenant de noms et un bouton "Envoyer".
        Quand vous cliquez sur Envoyer, le nom choisi apparaîtra en majuscules dans un div juste en-dessous de la liste.</em></div>   

        <form id="formMajuscule">
            <select name="listeVille">
                <option value="Bruxelles">Bruxelles</option>
                <option value="Paris">Paris</option>
                <option value="Rome">Rome</option>
            </select>
            <button id="btn-MajusculeMoi">Majuscule Moi</button>
            <div id="div-MajusculeMoi"></div>
        </form>

    <h2>Exercice 3</h2>
    <div><em>Créez une page contenant une liste déroulante contenant des noms d'animaux.
    Quand vous selectionnez un animal, une image de l'animal apparaîtra dans une div juste en-dessous de la liste.
    Du côté serveur il y aura uniquement un array contenant de liens vers les images.
    Utilisez json_decode et JSON.parse pour créer un vrai array en JS, puis créez les images dans le DOM.
    Il n' y aura pas un bouton de submit</em></div>

    <form id="formAnimaux">
        <select name="listeAnimaux" id="listeAnimaux">
            <option value="0">Chat</option>
            <option value="1">Chien</option>
            <option value="2">Oiseau</option>
        </select>
    </form>
    <div id="imageAnimal"></div>

<script src="ajax.js"></script>
</body>
</html>