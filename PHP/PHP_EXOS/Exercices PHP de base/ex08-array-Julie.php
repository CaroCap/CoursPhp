<?php
    function read()
    {
        $fr = fopen("php://stdin", "r");   // open our file pointer to read from stdin
        $input = fgets($fr, 128);        // read a maximum of 128 characters
        $input = rtrim($input);         // trim any trailing spaces.
        fclose($fr);                   // close the file handle
        return $input;                  // return the text entered
    }
    $notes = [10,4,18,12,5];
    $i = 0;
    while ($i <= sizeof($notes)) {
        if ($notes[$i] < 10) {
            print('<p style="color:hotpink; font-weight:bold;">' . $notes[$i] . '</p>');
        }
        else {
            print('<p style="color:purple; font-weight:bold;">' . $notes[$i] . '</p>');
        }
        $moyenne = $moyenne + $notes[$i];
        $i++;
    }
    for ($ii = 0; $ii <= sizeof($notes); $ii++) {
        $math = $math + $notes[$ii];
    }
    print('<p style="font-size:20px"> Moyenne générale [WHILE] : ' . ($moyenne / sizeof($notes)) . '/20</p>');
    print('<p style="font-size:20px"> Moyenne générale [FOR] : ' . ($math / sizeof($notes)) . '/20</p>');
    ?>