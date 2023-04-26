<?php

require_once 'Voiture.php';

class Fourgon extends Voiture {
    private int $volume;

    public function __construct(string $immatriculation, string $couleur, int $puissance, int $capaciteReservoir, int $consommation, int $volume) {
        parent::__construct($immatriculation, $couleur, $puissance, $capaciteReservoir, $consommation);
        $this->volume = $volume;
    }

    public function getVolume(): int {
        return $this->volume;
    }
}
?>
