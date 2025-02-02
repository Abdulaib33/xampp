<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body class="container">

<style>
        body {
        background-color: darkslategray;
        color: wheat;
        
    }

    * {
        text-decoration: none;
        color: wheat;
    }
</style>

<main class="container">
    
<?php 
    
    if (isset($_GET['laptop']) && $_GET['laptop'] === '1') {

        $content = "

        <img src='https://media.s-bol.com/xrpOZZpAp7MP/G6g89BL/550x338.jpg'> <br>
        <img src='https://media.s-bol.com/3xzzDXy5oNDp/KrmAQxR/550x312.jpg'> <br>
        <img src='https://media.s-bol.com/4yAA03z7pO0J/KrmAQxR/550x344.jpg'>

        ";

    } elseif (isset($_GET['laptop']) && $_GET['laptop'] === '2') {
        
        $content = "

        <img src='https://images.anandtech.com/doci/16422/MSI_NB_GE76%20Raider(Standard)_photo02_678x452.jpg'> <br>
        <img src='https://images.anandtech.com/doci/16422/MSI_NB_GE76%20Raide%20Dragon%20Edition%20Tiamat_photo05_575px.jpg'> <br>
        <img src='https://images.anandtech.com/doci/16422/MSI_NB_GE76%20Raider%28Standard%29_photo01_575px.jpg'>

        ";

    } else {
        $content = "

        <video width='320' height='240' autoplay loop>
            <source src='movie.mp4' type='video/mp4'>
            <source src='movie.ogg' type='video/ogg'>
            Your browser does not support the video tag.
        </video>

        ";
    }

?>


    <?php 
    echo $content;
    echo "Valeur de laptop: " . $_GET['laptop'];
    ?>

</main>

</body>
</html>