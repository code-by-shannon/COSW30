<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php require('mysqli_connect.php'); ?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Week 11 - Add User</title>
</head>

<body>
<main>
<section>
<article>
<h1>Week 11 - Add User</h1>

<form action="add_products.php" method="post">

<input type="text" name="product_name" placeholder="Product Name">
<input type="text" name="category" placeholder="Category">
<input type="submit">


<?php

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $product_name = $_POST['product_name'];
  $category = $_POST['category'];

  $problem = false;

  // Check for each value...
  if (empty($_POST['product_name'])) {
    $problem = true;
    print '<p><span class="form-error">Please enter a product name.</span></p>';
   }

  if (empty($_POST['category'])) {
    $problem = true;
    print '<p><span class="form-error">Please enter a category</span></p>';
   }

  

  if (!$problem) { // If there weren't any problems...

    



    $sql = "INSERT INTO products (product_name, category)
    VALUES ('" . $product_name . "','" . $category . "')";

    if (mysqli_query($connection, $sql)) {
      echo '<p>Product added successfully.</p>';
    } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($connection);
     }

    mysqli_close($connection);   

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