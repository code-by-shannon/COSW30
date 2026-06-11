<?php

session_start();

$page_title = 'Products';
include('includes/header.php');

require('../mysqli_connect.php');

$q = "SELECT * FROM products_tbl";
$r = mysqli_query($dbc, $q);

echo '<h1>Product List</h1>';

if (
    isset($_SESSION['role']) &&
    ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'employee')
) {
    echo '<a href="add_product.php" class="btn">Add Product</a>';
}

echo '<br><br>';

echo '<table border="1">';

echo '<tr>
        <th>ID</th>
        <th>Product</th>
        <th>Cost</th>
        <th>Description</th>
        <th>Image</th>';

if (
    isset($_SESSION['role']) &&
    ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'employee')
) {
    echo '<th>Action</th>';
}

echo '</tr>';

while ($row = mysqli_fetch_assoc($r)) {

    echo '<tr>';

    echo '<td>' . $row['product_id'] . '</td>';
    echo '<td>' . $row['product_name'] . '</td>';
    echo '<td>' . $row['cost'] . '</td>';
    echo '<td>' . $row['description'] . '</td>';
    echo '<td>' . $row['image'] . '</td>';

    if (
        isset($_SESSION['role']) &&
        ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'employee')
    ) {

        echo '<td>';
        echo '<a href="edit_product.php?product_id=' . $row['product_id'] . '">Edit</a>';
        echo '</td>';

    }

    echo '</tr>';
}

echo '</table>';

include('includes/footer.php');

?>