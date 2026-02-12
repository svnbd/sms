<?php
session_start();
//if(!isset($_SESSION['user_id'])){
  //  header("Location: login.php");
    //exit;
//}

// Logged-in user info
//$username = $_SESSION['user_id'];

include("config/database.php");
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $department= mysqli_real_escape_string($conn, $_POST['department']);
    $created_at = date("Y-m-d H:i:s");
    $updated_at = date("Y-m-d H:i:s");
    $status = isset($_POST['status']) ? $_POST['status'] : 1;


    // SQL Insert Query
    $sql = "INSERT INTO add_student (name, email, phone, department, created_at, updated_at, status) VALUES ('$name','$email','$phone','$department','$created_at','$updated_at', 1)";
    if(mysqli_query($conn, $sql)){
         // সেভ হলে dashboard.php বা student list page এ redirect
        header("Location: dashboard.php");
    } else {
        echo "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
    }

}
?>

<form method="POST">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Admission Student</h4>
                </div>
                <!-- Error Message -->
    
                <div class="card-body">
                    <form method="POST" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter student name" required>
                            <div class="invalid-feedback">Please enter student name.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                            <div class="invalid-feedback">Please enter a valid email.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Enter phone number">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Department</label>
                            <input type="text" name="department" class="form-control" placeholder="Enter department">
                        </div>
                        <div class="mb-3">
                            <label class="form-label"> created_at</label>
                            <input type="datetime-local" name="created_at" class="form-control" value="<?php echo date('Y-m-d\TH:i'); ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label"> updated_at</label>
                            <input type="datetime-local" name="updated_at" class="form-control" value="<?php echo date('Y-m-d\TH:i'); ?>">
                        </div>
                       
                        <button type="submit" name="submit" class="btn btn-success">Admission</button>
                        <a href="index.php" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap 5 JS Bundle -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Client-side Validation -->
<script>
(function () {
  'use strict'
  var forms = document.querySelectorAll('.needs-validation')
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add('was-validated')
    }, false)
  })
})();
</script>
</body>
</html>