<?php
    session_start();
    if(!(isset($_SESSION["login"]) && $_SESSION["login"] == "OK")) {
        echo "<script>alert('Please Login');</script>";
        header("Location: login.php");
    }else{
        header("Location: appnow.html");
    }
?>