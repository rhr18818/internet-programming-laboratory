<?php
// Database connection file - save as db_connection.php
$servername = "localhost";  // Added quotes
$username = "root";        // Added quotes
$password = "";           // Added quotes
$dbname = "student_registration";  // Added quotes

// Try to connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if connection worked
if ($conn->connect_error) {  // Fixed arrow notation
    die("Oops! Connection failed: " . $conn->connect_error);  // Fixed arrow notation
}
?>