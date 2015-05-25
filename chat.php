<?php

include "db.php";
include "chatFunctions.php";

$messages = getMsg();
foreach ($messages as $msg) {
    echo "<div id='senderName'>";
    echo "" . $msg['sender'] . "<br>";
    echo "</div>";
    echo $msg['message'] . '<br><br>';
}