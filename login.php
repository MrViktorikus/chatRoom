<?php
session_start();

include "db.php";

$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

$_SESSION['username'] = NULL;




if (isset($_POST['action'])) {
    if ($_POST["action"] == "Login") {

        $sql = "SELECT username FROM login WHERE username = :username AND password= :password";
        $stmt = $dbm->prepare($sql);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->execute();
        $login = $stmt->fetchAll();

        if ($login != NULL) {
            echo "<br>";
            echo "Logged in as " . $_POST["username"];
            $_SESSION["username"] = $username;
            header("Location: index.php");
        } else {
            echo "<br>";
            echo "You are a failure. Please try again.";
            $_SESSION["username"] = NULL;
        }
        if (($_SESSION['username']) === NULL) {
            
        } else {
            echo "Welcome" . $_POST["username"];
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


