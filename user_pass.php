<?php
require 'connection.php';
session_start();

if (isset($_SESSION["userID"])) {
    header("Location: aregister.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input fields
    if (empty($_POST["userID"]) || empty($_POST["email"]) || empty($_POST["npass"]) || empty($_POST["cpass"])) {
        header("Location: user_pass.php?error=emptyfields");
        exit();
    } else {
        $userID = $_POST["userID"];
        $email = $_POST["email"];
        $newPassword = $_POST["npass"];
        $confirmPassword = $_POST["cpass"];

        // Check if new password matches confirm password
        if ($newPassword !== $confirmPassword) {
            header("Location: user_pass.php?error=passwordmismatch");
            exit();
        } else {
            // Check if the email exists in the database
            $sql = "SELECT * FROM user WHERE u_id=? AND email=?";
            $stmt = $conn->prepare($sql);
            if (!$stmt) {
                header("Location: user_pass.php?error=sqlerror");
                exit();
            } else {
                $stmt->bind_param("is", $userID, $email); // Changed "ss" to "is"
                $stmt->execute();
                $result = $stmt->get_result();
                if ($row = $result->fetch_assoc()) {
                    // Update password in the database
                    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                    $updateSql = "UPDATE user_login SET password=? WHERE u_id=?";
                    $updateStmt = $conn->prepare($updateSql);
                    if (!$updateStmt) {
                        header("Location: user_pass.php?error=sqlerror");
                        exit();
                    } else {
                        $updateStmt->bind_param("si", $hashedPassword, $row['u_id']);
                        $updateStmt->execute();
                        if ($updateStmt->affected_rows > 0) {
                            header("Location: user_pass.php?update=success");
                            exit();
                        } else {
                            header("Location: user_pass.php?error=updatefailed");
                            exit();
                        }
                    }
                } else {
                    // If no user found with provided details
                    header("Location: user_pass.php?error=nouser");
                    exit();
                }
            }
        }
    }
} else {
    header("Location: user_pass.php");
    exit();
}
?>
