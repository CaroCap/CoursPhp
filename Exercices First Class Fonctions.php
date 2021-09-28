<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex PHP First Class Fonction</title>
</head>
<body>
    
<?php
print('<br>Ex 1<br>');
$strMinuscule = function(string $texte) : string{
    $minuscule = strtolower($texte);
    return $minuscule;
};
print($strMinuscule('Caroline CAP'));

print('<br>Ex 2<br>');
$strMajuscule = function(string $texte) : string{
    $majuscule = strtoupper($texte);
    return $majuscule;
};
print($strMajuscule('Caroline CAP'));


print('<br>Ex 3<br>');
$casse=[$strMinuscule, $strMajuscule];
var_dump($casse);

print('<br>Ex 4<br>');
print($casse[0]('Caroline CAP') . "<br>");
print($casse[1]('Caroline CAP') . "<br>");

print('<br>Ex 5<br>');
foreach ($casse as $key => $value) {
    print($value('Caroline CAP') . "<br>");
}

print('<br>Ex 6<br>');
$casse[] = function(string $texte){
    $fisrtMajuscule = ucfirst($texte);
    return $fisrtMajuscule;
};

$firstLettre= function(string $texte){
    $fisrtMajuscule = ucfirst($texte);
    return $fisrtMajuscule;
};

    print('<br>Ex 7<br>');
$changeCasse=[$strMinuscule, $strMajuscule, $firstLettre];
$fonctionsMultiples = function(callable $fonctions) : void{
    print ($fonctions('Caroline CAP').'<br>');
};
array_map($fonctionsMultiples, $casse);

    print('<br>Ex 7+<br>');
$fonctionsMultiples = function(callable $fonctions) : string{
        return ($fonctions("bonJOUR, je M'APPELLE caroline Cap").'<br>');
};
var_dump(array_map($fonctionsMultiples, $changeCasse));

print('<br>Ex 7+++<br>');
$casse=[$strMinuscule, $strMajuscule, $firstLettre];
$motAChanger = ['Truc', 'BiZZARRe', 'coucou']; // même nombre que nombre de fonction pour que mon array_map puisse fonctionner
$fonctionsMultiples = function(callable $fonctions, string $motAChanger) : void{
        print ($fonctions($motAChanger).'<br>');
};
array_map($fonctionsMultiples, $casse, $motAChanger);


?>

</body>
</html>