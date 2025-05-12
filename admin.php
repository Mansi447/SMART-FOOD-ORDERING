<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin - Food Orders</title>
	<style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
            color: #e91e63;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
        }
        th, td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 12px;
        }
        th {
            background-color: #e91e63;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .scroll-top {
            position: fixed;
            bottom: 15px;
            right: 15px;
            background: #e91e63;
            color: #fff;
            padding: 10px;
            border-radius: 50%;
            cursor: pointer;
            border: none;
        }
    </style>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<section class="header">
   <a href="home.php" class="logo"><img src="images/logo.jpg"></a>
   <nav class="navbar">
      <a href="home.php" class="active">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="Admin12.php">ADMIN</a>
      <a href="chatbot1.html">CHATBOTS</a>
   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>

<br><br>
<h1>Customer Food Orders</h1>

<div style="background-color: rgba(255,255,255,0.95); padding: 20px;">
	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Address</th>
			<th>Restaurant</th>
			<th>Food Items</th>
			<th>Quantity</th>
			<th>Delivery Time</th>
		</tr>
		<?php
			$q1 = "SELECT * FROM food_orders";
			$run = mysqli_query($a, $q1);
			while($row = mysqli_fetch_array($run)) {
				echo "<tr>
					<td>{$row['id']}</td>
					<td>{$row['name']}</td>
					<td>{$row['email']}</td>
					<td>{$row['phone']}</td>
					<td>{$row['address']}</td>
					<td>{$row['restaurant']}</td>
					<td>{$row['food_items']}</td>
					<td>{$row['quantity']}</td>
					<td>{$row['delivery_time']}</td>
				</tr>";
			}
		?>
	</table>
</div>

<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> order</a>
      </div>
      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> FAQ</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
      </div>
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +880-1517-089144 </a>
         <a href="#"> <i class="fas fa-envelope"></i> support@foodyhub.com </a>
         <a href="#"> <i class="fas fa-map"></i> Your City, Your Country </a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
      </div>
   </div>
   <div class="credit"> designed by <span>mr. manish kumar singh</span> | all rights reserved! </div>
</section
