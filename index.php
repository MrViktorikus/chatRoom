<?php

include "chatCore.php";

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div id="messages">
            <?php
            $messages = getMsg();
            foreach($messages as $msg){
                echo $message['sender'] . 'Sent<br>';
                echo $msg['message'] . '<br><br>';
             }
            ?>
            <form action="index.php" method="POST">
                <label>Enter Name:<input type="text" name="sender"></label>
                <label>Enter Message:<input type="text" name="msg"></label><br>
                
            </form>
        </div>
    </body>
</html>
