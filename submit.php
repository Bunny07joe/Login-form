<?php
// Step 1: Connect to MySQL database
$servername = "localhost"; // Change this if your MySQL server is on a different host
$username = "root"; // Change this to your MySQL username
$passwords = "Meet@222"; // Change this to your MySQL password
$dbname = "Student"; // Change this to your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $passwords, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Sanitize and validate user input (for simplicity, only basic sanitization is demonstrated)
$names = mysqli_real_escape_string($conn, $_POST['name']); // Escape special characters to prevent SQL injection
$passwords = mysqli_real_escape_string($conn, $_POST['password']);
// You can add more fields as per your form

// Step 3: Insert data into MySQL database
$sql = "INSERT INTO users (names, password) VALUES ('$names', '$passwords')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
