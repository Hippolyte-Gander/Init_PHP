<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
Attention, la valeur générée devra être arrondie à 2 décimales. Affichage :
Montant en francs : 100
100 francs = 15.24 €</p>

<?php

$vfranc = 10;

$veuro = $vfranc / 6.5596;

$veuro = round($veuro, 2);

echo $vfranc . " francs fait " . $veuro . " euros."
















?>