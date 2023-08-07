<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Book</title>
          <!---Swipper css link-->
          <link  rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!---css link-->
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
<!---header section start-->
<section class="header">
    <a href="Home.php" class="logo">Travel</a>

<nav class="navlbar">
    <a href="home.php">Home</a>
    <a href="about.php">About</a>
    <a href="packages.php">Packages</a>
    <a href="book.php">Book</a>
    </nav>
<div id="menu-btn" class="fas fa-bars"></div>

</section>
<div class="heading"style="background-image: url('https://img.freepik.com/free-photo/booking-hotel-reservation-travel-destination-concept_53876-121094.jpg?size=626&ext=jpg&uid=R98829628&ga=GA1.1.1421741829.1680935883&semt=ais'); no-repeat">
<h1>Book Now</h1>
 </div>
<!--booking section--->
<section class="booking">
    <h1 class ="heading-title">Book Your Dream Trip....!!!</h1>
    <form action="book_form.php" method="post" class="book-form">

<div class="flex">

<div class="inputBox">
<span>name:</span>
<input type="text" placeholder="enter your name" name="name">
</div>

<div class="inputBox">
    <span>email:</span>
    <input type="email" placeholder="enter your email" name="email">
    </div>

    <div class="inputBox">
        <span>phone:</span>
        <input type="number" placeholder="enter your  number" name="phone">
        </div>
        
        <div class="inputBox">
            <span>address:</span>
            <input type="text" placeholder="enter your address" name="address">
            </div>


            <div class="inputBox">
                <span>where to:</span>
                <input type="text" placeholder="place you want to visit" name="location">
                </div>
                
                <div class="inputBox">
                    <span>how many:</span>
                    <input type="number" placeholder="number of guests" name="guests">
                    </div>
                    
                    <div class="inputBox">
                        <span>arrivals:</span>
                        <input type="date" name="arrivals">
                        </div>
                        
                        <div class="inputBox">
                            <span>leaving:</span>
                            <input type="date" name="leaving">
                            </div>

</div>
<input type="submit" value="submit" class="btn" name="send">
    </form>
</section>



 <!--footer link--->
<section class="footer">
<div class="box-container">
<div class="box">
    <h3>Book</h3>
    <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
    <a href="home.php"><i class="fas fa-angle-right"></i>About</a>
    <a href="home.php"><i class="fas fa-angle-right"></i>Package</a>
    <a href="home.php"><i class="fas fa-angle-right"></i>Book</a>
</div>
<div class="box">
    <h3>Extra Links</h3>
    <a href="#"><i class="fas fa-angle-right"></i>Ask Questions</a>
    <a href="#"><i class="fas fa-angle-right"></i>about us</a>
    <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
    <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
</div>
<div class="box">
    <h3>Contact info</h3>
    <a href="#"><i class="fas fa-phone"></i>03204067710</a>
    <a href="#"><i class="fas fa-phone"></i>03238839130</a>
    <a href="#"><i class="fas fa-envelope"></i>faiztoufiq123@gmail.com</a>
    <a href="#"><i class="fas fa-map"></i>New shalimar colony multan road Lahore -042</a>
</div>
<div class="box">
    <h3>follow us</h3>
    <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
    <a href="#"><i class="fab fa-twitter"></i>twitter</a>
    <a href="#"><i class="fab fa-instagram"></i>instagram</a>
    <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
</div>
</div>
<div class="credit">Created by | <span>faiz toufiq Tech Services</span> | all rights reserved..!</div>
</section>   
<!---Swipper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<!---js link-->
<script src="script.js"></script>
</body>