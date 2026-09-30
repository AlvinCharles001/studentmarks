<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "student_marks";

// Create connection
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Uncomment the line below if you want to test the connection
// echo "Database connected successfully!";
?>