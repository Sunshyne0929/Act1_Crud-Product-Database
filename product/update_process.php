<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = intval($_POST['id']);
    $name = $conn->real_escape_string($_POST['name']);
    $description = $conn->real_escape_string($_POST['description']);
    $price = $conn->real_escape_string($_POST['price']);
    $quantity = $conn->real_escape_string($_POST['quantity']);
    $barcode = $conn->real_escape_string($_POST['barcode']);
    $created_by = $conn->real_escape_string($_POST['created_by']);

    // Prepare the SQL statement with placeholders
    $stmt = $conn->prepare("UPDATE tbl_product SET name = ?, description = ?, price = ?, quantity = ?, barcode = ?, created_by = ? WHERE id = ?");
    $stmt->bind_param("ssdissi", $name, $description, $price, $quantity, $barcode, $created_by, $id);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<div class='alert alert-success' role='alert'>Product updated successfully</div>";
        header("Refresh:2; url=index.php");
        exit();
    } else {
        echo "<div class='alert alert-danger' role='alert'>Error: " . $stmt->error . "</div>";
    }

    // Close the statement
    $stmt->close();
}

$conn->close();

