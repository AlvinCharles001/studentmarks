<?php
include "includes/db.php";
if(isset($_POST['save'])){

    $fullname = $_POST['fullname'];
    $admission_no = $_POST['admission_no'];
    $course = $_POST['course'];
    $gender = $_POST['gender'];

    $maths = $_POST['maths'];
    $english = $_POST['english'];
    $science = $_POST['science'];
    $ict = $_POST['ict'];

    // Calculate total
    $total = $maths + $english + $science + $ict;

    // Calculate average
    $average = $total / 4;

    // Determine grade
    if($average >= 80){
        $grade = "A";
    }elseif($average >= 70){
        $grade = "B";
    }elseif($average >= 60){
        $grade = "C";
    }elseif($average >= 50){
        $grade = "D";
    }else{
        $grade = "F";
    }

    // Determine remarks
    if($average >= 50){
        $remarks = "Pass";
    }else{
        $remarks = "Fail";
    }

    $sql = "INSERT INTO students
    (fullname, admission_no, course, gender, maths, english, science, ict, total, average, grade, remarks)

    VALUES

    ('$fullname','$admission_no','$course','$gender','$maths','$english','$science','$ict','$total','$average','$grade','$remarks')";

    if(mysqli_query($conn,$sql)){
        echo "<div class='alert alert-success text-center'>
                Student marks saved successfully!
              </div>";
    }else{
        echo "<div class='alert alert-danger text-center'>
                Error: ".mysqli_error($conn)."
              </div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student Marks</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow-lg">

        <div class="card-header bg-primary text-white">
            <h2><i class="bi bi-person-plus-fill"></i> Add Student Marks</h2>
        </div>

        <div class="card-body">

            <form action="" method="POST">

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="fullname" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Admission Number</label>
                        <input type="text" name="admission_no" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Course</label>
                        <input type="text" name="course" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Gender</label>
                        <select name="gender" class="form-select" required>
                            <option value="">Choose Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="form-label">Maths</label>
                        <input type="number" name="maths" min="0" max="100" class="form-control" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="form-label">English</label>
                        <input type="number" name="english" min="0" max="100" class="form-control" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="form-label">Science</label>
                        <input type="number" name="science" min="0" max="100" class="form-control" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="form-label">ICT</label>
                        <input type="number" name="ict" min="0" max="100" class="form-control" required>
                    </div>

                </div>

                <button type="submit" name="save" class="btn btn-success">
                    <i class="bi bi-save"></i> Save Student
                </button>

                <a href="index.php" class="btn btn-secondary">
                    Back
                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>