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

// Step 2: Show data from MySQL database
$sql = "SELECT * FROM users";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " Name: " . $row["names"]. " - Password: " . $row["password"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
