<?php

$url = 'https://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);

// Remove any trailing slashes:
$url = rtrim($url, '/\\');

echo '<li><a href="' . $url . '/admin.php">Admins</a></li>';
echo '<li><a href="' . $url . '/customer.php">Customers</a></li>';
echo '<li><a href="' . $url . '/products.php">Products</a></li>';
echo '<li><a href="' . $url . '/orders.php">Orders</a></li>';

?>

