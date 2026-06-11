<?php



session_start();

$page_title = 'Orders';
require('includes/header.php');
require('../mysqli_connect.php');



$user_role = $_SESSION['role'];
$user_id = $_SESSION['user_id'];

if ($user_role == 'admin') {

    $q = "SELECT
            orders_tbl.order_id,
            orders_tbl.order_status,
            products_tbl.product_name,
            users_tbl.first_name,
            users_tbl.last_name,
            users_tbl.email
          FROM orders_tbl

          JOIN products_tbl
            ON orders_tbl.product_id = products_tbl.product_id

          JOIN users_tbl
            ON orders_tbl.user_id = users_tbl.id";


    
} else {

    $q = "SELECT
            orders_tbl.order_id,
            orders_tbl.order_status,
            products_tbl.product_name,
            users_tbl.first_name,
            users_tbl.last_name,
            users_tbl.email
          FROM orders_tbl

          JOIN products_tbl
            ON orders_tbl.product_id = products_tbl.product_id

          JOIN users_tbl
            ON orders_tbl.user_id = users_tbl.id

          WHERE orders_tbl.user_id = $user_id";
}



$r = mysqli_query($dbc, $q);




if (!$r) {
    die(mysqli_error($dbc));
}



echo '<h1>Current Orders</h1>';

echo '<a href="add_order.php" class="btn">Add Order</a>';

echo '<br><br>';

echo '<table border="1">';

echo '<tr>
        <th>Order ID</th>
        <th>Product</th>
        <th>Customer</th>
        <th>Email</th>
        <th>Status</th>
      </tr>';

      while ($row = mysqli_fetch_assoc($r)) {

        echo '<tr>';
    
        echo '<td>' . $row['order_id'] . '</td>';
        echo '<td>' . $row['product_name'] . '</td>';
        echo '<td>' . $row['first_name'] . ' ' . $row['last_name'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['order_status'] . '</td>';
    
        echo '</tr>';
    }

echo '</table>';


include('includes/footer.php');
?>