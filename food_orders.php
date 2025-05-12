<?php

$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $restaurant = $_POST['restaurant'];
    $food_items = $_POST['food_items'];
    $quantity = $_POST['quantity'];
    $delivery_time = $_POST['delivery_time'];

    $request = "INSERT INTO food_orders (name, email, phone, address, restaurant, food_items, quantity, delivery_time) 
                VALUES ('$name', '$email', '$phone', '$address', '$restaurant', '$food_items', '$quantity', '$delivery_time')";

    if (mysqli_query($connection, $request)) {
        session_start();
        $_SESSION['success_message'] = "Order placed successfully.";
        header('Location: book.php');
    } else {
        echo 'Failed to place order. Please try again!';
    }

} else {
    echo 'Invalid request!';
}
?>
