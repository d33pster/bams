<?php
    //$uname = $_POST("uname");
    //$pass = $_POST("pass");
    $servername = "localhost";
    $username = "root";
    $password = "d1ngd0ng";
    $dbname = "bams_";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection Error". $conn->connect_error);
    }
    echo "Connection Established";
?>