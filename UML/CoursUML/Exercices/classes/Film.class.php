<?php

class Film {
    public int $id;
    public string $titre;

    //relation
    public array $filmDiffusions;

    public function __construct(int $id, string $titre) {
        $this->id = $id;
        $this->titre = $titre;

    }

    /**
     * Get the value of cinema
     */ 
    public function getCinema()
    {
        return $this->cinema;
    }
    /**
     * Set the value of cinema
     *
     * @return  self
     */ 
    public function setCinema($cinema)
    {
        $this->cinema = $cinema;
        return $this;
    }
}