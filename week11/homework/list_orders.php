<!DOCTYPE html>
<html>

<head>
    <title>List Users</title>
    <style>
        td {
            width: 100px;
        }

        thead {
            font-weight: bold;
        }

        .center {

            text-align: center;

        }
    </style>

</head>

<body>

    <?php

    require('mysqli_connect.php'); // use require because we want to force this to exist before running our queries

    echo "<h1>List of Everything from the Orders Table</h1>";

    

    $query = "SELECT * FROM orders";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query failed: " . mysqli_error($connection));
    }

    echo "
<table>
    <thead>
        <td class='center'>ID</td>
        <td>Order ID</td>
        <td>Product ID</td>
        <td>ID</td>
        <td>Order Status</td>
        <td>Created Date</td>
        <td>Last Updated</td>
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

    <a href='add_user.php'>add new user</a>
    <p>COSW 30</p>

</body>
<?php include('nav.php'); ?>
</html>