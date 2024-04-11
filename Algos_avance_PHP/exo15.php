<h1>Exercice 15</h1> 

<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une 
adresse e-mail a le bon format.
</p>


<?php

// $email = "john.doe@example.com";
// $reponse = "L'adresse $email est une adresse e-mail valide";

// if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     $reponse = "L'adresse $email est une adresse e-mail valide";
// }

// echo $reponse;

// echo (!filter_var($email, FILTER_VALIDATE_EMAIL)) ? "L'adresse n'est pas valide" : "L'adresse est valide";

$capitales = [
    "France"=>["capitale" => "Paris", "site" => "http://"],
    "Allemagne"=>["capitale" => "Berlin", "site" => "http://"],
];

foreach ($capitales as $pays => $infos) {
    echo $pays." a pour capitale ". $infos["capitale"]." - ".$infos["site"]."<br>";
}

?>