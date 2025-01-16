<?php
// Include the database connection file
include_once 'database.php';

// Check if the 'ID' is set in the POST request
if (isset($_POST['ID'])) {
    
    // Retrieve the 'ID' from the POST request
    $id = $_POST['ID'];

    // SQL query to delete the student record with the specified ID
    $sql = "DELETE FROM students_list WHERE id = '$id'";

    // Execute the query or display an error message if it fails
    $con->query($sql) or die($con->error);

    // Redirect the user back to the index page after deletion
    echo header("Location: index.php");
}
?>





