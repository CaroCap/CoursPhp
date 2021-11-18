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

include "./Vendor/autoload.php";

use \Wad\GestionUtilisateurs\Profile as ProfileWad;
use \Wad\GestionUtilisateurs\User as UserWad;
use \Web\Cours as CoursWeb;
use \Web\Eleve as EleveWeb;
use \Web\User as UserWeb;

$p1 = new ProfileWad(2);
$u1 = new UserWad(4);
$c1 = new CoursWeb(1);
$e1 = new EleveWeb(10);
$u2 = new UserWeb(5);


?>


</body>
</html>