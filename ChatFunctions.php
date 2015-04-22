<?php

function getMsg() {
    $sql = "SELECT * FROM chat";

    $stmt = $dbm->prepare($sql);
    $stmt->execute();
    $messages = $stmt->fetchAll();
    var_dump($messages);
    return $messages;
}

function sendMsg($sender, $msg) {

    if (!empty($sender) && !empty($msg)) {
        $sender = mysql_real_escape_string($sender);
        $msg = mysql_real_escape_string($msg);

        $sql = "INSERT INTO chat(sender, message) VALUES('{$sender}', '$msg')";

        if ($run == mysql_query($sql)) {

            return true;
        } else {

            return false;
        }
    } else {
        
    }
}
