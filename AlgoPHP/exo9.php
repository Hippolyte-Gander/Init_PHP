<h1>Exercice 9</h1> 

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »). Affichage :
Age : 32
Sexe : F
La personne est imposable.</p>

<?php

$sexe = "H";

$age = 20;

echo("Age : ". $age . "<br>");
echo("Sexe : ". $sexe . "<br>");

if ($sexe == "H" or $sexe == "F") {
    if ($age >= 18 and $age <= 35 and $sexe == "F") {
        echo("La personne est imposable.");
    } elseif ($age > 20 and $sexe == "H") {
        echo("La personne est imposable.");
    } else {
        echo "La personne n'est pas imposable.";
    }

} else {
    echo "Erreur";
}







?>