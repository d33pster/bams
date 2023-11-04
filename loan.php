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
            echo "<center><h3>Salary: $salary</h3></center>";
            echo "";
        }else{
            echo "<script>alert('Database Entry Failed!')</script>";
            header("Location: appnow.php");
        }
    }
?>