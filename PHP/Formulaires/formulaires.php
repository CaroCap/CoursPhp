<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Exercices Formulaires</h1>
    <div>
        <h2>Exercice 1</h2>
        <h3>Créez un site contenant un formulaire où l'utilisateur saisira son prénom, nom et âge. Le site doit afficher "Bienvenu XXXX XXXX, vous avez XXXX ans!"</h3>
        <form action="formReponse1.php" method="POST">
            <label for="prenom">Prénom</label>
            <input name="prenom" type="text">
            <label for="nom">Nom</label>
            <input name="nom" type="text">
            <br>
            <label for="age">Age</label>
            <input name="age" type="text">
            <br>
            <input type="submit" value="Envoyer">
        </form>
    </div>
    <div>
        <h2>Execice 2</h2>
        <h3>Créez une page (html ou php) contenant un formulaire où on saisit un nom et un prénom. Une autre page (php) traitera les données envoyées et affichera un message de salutation. Si les valeurs rentrées correspondent à votre nom et prénom, le script affichera le message "Que la force soi avec toi." et un lien vers le site officiel de Star Wars</h3>
        <form action="formReponse2.php" method="POST">
            <label for="prenom">Prénom</label>
            <input name="prenom" type="text">
            <label for="nom">Nom</label>
            <input name="nom" type="text">
            <br>
            <input type="submit" value="Envoyer">
        </form>
    </div>

    <div>
        <h2>Exercice 3</h2>
        <h3>Créez un site où l'utilisateur doit deviner un chiffre au hasard entre 0 e 10 (ce chiffre est créé par l'ordinateur en utilisant la fonction mt_rand()). Si la personne gagne, affichez une photo comme prix.
            <br>Conseil : Apprenez à utiliser la fonction avant d'essayer de créer le site
        </h3>
        <form action="formReponse3.php" method="post">
            <label for="nombre">Nombre entre 0 et 10 : </label>
            <input type="number" name="nombre" id="nombe" min='0' max='10'>
            <input type="submit" value="Envoyer">
        </form>
    </div>

    <div>
        <h2>Exercice 4</h2>
        <h3>Créez un script contenant un formulaire où on saisit deux valeurs entières. Un autre script traitera les données envoyées et affichera toutes les valeurs entières qui existent entre les deux dans un tableau HTML</h3>
        <form action="formReponse4.php" method="post">
            <label for="nombre">Nombre 1 : </label>
            <input type="number" name="nombre1">
            <label for="nombre">Nombre 2 : </label>
            <input type="number" name="nombre2">
            <input type="submit" value="Envoyer">
        </form>
    </div>

    <div>
        <h2>Exercice 8</h2>
        <h3>Créez un formulaire qui nous permette d'introduire un prix et de calculer le prix TVAC. La TVA est choisie par l'utilisateur parmi les valeurs d'une liste déroulante. Forcez (HTML) à l'utilisateur à saisir une valeur numérique.</h3>
        <form action="formReponse8.php" method="post">
            <label for="prixHtva"></label>
            <label for="prixHtva">Prix HTVA (€)</label>
            <input type="number" name="prixHtva">
            <select name="tva" id="tva">
                <option value="21">21%</option>
                <option value="6">6%</option>
                <option value="12">12%</option>
            </select>
            <input type="submit" value="Calculer">
        </form>
    </div>

    <div>
        <h2>Exercice 10</h2>
        <h3>Nous avons une liste de produits dans un array. Créer un code PHP capable d'afficher une liste déroulante contenant tous les produits.</h3>
        <?php
        $listeProduits = ["pomme", "poire", "peche", "fraise", "abricot", "banane"];
        ?>
        <select name="listeProduit" id="listeproduit">
            <?php
            foreach ($listeProduits as $produit) {
                print '<option value="' . $produit . '">' . $produit . '</option>';
            }
            ?>
        </select>
    </div>

    <div>
        <h2>Exercice 11</h2>
        <h3>Remplacez la liste déroulante pour des images de chaque produit avec de radio buttons</h3>
        <?php
        $photosProduits = ["./images/pomme.png", "./images/poire.jpg", "./images/peche.png", "./images/fraise.png", "./images/abricot.jpg", "./images/banane.png"];
        ?>
            <?php
            foreach ($photosProduits as $photo) {
                print '<input type="radio" name="photoProduit" id="photoProduit">';
                print '<img width="200px" src="'. $photo .'">';
            }
            ?>
        </select>
    </div>

    <div>
        <h2>Exercice 16</h2>
        <h3>Créez un générateur de langue de bois (petit et simple) similaire à http://www.encyclopedie-incomplete.com/?Le-Pipotron-Generateur-Automatique</h3>

        <?php
            $salutation = ["Bonjour", "Hello", "Coucou", "Salut", "Aurevoir", "Adieu"];
            $sujet = ["maman", "papa","l'ami","voisin", "chat", "imbécile", "mon chéri"];
            $fin = ["je t'aime", "ça va", "il faut qu'on parle", "à bientôt"];
            $ponctuation = ["?", "...", ".", "!"];
            
            print $salutation[mt_rand(0,count($salutation)-1)]. " " .$sujet[mt_rand(0,count($sujet)-1)]. ", ". $fin[mt_rand(0,count($fin)-1)].$ponctuation[mt_rand(0,count($ponctuation)-1)];
        ?>
    </div>

    <div>
        <h2>Exercice 17</h2>
        <h3>Créez un formulaire qui permette à un utilisateur d'introduire son login et son password.
            <ul>
            <li>Aucun des deux ne peut être vide
            <li>Les deux doivent contenir uniquement des lettres et des numéros et avoir entre 8 et 30 caractères
        </ul>
        Si les valeurs sont correctes, le script les affiche en majuscule. Utilisez les fonctions ctype, strlen et strtoupper pour vous faciliter la tâche</h3>

        <form action="./formReponse17.php" method="post">
            <label for="login">Login :</label>
            <input type="text" name="login" id="login" required>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password" required>
            <input type="submit" value="Envoyer">
        </form>
    </div>

</body>

</html>