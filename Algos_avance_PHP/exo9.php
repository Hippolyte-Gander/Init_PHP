<h1>Exercice 9</h1> 

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre ("Monsieur","Madame","Mademoiselle").</p>


<?php


function afficherRadio($elements) {
    $result = "";
    foreach ($elements as $element) {
        $result .= "<input type='radio' name='genre' value='$element' checked='checked'>$element</input><br>";
    }
    return $result;
}

$elements = ["Masculin","Féminin","Autre"];
echo afficherRadio($elements);

?>