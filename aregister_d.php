<?php
require 'connection.php';

session_start();
if (!isset($_SESSION["userID"])) {
    header("Location: admin.login.php");
}

if (isset($_POST["input-submit"])) {
    $dssn = $_POST["dssn"];
    $n = $_POST["service"];
    $p = $_POST["des"];

   // $date = $_POST["date"];
    $price = $_POST["pri"];


    $sql = "INSERT INTO services (service_id, name, description, price)
            VALUES ('$dssn', '$n', '$p', '$price')";

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
