<h1>Exercice 12</h1> 

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG Affichage :
Salut Mickaël
Hola Virgile
Hello Marie-Claire
Variante : trier d’abord le tableau par ordre alphabétique du prénom Affichage :
Hello Marie-Claire
Salut Mickaël
Hola Virgile</p>

<?php

$fra = "Salut";
$esp = "Hola";
$eng = "Hello";

$people = array("Mickaël"=>"$fra", "Virgile"=>"$esp", "Marie-Claire"=>"$eng");

foreach ($people as $prenom => $pays) {
    echo "$pays $prenom<br>";
  }

echo "<br> ";

ksort($people);

foreach ($people as $x => $y) {
    echo "$y $x <br>";
  }



?>