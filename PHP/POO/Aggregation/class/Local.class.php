<?php

class Local {
    private string $nomLocal;
    private array $ordi = [];
    private Projecteur $projo;

    public function __construct(string $nomLocal) {
        $this->nomLocal = $nomLocal;
    }

    public function addOrdi(Ordinateur $ordinateur)
    {
        $this->ordi[] = $ordinateur;
    }

    // PAS BESOIN DE ADDPROJO car c'est la même chose que le SET qu'on a auto créé dans la class projecteur
    // public function addProjo(Projecteur $projecteur)
    // {
    //     $this->projo = $projecteur;
    // }

    /**
     * Get the value of projo
     */ 
    public function getProjo()
    {
        return $this->projo;
    }

    /**
     * Set the value of projo
     *
     * @return  self
     */ 
    public function setProjo($projo)
    {
        $this->projo = $projo;

        return $this;
    }

    public function Afficher ()
    {
        echo "Dans le local " . $this->nomLocal . " il y a : ";
        echo "<br>";
        foreach ($this->ordi as $unOrdinateur) {
            echo $unOrdinateur->AfficherOrdi();
        }
        echo $this->projo->AfficherProjo();
        // foreach ($appareils as $appareil) {
        // }
    }


    /**
     * Get the value of ordi
     */ 
    public function getOrdi()
    {
        return $this->ordi;
    }

    /**
     * Set the value of ordi
     *
     * @return  self
     */ 
    public function setOrdi(array $ordi)
    {
        $this->ordi = $ordi;

        return $this;
    }
}