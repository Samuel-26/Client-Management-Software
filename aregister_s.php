<?php
require 'connection.php';

session_start();
if (!isset($_SESSION["userID"])) {
    header("Location: admin.login.php");
}

if (isset($_POST["input-submit"])) {
    $sssn = $_POST["sssn"];
    $con = $_POST["coid"];
    $s = $_POST["sid"];
    $newdate = date_create($_POST["sdate"]);
    $sd = date_format($newdate, "Y-m-d");
    $newdate = date_create($_POST["edate"]);
    $ed = date_format($newdate, "Y-m-d");


    // Insert into activity table
    $sql = "INSERT INTO contracts (c_id,contract_id,service_id,start_date,end_date)
            VALUES ('$sssn','$con', '$s','$sd','$ed')";

    $is_inserted = mysqli_query($conn, $sql);

    if ($is_inserted) {
        header("Location: aregister.php?login=success");
        exit();
    } else {
        header("Location: aregister.php?error=wronghid");
        exit();
    }
} else {
    header("Location: aregister.php");
    exit();
}
?>
