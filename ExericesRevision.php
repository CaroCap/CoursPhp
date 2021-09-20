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

        /*
        * IF
        */
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

        // print "\n<br> 5 <br>\n";
        //     $listeProduits = ["ordinateur", "souris", "écran"];
        //     $listePrix = [500, 5, 50];
        //     $quantie = [];
        //     $somme = [];
        //     $total =0;
        //     for ($i=0; $i < count($listeProduits); $i++) { 
        //         print ("\n$listeProduits[$i] coûte $listePrix[$i] €");
        //     }
        //     for ($i=0; $i < count($listeProduits); $i++) { 
        //         print ("\nCombien de $listeProduits[$i] voulez-vous acheter ?");
        //         $quantite[$i] = read();
        //         if ($quantite[$i] > 5){
        //             $somme[$i] = $quantite[$i]*$listePrix[$i]*0.1;
        //         }
        //         else{
        //             $somme[$i] = $quantite[$i]*$listePrix[$i];
        //         }
        //         $total += $somme[$i];
        //     }
        //     print("Le prix total de votre commande est de $total €");
        //     if ($total > 100){
        //         print "\nla livraison vous est offerte";
        //     }
        //     else{
        //         print "\nla livraison vous coûtera " . $total*0.02 . "€";
        //     }
        //     print "\nAvez-vous une carte de fidélité ? O/N";
        //     $carteFidelite = read();
        //     if ($carteFidelite == "O"){
        //         print "Grâce à votre carte de fidélité, vous bénéficiez de " . $total*0.2 . "€ de réduction. Ce qui vous fait un total de " . $total-$total*0.2 . "€";
        //     }

        /*
        * BOUCLES
        */
                // print "\n<br> 1 <br>\n";
        // $age=-1;
        // $essai = 3;
        // while ($age < 0 || $age > 130 && $essai > 0) {
        //     print("Quel est ton âge ? ");
        //     $age = read();
        //     $essai--;
        // }
        // if ($age < 18 || $essai == 0){
        //     print("Vous êtes encore très jeune...");
        // }
        // else{
        //     print("Bienvenue Maître");
        // }
                // print "\n<br> 2 <br>\n";
        // $a = 0;
        // while ($a <= 10) {
        //     print("\n".$a);
        //     $a++;
        // }
                // print "\n<br> 5 <br>\n";
        // for ($i=50; $i <= 100; $i++) { 
        //     if ($i%2){
        //         print("\n".$i);
        //     }      
        // }
                // print "\n<br> 10 <br>\n";
        // while ($h <= 24) {
        //     $h += 1;
        //     print ($h . "h\n");
        //     $min = 5;
        //     while ($min < 60) {
        //         print ($min . "min\n");
        //         $min += 5;
        //         $sec = 10;
        //         while ($sec < 60) {
        //             print ($sec . "sec\n");
        //             $sec += 10;
        //         } 
        //     }
        // }
        /*
        * BOUCLES
        */
