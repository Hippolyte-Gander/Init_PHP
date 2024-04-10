<h1>Exercice 6</h1> 

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.
Exemple :
$elements = array("Monsieur","Madame","Mademoiselle");
alimenterListeDeroulante($elements);</p>




<?php

function alimenterListeDeroulante($elements) {
    $result = "<label>Quelle est votre dénomination ? </label><select name='Dénomination'>";
    #j'ai essayé d'afficher "Dénomination" sur la liste déroulante avant que l'on clique dessus mais cela ne s'affiche pas

    foreach ($elements as $element) {
        $result .= "<option value='$element'>$element</option>";
    }
    $result .= "</select>";
    return $result;
}

$elements = ["Monsieur","Madame","Mademoiselle"];
echo alimenterListeDeroulante($elements);

?>