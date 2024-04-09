<h1>Exercice 15</h1> 

<p>XV. Exercice 15
Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ; Affichage :
Michel DUPONT a … ans
Alice DUCHEMIN a … ans</p>

<?php

require "exo15Personne.php";

// spl_autoload_register(function ($class_name) {
//     require "classes/" $class_name . '.php';
// });



$michel = new Personne("DUPONT","Michel",  "1980-02-19");
$alice = new Personne( "DUPONT","Alice", "1985-01-17");

// echo $michel->getNom() ." ". $michel->getPrenom()." a ". $michel->getAge()."<br>";   fonctionnne mais pas pratique
// echo $alice->getNom() ." ". $alice->getPrenom()." a ". $alice->getAge()."<br>";

echo $michel . "<br>";
echo $alice



?>