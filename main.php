<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title> Voiture</title>
</head>
<body>
<?php

require_once 'Voiture.php';
require_once 'Fourgon.php';
require_once 'PoidsLourd.php';
require_once 'Personne.php';

$voiture = new Voiture("AA-123-BB", "rouge", 1200, 100, 5);
$fourgon = new Fourgon("CC-789-DD", "jaune", 1800, 150, 7, 30);
$poidsLourd = new PoidsLourd("EE-321-FF", "noir", 2500, 300, 10, 6);

$personne = new Personne("Jean Dupont");
$personne->setVoiture($voiture);

echo "La voiture de " . $personne->getNom() . " : " . $personne->getVoiture() . "<br>";

$voiture->Repeindre("rouge");
echo $voiture->getMessageTableauDeBord() . "<br>";

$voiture->Repeindre("bleu");
echo $voiture->getMessageTableauDeBord() . "<br>";

$voiture->setAssure(true);
echo $voiture->getMessageTableauDeBord() . "<br>";

$voiture->Mettre_essence(10);
echo $voiture->getMessageTableauDeBord() . "<br>";

$voiture->Mettre_essence(45);
echo $voiture->getMessageTableauDeBord() . "<br>";

$voiture->Se_deplacer(100, 60);
echo $voiture->getMessageTableauDeBord() . "<br>";

$voiture->Se_deplacer(300, 130);
echo $voiture->getMessageTableauDeBord() . "<br>";

echo $voiture . "<br>";
echo $fourgon . ", Volume : " . $fourgon->getVolume() . " m³<br>";
echo $poidsLourd . ", Nombre d'essieux : " . $poidsLourd->getNombreEssieux() . "<br>";

?>

</body>
</html>
