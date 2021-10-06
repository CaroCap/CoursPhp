<?php

class Voiture{
    private string $modele;
    private string $couleur;
    private int $vitesseMax;
    private int $essence;

    public function __construct(string $modele, string $couleur, int $vitesseMax, int $essence)
    {
        $this->modele=$modele;
        $this->couleur = $couleur;
        $this->vitesseMax = $vitesseMax;
        $this->essence = $essence;
    }

    /**
     * Get the value of vitesseMax
     */ 
    public function getVitesseMax()
    {
        return $this->vitesseMax;
    }
    /**
     * Set the value of vitesseMax
     *
     * @return  self
     */ 
    public function setVitesseMax($vitesseMax)
    {
        return $this;
    }

    /**
     * Get the value of modele
     */ 
    public function getModele()
    {
        return $this->modele;
    }
    /**
     * Set the value of modele
     *
     * @return  self
     */ 
    public function setModele($modele)
    {
        $this->modele = $modele;
        return $this;
    }

    /**
     * Get the value of couleur
     */ 
    public function getCouleur()
    {
        return $this->couleur;
    }
    /**
     * Set the value of couleur
     *
     * @return  self
     */ 
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
        return $this;
    }
    
    
    /**
     * Get the value of essence
     */ 
    public function getEssence()
    {
        return $this->essence;
    }
    /**
     * Set the value of essence
     *
     * @return  self
     */ 
    public function setEssence($essence)
    {
        $this->essence = $essence;
        return $this;
    }

    private function preparerMoteur()
    {
        echo "Le moteur chauffe...<br>";
    }
    public function CheckEssence():bool
    {
        if($this->essence>0){
            return true;
        }
        else{
            return false;
        }
    }
    public function DemarrerVoiture ()
    {
        $this->preparerMoteur();
        if ($this->CheckEssence()){
            echo"Vroum Vroum ".$this->modele." démarre";
        }
        else{
            echo "Il n'y a plus assez d'essence";
        }
    }   
    public function ArreterVoiture ()
    {
        echo"Stop " .$this->modele. " s'arrête";
    }
}
