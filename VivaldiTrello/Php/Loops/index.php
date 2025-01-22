<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>

<style>

    input {
        width: 400px;
        border-radius: 5px;
        border: none;
        height: 50px;
    }
</style>

<!-- 🔥 Exercice 1 : Compter de 1 à 10 (for loop)
Utilise une boucle for pour afficher les nombres de 1 à 10.

Bonus : Affiche seulement les nombres pairs. -->

<?php 

for ($x = 0; $x <= 10; $x++) {
    // echo ($x + 1);
    echo $x . "<br>";
}

?>

<!-- 🔥 Exercice 2 : Calcul de la somme des nombres (for loop)
Écris une boucle for qui calcule la somme des nombres de 1 à 100 et affiche le résultat. -->

<?php 
    for ($x = 0; $x <= 100; $x++) { 
        
        $resultat = 0;
        $resultat += $x;
        echo $resultat;
    }
?>

<!-- 🔥 Exercice 3 : Boucle descendante (while loop)
Utilise une boucle while pour afficher les nombres de 10 à 1.

Bonus : Arrête la boucle lorsqu'elle atteint 5 et affiche un message "Interruption". -->

<?php 

    $i = 10;

    while ($i >= 1) {
        echo $i;
        $i--;
        echo "<br>";
    }

?>

<!-- 🔥 Exercice 4 : Trouver le premier multiple (while loop)
Crée une boucle while qui trouve et affiche le premier multiple de 7 supérieur à 50. -->

<?php 

    $i = 50;

    while ($i % 7 != 0) {
        $i++;
    }

    echo $i;
?>


<!-- 🔥 Exercice 5 : Mot de passe (do...while loop)
Crée un script qui demande un mot de passe à l'utilisateur via un formulaire HTML. Continue de demander le mot de passe tant qu'il n'est pas correct.

Indice : Utilise une boucle do...while pour que le message apparaisse au moins une fois. -->
<style>
    body {
        background-color : darkgreen;
    }
</style>

<form method="post" action="">
    <input type="text" name="var5" placeholder="Entrez le mot de passe">
    <input type="submit" value="Valider">
</form>

<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $var51 = $_POST["var5"];
    $var52 = 123;

    // Vérifie si le mot de passe est correct
    if ($var51 === strval(value: $var52)) {
        echo "ACCES AUTORISE";
    } else {
        echo "Ressaye";
    }
    
}

?>


<!-- 🔥 Exercice 6 : Compter les voyelles (for loop)
Demande une phrase à l'utilisateur et utilise une boucle for pour compter le nombre de voyelles dans la phrase.

Bonus : Affiche le nombre de chaque voyelle (a, e, i, o, u). -->

<form method="post">

    <input type="text" name="var6" placeholder="Entre un mot pour connaitres ses nombres de voyelles">
    <input type="submit" value="Valide">

</form>

<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $var6 = $_POST["var6"];

    // Initialisation des compteurs pour chaque voyelle
    $aCount = 0;
    $eCount = 0;
    $iCount = 0;
    $oCount = 0;
    $uCount = 0;

    $var6 = strtoLower(string: $var6);

    for ($i = 0; $i < strlen(string: $var6); $i++) {

        $char = $var6[$i];

        if ($char === 'a') {
            $aCount++;
        } elseif ($char === 'e') {
            $eCount++;
        } elseif ($char === 'i') {
            $iCount++;
        } elseif ($char === 'o') {
            $oCount++;
        } elseif ($char === 'u') {
            $uCount++;
        }
    }
    
}

     // Afficher les résultats
     echo "<p>Nombre de voyelles 'a' : $aCount</p>";
     echo "<p>Nombre de voyelles 'e' : $eCount</p>";
     echo "<p>Nombre de voyelles 'i' : $iCount</p>";
     echo "<p>Nombre de voyelles 'o' : $oCount</p>";
     echo "<p>Nombre de voyelles 'u' : $uCount</p>";

?>

<!-- 🔥 Exercice 7 : Générateur de table de multiplication (for loop)
Demande un nombre à l'utilisateur et affiche sa table de multiplication jusqu'à 10.

Exemple :

2 x 1 = 2
2 x 2 = 4
...
2 x 10 = 20 -->

<form action="" method="post">
    <input type="text" name="var7" placeholder="Entre un nombres">
</form>

<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $var7 = $_POST["var7"];

    for ($i = 0; $i <= 10 ; $i++) {
        
        echo $var7 . " x " . $i . " = " . ($var7 * $i) . "<br>";
    }
    
}

?>

<!-- 🔥 Exercice 8 : Éliminer les doublons (while loop)
Crée un tableau avec des valeurs en double. Utilise une boucle while pour supprimer les doublons et affiche le tableau final. -->


<form action="" method="POST">
    <input type="submit" value="Afficher le tableau sans doublons">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Tableau avec doublons
    $arr = [1, 2, 3, 4, 2, 5, 3, 6, 7, 1, 8];
    
    // Tableau sans doublons
    $uniqueArr = [];
    
    // Compteur pour la boucle while
    $i = 0;
    
    // Boucle while pour supprimer les doublons
    while ($i < count($arr)) {
        if (!in_array($arr[$i], $uniqueArr)) {
            $uniqueArr[] = $arr[$i];
        }
        $i++;
    }

    // Affichage du tableau sans doublons
    echo "Tableau sans doublons : ";
    print_r($uniqueArr);
}

?>



<!-- 🔥 Exercice 9 : Jeu "Plus ou Moins" (do...while loop)
Crée un jeu où l'utilisateur doit deviner un nombre secret entre 1 et 100. Utilise une boucle do...while pour continuer à demander des valeurs tant que l'utilisateur n'a pas trouvé le bon nombre.

Bonus : Affiche des messages "Plus" ou "Moins" selon la saisie. -->

<form method="POST">
    <input type="number" name="guess" placeholder="Devine le nombre entre 1 et 100">
    <input type="submit" value="Valider">
</form>

<?php
session_start(); // Démarre la session pour conserver le nombre secret

// Si le nombre secret n'est pas encore défini, on le génère.
if (!isset($_SESSION['secret_number'])) {
    $_SESSION['secret_number'] = rand(1, 100); // Nombre secret aléatoire entre 1 et 100
}

// Vérification de la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $guess = $_POST['guess']; // Récupère le nombre deviné par l'utilisateur
    $secret_number = $_SESSION['secret_number']; // Récupère le nombre secret

    do {
        if ($guess < $secret_number) {
            echo "C'est plus !<br>";
            // Demande de faire un autre essai, rien ne change
        } elseif ($guess > $secret_number) {
            echo "C'est moins !<br>";
            // Demande de faire un autre essai, rien ne change
        } else {
            echo "Bravo, vous avez trouvé le nombre secret : $secret_number!<br>";
        }
    } while ($guess !== $secret_number); // Continue jusqu'à ce que l'utilisateur devine correctement
}
?>


<!-- 🔥 Exercice 10 : Générer un triangle de nombres (for loop)
Utilise une boucle for pour afficher un triangle de nombres comme suit :

yaml
Copy code
1
12
123
1234
12345 -->


<form method="POST">
    <input type="number" name="size" placeholder="Entrez la taille du triangle (par exemple, 5)">
    <input type="submit" value="Valider">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $size = $_POST['size']; // Récupère la taille du triangle

    for ($i = 1; $i <= $size; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j; // Affiche les nombres
        }
        echo "<br>"; // Passe à la ligne suivante pour le prochain niveau du triangle
    }
}
?>


</body>
</html>