<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "school_management");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Display the grade list
$result = mysqli_query($conn, "SELECT * FROM grades");
echo "<h1>Grade List</h1>";
echo "<table border='1'>";
echo "<tr><th>Student Id</th><th>Course Code</th><th>Grade</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["student_id"] . "</td>";
    echo "<td>" . $row["course_code"] . "</td>";
    echo "<td>" . $row["grade"] . "</td>";
    echo "</tr";
}
echo "</table>";

mysqli_close($conn);
?>