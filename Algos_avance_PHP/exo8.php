<h1>Exercice 8</h1> 

<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.</p>


<?php

$url = "http://my.mobirise.com/data/userpic/764.jpg";
$repetitions = 4;

function repeterImage($url, $repetitions) {
    $result = "";
    for ($i=0; $i < $repetitions; $i++) { 
        $result .= "<img src=$url>";
    }
    return $result;
}

echo repeterImage($url,$repetitions);

?>