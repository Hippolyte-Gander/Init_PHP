<h1>Exercice 11</h1> 

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de caractère représentant une date.
Exemple :
formaterDateFr("2018-02-23");</p>


<?php

function formatDateFr($date) {
    $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
        
    $resultat = $formatter->format($date);

    return $resultat;
}


$date = new DateTime('2018-02-23');
echo formatDateFr($date);
?>