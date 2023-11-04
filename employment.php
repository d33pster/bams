<?php
    session_start();

    if($_POST["org"] == "Other-Sector") {
        $worktype = $_POST['org'];
        $dept = "Other";
        $post = "Other";
    }
    else{
        $worktype = $_POST['org'];
        $dept = $_POST['dept'];
        $post = $_POST['position'];
    }

    $username = $_SESSION['username'];
    $salary = (int)$_POST['salary'];

    // database connection
    $conn = new mysqli('localhost', 'root', '', 'bams_');
    if ($conn->connect_error) {
        die('Failed'. $conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into user_emp_details(worktype, dept, post, salary, username) values(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssis", $worktype, $dept, $post, $salary, $username);
        $stmt->execute();
        $stmt->close();
        header("Location: loan.php");
    }
?>