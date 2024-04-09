<h1>Exercice 5</h1> 

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés.
Exemple :
$nomsInput = array("Nom","Prénom","Ville");
afficherInput($nomsInput);</p>




<?php

function afficherInput() {
    $nomsInput = ["Nom","Prénom","Ville"];
    $nbrNoms = count($nomsInput);

    $resulat = "<form>";

    for ($i=0; $nbrNoms < $i ; $i++) { 
        $resulat .= $nomsInput[$i]." <input type='text' name='name'><br>
                            <input type='soumettre'>";
   }



    
   $resulat .= "</form>";


    return $resulat;
}

echo afficherInput();
?>