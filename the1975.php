<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Including Swiper CSS for the slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- Including Bootstrap CSS for responsive design and styling -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Duplicate Swiper CSS link (should be removed to avoid redundancy) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- Favicon for the site -->
    <link rel="shortcut icon" href="Icon/Flag_of_Iceland.svg.ico" type="image/x-icon">
    <!-- Including another Bootstrap CSS link (should be consolidated) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Including Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Link to custom stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!-- Title of the webpage -->
    <title>The 1975</title>
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
            <a href="#booking">Book</a>
            <a href="contact.php">Contact</a>
            <a href="login.php">Login</a> 
        </nav>
    </section>
    <!-- Hero section with a full-screen background and centered text -->
<section id="hero" class="min-vh-100 d-flex align-items-center text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="text-uppercase text-white mt-3 mt-4 fw-semibold display-1"
              style="
                font-family: 'Lucida Sans', 'Lucida Sans Regular',
                  'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana,
                  sans-serif; ">THE 1975</h1>
      </div>
    </section>
        <!-- About section for The 1975 concert details -->
    <section id="hero" class="home-about">
        <div class="image">
            <!-- Concert image -->
            <img src="live (6).JPG" alt="">
        </div>

        <div class="content">
            <h3>The 1975 - Still... At Their Very Best Tour</h3>
            <p>The 1975 Live at O2 Arena in Reykjavík, Iceland <br> Time & Date: May 23, 2024 at 11:00:00</p> 
            <a href="#music" class="btn">Get Tickets Now</a>
        </div>
    </section>
   <!-- Booking form section -->
    <section id="music" class="booking">
        <h1 class="top">Get Tickets Now</h1>
            <form id="booking" action="bookings_the1975.php" method="post" class="book-form">
                <div class="flex">
                    <div class="inputBox">
                    <span>Name: </span>
                    <input type="text" placeholder="Enter Your Name" name="name">
                    </div>
                    <div class="inputBox">
                    <span>Email: </span>
                    <input type="email" placeholder="Enter Your Email" name="email">
                    </div>
                    <div class="inputBox">
                    <span>Phone Number: </span>
                    <input type="number" placeholder="Enter Your Number" name="phone">
                    </div>
                    <div class="inputBox">
                    <span>Booking Date: </span>
                    <input type="date" placeholder="Enter Your Birthdate" name="birthdate">
                    </div>
                    <div class="inputBox">
                    <span>Country: </span>
                    <input type="text" placeholder="Enter Your Country" name="country">
                    </div>
                    <div class="inputBox">
                    <span>Tour: </span>
                    <input type="text" placeholder="Enter Your Tour" name="tour">
                    </div>
                    <div class="inputBox">
                    <span>CreditCard: </span>
                    <input type="digit" name="creditcard">
                    </div>
                </div>
                <input type="submit" value="Submit" class="btn" name="send">
            </form>
    </section>

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
        <!-- Footer bottom text -->
    </div>
    <div class="footerBottom">
        <p>&copy;2024 ICELAND by<span class="designer">Sasan</span></p>
    </div>
</footer>
</body>
</html>