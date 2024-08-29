<?php
include 'db_connection.php';

// Check if the `id` parameter is in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the record from the database
    $sql = "DELETE FROM tbl_product WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success' role='alert'>Product deleted successfully</div>";
        header("Refresh:2; url=read.php"); // Redirect to the product list after deletion
        exit();
    } else {
        echo "<div class='alert alert-danger' role='alert'>Error deleting record: " . $conn->error . "</div>";
    }
} else {
    echo "Invalid request!";
    exit();
}

$conn->close();
