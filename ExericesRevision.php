    <?php

    //CODE POUR TERMINAL UNIQUEMENT

    function read()
    {
            $fr=fopen("php://stdin","r");   // open our file pointer to read from stdin
            $input = fgets($fr,128);        // read a maximum of 128 characters
            $input = rtrim($input);         // trim any trailing spaces.
            fclose ($fr);                   // close the file handle
            return $input;                  // return the text entered
    }

        // print "<br>\n 1 \n<br>";

        //     print "Bonjour";
        //     echo "<br>\nBonjour";
        // print "<br>\n 2 \n<br>";

        //     echo "La console est rudimentaire mais elle fonctionne assez bien...";
        // print "<br>\n 3 \n<br>";

        //     $film = "BAC NORD";
        //     $notefilm = 6;
        //     echo "Je donne un ". $notefilm . " pour le film " . $film;
        // print "<br>\n 4 \n<br>";
        //     $ticketUGC = 5.75;
        //     $ticketVendome = 10;
        //     echo "Le Vendome coûte " . $ticketVendome-$ticketUGC . "€ plus cher que UGC";
        // print "<br>\n 5 \n<br>";
        //     echo "Le ticket du vendome coûte " . $ticketVendome . "€ et avec la réduction de 10%, il coûte " . $ticketVendome-$ticketVendome*0.1 . "€";
        // print "<br>\n 6 \n<br>";
        //     echo "Quel est ton prénom ?";
        //     $prenom = read();
        //     print('Bienvenue ' . $prenom);
        //     print("Bienvenue $prenom");
        // print "<br>\n 7 \n<br>";
        //     echo "Chiffre 1 ?";
        //     $chiffre1 = read();
        //     echo "Chiffre 2 ?";
        //     $chiffre2 = read();
        //     echo $chiffre1 . " + " . $chiffre2 . " = " . $chiffre1+$chiffre2 . "\n";
        //     echo $chiffre1 . " - " . $chiffre2 . " = " . $chiffre1-$chiffre2 . "\n";
        //     echo $chiffre1 . " / " . $chiffre2 . " = " . $chiffre1/$chiffre2 . "\n";
        //     echo $chiffre1 . " * " . $chiffre2 . " = " . $chiffre1*$chiffre2 . "\n";

        // print "\n<br> IF <br>\n";
        // print "\n<br> 1 <br>\n";
        //     echo "Longueur Chambre ?";
        //     $longueur = read();
        //     echo "Largeur chambre ?";
        //     $largeur = read();
        //     if ($largeur == $longueur){
        //         echo "La chambre est carrée";
        //     }
        //     else {
        //         echo "La chambre n'est pas carrée";
        //     }

        print "\n<br> 5 <br>\n";
            $listeProduits = ["ordinateur" => 500, "souris" => 5, "écran" => 50];
            foreach ($listeProduits as $produit => $prix) {
                print ("\n$produit coûte $prix €");
            }


    ?>