<?php
    session_start();
    $username = $_SESSION["username"];
    $conn = new mysqli('localhost', 'root', '', 'bams_');
    if ($conn->connect_error) {
        die('Failed'. $conn->connect_error);
    }
    else{
        $sql = "select salary from user_emp_details where username='$username';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $salary = $row['salary'];
            $salary = (int)$salary;
            $emi = ($salary *40)/100;
            $aggregate = $emi * 12;
            $_SESSION['aggregate'] = $aggregate;
            $conn->close();
            header('Location: sanction.php');
        }else{
            $conn->close();
            echo "<script>alert('Database Entry Failed!')</script>";
            header("Location: appnow.php");
        }
    }
?>