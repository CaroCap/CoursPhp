<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices Diagrammes de classes</title>
</head>
<body>

<h2>Exercice 1</h2>
    <?php
        include "./classes/CompteMail.class.php";
        include "./classes/Utilisateur.class.php";

        $user1 = new Utilisateur(1, "Caroline");
        $user1->addCompteMail(new CompteMail(1,"caro@mail.com",3000));
        $user1->addCompteMail(new CompteMail(1,"blabla@mail.com",5000));
        var_dump($user1)
    ?>
<h2>Exercice 3 : Cinema</h2>
    <?php
        include "./classes/Cinema.class.php";
        include "./classes/Film.class.php";

    $monCinema = new Cinema(1, "WatchMovie", "Bruxelles");
    $monCinema->addFilm(new Film(1, "Meilleur Film"));

    var_dump($monCinema);
    ?>

</body>
</html>