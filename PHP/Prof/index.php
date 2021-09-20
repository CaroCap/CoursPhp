<?php

$dessinDeFlora = "beaux"; //quand on met direct une valeur dans la variable au moment
//ou on l'ecris, on est sur de l'initialisation

$dessinDeFlora;
/*
bla
bla
bla
plus tard
*/
$dessinDeFlora = "chouette";


//declarations
$age;
$prenom;
$nom;

//affectations
$age = 42;
$prenom = "Loïc";
$nom = "Baudoux";


//partie Variables
$age = 30;
$float = 3.1415;
$prenom = "Loïc";
$nom = "Baudoux";
$metier = "Formatteur";
$chiant = true;
$isHiver = true;
$isEte = false;
$firstLetter = "l";
$firstLetter = '9';


//Partie constantes
const PI = 3.1415;
const PRENOM = "Loïc";

/*
lowerCamelCase   --> nom de variable
UpperCamelCase   --> functions, methodes, class, enum
lowercase   --> on evite !!!!
UPPERCASE  --> QUE POUR LES CONSTANTES
*/

//cette ligne ne sera pas lue

/*
ces lignes
ne serons 
pas lue
*/


echo $nom;

$a;
$a = 0;
$a = $a + 2;

$b = $a;
/*
a existe
a vaut 0
a vaut a + 2
b vaut a 
*/

echo "<br>";
echo "<p>la variable a vaut : $a</p>";
echo "<p>la variable b vaut : $b</p>";



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