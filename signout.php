<?php

session_start();

if(isset($_POST['action'])){
    if($_POST['action'] == 'Sign Out'){
        session_unset();
        session_destroy();
        $msgSignOut = "Successfully logged out";
        header("Location: enterChat.php");
    }
}
