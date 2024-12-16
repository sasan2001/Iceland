<?php
    // Establish connection to the MySQL database
    $connection = mysqli_connect('localhost', 'root', '1975', 'book_db');

    // Check if the form has been submitted
    if (isset($_POST['send'])) {
        
        // Sanitize and escape user inputs to prevent SQL injection
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $phone = mysqli_real_escape_string($connection, $_POST['phone']);
        $address = mysqli_real_escape_string($connection, $_POST['address']);
        $location = mysqli_real_escape_string($connection, $_POST['location']);
        $guests = mysqli_real_escape_string($connection, $_POST['guests']);
        $arrivals = mysqli_real_escape_string($connection, $_POST['arrivals']);
        $departure = mysqli_real_escape_string($connection, $_POST['departure']);

        // Create the SQL query to insert the form data into the book_form table
        $request = "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, departure) 
                    VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$departure')";

        // Execute the query and check if the insertion was successful
        if (mysqli_query($connection, $request)) {

            // Redirect to home.php if the insertion was successful
            header('Location: home.php');
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
