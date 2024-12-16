<?php
// Include the ticket.php file for database connection and functions
include 'ticket.php';

// Get the ID of the tourist to be edited
$id = $_GET['edit'];


// Handle form submission to update a tourist
if(isset($_POST['update_tourist'])){

   // Retrieve form data
   $tourist_name = $_POST['tourist_name'];
   $ticket_number = $_POST['ticket_number'];
   $tourist_image = $_FILES['tourist_image']['name'];
   $tourist_image_tmp_name = $_FILES['tourist_image']['tmp_name'];
   $tourist_image_folder = 'uploaded_img/'.$tourist_image;

   // Check if any required field is empty
   if(empty($tourist_name) || empty($ticket_number) || empty($tourist_image)){
      $message[] = 'Please Fill All Out';    
   }else{

      // Update tourist data in the database
      $update_data = "UPDATE ticket SET name='$tourist_name', ticket='$ticket_number', image='$tourist_image'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      // Move uploaded image to the designated folder
      if($upload){
         move_uploaded_file($tourist_image_tmp_name, $tourist_image_folder);
         header('location:admin_page.php');
      }else{
         $$message[] = 'Please Fill All Out'; 
      }

   }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Including Swiper CSS for the slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- Including Bootstrap CSS for responsive design and styling -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Duplicate Swiper CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Favicon for the site -->
    <link rel="shortcut icon" href="Flag_of_Iceland.svg.ico" type="image/x-icon">
    <!-- Including another Bootstrap CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Including Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Link to custom stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!-- Link to admin-specific stylesheet -->
    <link rel="stylesheet" href="admin.css">

    <!-- Title of the webpage -->
    <title>Admin Update</title>
</head>
<body>

<!-- Header section with navigation menu -->
<section class="header">

         <!-- Logo linking to home page -->
        <a href="home.php" class="logo"><img src="Logo/logo.png" width="7.5%"></a>
         <!-- Navigation menu -->
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="#about">About</a>
            <a href="#package">Package</a>
            <a href="the1975.php">The 1975</a>
            <a href="admin_page.php">Dashboard</a>
            <a href="home.php">Book</a>
            <a href="login.php">Login</a>
            <a href="contact.php">Contact</a>
        </nav>
    </section>
    
<?php

// Display messages if any
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>

<div class="container">


<div class="admin-product-form-container centered">

   <?php
      // Fetch the tourist details to be updated
      $select = mysqli_query($conn, "SELECT * FROM ticket WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>

   <!-- Form to update a tourist -->
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">Update Tourist</h3>
      <input type="text" class="box" name="tourist_name" value="<?php echo $row['name']; ?>" placeholder="Enter The Tourist Name">
      <input type="number" min="0" class="box" name="ticket_number" value="<?php echo $row['ticket']; ?>" placeholder="Enter The Ticket Price">
      <input type="file" class="box" name="tourist_image"  accept="image/png, image/jpeg, image/jpg">
      <input type="submit" value="update tourist" name="update_tourist" class="btn">
      <a href="admin_page.php" class="btn">go back!</a>
   </form>
   


   <?php }; ?>

   

</div>

</div>
<!-- Footer section -->
<footer>
    <div class="footerContainer">
      <!-- Social media icons -->
        <div class="socialIcons">
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-x-twitter"></i></a>
            <a href=""><i class="fa-brands fa-apple"></i></a>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
        </div>
        <!-- Footer navigation links -->
        <div class="footerNav">
            <ul><li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Package</a></li>
                <li><a href="">Book</a></li>
            </ul>
        </div>
        
    </div>
    <!-- Footer bottom text -->
    <div class="footerBottom">
        <p>&copy;2024 ICELAND by<span class="designer">Sasan</span></p>
    </div>
</footer>
</body>
</html>