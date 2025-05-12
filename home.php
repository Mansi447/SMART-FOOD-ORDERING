<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Smart Food Ordering :: Best App</title>
   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function(){
          $(".scroll-top").click(function() {
              $("html, body").animate({ 
                  scrollTop: 0 
              }, "slow");
              return false;
          });
      });
   </script>
</head>
<body>
<!-- header section starts  -->
<section class="header">
   <a href="home.php" class="logo"><img src="images/logo_100x100.jpg"></a>
   <nav class="navbar">
      <a href="home.php" class="active">home</a>
      <a href="about.php">about</a>
      <a href="package.php">Menu</a>
      <a href="book.php">Order</a>
      <a href="Admin12.php">ADMIN</a>
      <a href="chatbot1.html">CHATBOTS</a>
      

   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header section ends -->
<section class="home">
   <div class="swiper home-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide" style="background:url(images/image1.webp) no-repeat">
            <div class="content">
               <span>search, express, tour</span>
               <h3>tour arround the India</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/image2.jpg) no-repeat">
            <div class="content">
               <span>search, express, tour</span>
               <h3>flavours of different cuisines</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/image3.jpg) no-repeat">
            <div class="content">
               <span>search, express, tour</span>
               <h3>just away from one click</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
   </div>
</section>

<!-- home section ends -->
<!-- services section starts  -->
<section class="services">
   <h1 class="heading-title"> our services </h1>
   <div class="box-container">
      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>🍽️ Online Food Ordering</h3>
      </div>
      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>🚴 Fast & Reliable Delivery</h3>
      </div>
      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>📱 Mobile App & Website Access</h3>
      </div>
      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>💸 Affordable Meal Deals</h3>
      </div>
      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>👨‍👩‍👧‍👦 Family & Group Meals</h3>
      </div>
      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>🌙 Late Night Cravings</h3>
      </div>
   </div>
</section>
<!-- services section ends -->
<!-- home about section starts  -->
<section class="home-about">
   <div class="image">
      <img src="images/background.webp" alt="">
   </div>
   <div class="content">
      <h3>about us</h3>
      <p>Amazing Eats is your trusted food ordering and delivery service in Delhi. We connect you with the city’s favorite restaurants and hidden gems, delivering fresh and flavorful meals right to your doorstep.

Whether you're in the mood for street food, North Indian classics, or a quick bite during your busy day, Amazing Eats has you covered—all at affordable prices and with lightning-fast delivery.

Explore popular picks like:
Thali Combos | Delhi Street Food | Family Meals | Express Lunch

Delhi's Taste. Delivered Fast.</p>
      <a href="about.php" class="btn">read more</a>
   </div>
</section>
<!-- home about section ends -->
<!-- home packages section starts  -->
<section class="home-packages">
   <h1 class="heading-title"> our specials </h1>
   <div class="box-container">
      <div class="box">
         <div class="image">
            <img src="images/indian thali.jpg" alt="">
         </div>
         <div class="content">
            <h3>north indian thali</h3>
            <p>"From spicy to sweet, a big Indian thali offers 12–15 dishes that satisfy every craving in one sitting."</p>
            <h2> &#8377 799</h2>
            <a href="book.php" class="btn">Order Now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/Kerala-Sadhya-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Kerala banana leaf meal (Sadya style)</h3>
            <p>"A South Indian Symphony — Served the Kerala Way!"</p>
            <h2>&#8377 999</h2>
            <a href="book.php" class="btn">Order Now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/biryani.jpg" alt="">
         </div>
         <div class="content">
            <h3>biryani</h3>
            <p>Fragrant rice, tender spices, and that smoky handi finish.!</p>
            <h2>&#8377 699</h2>
            <a href="book.php" class="btn">Order Now</a>
         </div>
      </div>
   </div>
   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>
</section>
<!-- home packages section ends -->


<!-- <section class="partner">
   <h1 class="heading-title"> Weather Forecast for Your Destination</h1>
   <div class="box-container">

       <div class="partner">
         <img src="" alt="">
      </div>
      <a href="weather.html" class="btn">check weather</a>
      <div class="partner">
         <img src="" alt="">
      </div>
      <!-- <div class="partner">
         <img src="images/sp3.png" alt="">
      </div>
      <div class="partner">
         <img src="images/sp4.png" alt="">
      </div>
      <div class="partner">
         <img src="images/sp5.png" alt=""> -->
      </div> 
   </div>
</section>   -->


<!-- home offer section starts  -->
<section class="home-offer home-packages">
   <div class="content">
      <div class="offerimage">
      <img src="images/indian thali.jpg">
      </div>
   </div>
   <div class="content">
      <h3>upto 50% off</h3>
      <h2>north indian thali</h2>
      <p>An elaborate Indian thali, with its vibrant assortment of 12 to 15 dishes, takes you on a flavorful journey—from fiery, tongue-tingling spices to rich, indulgent sweets—satisfying every craving in a single, soul-satisfying meal.</p>
      <a href="book.php" class="btn">Order Now</a>
   </div>
</section>
<!-- home offer section ends -->

<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
<!-- footer section starts  -->
<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>
      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
      </div>
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +880-1517-089144 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-2222-333333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> manishkusingh35@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Ghaziabad,delhi NCR - 12415  </a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
      </div>
   </div>
   <div class="credit"> designed by <span>Mr.Manish Kumar Singh</span> | all rights reserved! </div>
</section>
<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>