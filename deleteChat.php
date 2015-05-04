<?php
include "db.php";
$sql = "DELETE FROM chat";

        $stmt = $dbm->prepare($sql);
        $stmt->execute();

header("Location:index.php");
