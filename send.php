<?php

include "db.php";
include "chatFunctions.php";

if(isset($_GET['sender']) && !empty($_GET['sender'])){
    $sender = $_GET['sender'];
    
    if(isset($_GET['message']) && !empty($_GET['message'])){
        $message = $_GET['message'];
        
        if(sendMsg($sender, $message)){
            echo "Message sent";
        }else{
            echo "Message wasn't sent";
        }
        
    }else{
        echo "No message";
    }
}else{
    echo "No name";
}