<?php

// Start or resume a session
session_start();

// Include the file containing database connection details
include("login_db.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in</title>
</head>
<body>

    <!-- Display a greeting message -->
    <div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
       Hello  <?php
       
       // Check if the email session variable is set
       if(isset($_SESSION['email'])){

        // Retrieve the email from the session
        $email=$_SESSION['email'];

        // Query the database to retrieve user details based on the email
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");

        // Fetch the result row by row
        while($row=mysqli_fetch_array($query)){

            // Display the user's full name
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       :)
      </p>

      <!-- Provide a link to log out -->
      <a href="logout.php">Logout</a>
    </div>
</body>
</html>