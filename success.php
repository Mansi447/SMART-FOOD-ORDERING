<?php
// Database connection
$host = "localhost";
$user = "root"; // or your MySQL username
$pass = "";     // your MySQL password
$db = "book_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

// Get data from URL
$name = $_GET['name'] ?? 'Customer';
$item = $_GET['item'] ?? 'Unknown Item';
$price = $_GET['price'] ?? '0';
$payment = $_GET['payment'] ?? 'unknown';

// Optional fields (for now, just use dummy if not from session/post)
$email = $_GET['email'] ?? 'N/A';
$phone = $_GET['phone'] ?? 'N/A';
$address = $_GET['address'] ?? 'N/A';

// Insert into DB
$stmt = $conn->prepare("INSERT INTO book_orders (full_name, email, address, phone, item_name, price, payment_method) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $name, $email, $address, $phone, $item, $price, $payment);
$stmt->execute();
$stmt->close();
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Order Confirmed</title>
   <link rel="stylesheet" href="css/style.css">
   <style>
      body {
         margin: 0;
         padding: 0;
         font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
         background-color:#F7CFD8; /* Light background */
         display: flex;
         justify-content: center;
         align-items: center;
         height: 100vh;
      }

      .confirmation {
         background-color: #ffffff;
         padding: 30px 40px;
         border-radius: 12px;
         box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
         text-align: center;
         max-width: 500px;
         width: 90%;
         animation: fadeIn 1s ease;
      }

      .confirmation h2 {
         color: #28a745;
         margin-bottom: 20px;
      }

      .confirmation p {
         font-size: 16px;
         color: #333;
         margin: 12px 0;
      }

      .confirmation strong {
         color: #007bff;
      }

      @keyframes fadeIn {
         from { opacity: 0; transform: translateY(10px); }
         to { opacity: 1; transform: translateY(0); }
      }

      @media (max-width: 600px) {
         .confirmation {
            padding: 25px 20px;
         }

         .confirmation p {
            font-size: 15px;
         }
      }
   </style>
</head>
<body>

<section class="confirmation">
   <h2>Thank you, <?= htmlspecialchars($name) ?>!</h2>
   <p>Your order for <strong><?= htmlspecialchars($item) ?></strong> has been placed.</p>
   <p>Total Amount: ₹<?= htmlspecialchars($price) ?></p>
   <p>Payment Method: <strong><?= strtoupper($payment) == 'COD' ? 'Cash on Delivery' : 'Online (Razorpay)' ?></strong></p>
   <p>Your order has been saved in our system. You will receive it soon!</p>
</section>

</body>
</html>
