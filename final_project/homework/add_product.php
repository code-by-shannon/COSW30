<?php

require('../mysqli_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $product_name = $_POST['product_name'];
    $cost = $_POST['cost'];
    $description = $_POST['description'];

    $image = 'placeholder.png';

    $q = "INSERT INTO products_tbl
            (product_name, cost, description, image)
          VALUES
            ('$product_name', '$cost', '$description', '$image')";

    $r = mysqli_query($dbc, $q);

    if ($r) {
        header('Location: products.php');
        exit();
    }

}
require('includes/header.php');
?>

<h1>Add Product</h1>

<form method="post">

    Product Name:
    <input type="text" name="product_name">
    <br><br>

    Cost:
    <input type="text" name="cost">
    <br><br>

    Description:
    <textarea name="description"></textarea>
    <br><br>

    <input type="submit" value="Add Product">

</form>