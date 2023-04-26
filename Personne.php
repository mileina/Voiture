<?php

class Personne {
    private string $nom;
    private ?Voiture $voiture;

    public function __construct(string $nom) {
        $this->nom = $nom;
        $this->voiture = null;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function setVoiture(Voiture $voiture): void {
        $this->voiture = $voiture;
    }

    public function getVoiture(): ?Voiture {
        return $this->voiture;
    }
}
?>
