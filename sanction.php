<?php
    session_start();
    if (isset($_SESSION["aggregate"])) {
        $agg = $_SESSION["aggregate"];
        echo "<center><h3>Congrats! Loan Eligibility: $agg per year.</h3></center><br>";
        echo "<center><form method='post' action='approve.php'><label>Enter Years: </label><input type='text' name='year'><br><input type='submit'></form></center>";
    }else{
        header("Location: loan.php");
    }
?>