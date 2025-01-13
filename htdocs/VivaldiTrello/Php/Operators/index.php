<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>

    <?php 

    ?>

<!-- 1. Opérateurs arithmétiques
Les opérateurs arithmétiques permettent de réaliser des calculs sur des nombres. -->

<!-- Exercice 1.1 : Addition et soustraction Crée deux variables $a et $b avec des valeurs de ton choix. Effectue les opérations suivantes :

Additionne-les et affiche le résultat.
Soustrais $b de $a et affiche le résultat. -->

<?php 

    $a = 2;
    $b = 4;

    $c = $a + $b;
    $e = $a - $b;

    echo "Addition de " . $a . " + " . $b . " égal " . $c;
    echo "<br>";
    echo "soustraction de " . $a . " - " . $b . " égal " . $e;
    echo "<br>";
?>

<!-- Exercice 1.2 : Multiplication et division

Multiplie $a et $b, puis affiche le résultat.
Divise $a par $b, puis affiche le résultat.
Divise $a par zéro et affiche un message d'erreur. -->


<?php 

    $a = 2;
    $b = 4;

    $c = $a * $b;
    $e = $a / $b;

    echo "Multiplication de " . $a . " * " . $b . " égal " . $c;
    echo "<br>";
    echo "Division de " . $a . " / " . $b . " égal " . $e;
    echo "<br>";
?>


<!-- Exercice 1.3 : Modulo et exponentiation

Affiche le reste de la division de $a par $b (utilise l’opérateur %).
Calcule $a élevé à la puissance $b (utilise l’opérateur **). -->


<?php 

    $a = 6;
    $b = 4;

    echo $a % $b;
    echo "<br>";
    echo $a ** $b; // le ** je compris que dans notre cas ici il à additioné $a 4 fois et ensuite à multiplié le resultat par 4
    echo "<br>"; 
?>


<!-- 2. Opérateurs de comparaison
Les opérateurs de comparaison comparent des valeurs et retournent un résultat booléen (true ou false). -->

<!-- Exercice 2.1 : Comparaison de valeurs

Crée deux variables $a et $b avec des valeurs numériques.
Vérifie si $a est égal à $b et affiche "Vrai" ou "Faux".
Vérifie si $a est strictement égal à $b (en tenant compte du type) et affiche "Vrai" ou "Faux".
Vérifie si $a est supérieur ou inférieur à $b et affiche le résultat. -->

<?php 

    $a = 4;
    $b = 4;

    if ($a === $b) {
        echo "vrai";
        echo "<br>";
    } else {
        echo "faux";
        echo "<br>";
    }

?>

<!-- Exercice 2.2 : Opérateurs de différence

Crée deux variables $x et $y avec des valeurs numériques.
Compare-les avec != et !== et affiche "Vrai" ou "Faux" selon le cas. -->


<?php 

    $a = "4";
    $b = 4;

    if ($a != $b) {
        echo "vrai !=";
        echo "<br>";
    } else {
        echo "faux !="; // OUTPUT : faux !=
        echo "<br>";
    }

    if ($a !== $b) {
        echo "vrai !=="; // OUTPUT : vrai !==
        echo "<br>";
    } else {
        echo "faux !==";
        echo "<br>";
    }

?>

<!-- 3. Opérateurs logiques
Les opérateurs logiques permettent de combiner plusieurs conditions. -->

<!-- Exercice 3.1 : Utilisation de && et ||

Crée deux variables $a et $b avec des valeurs booléennes.
Utilise l'opérateur && (ET logique) pour vérifier si les deux variables sont vraies.
Utilise l'opérateur || (OU logique) pour vérifier si au moins une des deux variables est vraie.
Utilise l'opérateur ! (NON logique) pour inverser la valeur d'une des variables. -->


<?php 

    $a = 2;
    $b = 4;

    $c = true;
    $d = false;
    $e = false;

    echo $c && $d ? "true" : "false";
    echo "<br>";
    echo $c && $d ? "true" : "false";
    echo "<br>";
    echo $c || $d && $c || $d ? "true" : "false";
    echo "<br>";

?>


<!-- Exercice 3.2 : Combinaison de conditions

Crée trois variables $a, $b et $c avec des valeurs numériques.
Vérifie si $a est supérieur à $b et si $b est inférieur à $c.
Vérifie si $a est supérieur à $b ou si $b est égal à $c.
Vérifie si $a est supérieur à $b et non égal à $c. -->


<?php 

    $a = 2;
    $b = 3;
    $c = 4;

    echo $a > $b && $b < $c ? "true" : "false";
    echo "<br>";
    echo $a > $b  || $b === $c ? "true" : "false"; 
    echo "<br>"; 
    echo $a > $b && !$b ? "true" : "false"; 
    echo "<br>"; 

?>

<!-- 4. Opérateurs d'affectation
Les opérateurs d'affectation permettent de modifier des variables de manière concise. -->

<!-- Exercice 4.1 : Affectation simple

Crée une variable $a et affecte-lui une valeur de ton choix.
Crée une autre variable $b et affecte-lui la même valeur que $a.
Modifie la valeur de $a en lui ajoutant 5 à l'aide de l'opérateur +=, puis affiche la valeur de $a. -->

<?php 

    $a = 2;
    $b = $a;

    $a += 5;

    echo " la valeur de a : " . $a;
    echo "<br>";
    echo " la valeur de b : " . $b;

    echo "<br>"

?>

<!-- Exercice 4.2 : Opérateurs d'affectation combinée

Crée une variable $a initialisée à 10.
Ajoute 5 à $a avec += et affiche la nouvelle valeur de $a.
Multiplie $a par 2 avec *= et affiche la nouvelle valeur de $a.
Divise $a par 4 avec /= et affiche la nouvelle valeur de $a.
Bonus : Combinaison des opérateurs -->

<?php 

    $a = 10;
    $b = $a += 5;

    echo $b;
    echo "<br>";
    $c = $a *= 2;
    echo $a;
    echo "<br>";
    $d = $a /= 4;
    echo $d; 
    echo "<br>";
?>

<!-- Exercice 5.1 : Calcul d'un salaire Imaginons que tu calcules un salaire brut après des ajustements.

Crée une variable $salaire_brut initialisée à 2000.
Ajoute un bonus de 300 avec +=.
Soustrais 150 de primes non versées avec -=.
Multiplie le salaire par un facteur d'augmentation de 1.1 (avec *=).
Divise le salaire par 2 pour calculer le salaire net avec /=.
Affiche le salaire net à la fin. -->

<?php 
    // initialise 2000
    $salaire_brut = 2000;

    //Ajoute 300
    $salaire_brut += 300;

    // 150
    $salaire_brut -= 150;

    // Multiplie par 1.1
    $salaire_brut *= 1.1;
    
    // Divise par 2
    $salaire_brut /= 2;

    echo "le net " . $salaire_brut

?>
    
</body>
</html>