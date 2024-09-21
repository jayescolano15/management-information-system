<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "school_management");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Display the course list
$result = mysqli_query($conn, "SELECT * FROM courses");
echo "<h1>Course List</h1>";
echo "<table border='1'>";
echo "<tr><th>Code</th><th>Title</th><th>Instructor</th><th>Credit Hours</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["code"] . "</td>";
    echo "<td>" . $row["title"] . "</td>";
    echo "<td>" . $row["instructor"] . "</td>";
    echo "<td>" . $row["credit_hours"] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>