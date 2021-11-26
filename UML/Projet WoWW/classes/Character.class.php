<?php

class Character {
    public int $id;
    public string $name;
    public int $LP;
    public int $AP;
    public bool $status = true; //true=actif & false=dead

    //Relation
    public Type $type;

    // public function __construct(int $id, string $name, int $LP, int $AP, bool $status) {
    //     $this->id = $id;
    //     $this->nameType = $name;
    //     $this->LP = $LP;
    //     $this->AP = $AP;
    //     $this->status = $status;
    // }
    public function __construct(array $vals)
    {
        $this->hydrate($vals);
        //
        $this->LP = rand($this->getType()->getMinLP(), $this->getType()->getMaxLP());
        $this->AP = rand($this->getType()->getMinAP(), $this->getType()->getMaxAP());
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
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set the value of utilisateur
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function showCharacter()
    {
        echo "<h2>My Character : </h2>";
        echo "<br>Name : ";
        echo $this->name;
        $this->type->showType();
        echo "<br>Live Points : ";
        echo $this->LP;
        echo "<br>Attack Points : ";
        echo $this->AP;
        echo "<br>Status : ";
        echo $this->status;
    }


        
}
