<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "1_web_tech_knowledge_db";
// servername => localhost
// username => root
// password => empty
// database name => staff

$conn = new mysqli(hostname: $servername, username: $username, password: $password, database: $dbname);

if ($conn->connect_error) {

    echo "Faild connection" . $conn->connect_error; 

} // else {
 //   echo "SUCCESFULLY CONNECTED";
//};

// Check connection
// if (mysqli_connect_error()) { IT'S THE SAME AS THE ONE ABOVE
//     die("Database connection failed: " . mysqli_connect_error());
//   }

if (isset($_POST["login"])) {
    
    $email = $_POST["email"];

    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

    $result = $conn->query(query: $sql);

    if ($result->num_rows>0) {

        session_start();

        $row = $result->fetch_assoc();

        $_SESSION["email"] = $row["email"];

        // JUST A RANDOM TEST, go check the home.php TO SEE THE RESULT 
        $_SESSION["password"] = $row["password"];

        header(header: "location:home.php");

    } else {

        echo "Incorrect Email or Password";

    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

    <style>
        .div_deg {
            margin: auto;
            text-align: center;
            margin-top: 100px;
            background-color: skyblue;
            width: 60%;
        }

        /* .dev_deg h2 {
            background-color: black;
            width: 100%;
            color: white;
        } I HAVE NO IDEA IT'S NOTE WORKING*/
        
        h2 {
            background-color: black;
            width: 100%;
            color: white;
        }

        .label_deg {
            padding: 20px;
        }

        label {
            width: 100px;
            display: inline-block;
            font-size: 17px;
        }
    </style>
    
    <div class="div_deg">


        <h2>Login Form</h2>
        <form action="" method="POST">

            <div class="label_deg">
                <label for="">Email</label>
                <input type="email" name="email">
            </div>

            <div class="label_deg">
                <label for="">Password</label>
                <input type="password" name="password">
            </div>

            <div class="label_deg">
                <input type="submit" name="login" value="login">
            </div>

        </form>
    </div>

</body>
</html>