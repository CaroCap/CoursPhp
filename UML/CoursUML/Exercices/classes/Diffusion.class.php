<?php
class Diffusion {
    public int $id;
    public DateTime $dateDiffusion;

    // Implémenter relations avec cinéma et film
    public Cinema $cinema;
    public Film $film;

    public function __construct(int $id, DateTime $dateDiffusion, Cinema $cinema, Film $film) {
        $this->id = $id;
        $this->dateDiffusion = $dateDiffusion;
        $this->cinema = $cinema;
        $this->film = $film;
    }
}