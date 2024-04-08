<h1>Exercice 14</h1> 

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours). Affichage (si la date courante est le 21/05/2018 et la date de naissance le 17/01/1985) :
Age de la personne : 33 ans 4 mois 4 jours</p>

<?php

$date1 = new DateTime("21-05-2018");
$date2 = new DateTime("17-01-1985");

$interv = $date1->diff($date2);

echo $interv->format("Age de la personne : %Y ans %m mois %d jours");




?>