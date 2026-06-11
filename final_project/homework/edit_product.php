<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

if ($_SESSION['role'] != 'admin' &&
    $_SESSION['role'] != 'employee') {

    header('Location: products.php');
    exit();
}

require('../mysqli_connect.php');

$product_id = $_GET['product_id'];

$q = "SELECT * FROM products_tbl WHERE product_id = $product_id";

$r = mysqli_query($dbc, $q);

if (!$r) {
    die(mysqli_error($dbc));
}

$row = mysqli_fetch_assoc($r);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_name = $_POST['product_name'];
    $cost = $_POST['cost'];
    $description = $_POST['description'];

    $q = "UPDATE products_tbl
    SET 
        product_name = '$product_name',
        cost = '$cost',
        description = '$description'
    WHERE product_id=$product_id";

    $r = mysqli_query($dbc, $q);

    if ($r) {
        header('Location: products.php');
        exit();
    }

}

$q = "SELECT * FROM products_tbl WHERE product_id = $product_id";
$r = mysqli_query($dbc, $q);
$row = mysqli_fetch_assoc($r);

require('includes/header.php');
?>

<form method="post">

Product Name:
<input type="text" name="product_name"
value="<?php echo $row['product_name']; ?>">

<br><br>

Cost:
<input type="text" name="cost"
value="<?php echo $row['cost']; ?>">

<br><br>

Description:
<input type="text" name="description"
value="<?php echo $row['description']; ?>">

<br><br>

<input type="submit" value="Save">

</form>



