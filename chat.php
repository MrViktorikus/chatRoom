<?php

include "db.php";
include "chatFunctions.php";

$messages = getMsg();
            foreach($messages as $msg){
                echo "<strong>" . $msg['sender'] . "<br></strong>";
                echo $msg['message'] . '<br><br>';
             }