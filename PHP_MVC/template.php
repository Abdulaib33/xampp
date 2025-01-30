<?php 
/*
    ./template.php 
    Le template reprend le code HTML complet du site
    avec des zones dynamiques dont le contenu va être modifié
    au cours de la navigation

*/


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon beau site</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>

<style>
    body {
        background-color: darkslategray;
        color: wheat;
    }
</style>

    <main class="container">

        <header>
            <h1>Mon beau site</h1>
            <h2>En MVC</h2>
        </header>

        <section>
        <?php echo $content ?>
        </section>

        <footer>
            &copy;IEPS 2018
        </footer>

    </main>
    
</body>
</html>