<h1>Exercice 8</h1> 

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme : Affichage (pour la table de 8) :
Table de 8 :
1 x 8 = 8
2 x 8 = 16
3 x 8 = 24 …</p>

<?php

$nbr = 8;


echo ("Affichage (pour la table de ". $nbr . ") :\n");

for ($x=0; $x < 10; $x++) {
    echo ($x . " x " . $nbr . "  = " . $nbr * $x . "\n");
}





?>