<?php
include "includes/db.php";

$result = mysqli_query($conn, "SELECT * FROM students ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Students</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<style>
body{
    background: linear-gradient(to right,#4facfe,#00f2fe);
}

.card{
    border-radius:15px;
}

table{
    background:white;
}

h2{
    font-weight:bold;
}
</style>

</head>
<body>

<div class="container mt-5">

<div class="card shadow-lg">

<div class="card-header bg-primary text-white">

<h2><i class="bi bi-table"></i> Student Marks Records</h2>

</div>

<div class="card-body">

<a href="add_student.php" class="btn btn-success mb-3">
<i class="bi bi-plus-circle"></i> Add New Student
</a>

<table class="table table-bordered table-hover table-striped">

<thead class="table-dark">

<tr>

<th>ID</th>
<th>Name</th>
<th>Admission</th>
<th>Course</th>
<th>Gender</th>
<th>Maths</th>
<th>English</th>
<th>Science</th>
<th>ICT</th>
<th>Total</th>
<th>Average</th>
<th>Grade</th>
<th>Remarks</th>
<th>Actions</th>

</tr>

</thead>

<tbody>

<?php

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['fullname']; ?></td>

<td><?php echo $row['admission_no']; ?></td>

<td><?php echo $row['course']; ?></td>

<td><?php echo $row['gender']; ?></td>

<td><?php echo $row['maths']; ?></td>

<td><?php echo $row['english']; ?></td>

<td><?php echo $row['science']; ?></td>

<td><?php echo $row['ict']; ?></td>

<td><?php echo $row['total']; ?></td>

<td><?php echo $row['average']; ?></td>

<td><?php echo $row['grade']; ?></td>

<td><?php echo $row['remarks']; ?></td>

<td>

<a href="edit_student.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">
<i class="bi bi-pencil"></i>
</a>

<a href="delete_student.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">
<i class="bi bi-trash"></i>
</a>

</td>

</tr>

<?php

}

?>

</tbody>

</table>

</div>

</div>

</div>

</body>
</html>