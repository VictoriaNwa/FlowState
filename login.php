<?php
session_start();
require 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="login.php" method="post">
            <input type="text" name="username" id="username" class="field"><br>
            <input type="password" name="password" id="password" class="field"><br>
            <input type="submit" id="submit" value="Log In">
        </form>
    </body>
</html>