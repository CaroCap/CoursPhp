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
        include "./class/CompteBancaire.class.php";
        include "./class/PersonneP.class.php";
        include "./class/AppliECommerce.class.php";
        include "./class/Voiture.class.php";
        
echo "EXERCICE 1 <br>";
        $compte1 = new CompteBancaire("Cap",500,True);

        $compte1->AfficheSolde();
        echo"<br>";
        $compte1->Retrait(115);
        echo"<br>";
        echo"<br>";
        $compte1->AfficheSolde();
        echo"<br>";
        $compte1->Depot(275);
        echo"<br>";
        $compte1->AfficheSolde();
        echo"<br>";
        $compte1->EtatBlocage();
        echo"<br>";
        $compte1->SwitchBlocage();
        echo"<br>";
        $compte1->EtatBlocage();
        echo"<br>";

echo "EXERCICE 2 -> 4 <br>";
        $client1 = new PersonneP("Caroline", "Cap");
        echo $client1->getNom();
        echo $client1->getPrenom();
        echo"<br>";
        $client1->setNom("Decarpentrie");
        $client1->setPrenom("Alexis");
        echo $client1->getNom();
        echo $client1->getPrenom();
        echo"<br>";
        $client1->AfficherPersonne();
        echo"<br>";

echo "EXERCICE 5 -> 6 <br>";
        $appli1 = new AppliECommerce(123456,"Pommes",1);
        $appli1->setPrixProduit(1.5);
        $appli1->AfficherProduit();
        echo"<br>";
        echo $appli1->AjoutTVA(21)." € TVAC";
        echo"<br>";

echo "EXERCICE 7 -> 8 <br>";
        $voiture1 = new Voiture("Renault", "Bleue", 150, 1);
        $voiture1->DemarrerVoiture();
        echo"<br>";
        $voiture1->ArreterVoiture();
        $voiture1->setEssence(0);
        echo"<br>";
        $voiture1->DemarrerVoiture();

echo "EXERCICE 9 <br>";

?>

</body>
</html>