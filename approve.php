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
        // get existing loans if any for the user in user_details table
        $sql = "select loans from users where username='$username';";
        $result = $conn->query($sql);
        if ($result->num_rows == 0) {
            // if no existing loans are present get loan id
            // of the recently inserted loan record
            $sql2 = "select loanid from loans where username='$username';";
            $result2 = $conn->query($sql2);
            $row2 = $result2->fetch_assoc();
            $loanAdd = $row2["loanid"]; // recently inserted loan record

            // insert this record in the user_details table
            $sql3 = "insert into user_details(loans) values('$loanAdd');";
            $conn->query($sql3);
            $conn->close();
            header("Location: index_loggedin.html");
        }else{
            // if existing loans present
            $sql2 = "select loanid from loans where username='$username';";
            $result2 = $conn->query($sql2);
            $row2 = $result2->fetch_assoc();
            $loanAdd = ", " + $row2["loanid"];

            // insert this record in the user_details table
            $sql3 = "update user_details set loans='$loanAdd' where username='$username';";
            $conn->query($sql3);
            $conn->close();
            header("Location: index_loggedin.html");
        }
    }
?>