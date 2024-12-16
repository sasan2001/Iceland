<?php

// Establish connection to the MySQL database
$connection = mysqli_connect('localhost', 'root', '1975', 'the1975_db');

// Check if the connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form has been submitted
if (isset($_POST['send'])) {

    // Sanitize and escape user inputs to prevent SQL injection
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $birthdate = mysqli_real_escape_string($connection, $_POST['birthdate']);
    $country = mysqli_real_escape_string($connection, $_POST['country']);
    $tour = mysqli_real_escape_string($connection, $_POST['tour']);
    $creditcard = mysqli_real_escape_string($connection, $_POST['creditcard']);

    // Create the SQL query to insert the form data into the bookings_the1975 table
    $request = "INSERT INTO bookings_the1975 (customer_name, customer_email, booking_date, country, tour, credit_card) 
                VALUES ('$name', '$email', '$birthdate', '$country', '$tour', '$creditcard')";

    // Execute the query and check if the insertion was successful
    if (mysqli_query($connection, $request)) {

        // Redirect to the1975.php if the insertion was successful
        header("Location: the1975.php");
        exit();
    } else {

        // Display an error message if something went wrong with the insertion
        echo 'Something went wrong, try again. Error: ' . mysqli_error($connection);
    }
} else {

    // Display a message if the form was not submitted correctly
    echo 'Form not submitted correctly';
}

// Close the database connection
mysqli_close($connection);
?>
