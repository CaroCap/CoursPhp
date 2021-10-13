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

        include_once "./config/db.php";
        try {
            $bdd = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset='. DBCHARSET, DBUSER, DBPASS);
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }   

        include_once "./Pays.class.php";
        include_once "./PaysManager.class.php";

        $nouveauPays = new Pays(["country"=>"TestIncludeNew2", "last_update"=>"2021-07-17"]);
        $managerPays = new PaysManager($bdd);
        $managerPays->insert($nouveauPays);
        var_dump($nouveauPays);
        $aSupprimer = $managerPays->select(["id"=>111]);
        var_dump($aSupprimer);
        $managerPays->delete($aSupprimer[0]);

        //update
        $modifierPays = $managerPays->select(["id"=>114]);
        $modifierPays[0]->hydrate(["country"=>"PaysModifié"]);
        $managerPays->update($modifierPays[0]);

    ?>

</body>
</html>