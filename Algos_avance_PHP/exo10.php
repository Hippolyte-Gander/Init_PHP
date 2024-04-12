<h1>Exercice 10</h1> 

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).</p>


<?php

$nomsInput = ["Nom","Prénom","Adresse e-mail", "Ville"];
$sexes = ["Femme", "Homme"];
$formations = ["Développeur Logiciel","Designer web","Intégrateur","Chef de projet"];

echo afficherInput($nomsInput, $sexes, $formations);


function afficherInput($nomsInput, $sexes, $formations) {
    return inputNoms($nomsInput) . inputSexes($sexes) . inputFormations($formations);
}

function inputNoms($nomsInput) {
    $resultat = "<form>";
    foreach ($nomsInput as $nom) {
        $resultat .= "<label for=$nom>$nom :</label><br>
        <input id='' type='text' $nom name='$nom' $nom><br>";
    }
    $resultat .= "</form>";
    return $resultat;
}

function inputSexes($sexes) {
    $resultat = "<label>Sexe : </label><select>";
    
    foreach ($sexes as $sexe) {
        $resultat .= "<option value='$sexe'>$sexe</option>";
    }
    $resultat .= "</select><br>";
    return $resultat;
}

function inputFormations($formations) {
    $resultat ="";
    foreach ($formations as $formation) {
        $resultat .= "<input type='radio' name='genre' value='$formation'>$formation</input><br>";
    }
    $resultat .= "<button type='submit'>Valider</button>";
    return $resultat;
}


#méthode précédente : une seule fonction mais beaucoup trop grande :
// $resultat .= "</form>";
// foreach ($nomsInput as $nom) {
    //     $resultat .= "<label for=$nom>$nom :</label><br>
    //     <input id='' type='text' $nom name='$nom' $nom><br>";
    // }
    // $resultat .= "</form>";
    
    // $resultat .= "<label>Sexe : </label><select>";
    
    // foreach ($sexes as $sexe) {
        //     $resultat .= "<option value='$sexe'>$sexe</option>";
        // }
        // $resultat .= "</select><br>";

// foreach ($formations as $formation) {
//     $resultat .= "<input type='radio' name='genre' value='$formation'>$formation</input><br>";
// }
// $resultat .= "<button type='submit'>Valider</button>";
// return $resultat;


?>