<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./FormTraitementPOST.php" method="POST"> 
                <!-- Si pas de method, => GET par défaut -->
        Nom : <input type="text" name="nom" id=""><br>
        Date : <input type="date" name="date">  <br>
        <!-- <input type="color" name="couleur"><br> -->
        <!-- <input type="submit" name = "souscrire"><br> -->

        <select name="pays">
            <option value="1">"Italie"</option>
            <option value="2">"Belgique"</option>
            <option value="3">"Italie"</option>
        </select>
        <button>Envoyer Formulaire</button>
    </form>
</body>
</html>