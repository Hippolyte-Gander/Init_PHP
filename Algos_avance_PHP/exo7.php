<h1>Exercice 7</h1> 

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.
Exemple :
genererCheckbox($elements);
//où $elements est un tableau associatif clé => valeur avec 3 entrées.</p>




<?php

function genererCheckBox($elements) {
    $result = "";
    foreach ($elements as $element=>$choix) {
        $result .= "<input type='checkbox' name='$element' value='$choix'>$choix</input><br>";
    }
    return $result;
}

$elements = ["Choix 1"=>"Oui","Choix 2"=>"Non","Choix 3"=>"Peut être"];
echo genererCheckBox($elements);
#j'ai volontairement affiché la valeur et non la key pour tester si les 2 fonctionnaient
?>