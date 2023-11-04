<?php
    session_start();
    $year = (int)$_POST['year'];
    $agg = (int)$_SESSION['aggregate'];
    $total = $year * $agg;
    // database connection
    $conn = new mysqli('localhost', 'root', '', 'bams_');
    if ($conn->connect_error) {
        die('Failed'. $conn->connect_error);
    }
    else{
        $username = $_SESSION['username'];
        // input the loan data to loans table
        $stmt = $conn->prepare("insert into loans(username, loanamount, issuedate, status) values(?, ?, ?, ?)");
        $date = date("Y-m-d");
        $status = "Approved";
        $stmt->bind_param("siss", $username, $total, $date, $status);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        // done for now
        header("Location: index_loggedin.html");
    }
?>