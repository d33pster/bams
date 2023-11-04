<?php
    session_start();

    if(!(isset($_SESSION["login"]) && $_SESSION["login"] == "OK")) {
        header("Location: login.php");
    }
    else {
        header("Location: index_loggedin.html");
    }
?>