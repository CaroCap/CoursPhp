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
    include_once "./class/Animal.class.php";
    include_once "./class/Chat.class.php";
    include_once "./class/Chien.class.php";

    // function AfficherAnimal()
    // {
    //     if($_POST['ChoixAnimal']=='Chat'){
    //         $chat1 = new Chat("Félin", 4);
    //         $chat1->AfficherChat();
    //     }
    //     elseif($_POST['ChoixAnimal']=='Chien'){
    //         $chien1 = new Chien("Canin", 4);
    //         $chien1->AfficherChien();
    //     }
    // }
    $chat1 = new Chat("Félin", 4);
    $chat1->AfficherChat();
    echo "<br>";
    $chien1 = new Chien("Canin", 4);
    $chien1->AfficherChien();

    ?>
    
    <!-- <form action="<?php //AfficherAnimal() ?>" method="get">
        <select name="ChoixAnimal" id="choixAnimal">
            <option value="Chat">Chat</option>
            <option value="Chien">Chien</option>
        </select>
    </form>
    <br> -->



</body>
</html>