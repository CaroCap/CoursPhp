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
    // pour se connecter à la DB, on a besoin de 3 paramètres :
    $bdd = "mysql:host=localhost;dbname=dbslide;charset=utf8";
    $login = "root";
    $psw = "";

    //

    //TRY CATCH VIERGE :
    // try{
    //     $pdo = new PDO($bdd, $login, $psw);
    
    // }catch (PDOException $e){
    //     echo $e->getMessage();
    // }

    // $pdo = new PDO($bdd, $login, $psw);


/*  try{
        $pdo = new PDO($bdd, $login, $psw);
        echo "je suis connecté";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    
*/
//READ
// try{
//     $pdo = new PDO($bdd, $login, $psw);
//     $requete = "SELECT student_id, last_name, first_name FROM student";
//     $listStudents = $pdo->query($requete);

//     foreach($listStudents as $student){
//         echo $student ['student_id']." ";
//         echo $student ['last_name']." ";
//         echo $student ['first_name']."<br>";
//     }
// }catch (PDOException $e) {
//     echo $e->getMessage();
// }

//CREATE => insertion dans la base de données
// try {
//     $pdo = new PDO($bdd, $login, $psw);
//     //requete sql d'insertion
//     //INSERT INTO nom_table (nomcol1, nomcol2...) VALUES (val1, val2...);
//     $requete = "INSERT INTO student VALUES (26, 'Richard', 'Gere', '1949-08-31 00:00:00', 'rgere', 1320, 16, 'EG2210');";
// // afin d'exectuer cette requete, j'utilise toujours mo objet pdo
//     $newStudent = $pdo->query($requete);
//     var_dump($requete);
// // pour le test j'affiche le contenu de ma variable via un var_dump (echo + puissant)
//     var_dump($newStudent);
// } catch (PDOException $e){
//     echo $e->getMessage();
// }

//UPDATE => Mise à jour des données
// try {
//     $pdo = new PDO($bdd, $login, $psw);
//     //la mise à jour se fait via la requete SQL Update
//     //UPDATE nom_table SET col1=val1, col2=val2... WHERE condition
//     $requete = "UPDATE student SET last_name='Kutsher', first_name='Ashton', birth_date='1978-02-07 00:00:00' WHERE student_id=26;";
//     $updateStudent = $pdo->query($requete);
//     var_dump($updateStudent);
// } catch (PDOException $e){
//     echo $e->getMessage();
// }


//DELETE => Suppression des données
// try{
//     $pdo = new PDO($bdd, $login, $psw);
//     //la requête de suppression s'écrit comme ceci
//     //DELETE FROM nom_table WHERE condition;
//     $requete = "DELETE FROM student WHERE student_id = 26;";
//     $deleteStudent = $pdo->query($requete);
//     var_dump($deleteStudent);

// } catch (PDOExcetption $e){
// echo $e->getMessage();
// }


//FETCH
//si je veux récupérer toutes les infos au format d'un tableau, j'utilise le mot clé fetch
// try{
//     $pdo = new PDO($bdd, $login, $psw);
//     $requete = "SELECT * FROM student;";
//     $listStudents = $pdo->query($requete);

//     while($ligne = $listStudents->fetch()){
//         //quand je fais un FETCH, pour afficher l'info, soit je vais passser par l'indice de la colonne à afficher
//         // echo"$ligne[0]"."-"."$ligne[2]<br>";

//         //soit je vais passer par son nom
//         echo $ligne["last_name"]." ".$ligne["birth_date"]."<br>";
//     }
// } catch (PDOException $e){
//     echo $e->getMessage();
// }

//REQUETE PRÉPARÉ
// try{
//     //les données suivantes pourraient avoir été récupérées d'un formulaire et auraient des erreurs
//     $id-26;
//     $nom="Theron'=-";
//     $prenom="Charlize";
//     $dateN='1975-11-12 00:00:00';
//     $loginS="ctheron";
//     $section=1320;
//     $resultat=19;
//     $cours='EG2210';

//     //je continue à utiliser l'objet PDO
//     $pdo = new PDO($bdd, $login, $psw);

//     //je vais maintenant préparer ma requête en lui donnant des paramètres qui seront remplacé par mes variables.
//     $requete = "INSERT INTO student VALUES (:id, :nom, :prenom, :dateN, :loginS, :section, :resultat, :cours"

//     //dans ce cas ci, on n'utilise pas la méthode Query mais la méthode Prepare de l'objet pdo pour lui spécifier qu'il va recevoir une requête préparée.
//     $insertion = $pdo->prepare($requete);
//     //je passe à ma requete préparée la collection de données qui vient du formulaire
//     $insertion->execute(array(
//         ":id" => $id,
//         ":nom" => $nom,
//         ":prenom" => $prenom,
//         ":dateN" => $dateN,
//         ":loginS" => $loginS,
//         ":section" => $section,
//         ":resultat" => $resultat,
//         ":cours" => $cours,
//     ))

// }catch (PDOException $e){
//     echo $e->getMessage();
// }

// $pdo = new PDO($bdd, $login, $psw);


?>

</body>
</html>