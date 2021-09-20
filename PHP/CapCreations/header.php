<?php
/*général*/
$bdd = "mysql:host=localhost;dbname=capcreations;charset=utf8";
$login = "root";
$psw = "";

    $id=isset($_GET['id'])?$_GET['id']:1;
    try{
        $pdo = new PDO($bdd, $login, $psw);
        $requete = "SELECT*FROM administrateur WHERE id_admin=(:id)";

        $selection = $pdo->prepare($requete);
        $selection->execute(array(":id"=>$id));
        
        $donnee = $selection->fetch();
        $name = $donnee[1];
        $locationAdress = $donnee[2];
        $locationCP = $donnee[3];
        $personneContact = $donnee[4];
        $numeroContact = $donnee[5];
        $emailContact = $donnee[6];
        $facebookProfile = $donnee[7];
    }catch (PDOException $e){
        echo $e->getMessage();
    }    

$logoWeb= "assets/img/logo_capcreations.jpg";
$logo = "assets/img/logo_capcreations.png";