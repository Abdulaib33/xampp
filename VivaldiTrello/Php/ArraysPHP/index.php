<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays </title>
</head>
<body>
    
<style>
    body {
        background-color: darkslategray;
        color: wheat;
    }
</style>

<!-- Exercice 1 : Création et affichage d'un tableau indexé
Objectif : Apprendre à créer un tableau simple, appelé un "tableau indexé", où les éléments sont indexés par des numéros automatiques (0, 1, 2, ...).
Instructions :
Crée un tableau avec plusieurs éléments (par exemple, 5 valeurs aléatoires comme des nombres ou des mots).
Affiche tous les éléments du tableau un par un à l'aide d'une boucle. Cela t'aidera à comprendre comment accéder à chaque élément d'un tableau à travers son index. 

Boucle recommandée : for
Pourquoi ? La boucle for est idéale lorsque tu sais combien d’éléments il y a dans ton tableau. Tu peux facilement itérer sur chaque index (0, 1, 2, ...) et afficher les éléments.
-->

<?php 

    	$exercice1 = array(5, "Mot", "HAHAHA", "Bonjourno", 10);

    for ($i = 0; $i < count($exercice1); $i++) {
        echo $i . " . " . $exercice1[$i] . "<br>";
    }

?>

<!-- Exercice 2 : Modification d'un tableau indexé
Objectif : Apprendre à modifier un élément d’un tableau indexé.
Instructions :
Crée un tableau avec quelques éléments.
Change un élément spécifique en utilisant son index (par exemple, modifier le 3e élément pour qu’il ait une nouvelle valeur).
Affiche à nouveau le tableau pour vérifier que la modification a bien été effectuée. 

Boucle recommandée : Aucune boucle n’est nécessaire si tu modifies directement un élément en utilisant son index. Si tu veux afficher après modification, tu peux utiliser for ou foreach pour afficher tous les éléments du tableau.
Pourquoi ? La modification peut être faite directement en accédant à l’index. La boucle est nécessaire seulement pour afficher après modification.

-->

<?php 

    $exercices2 = [3, 2, 1,  4, 5, 5, 6] ;

    echo $exercices2[2] ."<br>";
    echo "<br>";
    $exercices2[2] = 28;
    echo $exercices2[2];
    echo "<br>";

?>

<!-- Exercice 3 : Tableau associatif
Objectif : Comprendre ce qu’est un tableau associatif, où chaque élément est un couple clé/valeur. Contrairement à un tableau indexé, chaque élément est identifié par une clé (nom) que tu choisis, et non un numéro.
Instructions :
Crée un tableau où chaque élément a une clé, par exemple, des informations comme le nom, l'âge et la ville d’une personne.
Affiche les valeurs de ce tableau en utilisant les clés. Cela te permettra de comprendre comment accéder à des éléments dans un tableau associatif. 

Boucle recommandée : foreach
Pourquoi ? foreach est la boucle la plus adaptée pour les tableaux associatifs car elle te permet d’accéder directement à chaque clé et à chaque valeur sans avoir à t’occuper des indices.

-->

<?php 

    echo "<br> exerices 3" . "<br>";

    $exercices3 = [
        "nom" => "Abdoulaye",
        "Age" => 21,
        "ville" => "liège"
    ];

    echo $exercices3['ville'];

    echo '<br>';

    forEach ($exercices3 as $key => $value) {

        echo ' '. $key .' => '. $value .'<br>';

    }

?>



<!-- Exercice 4 : Parcours d'un tableau associatif avec foreach
Objectif : Apprendre à parcourir un tableau associatif à l’aide d’une boucle foreach. Cette boucle est particulièrement utile pour accéder facilement à chaque clé et à chaque valeur d’un tableau associatif.
Instructions :
Crée un tableau associatif avec des informations sur plusieurs personnes.
Utilise une boucle foreach pour afficher ces informations sous forme de liste. Cela te permettra de voir comment accéder à chaque clé et valeur sans avoir besoin de connaître les indices à l'avance. 

oucle recommandée : foreach
Pourquoi ? foreach est spécifiquement conçue pour itérer à travers des tableaux associatifs. Tu accèderas facilement à chaque clé et à chaque valeur avec cette boucle.

-->

<?php 

    echo "Exercices 4 : " . "<br>";

    $exercices4 = [
        "Nom" => "Ibrahima",
        "Age" => "22",
        "Ville" => "Liège"
    ];

    foreach ($exercices4 as $index => $value) {
        echo " clé : ". $index ." => ". $value ."<br>";
    }

?>


