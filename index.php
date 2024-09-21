<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "school_management");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Display the main menu
echo "<h1>School Management System</h1>";
echo "<ul>";
echo "<li><a href='student.php'>Student Management</a></li>";
echo "<li><a href='course.php'>Course Management</a></li>";
echo "<li><a href='grade.php'>Grade Management</a></li>";
echo "<li><a href='attendance.php'>Attendance Management</a></li>";
echo "<li><a href='report.php'>General Report</a></li>";
echo "</ul>";

mysqli_close($conn);
?>