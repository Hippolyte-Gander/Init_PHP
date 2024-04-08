<h1>Exercice 7</h1> 

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
Poussin : entre 6 et 7 ans
Pupille : entre 8 et 9 ans
Minime : entre 10 et 11 ans
Cadet : à partir de 12 ans
Si la catégorie n’est pas gérée, merci de le préciser. Affichage :
L’enfant qui a 10 ans appartient à la catégorie « Minime »</p>

<?php

$age = 8;
$categorie = "L’enfant qui a $age ans appartient à la catégorie ";

if ($age >= 12) {
    echo ("$categorie « Cadet »");
} elseif ($age >= 10) {
    echo ("$categorie « Minime »");
} elseif ($age >= 8) {
    echo ("$categorie « Pupille »");
} elseif ($age >= 6) {
    echo ("$categorie « Poussin »");
} else {
    echo ("La personne n'est dans aucune de ces catégorie.");
}



















?>