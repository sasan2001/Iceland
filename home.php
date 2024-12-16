<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Including Swiper CSS for the slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- Including Bootstrap CSS for responsive design and styling -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Favicon for the site -->
    <link rel="shortcut icon" href="Icon/Flag_of_Iceland.svg.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Including Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Link to custom stylesheet -->
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <!-- Header section with navigation menu -->
    <section class="header">
        <!-- Logo linking to home page -->
        <a href="home.php" class="logo"><img src="Logo/logo.png" width="7.5%"></a>
        <!-- Navigation menu -->
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#package">Package</a>
            <a href="the1975.php">The 1975</a>
            <a href="admin_page.php">Dashboard</a>
            <a href="#form">Book</a>
            <a href="contact.php">Contact</a>
            <a href="login.php">Login</a>
        </nav>
    </section>
    <!-- Home section with Swiper slider -->
    <section id="home" class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background: url(Pics/iceland.JPG)">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Welcome To Iceland</h3>
                        <a href="#" class="btn">Discover More</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(Pics/iceland\ \(40\).jpg)">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Discover Iceland</h3>
                        <a href="#" class="btn">Discover More</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(Pics/iceland\ \(30\).JPG)">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Make Yourself At Home</h3>
                        <a href="#" class="btn">Discover More</a>
                    </div>
                </div>
            </div>
            <!-- Swiper navigation buttons -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- About section -->
    <section id="about" class="home-about">
        <div class="image">
            <!-- About section image -->
            <img src="Pics/dettifoss.jpg" alt="">
        </div>

        <div class="content">
            <h3>About Iceland</h3>
            <p><strong>Iceland</strong> is a Nordic island country between the North Atlantic and Arctic Oceans, on the Mid-Atlantic Ridge between North America and Europe. It is linked culturally and politically with Europe and is the region's most sparsely populated country. Its capital and largest city is Reykjavík, which is home to about 36% of the country's roughly 380,000 residents. The official language of the country is Icelandic.</p>
            <a href="about.php" class="btn">Read More</a>
        </div>
    </section>
    <!-- Package section -->
    <section id="package" class="home-packages">
        <h1 class="top">Destinations</h1>
            <div class="box-container">
                <div class="box">
                    <div class="image">
                        <img src="Pics/iceland-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <a href="#" class="btn">Book Now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="Pics/iceland.JPG" alt="">
                    </div>
                    <div class="content">
                        <a href="#" class="btn">Book Now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="Pics/iceland (59).JPG" alt="">
                    </div>
                    <div class="content">
                        <a href="#" class="btn">Book Now</a>
                    </div>
                </div>

            </div>
            <hr>
            <h1 class="top">Entertainment</h1>
            <div class="box-container">
                <div class="box">
                    <div class="image">
                        <img src="Pics/foals1.PNG" alt="">
                    </div>
                    <div class="content">
                        <h3>Foals' Holy Fire (2013)</h3>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="Pics/secret-life-of-walter-mitty.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>The Secret Life of Walter Mitty (2013)</h3>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="Pics/prometheus-2012.JPG" alt="">
                    </div>
                    <div class="content">
                        <h3>Prometheus (2012)</h3>
                    </div>
                </div>

            </div>                
    </section>
    <!-- Booking form section -->
    <section id="form" class="booking">
        <h1 class="top">Book Your Trip!</h1>
            <form action="book_form.php" method="post" class="book-form">
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
                    <span>Address: </span>
                    <input type="text" placeholder="Enter Your Address" name="address">
                    </div>
                    <div class="inputBox">
                    <span>Where to: </span>
                    <input type="text" placeholder="Part of The Country You Want to Visit" name="location">
                    </div>
                    <div class="inputBox">
                    <span>How Many: </span>
                    <input type="number" placeholder="Number of Visitors" name="guests">
                    </div>
                    <div class="inputBox">
                    <span>Arrival: </span>
                    <input type="date"name="arrivals">
                    </div>
                    <div class="inputBox">
                    <span>Departure: </span>
                    <input type="date"name="departure">
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
        
    </div>
    <!-- Footer bottom text -->
    <div class="footerBottom">
        <p>&copy;2024 ICELAND by<span class="designer">Sasan</span></p>
    </div>
</footer>
     <!-- Including Swiper JS for the slider functionality -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Including javascript -->
    <script src="script.js"></script>
    <!-- Including jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Including Popper JS for Bootstrap tooltips -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <!-- Including Bootstrap JS for responsive design and functionality -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>