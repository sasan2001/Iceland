<?php

     // Retrieve form data from POST request
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Recipient email address
    $to = "sushisasan01@gmail.com";

    // Email subject
    $subject = "Mail from Website";

    // Email headers including sender's name and CC
    $headers = "From: ".$name. "\r\n".
    "CC: judgdredd20000a@gmail.com";

    // Email content including sender's name, email, and message
    $txt = "You have received an email from ".$name. "\r\nEmail: " .$email. "\r\n
            Message: " .$message;

        // Check if email is not empty
        if ($email !=NULL) 
        {
            // Send the email
            mail($to, $subject, $txt, $headers);
                
        }

        // Redirect to a thank you page after sending the email
        header('Location: thankyou.html');

?>