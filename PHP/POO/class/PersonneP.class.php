<?php

class PersonneP {
    private string $nom;
    private string $prenom;
    private string $etatCivil;

    public function __construct(string $prenom = "", string $nom = "", string $etatCivil = "")
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->etatCivil = $etatCivil;
    }

    public function getNom ():string {
        return $this->nom;
    }

    public function setNom (string $nouveauNom):void {
        $this->nom = $nouveauNom;
    }

    public function getPrenom ():string {
        return $this->prenom;
    }
    public function setPrenom(string $nouveauPrenom):void {
        $this->prenom = $nouveauPrenom;
    }

    /**
     * Get the value of etatCivil
     */ 
    public function getEtatCivil()
    {
        return $this->etatCivil;
    }
    /**
     * Set the value of etatCivil
     *
     * @return  self
     */ 
    public function setEtatCivil($etatCivil)
    {
        $this->etatCivil = $etatCivil;
        return $this;
    }

    public function AfficherPersonne(){
        echo "Je suis une personne et je m'appelle ". $this->prenom . " " . $this->nom . " !!";
    }
}