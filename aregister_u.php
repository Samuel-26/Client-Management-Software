
<?php
require 'connection.php';

session_start();
if (!isset($_SESSION["userID"])) {
    header("Location: admin.login.php");
}

if (isset($_POST["input-submit"])) {
    $st = $_POST["sta"];
   
    // Assuming you have a ticket ID stored in $_POST["ticket_id"], modify this accordingly
    $ticket_id = $_POST["t_id"];

    // Update query with a WHERE clause to specify the ticket ID
    $sql = "UPDATE supportticketes SET status='$st' WHERE ticket_id='$ticket_id'";

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

