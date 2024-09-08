<?php
require 'connection.php';

session_start();
if (!isset($_SESSION["userID"])) {
    header("Location: admin.login.php");
}

if (isset($_POST["input-submit"])) {
    $pssn = $_POST["pssn"];
    $uid = $_SESSION['userID'];
    $fn = $_POST["fname"];
    $adr = $_POST["adr"];
    $cno = $_POST["cno"];
    $mail = $_POST["mail"];
    $newdate = date_create($_POST["dob"]);
    $dob = date_format($newdate, "Y-m-d");
    $pass = $_POST["pass"];

    // Insert into user table
    $sql = "INSERT INTO clients (client_id,name, address, phone, email, reg_date)
            VALUES ('$pssn','$fn', '$adr', '$cno', '$mail', '$dob')";

    $is_inserted = mysqli_query($conn, $sql);

    // Insert into user_login table
    $sqll = "INSERT INTO user_login (u_id, password) VALUES ('$pssn', '$pass')";
    $is_insertedd = mysqli_query($conn, $sqll);

    if ($is_inserted && $is_insertedd) {
        header("Location: aregister.php?login=success");
        exit();
    } else {
        header("Location: aregister.php?error=wronguser");
        exit();
    }
} else {
    header("Location: aregister.php");
    exit();
}
?>
