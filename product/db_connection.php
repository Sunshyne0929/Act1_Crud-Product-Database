<?php
$servername = "localhost"; // Update if your database server is different
$username = "root";        // Your MySQL username
$password = "";            // Your MySQL password
$database = "product"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

