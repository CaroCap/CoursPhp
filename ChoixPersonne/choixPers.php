<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="choixPers.css"> -->
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Beastly&display=swap" rel="stylesheet">
    <title>Tirage au sort</title>
</head>

<body>
    <h1>Tirage au sort</h1>
    <h2>The Winner is :</h2>
    <?php
    session_start();

    if (!isset($_SESSION['wad21']) || $_SESSION['wad21'] == []) {
        $_SESSION['wad21'] = ["Anaïs", "Assmaa", "Caroline", "Grace", "Judy", "Julie", "Laure", "Marwa", "Minh", "Myriam", "Stefania", "Valerie", "Ylenia"];
    }

    function afficheTableau(array $tableau): void
    {
        foreach ($tableau as $value) {
            print("<br>" . $value);
        }
    }

    function tirageAuSort(array $liste): array
    {
        $indexVolontaire = array_rand($liste);
        $nomChoisi = $liste[$indexVolontaire];
        unset($liste[$indexVolontaire]);
        print("<div class='gagnant'>" . $nomChoisi . "</div><br>");
        return $liste;
    }
    ?>
    
    <div class="droite">
        <?php
            $_SESSION['wad21'] = tirageAuSort($_SESSION['wad21']);
        ?>
    </div>

    <div>
        <form action="choixPers.php">
            <input type="submit" name="random" value="Random" />
        </form>
    </div>

    <div class="gauche">
        <br>
        Qui n'a pas encore répondu ?
        <br>
        <?php
        // print("Qui n'a pas encore répondu ? ");
        afficheTableau($_SESSION['wad21']);
        ?>
    </div>

</body>

</html>