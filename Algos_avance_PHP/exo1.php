<h1>Exercice 1</h1> 

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ; Affichage (si $texte = « Mon texte en paramètre »)
MON TEXTE EN PARAMETRE</p>

<style>
    .red {
        color: red;
    }
</style>

<?php

$texte = "Mon texte en paramètre";
$texte2 = "Mon autre texte en paramètre";
$texte3 = "Mon autre autre texte en paramètre";

function convertirMajRouge($texte) {
    $result = mb_strtoupper($texte); //convertir en majuscule
    $result = "<p class= 'red'>" . $result . "</p>"; //mettre le texte dans <p></p> en rouge
    return $result;
}

function convertirMajRouge2($texte2) {
    return "<p class='red'>" . mb_strtoupper($texte2) . "</p>"; //convertir en majuscule et en rouge
}

function convertirMajColor($texte3, $color) {
    return "<p style='color:$color'>" . mb_strtoupper($texte3) . "</p>"; //convertir en majuscule et d'une couleur choisie
}


echo convertirMajRouge($texte) . "<br>";
echo convertirMajRouge2($texte2) . "<br>";
echo convertirMajColor($texte3, 'green') . "<br>";

?>