<?php

class Animal {

    public function __construct(protected string $typeAnimal, protected int $nombrePattes)
    {
        
    } 
    

    /**
     * Get the value of typeAnimal
     */ 
    public function getTypeAnimal()
    {
        return $this->typeAnimal;
    }
    /**
     * Set the value of typeAnimal
     *
     * @return  self
     */ 
    public function setTypeAnimal($typeAnimal)
    {
        $this->typeAnimal = $typeAnimal;
        return $this;
    }

    /**
     * Get the value of nombrePattes
     */ 
    public function getNombrePattes()
    {
        return $this->nombrePattes;
    }
    /**
     * Set the value of nombrePattes
     *
     * @return  self
     */ 
    public function setNombrePattes($nombrePattes)
    {
        $this->nombrePattes = $nombrePattes;
        return $this;
    }
}