<?php

namespace Wad\GestionUtilisateurs;

class User{

    public int $id;

    public function __construct(int $id) {
        $this->id = $id;
        // pour l'exemple pour qu'on voit la construction de l'objet
        echo "<br>On construit un User WAD : " . $this->id;
    }
}