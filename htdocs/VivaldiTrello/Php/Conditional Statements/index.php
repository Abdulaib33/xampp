<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statements</title>
</head>
<body>
<style>
    body {
        background-color: gray;
    }
</style>
<!--🔥 Exercice 1 : Vérification d'âge
 Crée une variable $age et fais une condition qui vérifie si une personne est :

Moins de 18 ans → Affiche : "Tu es mineur."
Entre 18 et 60 ans → Affiche : "Tu es adulte."
Plus de 60 ans → Affiche : "Tu es senior."
👉 Bonus : Si l'âge est négatif ou supérieur à 120, affiche "Âge invalide". -->

<?php 

    $age = 131;

    if($age > 60) {
        echo "Tu es senior";
        echo "<br>";
    } elseif ($age >= 18 && $age <= 60 ) {

        echo "Tu es adulte";
        echo "<br>";

    } elseif ($age < 0 || $age > 120) {
        echo "Age Invalide";
        echo "<br>";
    } else {
        echo "Tu es mineur";
        echo "<br>";
    }

?>

<!-- 🔥 Exercice 2 : Calculateur de réduction
Crée une variable $total qui représente le montant total d'un achat.

Si le montant est supérieur ou égal à 100 euros, applique une réduction de 20%.
Si le montant est entre 50 et 99 euros, applique une réduction de 10%.
Si le montant est inférieur à 50 euros, il n'y a pas de réduction.
Affiche le montant final après réduction.

👉 Bonus : Gère le cas où le montant est négatif avec un message d'erreur. -->

<?php 

    $total = 1200;

    if ($total >= 100) {

        echo ("Réduction de 20% " . ($total - (($total * 20) / 100)));
        echo "<br>";

    } elseif (50 >= $total && $total <= 99) {

        echo ("Réduction de 15% " . ($total - (($total * 15) / 100)));
        echo "<br>";
    } else {

        echo("il n y pas de réduction : " . $total);

    }

?>

<!-- 🔥 Exercice 3 : Pair ou impair
Demande à l'utilisateur de saisir un nombre (via un formulaire HTML) et utilise une condition pour vérifier si le nombre est pair ou impair.

Affiche un message :

"Le nombre est pair" si le reste de la division par 2 est 0.
"Le nombre est impair" sinon. -->

<form method="POST" action="">
    <input type="text" name="Abdoulaye">
</form>

<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = $_POST["Abdoulaye"];

//    echo $prenom % 2 === 0 ? "le nombre est pair" : "le nombre est impair";

    if ($prenom % 2 === 0) {
        echo "le nombre est pair";
        echo "<br>";
    }else {
        echo "le nombre est impair";
        echo "<br>";
    }
}


?>


<!-- 🔥 Exercice 4 : Connexion utilisateur
Crée deux variables $username et $password.

Si le nom d'utilisateur est "admin" et le mot de passe est "12345", affiche : "Connexion réussie".
Sinon, affiche : "Nom d'utilisateur ou mot de passe incorrect".
👉 Bonus : Ajoute une vérification pour voir si le mot de passe fait au moins 5 caractères. -->

<?php 

    $username = "admin";
    $password = 12345;

    if ($username === "admin" && $password === 12345) {
        echo "Connexion réussie";
        echo "<br>";
    } else {
        echo "Nom d'utilisteur ou mot de passe incorrect";
        echo "<br>";
    }

?>

<!-- 🔥 Exercice 5 : Système de notes
Crée une variable $note qui contient une note sur 20.

18 à 20 → Affiche : "Excellent".
14 à 17 → Affiche : "Très bien".
10 à 13 → Affiche : "Bien".
5 à 9 → Affiche : "Passable".
0 à 4 → Affiche : "Échec". -->

<?php 

    $note = 20;

    if ($note >= 18 ) {

        echo "Execellent";
        echo "<br>";

    } elseif ($note <= 17 && 14 >= $note ) {

        echo "Très bien";
        echo "<br>";

    } elseif ($note <= 13 && $note >= 10) {

        echo "Bien";
        echo "<br>";

    } elseif ($note <= 9 && $note >= 5) {

        echo "Passable";
        echo "<br>";

    } else {

        echo "Echec";
        echo "<br>";

    }

?>

<!-- 🔥 Exercice 6 : Devine le nombre (switch case)
Crée une variable $nombre_secret contenant un nombre aléatoire entre 1 et 5 (utilise rand(1, 5)).

Demande à l'utilisateur de deviner le nombre via un formulaire HTML. Utilise un switch case pour comparer la saisie de l'utilisateur au nombre secret.

Si la saisie est correcte, affiche : "Bravo, tu as deviné !".
Sinon, affiche : "Dommage, essaie encore.". -->

