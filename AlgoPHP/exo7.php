<h1>Exercice 7</h1> 

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
Poussin : entre 6 et 7 ans
Pupille : entre 8 et 9 ans
Minime : entre 10 et 11 ans
Cadet : à partir de 12 ans
Si la catégorie n’est pas gérée, merci de le préciser. Affichage :
L’enfant qui a 10 ans appartient à la catégorie « Minime »</p>

<?php

$age = 10;

if ($age >= 12) {
    echo ("L’enfant qui a " . $age . " ans appartient à la catégorie « Cadet »");
} elseif ($age >= 10) {
    echo ("L’enfant qui a " . $age . " ans appartient à la catégorie « Minime »");
} elseif ($age >= 8) {
    echo ("L’enfant qui a " . $age . " ans appartient à la catégorie « Pupille »");
} elseif ($age >= 6) {
    echo ("L’enfant qui a " . $age . " ans appartient à la catégorie « Poussin »");
} else {
    echo ("La personne n'est dans aucune de ces catégorie.");
}



















?>