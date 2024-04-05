<h1>Exercice 6</h1> 

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2) Affichage :
Prix unitaire de l’article : 9.99 €
Quantité : 5
Taux de TVA : 0.2
Le montant de la facture à régler est de : 59.94 €</p>

<?php

$p_art = 9.99;

$qté = 5;

$tva = 0.2;

$prixstva = $p_art * $qté;

$prixtot = $prixstva + ($prixstva * $tva);

$prixtot = round($prixtot, 2);


echo nl2br("Prix unitaire de l’article :" . $p_art . " €\n");
echo nl2br("Quantité :" . $qté . "\n");
echo nl2br("Taux de TVA :" . $tva . "\n");

echo ("Le montant de la facture à régler est de :" . $prixtot . " €")














?>