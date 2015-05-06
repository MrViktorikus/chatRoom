<?php
session_start();

include "db.php";
?>

<html>
    <head>
        <title>Signup</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        
        <form method="POST" action="index.php">
            <h3>Username:</h3>
            <input name="username" type="text" placeholder="Username" required><br>
            <h3> Email:</h3>
            <input name="email" type="text" placeholder="Email" required>
            <h3>Password:</h3>
            <input name="password" type="text" placeholder="Password" required><br>
            <h3>Re-enter Password</h3>
            <input name="rePassword" type="text" placeholder="Password" required><br><br>
            <input name="action" type="submit" action="action" value="Signup">
        </form>
        <div></div>
    </body>
</html>