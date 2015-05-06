<?php
session_start();

include "db.php";

$sql = "SELECT username FROM login WHERE username = :username AND password= :password";
$stmt = $dbm->prepare($sql);
$stmt->bindParam(":username", $username);
$stmt->bindParam(":password", $password);
$stmt->execute();
$login = $stmt->fetchAll();

$_SESSION['user'] = NULL;

if (isset($_POST['action'])) {
    if ($_POST["action"] == "login") {
        
        if ($login != NULL) {
            echo "<br>";
            echo "Logged in as " . $_POST["user"];
            $_SESSION["user"] = $username;
            header("Location: index.php");
        } else {
            echo "<br>";
            echo "YOu are a failure. Please try again.";
            $_SESSION["user"] = NULL;
        }
        if (($_SESSION['user']) === NULL) {
    echo "Please login";
} else {
    echo "Welcome" . $_POST["user"];
    $loginform;
}
    }
}


?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>

        <form method="POST" action="login.php">
            <h3>Username:</h3>
            <input name="username" type="text" placeholder="Username or Email" required><br><br>
            <h3>Password:</h3>
            <input name="password" type="text" placeholder="Password" required><br><br>
            <input name="action" type="submit" action="action" value="Login">
        </form>
        <div></div>
    </body>
</html>


