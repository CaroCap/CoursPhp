<?php

namespace Shop\Basket;

class Basket{

    public int $id;

    public function __construct(int $id) {
        $this->id = $id;
        // pour l'exemple pour qu'on voit la construction de l'objet
        echo "<br>On construit un panier : " . $this->id;
    }
    
}