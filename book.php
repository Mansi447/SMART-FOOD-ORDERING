<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>FoodExpress :: Place Your Order</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css embedded -->
   <style>
      body {
         font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
         margin: 0;
         padding: 0;
         background: #FF8282;
         color: #333;
      }
      .header {
         display: flex;
         justify-content: space-between;
         align-items: center;
         padding: 20px;
         background: #fff;
         box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      }
      .navbar a {
         margin: 0 10px;
         text-decoration: none;
         color: #333;
         font-weight: 500;
      }
      .navbar a.active {
         color: #e91e63;
      }
      .heading {
         background-size: cover;
         padding: 60px 20px;
         text-align: center;
         color: #fff;
      }
      .heading h1 {
         font-size: 40px;
         margin: 0;
      }
      .booking {
         padding: 40px 20px;
         background: #fff;
         max-width: 800px;
         margin: auto;
         box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
         border-radius: 10px;
      }
      .heading-title {
         text-align: center;
         margin-bottom: 30px;
         font-size: 28px;
         color: #e91e63;
      }
      .flex {
         display: flex;
         flex-wrap: wrap;
         gap: 20px;
      }
      .inputBox {
         flex: 1 1 45%;
         display: flex;
         flex-direction: column;
      }
      .inputBox span {
         margin-bottom: 5px;
         font-weight: 600;
      }
      .inputBox input {
         padding: 10px;
         border: 1px solid #ccc;
         border-radius: 5px;
      }
      .btn {
         display: block;
         width: 100%;
         padding: 12px;
         margin-top: 20px;
         background: #e91e63;
         color: #fff;
         border: none;
         border-radius: 5px;
         font-size: 16px;
         cursor: pointer;
         transition: background 0.3s ease;
      }
      .btn:hover {
         background: #d81b60;
      }
      .footer {
         background: #333;
         color: #fff;
         padding: 40px 20px;
         margin-top: 40px;
      }
      .box-container {
         display: flex;
         flex-wrap: wrap;
         gap: 20px;
         justify-content: space-between;
      }
      .box h3 {
         margin-bottom: 10px;
         color: #e91e63;
      }
      .box a {
         display: block;
         color: #fff;
         text-decoration: none;
         margin-bottom: 5px;
         transition: color 0.3s;
      }
      .box a:hover {
         color: #e91e63;
      }
      .credit {
         text-align: center;
         padding-top: 20px;
         border-top: 1px solid #555;
         margin-top: 20px;
         font-size: 14px;
      }
      .scroll-top {
         position: fixed;
         bottom: 30px;
         right: 30px;
         background: #e91e63;
         color: #fff;
         border: none;
         padding: 10px 15px;
         border-radius: 50%;
         font-size: 18px;
         cursor: pointer;
         box-shadow: 0 2px 10px rgba(0,0,0,0.3);
      }
   </style>

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
   <a href="home.php" class="logo"><img src="images/logo.jpg" alt="FoodExpress Logo"></a>

   <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="about.php">About</a>
      <a href="package.php">Menu</a>
      <a href="book.php" class="active">Order</a>
      <a href="Admin12.php">Admin</a>
      <a href="chatbot1.html">Chatbot</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>Place Your Order</h1>
</div>

<!-- ordering section starts  -->
<section class="booking">
   <h1 class="heading-title">Complete your food order</h1>

   <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
      <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success_message']; ?></div>
      <?php unset($_SESSION['success_message']); ?>
   <?php } ?>

   <form action="food_orders.php" method="post" class="food_orders">

      <div class="flex">
         <div class="inputBox">
            <span>Name:</span>
            <input type="text" placeholder="Enter your name" name="name" required>
         </div>
         <div class="inputBox">
            <span>Email:</span>
            <input type="email" placeholder="Enter your email" name="email" required>
         </div>
         <div class="inputBox">
            <span>Phone:</span>
            <input type="tel" placeholder="Enter your phone number" name="phone" required>
         </div>
         <div class="inputBox">
            <span>Delivery Address:</span>
            <input type="text" placeholder="Enter delivery address" name="address" required>
         </div>
         <div class="inputBox">
            <span>Select Restaurant:</span>
            <input type="text" placeholder="e.g. Sushi World, Burger Palace" name="restaurant" required>
         </div>
         <div class="inputBox">
            <span>Food Item(s):</span>
            <input type="text" placeholder="e.g. Veg Burger, Chicken Sushi" name="food_items" required>
         </div>
         <div class="inputBox">
            <span>Quantity:</span>
            <input type="number" placeholder="e.g. 2, 3, etc." name="quantity" required>
         </div>
         <div class="inputBox">
            <span>Preferred Delivery Time:</span>
            <input type="time" name="delivery_time">
         </div>
      </div>

      <input type="submit" value="Place Order" class="btn" name="send">
   </form>
</section>

<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

<!-- ordering section ends -->

<!-- footer section starts  -->
<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>Quick Links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> Restaurants</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> Order</a>
      </div>
      <div class="box">
         <h3>Help & Info</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> About us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> FAQs</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Terms of use</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Privacy policy</a>
      </div>
      <div class="box">
         <h3>Contact Info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +880-1517-089144 </a>
         <a href="#"> <i class="fas fa-envelope"></i> foodexpress@example.com </a>
         <a href="#"> <i class="fas fa-map"></i> Ghaziabad, Delhi NCR - 12105 </a>
      </div>
      <div class="box">
         <h3>Follow Us</h3>
         <a href="#"> <i class="fab fa-linkedin"></i> LinkedIn</a>
         <a href="#"> <i class="fab fa-facebook-f"></i> Facebook</a>
         <a href="#"> <i class="fab fa-instagram"></i> Instagram</a>
         <a href="#"> <i class="fab fa-twitter"></i> Twitter</a>
      </div>
   </div>
   <div class="credit"> designed by <span>mr. bingo mingo</span> | all rights reserved! </div>
</section>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
