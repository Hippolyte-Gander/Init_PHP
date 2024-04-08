<h1>Exercice 13</h1> 

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales. Affichage :
Les notes obtenues par l’élève sont : 10 12 8 19 3 16 11 13 9
Sa moyenne générale est donc de : 11.22</p>

<?php

$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$nbnotes = count($notes);
$moyenne = round(array_sum($notes) / $nbnotes, 2);

function AffTab($notes) { foreach($notes as $x) {
    echo "$x ";
}
}
echo "Les notes obtenues par l’élève sont : ";
AffTab($notes);
echo "<br>Sa moyenne générale est donc de : $moyenne";

?>