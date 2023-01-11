<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
       <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="style.css">

</head>
<body>
    <section class="header">
        <a href="home.php" class="logo">TG travel.</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>


        <div id="menu-btn" class="fas fa-bars"></div>

       


    </section>

    <div class="heading" style="background-image: url(../rahul/images/header-bg-3.png);">
    <h1>book now</h1>

</div>
    

<section class="booking">
    <h1 class="heading-title">book your trip</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputbox">
                <span>name :</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>

            <div class="inputbox">
                <span>email :</span>
                <input type="email" placeholder="enter your email" name="email">
            </div>

            <div class="inputbox">
                <span>phone :</span>
                <input type="number" placeholder="enter your number" name="phone">
            </div>

            <div class="inputbox">
                <span>address :</span>
                <input type="text" placeholder="enter your address" name="address">
            </div>
            <div class="inputbox">
                <span>where to  :</span>
                <input type="text" placeholder="enter your destination" name="location">
            </div>
            <div class="inputbox">
                <span>how many :</span>
                <input type="number" placeholder="how many guests" name="guests">
            </div>
            <div class="inputbox">
                <span>arrivals :</span>
                <input type="date" name="arrivals">
            </div>
            <div class="inputbox">
                <span>leaving :</span>
                <input type="date" name="leaving">
            </div>
        </div>
        <input type="submit" value="submit" class="btn" name="send">












    </form>
</section>





<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>

        </div>
        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
            

        </div>
        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890</a>
            <a href="#"> <i class="fas fa-phone"></i> +482-333-6565</a>
            <a href="#"> <i class="fas fa-envelope"></i> sitaram@gmail.com</a>
            <a href="#"> <i class="fas fa-map"></i> mumbai ,india - 400104</a>

        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"> </i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i>  linkedin </a>
        </div>
    </div>
    <div class="credit">created by <span>Mr.Rahul Gautam</span> | all rights reserved!</div>
</section>



<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>