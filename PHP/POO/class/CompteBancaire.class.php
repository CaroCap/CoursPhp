<?php
class CompteBancaire {
    private string $nomProprio;
    private int $solde;
    private bool $bloc;

    public function __construct(string $nomProprio = "", int $solde =0, bool $bloc = true)
    {
        $this->nomProprio = $nomProprio;
        $this->solde = $solde;
        $this->bloc = $bloc;
    }

    public function AfficheSolde():void
    {
        echo "Le solde sur votre compte est de " . $this->solde . " €.";
    }

    public function Retrait(int $montantRetrait):void
    {
        $this->solde -= $montantRetrait; 
        echo "Vous avez retiré " . $montantRetrait . " €. Il vous reste " . $this->solde . " € sur votre compte.";
    }
    public function Depot(int $montantDepot):void
    {
        $this->solde += $montantDepot; 
        echo "Vous avez ajouté " . $montantDepot . " €. Il vous reste " . $this->solde . " € sur votre compte.";
    }

    public function EtatBlocage():void{
        if ($this->bloc == true){
            echo "Votre compte bancaire est bloqué";
        }
        else{
            echo "Votre compte bancaire est débloqué";
        }
    }

    public function SwitchBlocage():void
    {
        if ($this->bloc == true){
            $this->bloc = false;
        }
        else{
            $this->bloc = true;
        }
    }
}