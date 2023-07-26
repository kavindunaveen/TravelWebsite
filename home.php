<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <title>home</title>

    <!-- Import Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
    <!-- swiper css file link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">

</head>
<body>

<!--header start-->
<section class="header">

    <a href="home.php" class="logo">Wanderlusta.</a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>
<!--header end-->

<!--home section start-->
<section class="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(images/sl1.jpg) no-repeat">
              <div class="content">
                <span>Explore, Discover, Travel</span>
                <h3>Travel around Sri Lanka</h3>
                <a href="package.php" class="btn">Discover more..</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/sl2.jpg) no-repeat">
              <div class="content">
                <span>Explore, Discover, Travel</span>
                <h3>Discover the new places</h3>
                <a href="package.php" class="btn">Discover more..</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/sl3.jpg) no-repeat">
              <div class="content">
                <span>Explore, Discover, Travel</span>
                <h3>Make your tour worthwhile</h3>
                <a href="package.php" class="btn">Discover more..</a>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>
<!--home about section end-->


<!--home package section starts-->
<section class="home-packages">
    <h1 class="heading-title">Our Packages</h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/Sinharaja.jpg" alt="">
            </div>
            <div class="content">
                <h3>Adventure and Tour</h3>
                <p> Explore the Wilderness. Destination: Sinharaja Rainforest, Sri Lanka.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/apura1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Cultural Immersion</h3>
                <p>Discover Ancient Civilizations in Sri Lanka. Destination:Anuradhapura.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/yaala.jpg" alt="">
            </div>
            <div class="content">
                <h3>Safari Adventure</h3>
                <p>Witness the Sri Lankan Wildlife. Destination:Yaala National Park.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

    </div>

    <div class="load-more"> <a href="package.php" class="btn">Load more</a> </div>
</section>
<!--home package section end-->



<!--home offer section starts-->
<section class="home-offer">
    <div class="content">
        <h3>Upto 50% OFF</h3>
        <p>Discover the wonders of our exclusive tour packages, now available at an unbeatable 50% discount! Embark on unforgettable journeys to exotic destinations, where breathtaking landscapes and captivating cultures await you. Whether you seek adrenaline-pumping adventures, serene beach getaways,
         or enriching cultural experiences, our handpicked packages cater to every traveler's dream.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</section>
<!--home offer section end-->
















<!--footer section-->
<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Quick Links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
        </div>

        <div class="box">
            <h3>Extra Links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> Ask Questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i> About us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> Privacy Policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> Terms Of Use</a>
        </div>

        <div class="box">
            <h3>Contact Info</h3>
            <a href="#"><i class="fas fa-phone"></i>+94 71 370 2074</a>
            <a href="#"><i class="fas fa-phone"></i>+94 77 275 6083</a>
            <a href="#"><i class="fas fa-envelope"></i>kavindun277@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i>Anuradhapura, Sri Lanka</a>
        </div>

        <div class="box">
            <h3>Follow Us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> Facebook</a>
            <a href="#"> <i class="fab fa-twitter"></i> Twitter</a>
            <a href="#"> <i class="fab fa-instagram"></i> Instagram</a>
            <a href="#"> <i class="fab fa-linkedin"></i> Linkedin</a>
        </div>
    </div>

    <div class="credit"> Created by <span>kavindu Naveen</span> | All Rights Reserved!</div>
</section>



<!--swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!--custom js link-->
<script src="js/script.js"></script>

</body>
</html>
