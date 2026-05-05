<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
include 'lab/mysqli_connect.php';
?>

<h1>Products Page</h1>

<?php
$query = 'SELECT * FROM orders';
$result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query failed: " . mysqli_error($connection));
    }

    echo "
<table>
    <thead>
        <td class='center'>Order ID</td>
        <td class='center'>Product ID</td>
        <td class='center'>ID</td>
        <td class='center'>Order Status</td>
        <td class='center'>Created Date</td>
        <td class='center'>Last Updated</td>
    </thead>"; // open table and include table headings

    while ($row = mysqli_fetch_assoc($result)) {

        echo "<tr>
        <td class='center'>" . $row['order_id'] . "</td>
        <td class='center'>" . $row['product_id'] . "</td>
        <td class='center'>" . $row['id'] . "</td>
        <td class='center'>" . $row['order_status'] . "</td>
        <td class='center'>" . $row['created_date'] . "</td>
        <td class='center'>" . $row['last_updated'] . "</td>
      </tr>";
    }
    echo "</table>"; // close table

    ?>