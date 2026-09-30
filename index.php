<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Student Marks Management System</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<style>

body{
    background: linear-gradient(135deg,#667eea,#764ba2);
    min-height:100vh;
}

.navbar{
    box-shadow:0 5px 15px rgba(0,0,0,.2);
}

.hero{
    margin-top:50px;
}

.card{
    border:none;
    border-radius:20px;
    transition:.4s;
}

.card:hover{
    transform:translateY(-10px);
    box-shadow:0 15px 35px rgba(0,0,0,.3);
}

.feature-icon{
    font-size:45px;
}

.btn{
    border-radius:30px;
}

footer{
    color:white;
    margin-top:50px;
}

</style>

</head>

<body>

<!-- Navigation -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">

<a class="navbar-brand fw-bold" href="#">
<i class="bi bi-mortarboard-fill"></i>
Student Marks System
</a>

</div>

</nav>

<!-- Welcome -->

<div class="container hero">

<div class="row">

<div class="col-lg-12">

<div class="card shadow-lg">

<div class="card-body text-center">

<h1 class="text-primary">
Student Marks Management System
</h1>

<p class="lead">
Manage students, calculate grades automatically, and generate reports with ease.
</p>

<a href="add_student.php" class="btn btn-success btn-lg">
<i class="bi bi-person-plus-fill"></i>
Add Student
</a>

<a href="view_students.php" class="btn btn-primary btn-lg">
<i class="bi bi-table"></i>
View Students
</a>

</div>

</div>

</div>

</div>

<!-- Features -->

<div class="row mt-5">

<div class="col-md-4">

<div class="card text-center p-4">

<div class="feature-icon text-primary">
<i class="bi bi-pencil-square"></i>
</div>

<h4>Add Marks</h4>

<p>Enter students' marks quickly and securely.</p>

</div>

</div>

<div class="col-md-4">

<div class="card text-center p-4">

<div class="feature-icon text-success">
<i class="bi bi-graph-up-arrow"></i>
</div>

<h4>Automatic Grades</h4>

<p>Total, average, grade and remarks are calculated automatically.</p>

</div>

</div>

<div class="col-md-4">

<div class="card text-center p-4">

<div class="feature-icon text-danger">
<i class="bi bi-table"></i>
</div>

<h4>Student Records</h4>

<p>View, edit and delete student records anytime.</p>

</div>

</div>

</div>

<!-- Footer -->

<footer class="text-center">

<hr class="text-white">

<p>

© 2026 Student Marks Management System

<br>

Developed by <strong>Your Name</strong>

</p>

</footer>

</div>

</body>
</html>