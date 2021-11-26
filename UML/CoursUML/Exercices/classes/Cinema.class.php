<?php
    class Cinema{
        public int $id;
        public string $nom;
        public string $ville;

        // Relation
        public array $cinemaDiffusions = [];

        public function __construct(int $id, string $nom, string $ville) {
            $this->id = $id;
            $this->nom = $nom;
            $this->ville = $ville;
        }

        public function addDiffusion(Diffusion $diffusion)
        {
            $this->cinemaDiffusions[] = $diffusion;
            //relation
        }
    }
