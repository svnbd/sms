<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit;
}
// Logged-in user info
$username = $_SESSION['user_id'];

include('config/database.php'); // path adjust করো

if(!isset($_GET['id'])){
    die("ID not specified.");
}

// Cast ID to integer to prevent SQL injection
$id = (int)$_GET['id'];

// Optional: check if student exists
$result = mysqli_query($conn, "SELECT * FROM add_student WHERE id=$id");
if(mysqli_num_rows($result) == 0){
    die("Student not found.");
}

// Soft delete
$sql = "UPDATE add_student SET status=0 WHERE id=$id";

if(mysqli_query($conn, $sql)){
    header("Location: dashboard.php");
    exit;
} else {
    echo "Delete failed: " . mysqli_error($conn);
}
?>
