<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome. Affichage :
La phrase « Engage le jeu que je le gagne » est palindrome</p>

<?php

$phrase = "Engage le jeu que je le gagne";

$p1 = str_replace(" ","",$phrase);

$p1 = mb_strtolower($p1);

$phrase_inverse = strrev($p1);



if ($p1 <> $phrase_inverse) {
    echo "La phrase « $phrase » n'est pas un palindrome.";
} else {
    echo "La phrase « $phrase » est un palindrome.";
}













?>