<?php

require('../mysqli_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $order_id = $_POST['order_id'];
    $product_id = $_POST['product_id'];
    $user_id = $_POST['user_id'];
    $order_status = $_POST['order_status'];

    

    $q = "INSERT INTO orders_tbl
            (order_id, product_id, user_id, order_status)
          VALUES
            ('$order_id', '$product_id', '$user_id', '$order_status')";

    $r = mysqli_query($dbc, $q);

    

    if ($r) {
        header('Location: orders.php');
        exit();
    }

}
require('includes/header.php');
?>

<h1>Add Order</h1>

<form method="post">

    Order ID:
    <input type="text" name="order_id">
    <br><br>

    Product ID
    <input type="text" name="product_id">
    <br><br>

    User ID:
    <input type='text' name="user_id"></textarea>
    <br><br>

    Status:
    <input type='text' name="order_status"></textarea>
    <br><br>

    <input type="submit" value="Add Order">

</form>