<!-- Exercice 5 : Ajouter des éléments dans un tableau
Objectif : Comprendre comment ajouter des éléments dans un tableau après qu'il ait été créé.
Instructions :
Crée un tableau avec quelques valeurs initiales.
Ajoute un nouvel élément à ce tableau (soit à la fin, soit à une position spécifique).
Affiche le tableau après l'ajout pour voir si l'élément a bien été inséré. 

Boucle recommandée : Aucune boucle n'est nécessaire pour l'ajout d'éléments. Tu peux utiliser array_push() pour ajouter des éléments dans un tableau, ou simplement ajouter un élément à un index spécifique.
Pourquoi ? L’ajout est une opération directe. Tu n’as pas besoin d’une boucle pour ajouter un élément. Les boucles sont plus utiles pour afficher ou traiter des éléments après ajout.

-->

<?php 

    echo "<br> Exercices 5 : " . "<br>";

    $exercices5 = [];

    echo sizeof($exercices5) . "<br>";

    array_push($exercices5, "Mangue", "Avocat", "Kiwi") . "<br>"; // index table(table indexé)

    echo sizeof($exercices5) . "<br>"; 

    foreach ($exercices5 as $x => $y) {

        echo " clé : " . $x . " => " . $y . "<br>";

    }

    $exercices5 += ["Color" => "Blue", "Place" => "Fleron", "Humor" => "peace"]; // Assiociative Table(table associatif)

    foreach ($exercices5 as $i => $j) {

        echo " clé : " . $i . " => " . $j . "<br>"; 

    }

    echo array_shift($exercices5) . "<br>"; // always remove the first element 

    echo array_unshift($exercices5, "Banana") . "<br>"; // Always add an element to the beginning of an array 

    echo array_pop($exercices5) . "<br>"; // Always removes an element from the end of an array.



?>

<!-- Exercice 6 : Supprimer un élément d'un tableau
Objectif : Apprendre à supprimer un élément d’un tableau, que ce soit par son index ou par sa valeur.
Instructions :
Crée un tableau avec plusieurs valeurs.
Supprime un élément du tableau en utilisant son index ou sa valeur.
Affiche le tableau après la suppression pour vérifier que l'élément a bien été retiré. 

Boucle recommandée : Aucune boucle n’est nécessaire pour supprimer un élément, sauf si tu veux supprimer un élément conditionnellement. Si tu veux parcourir un tableau et supprimer certains éléments, tu peux utiliser foreach avec une condition ou array_splice().
Pourquoi ? L’opération de suppression peut être accomplie avec des fonctions intégrées comme unset() ou array_splice(). Une boucle peut être utile si tu veux supprimer plusieurs éléments en fonction d'une condition.

-->

<?php 

    echo "<br> Exercices 6 : " . "<br>";

    $exercices6 = [
        "Best" => "Roblox",
        "Nom" => "Abdoulaye",
        "prenom" => "Bayo",
        245
    ];

    echo sizeof($exercices6) . "<br>"; // 4
    unset($exercices6["Best"]); // remove the element with the key "Best" => "Roblox"
    unset($exercices6[0]); // remove the element with the key 245"
    echo sizeof($exercices6) . "<br>"; // 2

    foreach ($exercices6 as $x => $y) {
        echo "clé : ". $x . " => ". $y . "<br>";
    }
?>

<!-- Exercice 7 : Tri d'un tableau
Objectif : Apprendre à trier un tableau.
Instructions :
Crée un tableau de valeurs numériques ou alphabétiques.
Trie ce tableau dans l’ordre croissant (du plus petit au plus grand ou de A à Z).
Trie le même tableau dans l’ordre décroissant (du plus grand au plus petit ou de Z à A).
Affiche le tableau à chaque étape pour vérifier que le tri a bien été effectué. 

Boucle recommandée : Aucune boucle nécessaire, car le tri peut être effectué en utilisant des fonctions comme sort() ou rsort(). Ces fonctions gèrent en interne les opérations de tri.
Pourquoi ? Le tri d'un tableau est une opération simple à l'aide de fonctions natives. Les boucles ne sont nécessaires que si tu veux implémenter un algorithme de tri personnalisé (par exemple, un tri à bulles).

-->

<?php 

    $exercices7 = [
        "b",
        "a",
        "d",
        "c",
    ];

    echo sort($exercices7);
    
    foreach ($exercices7 as $exercices7foreach) {
        echo "<br>" . $exercices7foreach . "<br>";
    }
    
    echo rsort($exercices7) . "<br>";

    foreach ($exercices7 as $exercices7foreach) {
        echo "<br>" . $exercices7foreach . "<br>";
    }
?>

