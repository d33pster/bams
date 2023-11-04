<?php 
    session_start();

    $username = $_POST['uname'];
    $password = $_POST['pass'];

    // prevent mysql injection
    // $username = stripcslashes($username);
    // $password = stripcslashes($password);
    // $username = mysqli_real_escape_string($conn, $username);
    // $password = mysqli_real_escape_string($conn, $password);

    // database connection.
    $conn = new mysqli('localhost', 'root', '', 'bams_');
    if ($conn->connect_error) {
        die('Failed'. $conn->connect_error);
    }
    else{
        $sql = "select password from users where username=? and password=?;";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows() == 1) {
            $_SESSION["login"] = 'OK';
            $_SESSION['username'] = $username;
            $stmt->close();
            $conn->close();
            header("Location: control.php");
        }
        else{
            $stmt->close();
            $conn->close();
            echo "<script>alert('Username or Password Incorrect')</script>";
            header("Location: login.html");
        }
    }
?>