<?php

function getMsg() {
    global $dbm;
    $sql = "SELECT * FROM chat";
    $stmt = $dbm->prepare($sql);
    $stmt->execute();
    $messages = $stmt->fetchAll();
//    var_dump($messages);
    return $messages;

//    $run = mysql_query($sql);
//    $messages = array();
//    while($msg = mysql_fetch_assoc($run)){
//    $messages[] = array('sender'=>$message['sender'], 'message'=>$message['Message']);
//    return $messages
}

function sendMsg($sender, $msg) {
    global $dbm;
    if (!empty($sender) && !empty($msg)) {

        $sql = "INSERT INTO chat(sender, message) VALUES(:sender, :message)";
        $stmt = $dbm->prepare($sql);
        $stmt->bindParam("sender", $sender);
        $stmt->bindParam("message", $msg);
        $stmt->execute();
    }
}
