<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Gallery</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand" href="index.php">Student Management</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="add_student.php">Admission Student</a></li>
        <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
        <li class="nav-item"><a class="nav-link active" href="#">Student Gallery</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <h2 class="text-center mb-4">Student Photo Gallery</h2>

  <div class="row g-4">
    <div class="col-md-4">
      <div class="card shadow-sm">
        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644" class="card-img-top" alt="Student">
        <div class="card-body">
          <h5 class="card-title">Student Activities</h5>
          <p class="card-text">Students participating in classroom learning and collaboration.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card shadow-sm">
        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b" class="card-img-top" alt="Student">
        <div class="card-body">
          <h5 class="card-title">Study Time</h5>
          <p class="card-text">Focused students working on assignments and projects.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card shadow-sm">
        <img src="https://images.unsplash.com/photo-1498079022511-d15614cb1c02" class="card-img-top" alt="Student">
        <div class="card-body">
          <h5 class="card-title">Group Discussion</h5>
          <p class="card-text">Teamwork and group discussion among students.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card shadow-sm">
        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f" class="card-img-top" alt="Student">
        <div class="card-body">
          <h5 class="card-title">Campus Life</h5>
          <p class="card-text">Students enjoying their time on campus.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card shadow-sm">
        <img src="https://images.unsplash.com/photo-1513258496099-48168024aec0" class="card-img-top" alt="Student">
        <div class="card-body">
          <h5 class="card-title">Library Study</h5>
          <p class="card-text">Reading and research activities in the library.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card shadow-sm">
        <img src="https://images.unsplash.com/photo-1532635241-17e820acc59f" class="card-img-top" alt="Student">
        <div class="card-body">
          <h5 class="card-title">Computer Lab</h5>
          <p class="card-text">Students learning technology and programming skills.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<footer>
  <center><p><small>&copy; 2026 Project by Hossan MD SHOVON. All Rights Reserved.</small></p> </center>
</footer>

</body>
</html>
