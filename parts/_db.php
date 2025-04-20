<?php
// Database configuration


// Create a connection
$conn = new mysqli('localhost', 'root', '', 'goalball');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Connection successful
// echo "Connected successfully";
?>