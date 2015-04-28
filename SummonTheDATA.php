<?php
$sql = "SELECT * FROM chat";
    $stmt = $dbm->prepare($sql);
    $stmt->execute();
