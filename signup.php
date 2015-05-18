<?php
session_start();

$_SESSION['username'] = NULL;
include "db.php";

$existingUsers = "SELECT username FROM login";

$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if (isset($_POST['action'])) {
    if ($_POST['action'] == 'Sign Up') {
            if ($_POST['rePassword'] === $_POST['password']) {

                $sign_up = "INSERT INTO login(username, password, email) VALUES ('" . $_POST['username'] . "', '" . $_POST['password'] . "','" . $_POST['email'] . "')";
                $stmt = $dbm->prepare($sign_up);
                $stmt->bindParam(':username', $username);
                $stmt->bindParam(':password', $password);
                $stmt->bindParam(':email', $email);
                $stmt->execute();

                $sql = "SELECT username FROM login WHERE username = :username AND password = :password";
                $stmt = $dbm->prepare($sql);
                $stmt->bindParam(':username', $username);
                $stmt->execute();
                $login = $stmt->fetchAll();

                header('Location: index.php');
            } else {
                echo "Passwords did not match";
            }
        } 
    }

?>

<html>
    <head>
        <title>Signup</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>

        <form method="POST">
            <h3>Username:</h3>
            <input name="username" type="text" placeholder="Username" required><br>
            <h3> Email:</h3>
            <input name="email" type="email" placeholder="Email" required>
            <h3>Password:</h3>
            <input name="password" type="password" placeholder="Password" required><br>
            <h3>Re-enter Password</h3>
            <input name="rePassword" type="password" placeholder="Password" required><br><br>
            <input name="action" type="submit" action="action" value="Sign Up">
        </form>
        <div></div>
    </body>
</html>