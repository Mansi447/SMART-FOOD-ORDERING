<?php
$name = $_GET['name'] ?? 'Unknown Item';
$price = $_GET['price'] ?? '0';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Order Details</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #E9F5BE, #E9F5BE); /* Soft gradient */
      margin: 0;
      padding: 0;
    }

    .order-form {
      max-width: 700px;
      margin: 50px auto;
      background: #fff;
      padding: 40px 30px;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      animation: fadeIn 0.8s ease-in-out;
    }

    h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #007bff;
    }

    .form-table {
      width: 100%;
      border-collapse: collapse;
    }

    .form-table td {
      padding: 12px 15px;
      vertical-align: top;
    }

    .form-table label {
      font-weight: 600;
      color: #333;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 15px;
      box-sizing: border-box;
      transition: border-color 0.3s;
    }

    input:focus,
    textarea:focus {
      border-color: #007bff;
      outline: none;
    }

    textarea {
      resize: vertical;
      min-height: 80px;
    }

    .btn {
      background-color: #28a745;
      color: white;
      padding: 12px 25px;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      margin: 12px 8px 0 8px;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #218838;
    }

    .btn + .btn {
      background-color: #007bff;
    }

    .btn + .btn:hover {
      background-color: #0069d9;
    }

    td[colspan="2"] {
      text-align: center;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 600px) {
      .order-form {
        padding: 25px 20px;
      }

      input, textarea {
        font-size: 14px;
      }

      h2 {
        font-size: 22px;
      }

      .btn {
        width: 100%;
        margin: 10px 0;
      }
    }
  </style>
</head>
<body>

<section class="order-form">
  <h2>Order Details</h2>
  <form id="orderForm">
    <input type="hidden" name="item_name" value="<?= htmlspecialchars($name) ?>" id="item_name">
    <input type="hidden" name="price" value="<?= htmlspecialchars($price) ?>" id="price">

    <table class="form-table">
      <tr>
        <td><label for="full_name">Full Name:</label></td>
        <td><input type="text" name="full_name" id="full_name" required></td>
      </tr>
      <tr>
        <td><label for="email">Email:</label></td>
        <td><input type="email" name="email" id="email" required></td>
      </tr>
      <tr>
        <td><label for="address">Address:</label></td>
        <td><textarea name="address" id="address" required></textarea></td>
      </tr>
      <tr>
        <td><label for="phone">Phone:</label></td>
        <td><input type="tel" name="phone" id="phone" required></td>
      </tr>
      <tr>
        <td><strong>Total:</strong></td>
        <td><strong>₹<?= htmlspecialchars($price) ?></strong></td>
      </tr>
      <tr>
        <td colspan="2">
          <button type="button" onclick="payNow()" class="btn">Pay with Razorpay</button>
          <button type="button" onclick="cashOnDelivery()" class="btn">Cash on Delivery</button>
        </td>
      </tr>
    </table>
  </form>
</section>

<script>
function payNow() {
  var options = {
    "key": "rzp_test_ZAXEGJCel5e50u",
    "amount": parseInt(document.getElementById("price").value) * 100,
    "currency": "INR",
    "name": "Best Agency",
    "description": document.getElementById("item_name").value,
    "handler": function (response){
      window.location.href = "success.php?payment=online&name=" + 
        encodeURIComponent(document.getElementById("full_name").value) +
        "&item=" + encodeURIComponent(document.getElementById("item_name").value) +
        "&price=" + encodeURIComponent(document.getElementById("price").value);
    },
    "prefill": {
      "name": document.getElementById("full_name").value,
      "email": document.getElementById("email").value,
      "contact": document.getElementById("phone").value
    }
  };
  var rzp = new Razorpay(options);
  rzp.open();
}

function cashOnDelivery() {
  const name = document.getElementById("full_name").value;
  const item = document.getElementById("item_name").value;
  const price = document.getElementById("price").value;

  window.location.href = `success.php?payment=cod&name=${encodeURIComponent(name)}&item=${encodeURIComponent(item)}&price=${encodeURIComponent(price)}`;
}
</script>

</body>
</html>
