<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    
    <h1>HOME PAGE</h1>


    <?php 

        echo "Your Mail is : " . $_SESSION["email"];

        echo "<br>";
        // JUST A RADOM TEST GO CHECK THE login.php session
        echo "Your password is : " . $_SESSION["password"];
        echo "<br>";

    ?>  


    <a href="logout.php">Logout</a>





    <style>

        body {
            background-color: aquamarine;
        }

        h1 {
            text-align: center;
        }

    </style>


</body>
</html>