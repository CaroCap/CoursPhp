<?php

class Type {
    private int $id;
    private string $nameType;
    private int $minLP;
    private int $maxLP;
    private int $minAP;
    private int $maxAP;

    //Relation
    public array $listCharacters = [];

    // public function __construct(int $id, string $name, int $minLP, int $maxLP, int $minAP, int $maxAP) {
    //     $this->id = $id;
    //     $this->nameType = $name;
    //     $this->minLP = $minLP;
    //     $this->maxLP = $maxLP;
    //     $this->minAP = $minAP;
    //     $this->maxAP = $maxAP;
    // }
    public function __construct(array $vals)
    {
        $this->hydrate($vals);
    }

    public function addCharacters(Character $oneCharacter)
    {
        $this->listCharacters[]=$oneCharacter;
        $oneCharacter->setType($this);
    }
    
    public function showType()
    {
        echo "<br>Name Type : ";
        echo $this->nameType;
    }

    public function hydrate(array $vals)
    {
        foreach ($vals as $namePropriete => $valeurPropriete) {
            if (isset($vals[$namePropriete])) {
                // donner une valeur `a la proprieté
                $this->$namePropriete = $valeurPropriete;
            }
        }
    }


    /**
     * Get the value of utilisateur
     */ 
    public function getNameType()
    {
        return $this->nameType;
    }
    /**
     * Set the value of utilisateur
     *
     * @return  self
     */ 
    public function setNameType($nameType)
    {
        $this->nameType = $nameType;
        return $this;
    }

        /**
     * Get the value of utilisateur
     */ 
    public function getMinLP()
    {
        return $this->minLP;
    }
    /**
     * Set the value of utilisateur
     *
     * @return  self
     */ 
    public function setMinLP($minLP)
    {
        $this->minLP = $minLP;
        return $this;
    }

        /**
     * Get the value of utilisateur
     */ 
    public function getMaxLP()
    {
        return $this->maxLP;
    }
    /**
     * Set the value of utilisateur
     *
     * @return  self
     */ 
    public function setMaxLP($maxLP)
    {
        $this->maxLP = $maxLP;
        return $this;
    }

        /**
     * Get the value of utilisateur
     */ 
    public function getMaxAP()
    {
        return $this->maxAP;
    }
    /**
     * Set the value of utilisateur
     *
     * @return  self
     */ 
    public function setMaxAP($maxAP)
    {
        $this->maxAP = $maxAP;
        return $this;
    }
        /**
     * Get the value of utilisateur
     */ 
    public function getMinAP()
    {
        return $this->minAP;
    }
    /**
     * Set the value of utilisateur
     *
     * @return  self
     */ 
    public function setMinAP($minAP)
    {
        $this->minAP = $minAP;
        return $this;
    }
}
