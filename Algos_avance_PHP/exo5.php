<h1>Exercice 5</h1> 

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés.
Exemple :
$nomsInput = array("Nom","Prénom","Ville");
afficherInput($nomsInput);</p>


<?php

function afficherInput($nomsInput) {
    $resultat = "<form>";    
    
    foreach ($nomsInput as $nom) {
        $resultat .= "<label for=$nom>$nom :</label><br>
        <input id='' type='text' $nom name='$nom' $nom><br>";
    }
    $resultat .= "</form>";
    return $resultat;
}

$nomsInput = ["Nom","Prénom","Ville"];
echo afficherInput($nomsInput);

?>