<?php

include "db.php";

include "ChatFunctions.php";

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>*Insert title here*</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link href="style.css" type="text/css" rel="stylesheet">
        
    </head>
    <body>
        
        <div id="messages">
           
            
        </div>
        <div id="feedback"></div>
        <div id="input">
        <form action="#" method="POST" id="formInput">
                <label>Enter Name:<input type="text" name="sender" id="sender"></label>
                <label>Enter Message:<input type="text" name="message" id="message"></label><br><br>
                <input type="submit" name="send" value="Send Message"> 
            </form>
        </div>
        
                <a href ="deleteChat.php">Clear All</a>
                <script type="text/javascript" src="scripts/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="scripts/autoChat.js"></script>
        <script type="text/javascript" src="scripts/send.js"></script>
    </body>
</html>