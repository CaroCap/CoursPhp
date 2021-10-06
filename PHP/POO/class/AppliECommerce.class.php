<?php

class AppliECommerce{
    private int $code;
    private string $nomProduit;
    private float $prixProduit;

    public function __construct(int $code, string $nomProduit, float $prixProduit)
    {
        $this->code = $code;
        $this->nomProduit = $nomProduit;
        $this->prixProduit = $prixProduit;
    }

    /**
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set the value of code
     *
     * @return  self
     */ 
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Get the value of nomProduit
     */ 
    public function getNomProduit()
    {
        return $this->nomProduit;
    }
    /**
     * Set the value of nomProduit
     *
     * @return  self
     */ 
    public function setNomProduit($nomProduit)
    {
        $this->nomProduit = $nomProduit;
        return $this;
    }

    /**
     * Get the value of prixProduit
     */ 
    public function getPrixProduit()
    {
        return $this->prixProduit;
    }
    /**
     * Set the value of prixProduit
     *
     * @return  self
     */ 
    public function setPrixProduit($prixProduit)
    {
        $this->prixProduit = $prixProduit;
        return $this;
    }

    public function AfficherProduit():void{
        echo $this->nomProduit."<br>";
        echo $this->prixProduit."€ <br>";
    }

    public function AjoutTVA(int $tauxTVA):float{
        return $this->prixProduit*$tauxTVA;
    }

}