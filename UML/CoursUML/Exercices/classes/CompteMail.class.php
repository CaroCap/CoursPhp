<?php
class CompteMail {
    public int $id;
    public string $adresse;
    public int $capacite;
    
    //implémenter la relation
    public Utilisateur $utilisateur;

    public function __construct(int $id, string $adresse, int $capacite) {
        $this->id = $id;
        $this->adresse = $adresse;
        $this->capacite = $capacite;

    }

    /**
     * Get the value of utilisateur
     */ 
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }
    /**
     * Set the value of utilisateur
     *
     * @return  self
     */ 
    public function setUtilisateur($utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }
}