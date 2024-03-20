<?php
// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    // Modify the error message to display the correct information
    die("Connection failed: " . $conn->connect_error);
}
?>
