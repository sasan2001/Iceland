<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to the external CSS file -->
    <link rel="stylesheet" href="contact.css">
    <!-- Link to the favicon -->
    <link rel="shortcut icon" href="Icon/Flag_of_Iceland.svg.ico" type="image/x-icon">
    <title>Contact</title>
</head>
<body>
<!-- Heading for the contact form -->
<h2>Contact</h2>

<!-- Contact form with action set to 'mail.php' for form submission -->
<form action="mail.php" method="post" autocomplete="off" required>
    
<!-- Labels and input fields -->
    <label for="name">Your Name</label>
    <input type="text" name="name" placeholder="Your Name" required>

    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Email" required>

    <label for="message">Message</label>
    <textarea name="message" placeholder="Message"></textarea>

    <!-- Submit button to submit the form -->
    <input type="submit" value="Submit">

</form>
    
    </body>
</html>