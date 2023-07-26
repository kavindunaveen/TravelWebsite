<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <title>About</title>

<!-- Import Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">

<!-- font awesome cdn link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!--custom css file link-->
<link rel="stylesheet" href="style.css">



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

<div class="heading" style="background:url(images/a1.jpg) no-repeat">
<h1>Book now</h1>
</div>





<!--booking section starts-->

<section class="booking">
    <h1 class="heading-title">book your trip!</h1>
    <form action="book_form.php" method="post" class="book-form">

    <div class="flex">
        <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
        </div>

        <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
        </div>

        <div class="inputBox">
            <span>Phone number :</span>
            <input type="phone" placeholder="enter your number" name="phone">
        </div>

        <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
        </div>

        <div class="inputBox">
            <span>whare to :</span>
            <input type="text" placeholder="place you want to visit" name="location">
        </div>

        <div class="inputBox">
            <span>how many :</span>
            <input type="text" placeholder="number of guests" name="guests">
        </div>

        <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
        </div>

        <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
        </div>
    </div>

    <input type="submit" value="submit" class="btn" name="send">



    </form>
</section>







<!--booking section end-->















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