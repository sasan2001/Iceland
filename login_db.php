<?php

    // Database connection details
    $host = 'localhost';
    $user = 'root';
    $pass = '1975';
    $db = 'login_db';

    // Create a new MySQLi object for database connection
    $conn = new mysqli($host, $user, $pass, $db);

    // Check if the connection was successful
    if ($conn->connect_error) 
    {
        // If connection failed, print an error message and terminate script execution
        die("Failed to connect to database: " . $conn->connect_error);
    } else {
        // If connection was successful, you can add any further actions here
    }
?>
