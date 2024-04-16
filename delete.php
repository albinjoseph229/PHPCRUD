<?php
include('dbcon.php');

// Check if the id parameter is set
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the record from the database
    $sql = "DELETE FROM students WHERE id = '$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

// Redirect to the main page after a short delay
header("Refresh: 2; URL=index.php");