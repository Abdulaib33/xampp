<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Syntax and Stucture</title>
</head>
<body>

<!-- 
    Exercice 1 : Utiliser PHP avec HTML
    But : Crée une page qui affiche "Bonjour, [Nom]" où [Nom] est généré par PHP.
    Indication : Utilise PHP pour insérer un paragraphe <p> contenant le texte. 
-->

<?php 
    $name = "Abdoulaye";
    echo "<p>Bonjourno $name bienvenue, Bienvenuueee, hahahahahAHAHAHAHAHAHHAHAHAAHA</p>"

?>

<!-- 
    Exercice 2 : PHP avec des balises HTML
    But : Crée une page qui affiche une liste HTML (<ul> et <li>) en utilisant PHP.
    Indication :
    Structure de la liste avec du HTML.
    Génére les <li> dynamiquement avec PHP.
-->

<?php 
    $fruits = ["Kiwi", "Poire", "Pomme", "Banane", "Fraise"];
    echo "<ul>";
    foreach ($fruits as $fruits) {
        echo "<li>$fruits</li>";
    }
    echo "</ul>";

?>


<!-- 
    Exercice 3 : PHP dans une balise HTML
    But : Crée une page qui affiche un tableau HTML en utilisant PHP.
    Indication :
    Structure du tableau avec du HTML.
    Génére les <tr> et <td> dynamiquement avec PHP.

-->

<?php  // J'ai aucune idée de ce que je fais ici, logiquement tu sais que je ne le pas fais, mais je reviendrais dessus InchALlah
    $users = [
        ["name" => "Abdoulaye", "age" => 25, "city" => "Paris"],
        ["name" => "Moussa", "age" => 30, "city" => "Marseille"],
        ["name" => "Mamadou", "age" => 35, "city" => "Lyon"],
        ["name" => "Aminata", "age" => 40, "city" => "Toulouse"],
        ["name" => "Fatou", "age" => 45, "city" => "Bordeaux"]
    ];
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Nom</th>";
    echo "<th>Age</th>";
    echo "<th>Ville</th>";
    echo "</tr>";
    foreach ($users as $user) {
        echo "<tr>";
        echo "<td>".$user["name"]."</td>";
        echo "<td>".$user["age"]."</td>";
        echo "<td>".$user["city"]."</td>";
        echo "</tr>";
    }
    echo "</table>";

//     Exercice 3 : Comprendre les commentaires
// But : Écris un script PHP qui :
// Utilise un commentaire sur une ligne (//) pour expliquer une instruction.
// Utilise un commentaire multi-lignes (/* ... */) pour expliquer le fonctionnement du code.
// Indication : Affiche un message simple comme "Ceci est mon premier script PHP !".
?>


<!-- 
Exercice 4 : Terminer chaque instruction avec un point-virgule
But : Crée un script PHP où :
Une instruction est correctement terminée avec un ;.
Une instruction volontairement incorrecte (sans point-virgule) pour voir l'erreur dans le navigateur.
Indication : Utilise echo pour afficher du texte 
-->

<?php 
    echo "Ceci est une instruction correctement terminée avec un point-virgule. <br>";
    echo "Ceci est une instruction volontairement incorrecte sans point-virgule. <br>"; 
?>



<!-- 
    Exercice 5 : Utiliser des guillemets
    But : Crée un script PHP qui utilise des guillemets pour afficher du texte.
    Indication : Utilise echo pour afficher du texte.
-->

<?php 
    echo "Ceci est un texte avec des guillemets."; 
?>

    

</body>
</html>