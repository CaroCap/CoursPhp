<?php

class Medecin {

    public string $nom;
    public static string $codeDeo;

    public function __construct(string $nom = null) {
        $this->nom = $nom;
    }

    public function afficher()
    {
        echo "<br>Bonjour, je suis le médecin ".$this->nom;
        echo "Mes regles sont : ". $this->codeDeo;
    }

    /**
     * Get the value of codeDeo
     */ 
    public static function getCodeDeo()
    {
        return self::$codeDeo;
    }
    /**
     * Set the value of codeDeo
     *
     * @return  self
     */ 
    public static function setCodeDeo($newCodeDeo)
    {
        self::$codeDeo = $newCodeDeo;
    }
}