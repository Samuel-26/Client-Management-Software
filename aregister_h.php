<?php
require 'connection.php';

session_start();
if (!isset($_SESSION["userID"])) {
    header("Location: admin.login.php");
}

if (isset($_POST["input-submit"])) {
    $cid = $_POST["c_id"];
    $p = $_POST["pid"];
    $na = $_POST["pn"];
    $sta = $_POST["st"];
    $newdate = date_create($_POST["sdate"]);
    $sd = date_format($newdate, "Y-m-d");
    $newdate = date_create($_POST["edate"]);
    $ed = date_format($newdate, "Y-m-d");


    $sql = "INSERT INTO projects(c_id, p_id,p_name,status,start_date, end_date)
     VALUES ('$cid', '$p', '$na', '$sta', '$sd','$ed')";

    $is_inserted = mysqli_query($conn, $sql);


    if ($is_inserted) {
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
