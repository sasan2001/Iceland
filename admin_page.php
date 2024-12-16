<?php
// Include the ticket.php file for database connection and functions
include 'ticket.php';

// Handle form submission to add a new tourist
if(isset($_POST['add_tourist'])){

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

      // Insert tourist data into the database
      $insert = "INSERT INTO ticket(name, ticket, image) VALUES('$tourist_name', '$ticket_number', '$tourist_image')";
      $upload = mysqli_query($conn, $insert);

       // Move uploaded image to the designated folder
      if($upload){
         move_uploaded_file($tourist_image_tmp_name, $tourist_image_folder);
         $message[] = 'New Tourist Added Successfully';
      }else{
         $message[] = 'Could not add the tourist';
      }
   }

};

// Handle deletion of a tourist entry
if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM ticket WHERE id = $id");
   header('location:admin_page.php');
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
    <link rel="shortcut icon" href="Icon/Flag_of_Iceland.svg.ico" type="image/x-icon">
    <!-- Including another Bootstrap CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Including Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Link to custom stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!-- Link to admin-specific stylesheet -->
    <link rel="stylesheet" href="admin.css">

    <!-- Title of the webpage -->
    <title>Dashboard</title>
</head>

<!-- Header section with navigation menu -->
<body>
    <section class="header">
        <a href="home.php" class="logo"><img src="Logo/logo.png" width="7.5%"></a>
         <!-- Navigation menu -->
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="#about">About</a>
            <a href="home.php">Package</a>
            <a href="the1975.php">The 1975</a>
            <a href="admin_page.php">Dashboard</a>
            <a href="home.php">Book</a>
            <a href="contact.php">Contact</a>
            <a href="login.php">Login</a>
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

   <div class="admin-product-form-container">
      <!-- Form to add a new tourist -->
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>Add a New Tourist</h3>
         <input type="text" placeholder="Enter Tourist Name" name="tourist_name" class="box">
         <input type="number" placeholder="Enter Ticket Number" name="ticket_number" class="box">
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="tourist_image" class="box">
         <input type="submit" class="btn" name="add_tourist" value="Add Tourist">
      </form>

   </div>

   <?php

   // Fetch all tourists from the database
   $select = mysqli_query($conn, "SELECT * FROM ticket");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>Tourist Image</th>
            <th>Ticket Number</th>
            <th>Ticket Price</th>
            <th>action</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['name']; ?></td>
            <td>$<?php echo $row['ticket']; ?>/-</td>
            <td>
               <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> Edit </a>
               <a href="admin_page.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> Delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
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
   <!-- Including necessary scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>


</body>
</html>