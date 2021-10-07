<?php
include_once "./class/Animal.class.php";

class Chien extends Animal {

    public function AfficherChien(){
        echo "Je suis un Chien et je fais Wouff";
        echo('<img width="500" src="https://static.cotemaison.fr/medias_10824/w_1815,h_1362,c_crop,x_99,y_0/w_1080,h_600,c_fill,g_north/v1456392403/10-conseils-pour-rendre-votre-chien-heureux_5542245.jpg" alt="chiot">');
    }

}