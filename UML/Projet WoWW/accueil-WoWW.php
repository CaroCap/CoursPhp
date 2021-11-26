<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World of War Wad</title>
</head>
<body>
    

<?php

include "./Vendor/autoload.php";

// $type1 = new Type(1,"Witch",18,25,8,13);
// $type2 = new Type(2,"Elf",20,27,7,11);
// $type3 = new Type(3,"Fairy",23,28,5,9);
$type1 = new Type([
    'nameType'=>"Witch",
    'minLP'=>18,
    'maxLP'=>25,
    'minAP'=>8,
    'maxAP'=>13]);
$type1 = new Type([
    'nameType'=>"Elf",
    'minLP'=>20,
    'maxLP'=>27,
    'minAP'=>7,
    'maxAP'=>11]);
$type1 = new Type([
    'nameType'=>"Fairy",
    'minLP'=>23,
    'maxLP'=>28,
    'minAP'=>5,
    'maxAP'=>9]);

$character1 = new Character([
    'name'=>"Capucine",
    'type'=>$type2]);

$character2 = new Character([
    'name'=>"Franchouille",
    'type'=>$type3]);

$character3 = new Character([
    'name'=>"Gabahla",
    'type'=>$type1]);




?>


</body>
</html>