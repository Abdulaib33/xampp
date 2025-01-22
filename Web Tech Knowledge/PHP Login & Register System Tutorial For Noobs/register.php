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


if (isset($_POST["register"])) {
    
    $name = $_POST["username"];

    $email = $_POST["email"];

    $password = md5(string: $_POST["password"]); // The md5() is to crypt the password

    $checkEmail = "SELECT * FROM users WHERE email = '$email' ";

    $result = $conn->query($checkEmail);

    if($result->num_rows>0) {

        echo "Email Already Exist";

    } else {

        $sql = "INSERT INTO users (name, email, password) VALUE ('$name', '$email', '$password')";

        if ($conn->query(query: $sql) === true) {

            header(header: "location:login.php");

        }

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


        <h2>Register Form</h2>
        <form action="" method="POST">

            <div class="label_deg">
                <label for="">Name</label>
                <input type="text" name="username">
            </div>

            <div class="label_deg">
                <label for="">Email</label>
                <input type="email" name="email">
            </div>

            <div class="label_deg">
                <label for="">Password</label>
                <input type="password" name="password">
            </div>

            <div class="label_deg">
                <input type="submit" name="register" value="register">
            </div>

        </form>
    </div>

</body>
</html>