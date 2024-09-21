<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "school_management");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Display the student list
$result = mysqli_query($conn, "SELECT * FROM students");
echo "<h1>Student List</h1>";
echo "<table border='1'>";
echo "<tr><th>Id</th><th>Name</th><th>Email</th><th>Phone Number</th><th>Address</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["phone_number"] . "</td>";
    echo "<td>" . $row["address"] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>