<!-- Exercice 8 : Rechercher dans un tableau
Objectif : Apprendre à rechercher un élément spécifique dans un tableau.
Instructions :
Crée un tableau avec des valeurs numériques ou des chaînes.
Demande à l'utilisateur d'entrer un élément à rechercher dans le tableau.
Si l'élément est trouvé, affiche un message de confirmation ; sinon, affiche un message d'erreur. 

Boucle recommandée : foreach ou for
Pourquoi ? Si tu cherches une valeur spécifique, foreach est pratique, car il te permet de vérifier chaque élément du tableau. Tu peux aussi utiliser for si tu veux parcourir le tableau en utilisant les indices.

-->



<!-- Exercice 9 : Tableau multidimensionnel
Objectif : Comprendre les tableaux multidimensionnels (tableaux à plusieurs niveaux), comme un tableau de tableaux.
Instructions :
Crée un tableau multidimensionnel pour stocker des informations sur plusieurs personnes (par exemple, nom, âge, ville).
Utilise une boucle pour parcourir ce tableau et afficher les informations de chaque personne. 

Boucle recommandée : foreach
Pourquoi ? Si ton tableau est multidimensionnel, foreach est idéal pour accéder aux sous-tableaux ou aux éléments. Tu peux utiliser foreach pour chaque sous-tableau et traiter les valeurs à l’intérieur.

-->

<?php 

    $exercice9 = [
        ["Nom" => "Abdoulaye", "Age" => 21, "Ville" => "Liège"],
        ["Nom" => "Ibrahima", "Age" => 22, "Ville" => "Liège"],
        ["Nom" => "Moussa", "Age" => 23, "Ville" => "Liège"],
        ["Nom" => "COUCOUCOU", "Age" => 24, "Ville" => "Liège"],
        ["Nom" => "Aminata", "Age" => 25, "Ville" => "Liège"]
    ];

    foreach ($exercice9 as $exercice9foreach) {
        echo "Nom : " . $exercice9foreach["Nom"] . "<br>";
        echo "Age : " . $exercice9foreach["Age"] . "<br>";
        echo "Ville : " . $exercice9foreach["Ville"] . "<br>";
        echo "<br>";
    }

    // $exercice9 = [
    //     [1, 2, 3, 4, 5, 6],
    //     [2, 3, 4, 5, 6, 7],
    //     [3, 4, 5, 6, 7, 8],
    //     [4, 5, 6, 7, 8, 9],
    //     [5, 6, 7, 8, 9, 10]
    // ];

    // foreach ($exercice9 as $exercice9foreach) {
    //     foreach ($exercice9foreach as $exercice9foreach2) {
    //         echo $exercice9foreach2 . "<br>";
    //     }
    // }
?>

<!-- Exercice 10 : Fusionner deux tableaux
Objectif : Apprendre à fusionner deux tableaux (indexés ou associatifs) en un seul tableau.
Instructions :
Crée deux tableaux distincts avec des valeurs.
Fusionne-les en un seul tableau.
Affiche le tableau fusionné pour voir l'effet de la fusion. 

Boucle recommandée : Aucune boucle n’est nécessaire pour fusionner deux tableaux en utilisant array_merge().
Pourquoi ? La fusion des tableaux est simple grâce aux fonctions natives PHP comme array_merge(). Les boucles ne sont nécessaires que si tu veux manipuler ou filtrer les éléments après la fusion.

-->



<!-- Exercice 11 : Filtrer les éléments d'un tableau
Objectif : Apprendre à filtrer des éléments dans un tableau en fonction de certaines conditions.
Instructions :
Crée un tableau avec des valeurs numériques ou textuelles.
Utilise une fonction comme array_filter() pour ne garder que les éléments qui respectent une certaine condition (par exemple, afficher seulement les valeurs supérieures à 5).
Affiche le tableau filtré. 

Boucle recommandée : foreach
Pourquoi ? foreach est bien adapté si tu veux vérifier chaque élément du tableau et filtrer en fonction d’une condition spécifique. Tu peux aussi utiliser array_filter() pour filtrer de manière plus concise.

-->



<!-- Exercice 12 : Compter les éléments d'un tableau
Objectif : Apprendre à compter le nombre d'éléments dans un tableau.
Instructions :
Crée un tableau avec quelques éléments.
Utilise la fonction count() pour afficher le nombre total d'éléments dans ce tableau.
Cela t'aidera à comprendre comment obtenir la taille d'un tableau en PHP. 

Boucle recommandée : Aucune boucle n’est nécessaire pour compter le nombre d’éléments, car tu peux utiliser directement la fonction count().
Pourquoi ? count() te donne le nombre d'éléments du tableau sans avoir besoin de parcourir chaque élément avec une boucle.

-->


</body>
</html>