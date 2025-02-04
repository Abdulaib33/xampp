<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 
        $exercice9 = [
            ["Nom" => "Abdoulaye", "Age" => 21, "Ville" => "Liège"],
            ["Nom" => "Ibrahima", "Age" => 22, "Ville" => "Liège"],
            ["Nom" => "Moussa", "Age" => 23, "Ville" => "Liège"],
            ["Nom" => "COUCOUCOU", "Age" => 24, "Ville" => "Liège"],
            ["Nom" => "Aminata", "Age" => 25, "Ville" => "Liège"]
        ];

        foreach ($exercice9 as $x => $y) {   // I PREFER THIS ONE, IT'S SHORT BUT WAIT, THE OTHER ONE IS BETTER BECAUSE WE DONT HAVE TO CONCATENATE for exemple ["Nom"], ["Age"], ["Ville"] etc etc...
            echo $x . " : " . $y['Nom'] . " : " .  $y['Age'] . " : " . $y['Ville'] . "<br>";
        }

        foreach ($exercice9 as $phase1) {  // I PREFER THIS ONE IT'S NOT THAT SHORT, BUT WE DONT NEED TO CONCATENATE for exemple ["Nom"], ["Age"], ["Ville"] etc etc, I PREFER THIS ONE FOR SIMPLICITY AND EFFICACITY and IT'S LESS COMPLEX at THE SYNTAX
            foreach ($phase1 as $phaseFinal => $phaseFinal2) {
                echo $phaseFinal . " => " . $phaseFinal2 . "<br>";
            }
        }

?>
</body>
</html>