<form method="POST" action=""> 

    <input type="text" name="Exercice6"></input>

</form>

<?php 

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $devine = $_POST("Exercice6");
    $nombre_secret = rand(1, 5);
    switch ($devine) {
        case 1 === $nombre_secret:
            echo "Bravo tu as deviné";
            echo "<br>";
            break;
        case 2 === $nombre_secret:
            echo "Bravo tu as deviné";
            echo "<br>";
            break;
        case 3 === $nombre_secret : 
            echo "Bravo tu as deviné";
            echo "<br>";
            break;
        case 4 === $nombre_secret :
            echo "Bravo tu as deviné";
            echo "<br>";
            break;
        case 5 === $nombre_secret :
            echo "Bravo tu as deviné";
            echo "<br>";
            break;
        
        default: 
            echo "Dommage, essaie encore";
    }

}

?>

<!-- 🔥 Exercice 7 : Vérification de jour (switch case)
Crée une variable $jour qui contient un jour de la semaine (en anglais, par exemple "Monday").

Utilise un switch case pour afficher un message selon le jour :

"Monday" → "Début de semaine !".
"Friday" → "C'est bientôt le week-end !".
"Saturday" ou "Sunday" → "Bon week-end !".
Pour tous les autres jours, affiche : "Un jour de la semaine". -->


<?php 

    $joursdelasemine = [
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Fri Fri",
        "Saturne",
        "Sun day"
    ];

    $jours7 = "Monday";
    debug_to_console($jours7);
    echo "<script> console.log($jours7) </script>";
    echo "<script>console.log('$jours7');</script>";
    error_log($jours7);
    console_log($jours7);

    switch ($jours7) {
        case $joursdelasemine[0] :
            echo "Début de là semaine";
            break;
        case $joursdelasemine[1]:
            echo "un jour de la semaine";
            break;
        case $joursdelasemine[2]:
            echo "un jour de la semaine";
            break;
        case $joursdelasemine[3]:
            echo "un jour de la semaine";
            break;
        case $joursdelasemine[4]:
            echo "C'est bientôt le week-end";
            break;
        case $joursdelasemine[5]:
            echo "Bon week-end";
            break;
        case $joursdelasemine[6]:
            echo "Bon week-end";
            break;

        default:
            echo "erreur";
            
    }

?>


<!-- 🔥 Exercice 8 : Système de feu de circulation
Crée une variable $feu qui contient une des trois valeurs : "rouge", "orange", ou "vert".

Utilise une condition if...else pour afficher les messages suivants :

"rouge" → "Arrête-toi".
"orange" → "Prépare-toi".
"vert" → "Vas-y".
👉 Bonus : Gère le cas où la valeur de $feu n'est pas valide avec un message d'erreur. -->


<?php 

    $feu = strtolower("vert");
    
    if ($feu === "rouge") {
        echo "Arrête-toi";
        echo "<br>";
    } elseif($feu === "orange") {

        echo "Prépare-toi";
        echo "<br>";

    } elseif($feu === "vert") {

        echo "Vas-y";
        echo "<br>"

    } elseif(!$feu) {

        echo "Entrez les trois couleurs en minuscule" . "rouge," . "orange," . "vert";
        echo "<br>";

    } else {    

        echo "réessaie";
        echo "<br>";

    }

?>


<!-- 🔥 Exercice 9 : Calculateur de frais de livraison
Crée une variable $distance qui contient la distance d'une livraison en kilomètres.

Si la distance est inférieure à 5 km, les frais de livraison sont de 2 euros.
Si la distance est entre 5 et 20 km, les frais sont de 5 euros.
Si la distance est supérieure à 20 km, les frais sont de 10 euros.
Affiche le montant des frais de livraison. -->

$distance
<?php 

    $distance = 35;

    if ($distance < 5) {

        echo "2euro de frais de livraison";
        echo "<br>";

    } elseif($distance >= 5 && $distance <= 20 ) {

        echo "5euro de frais de livraison";
        echo "<br>";

    } elseif($distance > 20) {

        echo "10euro de frais de livraison";
        echo "<br>";

    } else {
        echo "Erreur, entrez une lettres valide ";
        echo "<br>";
    }

?>


<!-- 🔥 Exercice 10 : Jeu pierre-papier-ciseaux
Demande à l'utilisateur de choisir entre "pierre", "papier" ou "ciseaux".

Utilise une fonction PHP pour comparer le choix de l'utilisateur à un choix aléatoire de l'ordinateur (utilise rand() pour cela).

Affiche le résultat :

"Égalité" si les deux choix sont identiques.
"Tu gagnes !" si l'utilisateur gagne.
"Tu perds !" si l'ordinateur gagne. -->


    
</body>
</html>