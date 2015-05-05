<?php

function getMsg() {
    global $dbm;
    $sql = "SELECT * FROM chat ORDER BY messageID DESC";
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
//        $sender = mysql_real_escape_string($sender);
//        $sender = $dbm->quote($sender);
//        $msg = mysql_real_escape_string($msg);
//        $msg = $dbm->quote($msg);

        $sql = "INSERT INTO chat(sender, message) VALUES(:sender, :message)";
        $stmt = $dbm->prepare($sql);
        $stmt->bindParam("sender", $sender);
        $stmt->bindParam("message", $msg);
        $stmt->execute();
    }
}
