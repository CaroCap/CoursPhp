<?php
class Utilisateur {
    public int $id;
    public string $nom;
    
    //implémenter la relation
    public array $compteMail = [];

    public function __construct(int $id, string $nom) {
        $this->id = $id;
        $this->nom = $nom;
    }

    public function addCompteMail(CompteMail $compte)
    {
        // rajouter à l'array
        $this->compteMail[]=$compte;
        // fixer l'autre côté de la relation
        $compte->setUtilisateur($this);
    }
}