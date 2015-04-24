<?php

var_dump($dbm);
function getMsg() {
    $sql = "SELECT * FROM chat";
    $stmt = $dbm->prepare($sql);
    $stmt->execute();
    $messages = $stmt->fetchAll();
    var_dump($messages);

    return $messages;
    
    //    $run = mysql_query($sql);
//    $messages = array();
//    while($msg = mysql_fetch_assoc($run)){
//    $messages[] = array('sender'=>$message['sender'], 'message'=>$message['Message']);
//    return $messages
    
    
}

function sendMsg($sender, $msg) {

    if (!empty($sender) && !empty($msg)) {
//        $sender = mysql_real_escape_string($sender);
        $sender = $dbm->quote($sender);
//        $msg = mysql_real_escape_string($msg);
        $msg = $dbm->quote($msg);

        $sql = "INSERT INTO chat(sender, message) VALUES('{$sender}', '$msg')";

        if ($run == $dbm->query($sql)) {

            return true;
        } else {

            return false;
        }
    } else {
        return false;
    }
}
