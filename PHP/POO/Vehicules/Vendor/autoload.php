<?php

spl_autoload_register (function (string $nomClasse){
    
    // à nous de choisir où se trouvent les classes
    // et dans quel format
    if (file_exists("./class/".$nomClasse.".class.php")){
        include_once "./class/".$nomClasse.".class.php";
    }
    elseif (file_exists("./class/".$nomClasse.".php")){
        include_once "./class/".$nomClasse.".php";
    }
    elseif (file_exists("./".$nomClasse.".class.php")){
        include_once "./".$nomClasse.".class.php";
    }
    else {
        throw (new Exception("Fichier par trouvé!!"));
    }
});


?>