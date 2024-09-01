<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve student IDs
$sql = "SELECT student_id FROM students";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Student ID: " . $row["student_id"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
