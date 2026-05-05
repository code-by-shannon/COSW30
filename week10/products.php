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
$query = 'SELECT * FROM products';
$result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query failed: " . mysqli_error($connection));
    }

    echo "
<table>
    <thead>
        <td class='center'>ID</td>
        <td class='center'>Product ID</td>
        <td class='center'>Product Name</td>
        <td class='center'>Category</td>
        <td class='center'>created_date</td>
        <td class='center'>last_updated</td>
    </thead>"; // open table and include table headings

    while ($row = mysqli_fetch_assoc($result)) {

        echo "<tr>
        <td class='center'>" . $row['product_id'] . "</td>
        <td class='center'>" . $row['product_name'] . "</td>
        <td class='center'>" . $row['category'] . "</td>
        <td class='center'>" . $row['created_date'] . "</td>
        <td class='center'>" . $row['last_updated'] . "</td>
      </tr>";
    }
    echo "</table>"; // close table

    ?>