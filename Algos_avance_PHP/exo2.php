<h1>Exercice 2</h1> 

<p>Soit le tableau suivant :
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales); Affichage
Pays
Capitale
ALLEMAGNE
Berlin
FRANCE
Paris
ITALIE
Rome
USA
Washington</p>

<!-- <table border=1>
    <thead>
        <tr>
            <th>Pays</th>
            <th>Capitales</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>France</td>
            <td>Paris</td>
        </tr>
        <tr>
            <td>Allemagne</td>
            <td>Berlin</td>
        </tr>
        <tr>
            <td>USA</td>
            <td>Washington</td>
        </tr>
        <tr>
            <td>Italie</td>
            <td>Rome</td>
        </tr>
    </tbody>
</table> -->

<?php

$capitales = ["France"=>"Paris",
            "Allemagne"=>"Berlin",
            "USA"=>"Washington",
            "Italie"=>"Rome"];

echo afficherTableHTML($capitales);

function afficherTableHTML($capitales) {
    ksort($capitales);  //ksort pour A->Z des "keys et asort pour A->Z des "values"
    $result = "<table border=1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                    </tr>
                </thead>
            <tbody>";
    foreach ($capitales as $pays => $capitale) {
        $result .= "<tr>
                        <td>" . mb_strtoupper($pays) . "</td>                        
                        <td> " . ucfirst($capitale) . "</td>                        
                    </tr>";
    }

    $result .= "</tbody></table>";
    return $result;
}

?>