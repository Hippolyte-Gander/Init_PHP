<h1>Exercice 13</h1> 

<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un véhicule.
v1 ➔ "Peugeot","408",5
v2 ➔ "Citroën","C4",3
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments suivants :</p>


<?php

require "exo13voiture.php";

$v1 = new Voiture("Peugeot","408",5);
$v2 = new Voiture("Citroën","C4",3);

echo "Infos véhicule 1 <br>***************************<br>" . $v1->getInfos() ."<br>";
echo "Infos véhicule 2 <br>***************************<br>" .$v2->getInfos() ."<br>";

echo $v1->demarrer() . "<br>";
echo $v1->accelerer(50) . "<br>";
// echo $v2->demarrer() . "<br>";
// echo $v2->stopper() . "<br>";
// echo $v2->accelerer(20) . "<br>";
echo $v1->getphraseVitesseActuelle() . "<br>";
// echo $v2->getphraseVitesseActuelle() . "<br>";

echo $v1->ralentir(60) . "<br>";
echo $v1->getphraseVitesseActuelle() . "<br>";

$v1->ralentir("aaaa");

?>