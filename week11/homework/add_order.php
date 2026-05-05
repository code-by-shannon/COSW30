<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('mysqli_connect.php');
?>




<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Week 11 - Add Order</title>
</head>

<body>
<main>
<section>
<article>
<h1>Week 11 - Add Order</h1>

<form action="add_order.php" method="post">
  
<input type="number" name="product_id" placeholder="Product ID" value="
<?php if (isset($_POST['product_id'])) { print htmlspecialchars($_POST['product_id']); } ?>">

<input type="text" name="order_status" placeholder="Order Status (e.g. Pending)" value="
<?php if (isset($_POST['order_status'])) { print htmlspecialchars($_POST['order_status']); } ?>"><br />

<input type="submit">


<?php

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $problem = false; // No problems so far. 

  // Check for each value...
  if (empty($_POST['product_id'])) {
    $problem = true;
    print '<p><span class="form-error">Please enter a product ID</span></p>';
   }

  if (empty($_POST['order_status'])) {
    $problem = true;
    print '<p><span class="form-error">Please enter an order status.</span></p>';
   }

  

  if (!$problem) { // If there weren't any problems...

    // Add user to database

    $product_id = $_POST['product_id'];
    $order_status = $_POST['order_status'];


    

    $sql = "INSERT INTO orders (product_id, order_status)
    VALUES ('" . $product_id . "','" . $order_status . "')";

    if (mysqli_query($connection, $sql)) {
     echo '<p>Order added succesfully!</p>';
    } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($connection);
     }



    // Clear the posted values:
    $_POST = [];

  } else { // Forgot a field.
      print '<p><span class="form-error">Please try again!</span></p>';   
  }

} // End of handle form IF.
?>

</form>
</article>
</section>
</main>
</body>
<?php include('nav.php'); ?>
</html>