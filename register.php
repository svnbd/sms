<?php
include("config/database.php");

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $role = $_POST['role'];
    // Validation
    if (empty($name)) {
        $errors[] = "Name is required";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email required";
    }

    if (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters";
    }

    if ($password !== $cpassword) {
        $errors[] = "Passwords do not match";
    }

    // email duplicate check
    $sql = "SELECT * FROM register WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Database Query Failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0) {
        $errors[] = "Email already exists";
    }
    // If no errors, insert into database
    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $created_at = date("Y-m-d H:i:s");

        $insert_query = "INSERT INTO register (name, email, password, created_at, role) VALUES ('$name', '$email', '$hashed_password', '$created_at', '$role')";
        if (mysqli_query($conn, $insert_query)) {
            header("Location: login.php");
            exit();
        } else {
            $errors[] = "Database error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        body { font-family: Arial; background:#f4f4f4; }
        .container { width:400px; margin:50px auto; background:white; padding:20px; border-radius:8px; }
        input { width:100%; padding:10px; margin:8px 0; }
        button { width:100%; padding:10px; background:#007bff; color:white; border:none; }
        .error { color:red; }
    </style>
</head>
<body>

<div class="container">
    <h2>Admin Registration</h2>

    <?php
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p class='error'>$error</p>";
        }
    }
    ?>

    <form method="POST">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="cpassword" placeholder="Confirm Password" required>
    

        <br><br>
        <button type="submit">Register</button>
    </form>
</div>

</body>
</html>

