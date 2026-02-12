<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sms_project";

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_error){
    die("Database connection failed: " . $conn->connect_error);
}
else{
    //echo "Connection successful.";
}
?>