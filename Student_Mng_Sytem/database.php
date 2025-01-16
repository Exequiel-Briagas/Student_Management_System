<?php

// Define database connection parameters
$host = "localhost";
$username = "root";
$password = "Exequiel09";
$database = "student_mng_system";

// Create a new MySQLi connection
$con = new mysqli($host, $username, $password, $database);

// Check if the connection to the database was successful
if ($con->connect_error) {
    // If there is an error, display the error message
    echo $con->connect_error;
} else {
    // If the connection is successful, return the connection object
    return $con;
}

?>