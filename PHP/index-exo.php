<?php
    
    echo 'Test Toto';
    echo "<p> La Variable a vallait 5 et la Variable b vallait 7 </p>";



    $a = 5;
    $b = 7;

    $c = $a;
    $a = $b;
    $b = $c;

    echo "<h2>Maintenant...</h2>";
    echo "<p> La Variable a vaut $a </p>";
    echo "<p> La Variable b vaut $b </p>";

    //exemple form et superglobal post et get
echo "<form>
        <input type='text' value='' name='nom'>
    </form>"; // je n'aime pas cette formulation de html je veux plus propre

//je coupe mon php pour mettre du html plus propre que dans echo
?>
<html>
    <head>
    </head>

    <body>
        <form method="POST">
            <input type='text' name='nom' value='' placeholder="Votre nom">
            <input type='text' name='prenom' value='' placeholder="Votre prenom" >
            <input type="submit" value="envoyer">
        </form>
    </body>
</html>


<?php //je peux totalemet ré-ouvrir du php après avoir mis du html propre
//exemple form et superglobal post et get


?>