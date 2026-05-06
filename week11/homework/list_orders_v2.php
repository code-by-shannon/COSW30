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

    

$query = "SELECT 
    users_tbl.first_name,
    users_tbl.last_name,
    users_tbl.email,
    products.product_name,
    products.price
FROM orders
LEFT JOIN users_tbl 
    ON orders.id = users_tbl.id
LEFT JOIN products 
    ON orders.product_id = products.product_id
LIMIT 10";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query failed: " . mysqli_error($connection));
    }

    echo "
<table>
    <thead>
        <td class='center'>First Name</td>
        <td>Last Name</td>
        <td>email</td>
        <td>Product Name</td>
        <td>Price</td>
      
    </thead>"; // open table and include table headings

    while ($row = mysqli_fetch_assoc($result)) {

        echo "<tr>
        <td class='center'>" . ($row['first_name'] ?? 'N/A') . "</td>
        <td class='center'>" . ($row['last_name'] ?? 'N/A') . "</td>
        <td class='center'>" . ($row['email'] ?? 'N/A') . "</td>
        <td class='center'>" . ($row['product_name'] ?? 'N/A') . "</td>
        <td class='center'>" . ($row['price'] ?? 'N/A') . "</td>
        
      </tr>";
    }
    echo "</table>"; // close table

    ?>

    <a href='add_user.php'>add new user</a>
    <p>COSW 30</p>

</body>
<?php include('nav.php'); ?>
</html>