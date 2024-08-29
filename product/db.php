<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // Adjust this if you have a password for MySQL
$dbname = "product";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

