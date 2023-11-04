<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['uname'];
    $password = $_POST['pass'];
    $email = $_POST['email'];
    if (isset($_POST['atype'])) {
        $atype = $_POST['atype'];
    }
    //$terms = $_POST['terms'];

    //Database Connection.
    $conn = new mysqli('localhost', 'root', '', 'bams_');
    if ($conn->connect_error) {
        die('Failed'. $conn->connect_error);
    }
    else{
        if (isset($_POST['terms'])) {
            $stmt = $conn->prepare("insert into users(username, password) values(?, ?)");
            $stmt->bind_param('ss', $username, $password);
            $stmt->execute();
            $stmt->close();

            $stmt = $conn->prepare('insert into user_details(fname, lname, email, account_type, username) values(?, ?, ?, ?, ?)');
            $stmt->bind_param('sssss', $fname, $lname, $email, $atype, $username);
            $stmt->execute();
            $stmt->close();

            $conn->close();
            header('Location: index.html');
        }
        else{
            echo "<script>alert('Please Check the terms and Conditions');</script>";
            header("Location: signup.html");
        }
    }
?>