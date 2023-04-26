<?php

require_once 'Voiture.php';

class PoidsLourd extends Voiture {
    private int $nombreEssieux;

    public function __construct(string $immatriculation, string $couleur, int $puissance, int $capaciteReservoir, int $consommation, int $nombreEssieux) {
        parent::__construct($immatriculation, $couleur, $puissance, $capaciteReservoir, $consommation);
        $this->nombreEssieux = $nombreEssieux;
    }

    public function getNombreEssieux(): int {
        return $this->nombreEssieux;
    }
}
?>
