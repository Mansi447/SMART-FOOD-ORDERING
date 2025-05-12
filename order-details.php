<!-- order-details.php -->
<?php
$name = $_GET['name'] ?? 'Unknown Item';
$price = $_GET['price'] ?? '0';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Order Details</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<section class="order-form">
   <h2>Order Details</h2>
   <form action="payment.php" method="post">
      <input type="hidden" name="item_name" value="<?= htmlspecialchars($name) ?>">
      <input type="hidden" name="price" value="<?= htmlspecialchars($price) ?>">

      <label>Full Name:</label>
      <input type="text" name="full_name" required>

      <label>Email:</label>
      <input type="email" name="email" required>

      <label>Address:</label>
      <textarea name="address" required></textarea>

      <label>Phone:</label>
      <input type="tel" name="phone" required>

      <h3>Total: ₹<?= htmlspecialchars($price) ?></h3>
      <button type="submit" class="btn">Proceed to Payment</button>
   </form>
</section>

</body>
</html>
