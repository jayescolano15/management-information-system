<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "school_management");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Generate the general report
$result = mysqli_query($conn, "SELECT * FROM grades");
$grades = array();
while ($row = mysqli_fetch_assoc($result)) {
    $grades[$row["student_id"]][$row["course_code"]] = $row["grade"];
}

$report_data = array();
foreach ($grades as $student_id => $courses) {
    foreach ($courses as $course_code => $grade) {
        $report_data[] = array(
            'Student Id' => $student_id,
            'Course Code' => $course_code,
            'Grade' => $grade,
        );
    }
}

echo "<h1>General Report</h1>";
echo "<table border='1'>";
echo "<tr><th>Student Id</th><th>Course Code</th><th>Grade</th></tr>";
foreach ($report_data as $row) {
    echo "<tr>";
    echo "<td>" . $row['Student Id'] . "</td>";
    echo "<td>" . $row['Course Code'] . "</td";
    echo "<td>" . $row['Grade'] . "</td";
    echo "</tr";
}
echo "</table>";

mysqli_close($conn);
?>