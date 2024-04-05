<h1>Exercice 10</h1> 

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1 €. Affichage :
Montant à payer : 152 €
Montant versé : 200 €
Reste à payer : 48 €
***************************************************
Rendue de monnaie :
4 billets de 10 € - 1 billet de 5 € - 1 pièce de 2 € - 1 pièce de 1 €
XI. Exercice</p>

<?php

$sumapaye = 152;
$sumverse = 200;
$resteapayer = $sumverse - $sumapaye;

$nbr10 = 0;
$nbr5 = 0;
$nbr2 = 0;
$nbr1 = 0;

$rendu = $resteapayer;

while ($rendu != 0) {
    if ($rendu >= 10) {
        $rendu = $rendu - 10;
        $nbr10++;
    } elseif ($rendu >= 5) {
        $rendu = $rendu - 5;
        $nbr5++;    
    } elseif ($rendu >= 2) {
        $rendu = $rendu - 2;
        $nbr2++;    
    } elseif ($rendu >= 1) {
        $rendu = $rendu - 1;
        $nbr1++;    
    } else {
        echo "Il reste des centimes.";
    }
}

echo "Rendue de monnaie :<br>";
echo $nbr10 . " billets de 10€ - " . $nbr5 . " billets de 5€ - ". $nbr2 . " pièces de 2€ - " . $nbr1 . " pièces de 1€ - "






?>