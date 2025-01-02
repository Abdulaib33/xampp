<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables and Data Types</title>
</head>
<body>

<!-- 
    Exercice 1 : Les variables
    But : Crée une variable pour stocker le nom d'un utilisateur et une autre pour stocker son âge.
    Indication : Utilise echo pour afficher le contenu des variables.
-->
    <?php 
        $name = "Abdoulaye";
        $age = 21;
        echo "<p>Je m'appelle $name et j'ai $age</p>";
    ?>
    

    <?php 

            // String
            $texte = "Bonjour, PHP !";

            // Integer
            $nombreEntier = 42;

            // Float
            $nombreDecimal = 3.14;

            // Boolean
            $estVrai = true;

            // Array
            $liste = array("Pomme", "Banane", "Orange");
            // OU(recommandé)
            $liste = ["Pomme", "Banane", "Orange"];

            // Null
            $aucuneValeur = null;

    ?>


    <!-- 
        Exercice 1 : Afficher différents types de données
        But : Crée un script PHP qui utilise chaque type de données et les affiche avec echo.
        Indication :
        Affiche une string, un integer, un float, un boolean, un array, et une valeur null.
    -->

    <?php 
        $string = "Abdoulaye";
        echo $string;

        $nombre21 = 21;
        echo $nombre21;

        $nombreDecimal21 = 2.1;
        echo $nombreDecimal21;

        $booleanTrue = true;
        echo $booleanTrue;
        
        $booleanFalse = false;
        echo $booleanFalse;

        $fruits = ["Pomme", "Orange", "Kiwi", "Crocodile"];
        echo $fruits[1];
        echo "<br>";
        print_r($fruits);
        echo "<br>";
        var_dump($fruits);

        $grosNoob = null;
    ?>


<!-- 
    Exercice 2 : Manipuler les Strings
    But : Crée deux variables de type string et concatène-les pour afficher une phrase.
    Indication : Utilise l’opérateur . pour la concaténation.
-->

<?php 
    $premierPhrase = "Abdulaib33 est le";
    $deuxiemPhrase = " meilleur joueur Roblox de tout le temps ";
    $troisiemPhrase = " et bientot il sera aussi le meilleur developpeur";
    $quatriemePhrase = " Web et Roblox InchAllah";

    echo "<br>";
    echo $premierPhrase . $deuxiemPhrase . $troisiemPhrase . $quatriemePhrase;
?>


<!-- 
    Exercice 3 : Additionner des nombres
    But : Crée deux variables (un integer et un float), additionne-les et affiche le résultat.
    Indication : Stocke le résultat dans une nouvelle variable.
-->

    <?php 
        $premierInteger = 10;
        $premierFloat = 2.1;
        echo "<br>";
        echo $premierInteger + $premierFloat;
    ?>


<!-- 
Exercice 4 : Tester un Boolean
But : Crée une variable boolean et utilise une condition if pour afficher "C'est vrai !" si elle est vraie, et "C'est faux !" si elle est fausse.
Indication : Utilise true ou false dans la variable. 
-->


<?php 

$exerices4 = true;

if ($exerices4 === true) {
    echo "C'est vrai !";
} else {
    echo "C'est faux !";
}



?>


<!-- 
Exercice 5 : Afficher un tableau
But : Crée un tableau contenant 3 éléments (par exemple, des noms de fruits) et affiche chaque élément.
Indication : Utilise la boucle foreach. 
-->


<?php 

$fruitrsExercices5 = ["Pomme", "Kiwi", "Fraise", "Framboise", "Orange", "Fruits de là passion", "raisin"];

echo "<br>";
foreach($fruitrsExercices5 as $x) {
    echo "$x <br>";
}

// for ($x = 0; $x < $fruitrsExercices5; $x++) {
//     echo $x;
// }

?>


<!-- 
Exercice 6 : Tester une valeur Null
But : Crée une variable de type null, vérifie si elle est null avec la fonction is_null() et affiche un message en conséquence.
Indication :
$var = null;
if (is_null($var)) { echo "La variable est null"; }. 
-->

<?php 

$var = null;

if (is_null($var)) {
    echo "La variable est null <br>";
}

?>


<!-- 
Exercice bonus : Identifier les types de données
But : Crée plusieurs variables avec des types différents et utilise la fonction gettype() pour afficher leur type.
Indication :
Exemple de fonction :
php
Copy code
echo gettype($variable); 
-->

<?php 

$varBoolean = true;
$varInterger = 21;
$varInt = 2.1;
$varNull = null;

echo gettype($varBoolean) . "<br>";
echo gettype($varInt) . "<br>";
echo gettype($varInterger) . "<br>";
echo gettype($varNull) . "<br>";

?>

<style>
    body {
        background-color: aqua;
    }
</style>
</body>
</html>