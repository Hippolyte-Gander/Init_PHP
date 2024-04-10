<h1>Exercice 11</h1> 

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de caractère représentant une date.
Exemple :
formaterDateFr("2018-02-23");</p>


<?php

function formatDateFr($dateString) {

    $joursfr = ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"];
    $moisfr = [1=>"janvier", 2=>"février", 3=>"mars", 4=>"avril", 5=>"mai", 6=>"juin", 7=>"juillet", 8=>"août", 9=>"septembre", 10=>"octobre", 11=>"novembre", 12=>"décembre"];
    
    $date = DateTime::createFromFormat('Y-m-d', $dateString);
    
    if ($date === false) {
        echo "Format de date invalide";
    }

    $jourSemaine = date_format($date, "w");
    $jour = date_format($date, "j");
    $mois = intval(date_format($date, "n"));
    $annee = date_format($date, "Y");

    $resultat = $joursfr[$jourSemaine] ." ". $jour ." ". $moisfr[$mois] ." ". $annee;

    return $resultat;
}

$dateString = "2018-02-23";

echo formatDateFr($dateString);

?>