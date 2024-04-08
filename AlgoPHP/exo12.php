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

$people = [
  "Mickaël" => "FRA",
  "Virgile" => "ESP",
  "Marie-Claire" => "ENG"
  ];


foreach ($people as $prenom => $pays) {
  if ($pays == "FRA") {
    echo "Salut $prenom <br>";
  } elseif ($pays == "ESP") {
    echo "Hola $prenom <br>";
  } elseif ($pays == "ENG") {
    echo "Hello $prenom <br>";
  } else {
    echo "Erreur";
  }
}

echo "<br> ";

ksort($people);

foreach ($people as $prenom => $pays) {
  if ($pays == "FRA") {
    echo "Salut $prenom <br>";
  } elseif ($pays == "ESP") {
    echo "Hola $prenom <br>";
  } elseif ($pays == "ENG") {
    echo "Hello $prenom <br>";
  } else {
    echo "Erreur";
  }
}

// Solution 2 :

$salutations = ["FRA" => "Salut","ESP" => "Hola","ENG" => "Hello"];

foreach ($personnes as $prenom => $langue) {
  if (in_array($langue, array_keys($salutations))){
    $bonjour = $salutations[$langue];
    // $salutations["FRA"] -> "Salut"
    // $salutations["ESP"] -> "Hola"
    echo "$bonjour $prenom<br>";
  } else {
    echo "Langue non gérée pour $prenom <br>";
  }
}





?>