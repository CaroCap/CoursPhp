<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
// ce code nous permet de lire du clavier
function read()
{
    $fr = fopen("php://stdin", "r");   // open our file pointer to read from stdin
    $input = fgets($fr, 128);        // read a maximum of 128 characters
    $input = rtrim($input);         // trim any trailing spaces.
    fclose($fr);                   // close the file handle
    return $input;                  // return the text entered
}

// EX10 BONUS Exercice à faire en Web): Modifiez la boucle précédante pour qu'elle affiche les heures paires en bleu et les heures impaires en rouge

for ($h = 1; $h < 25; $h++){
    if ($h%2 ==1){
    print('<p style="color: red;">' . $h . "heure </p>");
    } else{
        print('<p style="color: blue;">' . $h . "heure </p>");
    }
    
    for ($m = 5; $m <60; $m = $m+5){
        print("<br>" . $m . "min ");
        for ($s = 10; $s <60; $s = $s+10){
            print("<br>" . $s . "sec ");
        }    
    }
}

?>

</body>
</html>