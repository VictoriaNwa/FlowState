<?php
session_start();
require 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form id="registerForm" action="register.php" method="post">
            <input type="text" name="username" id="username" class="inputs"><br>
            <input type="text" name="email" id="email" class="inputs"><br>
            <input type="text" name="phoneNumber" id="phoneNumber" class="inputs"><br>
            <input type="password" name="password" id="password" class="inputs"><br>
            <input type="submit" name="submit" id="submit" value="Sign Up">
            <div class="registerErrors"></div>
        </form>
    </body>
</html>

<?php 
    if($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = trim($_POST["username"]);
        $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
        $phoneNumber = preg_replace('/\D/', '', $_POST["phoneNumber"]);
        $password = $_POST["password"];

        if(strlen($username) < 3) {
            echo "Username is not valid.";
        }
        
    }
?>