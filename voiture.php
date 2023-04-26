<?php
class Voiture {
    private string $immatriculation;
    private string $couleur;
    private int $puissance;
    private int $capaciteReservoir;
    private int $niveauEssence;
    private int $consommation;
    private string $messageTableauDeBord;
    private bool $assure;

    public function __construct(string $immatriculation, string $couleur, int $puissance, int $capaciteReservoir, int $consommation) {
        $this->immatriculation = $immatriculation;
        $this->couleur = $couleur;
        $this->puissance = $puissance;
        $this->capaciteReservoir = $capaciteReservoir;
        $this->niveauEssence = 0;
        $this->consommation = $consommation;
        $this->assure = false;
        $this->messageTableauDeBord = "";
    }

    public function Repeindre(string $nouvelleCouleur): bool {
        if (!isset($nouvelleCouleur)) {
            return false;
        }

        if ($this->couleur === $nouvelleCouleur) {
            $this->messageTableauDeBord = "Merci pour ce rafraîchissement !";
        } else {
            $this->couleur = $nouvelleCouleur;
            $this->messageTableauDeBord = "Merci pour la nouvelle couleur !";
        }

        return true;
    }

    public function Mettre_essence(int $quantite): int {
        if ($this->niveauEssence + $quantite <= $this->capaciteReservoir) {
            $this->niveauEssence += $quantite;
            $this->messageTableauDeBord = "Appoint de carburant effectué.";
        } else {
            $this->messageTableauDeBord = "Appoint de carburant refusé. Capacité maximale dépassée.";
        }

        return $this->niveauEssence;
    }

    public function Se_deplacer(int $distance, int $vitesseMoyenne): void {
        $consommation = $this->calculerConsommation($vitesseMoyenne);

        $carburantNecessaire = ($distance * $consommation) / 100;

        if ($carburantNecessaire > $this->niveauEssence) {
            $this->messageTableauDeBord = "Trajet impossible. Niveau d'essence insuffisant.";
        } else {
            $this->niveauEssence -= $carburantNecessaire;
            $this->messageTableauDeBord = "Trajet effectué. Consommation : " . $carburantNecessaire . " litres.";
        }
    }

    private function calculerConsommation(int $vitesseMoyenne): int {
        if ($vitesseMoyenne < 50) {
            return 10;
        } elseif ($vitesseMoyenne >= 50 && $vitesseMoyenne <= 90) {
            return 5;
        } elseif ($vitesseMoyenne > 90 && $vitesseMoyenne <= 130) {
            return 8;
        } else {
            return 12;
        }
    }

    public function __toString(): string {
        return sprintf("Immatriculation: %s, Puissance: %d, Couleur: %s", $this->immatriculation, $this->puissance, $this->couleur);
    }

    public function getMessageTableauDeBord(): string {
        return $this->messageTableauDeBord;
    }

    public function setAssure(bool $assure): void {
        $this->assure = $assure;
        $this->messageTableauDeBord = $assure ? "Le véhicule est assuré." : "Le véhicule n'est pas assuré.";
    }


}
?>