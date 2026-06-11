<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require('../mysqli_connect.php');

$order_id = $_GET['order_id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $order_id = $_POST['order_id'];
    $product_id = $_POST['product_id'];
    $user_id = $_POST['user_id'];
    $order_status = $_POST['order_status'];

    $q = "UPDATE orders_tbl
    SET 
        
        product_id ='$product_id',
        user_id = '$user_id',
        order_status = '$order_status'
    WHERE order_id= '$order_id'";

    $r = mysqli_query($dbc, $q);

    if ($r) {
        header('Location: orders.php');
        exit();
    }
    }

$q = "SELECT * FROM orders_tbl WHERE order_id = $order_id";
$r = mysqli_query($dbc, $q);
$row = mysqli_fetch_assoc($r);


?>

<form method="post">

Order ID:
<input type="text" name="order_id"
value="<?php echo $row['order_id']; ?>">

<br><br>

Product ID:
<input type="text" name="product_id"
value="<?php echo $row['product_id']; ?>">

<br><br>

User ID:
<input type="text" name="user_id"
value="<?php echo $row['user_id']; ?>">

<br><br>

Order Status:
<input type="text" name="order_status"
value="<?php echo $row['order_status']; ?>">

<br><br>

<input type="submit" value="Save">

</form>



